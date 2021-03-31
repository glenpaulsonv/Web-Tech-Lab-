
Verifying user form entries 

- we're using GET method here.

*** To use the POST method - replace the 'GET' with 'POST' in page1.php


- page1.php is accessing reg.php

- page1.php contains the form 
- reg.php has the php code for form validation
	- verifying if the user id is blank.
	- verifying if the password fields are blank.
	- verifying if the password fields match.
	- displaying the corresponding messages based on the submissions.

- pre-requisites
	- install xampp
	- save both page1.php and reg.php under xampp->htdocs->a new folder of your choice-> 
	- start the xampp server (open xampp->Click start against the Apache module)
	- open the browser and type -> http://localhost/WT/page1.php
		(here I've placed the files inside another folder called WT)

- et voilà
