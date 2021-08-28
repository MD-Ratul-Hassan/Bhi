<!-- Display Date in (Php Edit Page)...Start -->
<?php

$a = $_GET['Id'];
$conn = mysqli_connect("localhost","root","","bbe&e");
$sql = " SELECT * FROM `distubuter_data` WHERE Id = '$a' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

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
<!-- Display Date in (Php Edit Page)...End --> 

<!--html Page Start -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Distubuter Data Edit</title>
        <link rel="stylesheet" href="Distubuter_Data_Edit.css">
        <link rel="icon" href="media/LOGO1.png">
    </head>
    <body>
        <form method="GET" action="Distubuter_Data_Edit-script.php">
            <div class="Head">
                <img src="media/Logo.png">
                <h1>BHI BHI ELECTRONIC & ELECTRIC</h1>
                    <p id="p-1">Your Daily Products</p>
                    <p id="p-3">Propiter: Hazi Alamgir Hossain</p>
                    <p id="p-4">Hazi Hossan Market, Dumni Annada Bazar, Khilket, Dhaka-1229</p>
                    <p id="p-5">Phone: 01832337877, 01732609119</p>
                    <div class="d-1"></div>
            </div>
            <div class="BoDy">
                <div id="backg"></div>
                <h4 id="le-5">ID:</h4><input id="in-1" type="text" value="<?php echo "$a" ?>"  name="Id">
                <h5 id="le-6"> Product Code:</h5><input id="in-2" type="text" value="<?php echo "$b" ?>" name="Product_Code">
                <h5 id="le-7">Product Name:</h5><input id="in-3" type="text" name="Product_Name" value="<?php echo "$c" ?>">
                <h5 id="le-8">Product Model:</h5><input id="in-4" type="text"  value="<?php echo "$d" ?>" name="Product_Model">
                <h5 id="le-9">DP Price:</h5><input id="in-5" type="text" value="<?php echo "$e" ?>" name="DP_Price">
                <h5 id="le-10">MRP Price:</h5><input id="in-9" type="text"  value="<?php echo "$f" ?>" name="MRP_Price">
                <h5 id="le-1">Percent(%):</h5><input id="in-6" type="text" value="<?php echo "$g" ?>" name="Percent(%)">
                <h5 id="le-2">Quentity:</h5><input id="in-7" type="text" name="Quentity"  value="<?php echo "$h" ?>">
                <h5 id="le-3">P.Collected From Name:</h5><input id="in-8" type="text" value="<?php echo "$i" ?>" name="P_Collected_From">
                <h5 id="le-11">Total Amount:</h5><input id="in-10" type="text" value="<?php echo "$j" ?>" name="Total_Amount">
                <h5 id="le-12">Able Due:</h5><input id="in-11" type="text" value="<?php echo "$k" ?>" name="Able_Due">
                <h5 id="le-13">Date & Time</h5><input id="in-12" type="datetime-local" value="<?php echo "$l" ?>" name="Date_Time">

                <div id="Show_img">
                    <input id="in-10" type="file" name="Aditional_Documents" onchange="readurl(this)">
                    <img src="http://placehold.it/180" id="blah">
                    <script src="Product_Entry.js"></script>
                </div>  
                <button class="update-btn" name="update_btn" type="submit">Update</button>
                <button class="reset-btn" type="reset">Reset</button>
                <div class="d-2"></div>
            </div>
            <div class="Footer">
                <button><a href="index.php">Back</a></button>
                <p>Developer by MD Ratul Hassan Phone:01979053684</p>
            </div>
        </form>
    </body>
</html>
<!-- html Page End -->