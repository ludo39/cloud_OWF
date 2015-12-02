<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Modernizr -->
    <script src="/js/libs/modernizr-2.6.2.min.js"></script>
    <!-- framework css -->
    <!--[if gt IE 9]><!-->
    <link type="text/css" rel="stylesheet" href="/css/groundwork.css">
    <!--<![endif]-->
    <!--[if lte IE 9]>
    <link type="text/css" rel="stylesheet" href="/css/groundwork-core.css">
    <link type="text/css" rel="stylesheet" href="/css/groundwork-type.css">
    <link type="text/css" rel="stylesheet" href="/css/groundwork-ui.css">
    <link type="text/css" rel="stylesheet" href="/css/groundwork-anim.css">
    <link type="text/css" rel="stylesheet" href="/css/groundwork-ie.css">
    <![endif]-->

    <title>API - Cinder</title>
</head>

<body>




<div class="container">
    <div class="padded">
        <div class="row">
            <div class="bounceInDown animated" style="text-align: center">
                <img src="/img/lamp-logo.png" height="120" alt="">
                <img src="/img/cloudwatt_logo.png" height="120" alt="">
            </div>
        </div>
        <div class="row">
            API - Cinder
        </div>
    </div>
    <hr>
    <article class="row" style="text-align: center">
        <h3>Page de test de l'API Cinder.</h3> 
		
		<h4>//--- Display containers name and count the objects in each one</h4>
		<p>
			</br>
			-----------------Authentification-----------------
			</br>
			<?php
				
				require '/php-opencloud/lib/php-opencloud.php';
				//require '/var/www/cw/OpenCloud/OpenStack.php';
				require '/php-opencloud/lib/OpenCloud/OpenStack.php';
				use OpenCloud\OpenStack;
				
				// Authentification informations
				$authUrl = 'https://identity.fr1.cloudwatt.com/v2.0/';
				$username = 'hugues.desaintacheul+cptfils2@cloudwatt.com';
				$password = 'CloudWatt1212$!';
				$tenant = '14f1b492995f44128ebbbc20e4f4be64';
				print "Username : ".$username."</br>Tenant_ID : ".$tenant;
			?>
			
			</br>
			-----------------
			</br>
			
			<?php
				// Swift informations
				$swiftUrl = 'http://storage.fr1.cloudwatt.com';
				$serviceName = 'swift';
				$region = 'fr1';
				
				// Constructor initialization
				$client = new OpenStack($authUrl, array(
                    'username'    => $username,
                    'password'    => $password,
                    'tenantName'  => $tenant
                  )
				);
				
				// call the authenticate method_exists
				$client->authenticate();
			

			?>
			
			
		</p>
		
		<p>
            Version PHP courante : <?php echo phpversion(); ?>
        </p>	
		
    </article>
</div>

<script type="text/javascript" src="/js/libs/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/js/groundwork.all.js"></script>
</body>
</html>
