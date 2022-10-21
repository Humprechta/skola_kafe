<?php

				//$servername = "localhost";
                define("servername","localhost");
				$username = "admin";
				$password = "admin12345678";
				$db = "import";


                $conn = new mysqli(constant("servername"), $username, $password, $db );

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>