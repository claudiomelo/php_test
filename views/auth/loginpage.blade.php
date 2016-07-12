@extends('nomenu_header')

@section('content')

<style type="text/css">


@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

body{
    background: url(https://unsplash.imgix.net/photo-1415226581130-91cb7f52f078?q=75&fm=jpg&s=859a0a6f863f8eb93a489c98402e687b);
	background-color: #444;
    background-size:   cover;
    background-repeat: no-repeat;
    background-position: center center;  
    /*background: url(https://unsplash.imgix.net/photo-1415226581130-91cb7f52f078?q=75&fm=jpg&s=859a0a6f863f8eb93a489c98402e687b),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);    
*/
}

.vertical-offset-100{
    padding-top:100px;
}
.login .user-row{
    text-align: center;
    font-size: 30px;
}

.login .img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
    margin: auto;
}

.login.panel {
    margin-bottom: 20px;
    background-color: rgba(255, 255, 255, 0.75);
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}
.login label{
    display: block;
    width: 100%;
    color: #449d44;
    text-shadow:#4cae4c;
    text-align: center;
}
.login hr{
    margin: 5px;
}

</style>

<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default login">
			  	<div class="panel-heading">                            
                    <div class="row-fluid user-row">
                        <i class="fa fa-eye fa-3x"></i> 
                    </div>
                    <h3 class="panel-title user-row"> Other Login Page</h3> 
			 	</div>
			  	<div class="panel-body">
                    <div class="form-group">
    		    		  <label>UpLexis</label>
                          <hr>
			    	</div>
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>

@endsection