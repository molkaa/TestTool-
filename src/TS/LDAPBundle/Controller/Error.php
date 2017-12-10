<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/stylelogin.css" />
		<link rel="stylesheet" type="text/css" href="../css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
           <!--/ Codrops top bar -->
            <header>
               
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            
                                <h1 style="font-size: 32px">Nom d'utilisateur ou mot de passe incorrect</h1>
                                <p> 
                                    Vous devez entrer un nom d'utilisateur et mot de passe valide afin d'accéder
au système. Veuillez revenir à la page de connexion et entrer de nouveau votre
informations de compte(assurez-vous de vérifier que vous avez utilisé le bon
orthographe de votre nom d'utilisateur et mot de passe).
                                </p>
                               
                                <p class="login button" style="padding: 20px"> 
                                    <a id="buttonErr" style="color: #fff; text-decoration: none; font-size: 25px" href="../index.php">Retour à la page de connexion</a>
								</p>
                                <p class="change_link">
									
								</p>
                            
                        </div>

                      
						
                    </div>
						
                </div>  
            </section>
        </div>
     
    </body>
</html>