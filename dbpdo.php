<?php
/*************************************************************************************************
**************************************************************************************************
    Author    : Chepsom Kelvin Kipkoech
    Company   : Cyberton Tech
    Date      : 30/01/2018
    Copyright : No copyright Its Open Source
    Note      : This script is for connection to the database using PDO(Php Data Objects)
    NB        : Change XXXXX  = Database name
                       YYYYY  = Hostname
                       ZZZZZ  = Username
                       PPPPP =  Password
***************************************************************************************************************************************************************************************************/
try{
	// Connection creation
	$db = new PDO('mysql:dbname=mutgcds;host=localhost','root','');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//echo "Sucessful database connection";
}catch(PDOException $captureError){
	echo ' Oooops! Error Occurred' .$captureError->getMessage();
	
}
?>