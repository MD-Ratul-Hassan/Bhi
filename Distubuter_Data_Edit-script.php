<?php

if(isset($_GET['update_btn'])){

    $a = $_GET['Id'];
    $b = $_GET['Product_Code'];
    $c = $_GET['Product_Name'];
    $d = $_GET['Product_Model'];
    $e = $_GET['DP_Price'];
    $f = $_GET['MRP_Price'];
    $g = $_GET['Percent(%)'];
    $h = $_GET['Quentity'];
    $i = $_GET['P_Collected_From'];
    $j = $_GET['Total_Amount'];
    $k = $_GET['Able_Due'];
    $l = $_GET['Date_Time'];
    $m = $_GET['Aditional_Documents'];

    $conn = mysqli_connect("localhost","root","","bbe&e");
    $sql = " UPDATE `distubuter_data` SET `ID`='$a',`Product_Code`='$b',`Product_Name`='$c',`Product_Model`='$d',`DP_Price`='$e',`MRP_Price`='$f',`Percent(%)`='$g',`Quentity`='$h',`P_Collected_From`='$i',`Total_Price`='$j',`Total_Due`='$k',`Date_Time`='$l',`Aditional_Documents`='$m' WHERE Id='$a' ";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<h1>Your Data is Updated Successfull.</h1>";
        echo "<button><a href='Distubuter_Data.php'>Back</a></button>";
        }else{
            echo "<h1>Something Wents Wrong !</h1>";
        }
    
    }


?>


