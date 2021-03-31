<?php
	# $_SERVER SUPERGLOBAL

	// Create Server Array
	$server = [
		'Host Server Name' => $_SERVER['SERVER_NAME'],
		'Host Header' => $_SERVER['HTTP_HOST'],
		'Server Software' => $_SERVER['SERVER_SOFTWARE'],
		'Document Root' => $_SERVER['DOCUMENT_ROOT'],
		'Current Page' => $_SERVER['PHP_SELF'],
		'Script Name' => $_SERVER['SCRIPT_NAME'],
		'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
		'PORT:' => $_SERVER['SERVER_PORT']
	];

	// print_r($server);
	
	// Create Client Array
	$client = [
		'Client System info' => $_SERVER['HTTP_USER_AGENT'],
		'Client IP' => $_SERVER['REMOTE_ADDR'],
		'Remote Port' => $_SERVER['REMOTE_PORT']
	];


	// echo "<br>";
	// print_r($client);

	echo("<h1><hr>Server & File Info<hr></h1>");
	foreach($server as $m => $n)
	{
		echo("<b>$m</b> : ".$n."<hr>");
	}

	echo("<br><h1><hr>Client Info<hr></h1>");
	foreach($client as $m => $n)
	{
		echo("<b>$m</b> : ".$n."<hr>");
	}

    //Accessing the Server, File and Client info using PHP.
    //- Place the file under htdocs - XAMPP
    //- Run on localhost

    //Class Assignment
?>
