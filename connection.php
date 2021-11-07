<?php
$conn = pg_connect("postgres://egjwvwqhtdfoyf:4b536610981deb433a5973a9ceceabbefa36c223050b38092ea5c5a0547a985e@ec2-34-193-46-89.compute-1.amazonaws.com:5432/d8pjo84c4l2ab4");
	echo 'Connected Successfully!!!';
	if(!$conn)
	{
		die("Could not connect to database");
    }
    ?>