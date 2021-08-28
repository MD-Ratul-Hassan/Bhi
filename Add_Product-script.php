<!-- Fontawsome Icon link-------START -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Fontawsome Icon link-------END -->

<?php

    ## "Add_Product.php".....SAVE Button-------START
        if(isset($_GET['s_btn'])){

            ## GET DATA Form....."Add_Product.php"------START
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
            ## GET DATA Form....."Add_Product.php"------END
        
            ## SHOW DATA Form DataBase------START
                $conn = mysqli_connect("localhost","root","","bbe&e");
                $sql = " SELECT `Product_Code`,`Product_Model`, Total_Price, Quentity FROM `distubuter_data` WHERE `Product_Code`='$b' AND `Product_Model`='$d' ";
                $result = mysqli_query($conn,$sql);
                $output = mysqli_fetch_array($result);

                $D_a = $output['Product_Code']; 
                $D_b = $output['Product_Model']; 
                $D_c = $output['Total_Price'];
                $D_e = $output['Quentity'];
            ## SHOW DATA Form DataBase------END

            ## [ STOCK & TOTAL PRICE ]....Incrise & Decrise-------START
                $amount = $D_c + $j ;
                $stock = $D_e + $h ;
            ## [ STOCK & TOTAL PRICE ]....Incrise & Decrise-------END


            ## [MAIN].....CONDITION------START
                if($b == $D_a && $d == $D_b){

                    ## [MAIN]{1}...CONDITION (UPDATE)-------START
                        $sql2 = " UPDATE `distubuter_data` SET `DP_Price`='$e',`MRP_Price`='$f',`Percent(%)`='$g',`Quentity`='$stock',`Total_Price`='$amount' WHERE `Product_Code`='$b' AND `Product_Model`='$d' ";
                        $result2 = mysqli_query($conn,$sql2);

                            if($result2){
                                echo "<h1 style='text-align:center;'><font color=green;>Your Data Successfully Updated. &#10004; </font> </h1>";
                                echo "<a href='Add_Product.php'><button style='transform: translateX(44rem);'>Back</button></a>";
                                echo "<a href=''><button style='transform: translateX(45rem);'> Print  <i style='font-size:16px' class='fa'>&#xf02f;</i></button></a>";
                            }else{
                                echo "<h1 style='text-align:center;'><font color=red>Your Data is not Successfully Updated. Something wents Wrong...!!!</font> &#10060; </h1>";
                                echo "<a href='Add_Product.php'><button style='transform: translateX(45rem);'>Back</button></a>";
                            }
                    ## [MAIN]{1}...CONDITION (UPDATE)-------END


                }else{

                    ## [MAIN]{2}...CONDITION (INSERT)-------START
                        $sql3 = " INSERT INTO `distubuter_data`(`ID`, `Product_Code`, `Product_Name`, `Product_Model`, `DP_Price`, `MRP_Price`, `Percent(%)`, `Quentity`, `Total_Price`, `Total_Due`, `P_Collected_From`, `Date_Time`, `Aditional_Documents`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$j','$k','$i','$l','$m') ";
                        $result3 = mysqli_query($conn,$sql3);

                            if($result3){
                                echo "<h1 style='text-align:center;'><font color=green;>You Have Inserted New Product Successfully. &#10004; </font> </h1>";
                                echo "<a href='Add_Product.php'><button style='transform: translateX(44rem);'>Back</button></a>";
                                echo "<a href=''><button style='transform: translateX(45rem);'> Print  <i style='font-size:16px' class='fa'>&#xf02f;</i></button></a>";
                            }else{
                                echo "<h1 style='text-align:center;'><font color=red>Your New Product is not Inserted Successfully. Something wents Wrong...!!!</font> &#10060; </h1>";
                                echo "<a href='Add_Product.php'><button style='transform: translateX(45rem);'>Back</button></a>";
                            }
                    ## [MAIN]{2}...CONDITION (INSERT)-------END

            }
            ## [MAIN]...CONDITION----END

        }
    ## "Add_Product.php".....SAVE Button-----END

?>

    