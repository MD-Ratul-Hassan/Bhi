<!-- Fontawsome Icon link-------START -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Fontawsome Icon link-------END -->


<?php

    ## "input.php"....Page SAVE Button-----START
        if(isset($_GET['S_btn'])){

            ## Get Data Form (input.php)------START
                $a = $_GET['ID'];
                $b = $_GET['Customar_Code'];
                $c = $_GET['Customar_Name'];
                $d = $_GET['Customar_Phone'];
                $e = $_GET['Shop_Name'];
                $f = $_GET['Shop_Address'];
                $g = $_GET['Product_Code'];
                $h = $_GET['Product_Name'];
                $i = $_GET['Product_Model'];
                $j = $_GET['Quentity'];
                $k = $_GET['Unit_Price'];
                $l = $_GET['Total_Price'];
                $m = $_GET['Total_Due'];
                $n = $_GET['Total_Paid'];
                $o = $_GET['Seller_Name'];
                $p = $_GET['Paid_Unpaid'];
                $q = $_GET['Date_Time'];
                $r = $_GET['Aditional_Documents'];
            ## Get Data Form (input.php)------END


            ## Display From DataBase-----START
                $conn = mysqli_connect("localhost","root","","bbe&e");
                $sql = " SELECT `Product_Code`,`Product_Model`, Quentity FROM `distubuter_data` WHERE `Product_Code`='$g' AND `Product_Model`='$i' ";
                $result = mysqli_query($conn,$sql);
                $output = mysqli_fetch_array($result);

                $D_a = $output['Product_Code']; 
                $D_b = $output['Product_Model']; 
                $D_c = $output['Quentity']; 
            ## Display Form DataBase-----END


            ## Product Able In Stock-------START
                $stock = $D_c - $j ;
            ## Product Able In Stock-------START


            ## Stock Quentity Update----START
                $sql2 = " UPDATE `distubuter_data` SET `Quentity`='$stock' WHERE `Product_Code`='$g' AND `Product_Model`='$i' ";
                $result2 = mysqli_query($conn,$sql2);

                    if($result2){
                        echo "<h1><font color=green>Your Data is Updated Successfull. &#10004; </font> </h1>";
                        echo "<a href='input.php'><button style='transform: translateX(45rem);'>Back</button></a>";
                        echo "<a href='Print1.php?Customar_Code=$b'><button style='transform: translateX(45rem);'> Print  <i style='font-size:16px' class='fa'>&#xf02f;</i></button></a>";
                    }else{
                        echo "<h1><font color=red>Your Data is not Updated Successfull. Something wents Wrong---!!!</font> &#10060; </h1>"; 
                        echo "<a href='input.php'><button style='transform: translateX(45rem);'>Back</button></a>";
                    }
            ## Stock Quentity Update----END


            ## Product Sold Update List-----START
                $sql3 = " INSERT INTO `distubuter_update_data`(`ID`, `Customar_Code`, `Customar_Name`, `Customar_Phone`, `Shop_Name`, `Shop_Address`, `Product_Code`, `Product_Name`, `Product_Model`, `Quentity`, `Unit_Price`, `Total_Price`, `Total_Due`, `Total_Paid`, `Seller_Name`, `Paid_Unpaid`, `Date Time`, `Aditional_Documents`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r') ";
                $result3 = mysqli_query($conn,$sql3); 

                    if($result2){
                        echo "<h1><font color=green>Your Data is Successfully Inserted. &#10004; </font> </h1>";
                        echo "<a href='input.php'><button style='transform: translateX(45rem);'>Back</button></a>";
                        echo "<a href='Print1.php?Customar_Code=$b'><button style='transform: translateX(45rem);'> Print  <i style='font-size:16px' class='fa'>&#xf02f;</i></button></a>";
                    }else{
                        echo "<h1><font color=red>Your Data is not Inserted Successfully. Something wents Wrong---!!!</font> &#10060; </h1>";
                        echo "<a href='input.php'><button style='transform: translateX(45rem);'>Back</button></a>";
                    }    
            ## Product Sold Update List-----END        

        }
    ## "input.php"....Page SAVE Button-----END

?>