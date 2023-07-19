<?php
 



 $servername="localhost";
 $username="root";
 $password="";
 $dbname="robotcontrol";


    $link = mysqli_connect($servername,$username,$password,$dbname);
    if (!$link){
        die("Connection failed: " . mysqli_connect_error());
    }
    
 switch ($_REQUEST['btn']){
case "F": 
    echo "  F "; 
    $insert = mysqli_query($link ,"INSERT INTO data_locations (direction) VALUES ('F')");
    break;
case "L":  
    echo "  L "; 
    $insert = mysqli_query($link ,"INSERT INTO  data_locations (direction) VALUES ('L') ");
    break;
case"S":  
    echo "  S ";
    $insert = mysqli_query($link ,"INSERT INTO data_locations  (direction) VALUES ('S')" );
    break;
case"R":  
    echo "  R "; 
    $insert = mysqli_query($link ,"INSERT INTO data_locations  (direction) VALUES ('R')");
    break;
case"B": 
     echo "  B "; 
     $insert = mysqli_query($link ,"INSERT INTO data_locations  (direction) VALUES ('B')");
     break;

}


 mysqli_close($link);
 

?>