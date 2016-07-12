<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Request;
use sintegra;
use App\Http\Controllers\Controller;




class consultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sintegra = DB::select('select * from sintegra');     
        return view('admin/listar_consulta')->with('sintegra', $sintegra);
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin/consulta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = Request::all();     

        $ch = curl_init();
        $curl_post_data = array(
                /* These are mandatory params */
                'num_cnpj' => $data['num_cnpj'],
                'botao' => 'Consultar',       
        );
        curl_setopt($ch,CURLOPT_URL,"http://www.sintegra.es.gov.br/resultado.php");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response=curl_exec($ch);
        if ($curl_response === false) {
            $info = curl_error($ch);
            curl_close($ch);
            die("error occured during curl exec. Additioanl info: " . var_export($info));
        }
        curl_close($ch);

        $regex2 = '/[<td>].* (.*)<\/td>/';
        preg_match_all($regex2, $curl_response, $r2);

        $label[2] = "CNPJ";
        $label[4] = "inscricao";
        $label[6] = "razao_social";
        $label[8] = "endereco";
        $label[10] = "numero";
        $label[12] = "complemento";
        $label[14] = "bairro";
        $label[16] = "municipio";
        $label[18] = "uf";
        $label[20] = "cep";
        $label[22] = "telefone";
        $label[25] = "atividade";
        $label[27] = "inicio_atividade";
        $label[29] = "situacao_cadastral_vigente";
        $label[31] = "data_desta_situacao";
        $label[33] = "regime_de_apuracao";
        $label[40] = "emitente_de_nfe_desde";
        $label[42] = "obrigada_a_nfe_em";


        //var_dump($r2);
        $json = array();

        for($i = 1; $i <= 42; $i++):

            $r2[0][$i] = strip_tags($r2[0][$i]);
            $r2[0][$i] = utf8_encode($r2[0][$i] );
            $r2[0][$i] = str_replace("&nbsp;", "", $r2[0][$i]);
             $r2[0][$i] = str_replace('\/',"/", $r2[0][$i]);

            if($i % 2 == 0 and $i < 23):

                if($i == 0){
                   $r2[0][$i] = str_replace("Cadastro atualizado até:", "", $r2[0][$i]);
                   $r2[0][$i] = date('Y-d-m', strtotime($r2[0][$i]));
                }   
           
             $json[$label[$i]] = $r2[0][$i];
           
            endif;

            if($i > 24 and $i < 34):

                 if($i % 2 != 0){                    
                      $json[$label[$i]] = $r2[0][$i];
                }

            endif;  

            if($i > 39 and $i < 43):

                if($i % 2 == 0){                                    
                      $json[$label[$i]] = $r2[0][$i];
                }

            endif;    

        endfor;    
   



$returnJson = json_encode($json);

if( DB::table('sintegra')->insert(
    ['idusuario' => '1', 'cnpj' => $data['num_cnpj'], 'resultado_json' => $returnJson])
    ){
       $data =  $returnJson;
     return view('admin/consulta')->with('data',$data);
}


print_r($returnJson);



      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
