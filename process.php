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
	
	
	$content = $_POST['stripped-text'];
	
	
	
	$file = 'output.txt';
	file_put_contents($file, $content, FILE_APPEND);
	
	/* $data = serialize($_POST);
	 
	 
	 $tissbasj = "prompedata liksom der " . $data;
	 
	 
	$fp = fopen('data.txt', 'a');
	fwrite($fp, $tissbasj);
	fclose($fp);
	*/
	
		 /* $data = serialize($_POST);
		$fp = fopen('serialised.txt', 'w');
		fwrite($fp, $data);
		fclose($fp);
		 */
		 
		 /*
		
	 	$content = $_POST['stripped-text'];
		
		//$data = $_POST[‘recipient’];
		$fp = fopen('directly.txt', 'a');
		fwrite($fp, content);
		fclose($fp);
		
		*/
		
		/*$data = $_POST[" "];
		$fp = fopen('directly.txt', 'a');
		fwrite($fp, $data);
		fclose($fp);
		*/
		
		// http://phillihp.com/toolz/php-array-beautifier/
	?>
	
	
	
	<p><a href="http://example.com/">Stu</a>ff</p>
</body>
</html>



