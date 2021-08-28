<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Distubuter_Data.css">
    <link rel="icon" href="media/LOGO1.png">
    <title>Distubuter Data</title>
    <script src="Stock_Filter.js"></script>
</head>
<body>
    <form action="">
        <div class="Head">
            <img src="media/Logo.png">
                <h1>BHI BHI ELECTRONIC & ELECTRIC</h1>
                    <p id="p-1">Your Daily Products</p>
                    <p id="p-3">Propiter: Hazi Alamgir Hossain</p>
                    <p id="p-4">Hazi Hossan Market, Dumni Annada Bazar, Khilket, Dhaka-1229</p>
                    <p id="p-5">Phone: 01832337877, 01732609119</p>
                <div class="d-1"></div>
        </div>
        <div class="Top-scel"></div>
            <div class="inp-box">
                <input type="text" name="Fltr" id="fltr" onkeyup="searchFun()"><button type="submit" name="">Search</button>
            </div>
        <div class="Body">
            <div class="Tables">
                <table border="2px solid white" cellspacing="5" id="myTable">
                    <tr>
                        <th>Id</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Product Model</th>
                        <th>DP Price</th>
                        <th>MRP Price</th>
                        <th>Percent(%)</th>
                        <th>Quentity</th>
                        <th>P.Collected From</th>                                
                        <th>Total Amount</th>
                        <th>Able Due</th>
                        <th>Date_Time</th>
                        <th>Aditional Documents</th>
                        <th class="ED-btn" width="100">Edit/Delete</th>
                        <th>View</th>
                    </tr>
<?php

$conn = mysqli_connect("localhost","root","","bbe&e");
$sql = " SELECT * FROM 	distubuter_data ";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    $a = "{$row['ID']}";
    $b = "{$row['Product_Code']}";
    $c = "{$row['Product_Name']}";
    $d = "{$row['Product_Model']}";
    $e = "{$row['DP_Price']}";
    $f = "{$row['MRP_Price']}";
    $g = "{$row['Percent(%)']}";
    $h = "{$row['Quentity']}";
    $i = "{$row['P_Collected_From']}";
    $j = "{$row['Total_Price']}";
    $k = "{$row['Total_Due']}";
    $l = "{$row['Date_Time']}"; 
    $m = "{$row['Aditional_Documents']}"; 

?>
                    <tr>
                        <td><textarea name="" id="" cols="15" rows="3"><?php echo "$a" ?></textarea></td>
                        <td><textarea name="" id="" cols="20" rows="3"><?php echo "$b" ?></textarea></td>
                        <td><textarea name="" id="" cols="30" rows="3"><?php echo "$c" ?></textarea></td>
                        <td><textarea name="" id="" cols="30" rows="3"><?php echo "$d" ?></textarea></td>
                        <td><textarea name="" id="" cols="20" rows="3"><?php echo "$e" ?></textarea></td>
                        <td><textarea name="" id="" cols="20" rows="3"><?php echo "$f" ?></textarea></td>
                        <td><textarea name="" id="" cols="30" rows="3"><?php echo "$g" ?></textarea></td>
                        <td><textarea name="" id="" cols="30" rows="3"><?php echo "$h" ?></textarea></td>
                        <td><textarea name="" id="" cols="8" rows="3"><?php echo "$i" ?></textarea></td>
                        <td><textarea name="" id="" cols="20" rows="3"><?php echo "$j" ?></textarea></td>
                        <td><textarea name="" id="" cols="20" rows="3"><?php echo "$k" ?></textarea></td>
                        <td><textarea name="" id="" cols="20" rows="3"><?php echo "$l" ?></textarea></td>
                        <td><textarea name="" id="" cols="20" rows="3"><?php echo "$m" ?></textarea></td>
                        <td>
                            <button><a href="Distubuter_Data_Edit.php?Id=<?php echo "$a" ?>" class="edit-btn">Edit</a></button>
                            <button><a href="" class="delete-btn">Delete</a></button>
                        </td>
                        <td><button class="view-btn"><a href="#" class="view">View</a></button></td>
                    </tr>

                <?php
                    }
                ?>

                </table>
            </div>
        </div>
        <div class="Buttons">
            <button id="back_btn" ><a href="index.php">Back</a></button>
        </div>
        <div class="Footer">
            <p>Developed by MD Ratul Hassan Phone:01979053684</p>
        </div>
        <div class="Bottom-scel"></div>
    </form>
</body>
</html>