<?php

session_start();

//Unsets the variables set during the session
session_unset();
//Ends the session
session_destroy();
//Takes user back to home page
header("Location: index.php");