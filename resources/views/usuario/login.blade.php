@extends('layouts.principal')
@section('content')
<style type="text/css">
/*
* Specific styles of signin component
*/
/*
* General styles
*/
body, html {
height: 100%;
background-repeat: no-repeat;
background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}
.card-container.card {
max-width: 350px;
padding: 40px 40px;
}
.btn {
font-weight: 700;
height: 36px;
-moz-user-select: none;
-webkit-user-select: none;
user-select: none;
cursor: default;
}
/*
* Card component
*/
.card {
background-color: #F7F7F7;
/* just in case there no content*/
padding: 20px 25px 30px;
margin: 0 auto 25px;
margin-top: 50px;
/* shadows and rounded borders */
-moz-border-radius: 2px;
-webkit-border-radius: 2px;
border-radius: 2px;
-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.profile-img-card {
width: 96px;
height: 96px;
margin: 0 auto 10px;
display: block;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
border-radius: 50%;
}
/*
* Form styles
*/
.profile-name-card {
font-size: 16px;
font-weight: bold;
text-align: center;
margin: 10px 0 0;
min-height: 1em;
}
.reauth-email {
display: block;
color: #404040;
line-height: 2;
margin-bottom: 10px;
font-size: 14px;
text-align: center;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}
.form-signin #inputEmail,
.form-signin #inputPassword {
direction: ltr;
height: 44px;
font-size: 16px;
}
.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
width: 100%;
display: block;
margin-bottom: 10px;
z-index: 1;
position: relative;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}
.form-signin .form-control:focus {
border-color: rgb(104, 145, 162);
outline: 0;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}
.btn.btn-signin {
/*background-color: #4d90fe; */
background-color: rgb(104, 145, 162);
/* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
padding: 0px;
font-weight: 700;
font-size: 14px;
height: 36px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
border: none;
-o-transition: all 0.218s;
-moz-transition: all 0.218s;
-webkit-transition: all 0.218s;
transition: all 0.218s;
}
.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
background-color: rgb(12, 97, 33);
}
.forgot-password {
color: rgb(104, 145, 162);
}
.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
color: rgb(12, 97, 33);
}
</style>
<div  ng-app="usuarioModule">
    <div ng-controller="loginController">
        <div class="container">
            <div class="card card-container">
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="correo" class="form-control" placeholder="Correo Electrónico" required autofocus>
                    <input type="password" id="contrasena" class="form-control" placeholder="Contraseña" required>
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Recordarme
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
                    </form><!-- /form -->
                    <a href="#" class="forgot-password" ng-click = "mostramodalrecuperacuenta()">
                        ¿Olvidaste tu contraseña?
                    </a>
                    </div><!-- /card-container -->
                    </div><!-- /container -->
                    <div class="modal fade" id="modalRecuperaCuenta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nombre">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="clave" placeholder="Correo Electrónico">
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <a href="#" class="btn btn-success danger">Enviar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!!Html::script('app/lib/angular/angular.min.js')!!}
            {!!Html::script('app/controller/usuario.js')!!}
            @stop