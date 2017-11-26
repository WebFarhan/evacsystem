<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DES Admin</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="webroot/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="webroot/webrooassets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="webroot/assets/css/form-elements.css">
        <link rel="stylesheet" href="webroot/assets/css/adminstyle.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Disaster Evacuation System</strong> Administrator</h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>DES Admin Login</h3>
                            		
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<?= $this->Form->create() ?>
                                    <div class="form-group">
                                        <?php 
                                        echo $this->Form->control('email',['placeholder'=>'Enter your email', 'class'=>'form-control']) ?> 
                                        
                                    </div>
                                    <div class="form-group">
                                        <?php
                                        echo $this->Form->control('password',['type'=>'password', 'placeholder'=>'Enter your password', 'class'=>'form-control']) ?>
                                    </div> 
                                    <div class="form-group">
                                        <?= $this->Form->button(__('Submit'),['class'=>"btn btn-lg btn-success"]) ?>
                                    </div>
                                    <?= $this->Form->end() ?>
			                    </form>
                                
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="webroot/assets/js/jquery-1.11.1.min.js"></script>
        <script src="webroot/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="webroot/assets/js/jquery.backstretch.min.js"></script>
        <script src="webroot/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>