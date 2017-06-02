<?php 
	use Cake\View\Helper\HtmlHelper;
 ?>


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

