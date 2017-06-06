<?php 
	use Cake\View\Helper\HtmlHelper;
 ?>
<<<<<<< HEAD
<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
	<fieldset>
	<div class="container">
		<div class="card card-container">
			<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>

            <form class="form-signin">	
            <span id="reauth-email" class="reauth-email"></span>	
				<?= $this->Form->control('username',['class' => 'form-control']) ?>
				<?= $this->Form->control('password', ['class' => 'form-control']) ?>
				<div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <?= $this->Form->button(__('Login'),['class' => 'btn btn-success']); ?>
				<?= $this->Form->end() ?>
				<?= $this->Form->button(__('Cadastre-se'),['class' => 'btn btn-default','action' => 'add']) ?>
			</form>
		</div>
	</div>
	
	<div class="" >
		
		
	</div>
	</fieldset><br>

</div>

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
=======


    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"></meta>
            <meta content="width=device-width, initial-scale=1.0" name="viewport"></meta>
            <title>

            Users

            </title>
            <link rel="icon" type="image/x-icon" href="/favicon.ico"></link>
            <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"></link>
            <!--

             <link rel="stylesheet" href="/css/base.css"/> 

            -->
            <!--

             <link rel="stylesheet" href="/css/cake.css"/> 

            -->
            <link href="/css/bootstrap.min.css" rel="stylesheet"></link>
            <link href="/css/bootstrap.css" rel="stylesheet"></link>
            <link href="/css/bootstrap-theme.css" rel="stylesheet"></link>
            <link href="/css/bootstrap-theme.min.css" rel="stylesheet"></link>
        </head>
        <body>
            <nav id="navbar-default" class="collapse navbar-collapse" role="navigation" data-topbar="">
               
                <div class="container-fluid navbar-default">
                    
                    
                   
                </div>
                <div class="container-fluid navbar-default">
                    
                </div>
                
            </nav>
            

            <div class="content">
                <div class="container">
                    
                    <div id="login-box">
                        <div class="logo">
                            <img class="img img-responsive img-circle " src="http://www.vozdabahia.com.br/listas/posts/70669.jpg"></img>
                            <h1 class="logo-caption">
                                <span class="tweak"> </span> Login </h1>
                        </div>
                        <!--

                         /.logo 

                        -->
                        <div class=" well col-md-6 bg-sucess">
                            <form action="/users/login" accept-charset="utf-8" method="post">
                                <div style="display:none;">
                                    <input type="hidden" value="POST" name="_method"></input>
                                </div>
                                <fieldset>
                                    <legend>

                                    Por favor entre com usuário e senha

                                    </legend>
                                    <div class="input text">
                                        <label for="username">

                                        Username

                                        </label>
                                        <input id="username" class="form-control" type="text" value="" name="username"></input>
                                    </div>
                                    <div class="input password">
                                        <label for="password">

                                        Password

                                        </label>
                                        <input id="password" class="form-control" type="password" value="" name="password"></input>
                                    </div>
                                    <div class="">
                                        <button class="btn btn-default" type="submit" action="add">

                                        Cadastre-se

                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                            <br></br>
                            <button class="btn btn-success" type="submit">

                            Login

                            </button>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </body>
    </html>

>>>>>>> 4ccbca05b2d760c04cf06e4098704ffb2e0b0f97
