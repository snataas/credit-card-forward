<!DOCTYPE html>

<html lang="no">
<head>
	
	<title></title>
	
	<meta charset="utf-8">
    
   
	<link rel="stylesheet" 	type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <style type="text/css" media="screen">
        
    </style>
    
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
		</script>
	<![endif]-->
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
    
    
    
    
    </script>
    
</head>
<body>
	
	
	<h1>Hello</h1>
	
    <?php
    
	# Include the Autoloader (see "Libraries" for install instructions)
	require 'vendor/autoload.php';
	use Mailgun\Mailgun;

	# Instantiate the client.
	$mgClient = new Mailgun('key-d1f45419508911c72ed1426c72cb473d');
	//$domain = "sandboxa4c848f2ff4c4b7297fcd5aeb1c9ed59.mailgun.org";
	$domain = "fjoddelord.eu";
	

	# Make the call to the client.
	
	
	$result = $mgClient->sendMessage("$domain",
	                  array('from'    => 'Pengemail <penger@fjoddelord.eu>',
	                        'to'      => 'Staale Nataas <staalenataas@gmail.com>',
	                        'subject' => 'Nå med F-lord support',
	                        'text'    => 'You just sent an e-mail via mailgun. '));
    
	
	
	
	/*
	
	# Issue the call to the client.
	$result = $mgClient->post("routes", array(
	    'priority'    => 0,
	    'expression'  => 'match_recipient("staale@staale.co.uk")',
	    'action'      => array('forward("staalenataas@gmail.com")', 'stop()'),
	    'description' => 'Sample route'
	));
	
	*/
	
	
							
	
	$result = $mgClient->get("$domain/log", array('limit' => 25, 
	                                        'skip'  => 0));

	$httpResponseCode = $result->http_response_code;
	$httpResponseBody = $result->http_response_body;

	# Iterate through the results and echo the message IDs.
	$logItems = $result->http_response_body->items;
	foreach($logItems as $logItem){
	    echo $logItem->message_id . " <br> --- \n";
	}
	
	
	//$result = $mgClient->get("$domain/bounces/webhooks");					
							
	$result = $mgClient->post("domains/$domain/webhooks", array(
	    'id'  => 'click',
	    'url' => 'http://bin.mailgun.net/8de4a9c4'
	));						
	
    ?>
	
	
</body>
</html>



