<?php



?>


<!DOCTYPE html>
<html>
    <head>
        <title>Memo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="input.css">
        <link rel="icon" href="media/LOGO1.png">
        <script src="Calculet.js"></script>
    </head>
    <body>
        <form method="GET" action="input_update-script.php">
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
                <h4 id="le-5">ID:</h4><input id="in-1" type="text" name="ID" placeholder="ID" readonly>
                <h5 id="le-6">Customar Code:</h5><input id="in-2" type="text" name="Customar_Code" placeholder="Enter Customar Code" value="<?php $randomNumber = rand();  echo $randomNumber; ?>" readonly>
                <h5 id="le-7">Customar Name:</h5><input id="in-3" type="text" name="Customar_Name" placeholder="Enter Customar Name">
                <h5 id="le-8">Customar Phone:</h5><input id="in-4" type="text" name="Customar_Phone" placeholder="Enter Customar Phone Number">
                <h5 id="le-9">Shop Name:</h5><input id="in-5" type="text" name="Shop_Name" placeholder="Enter Customar Address">
                <h5 id="le-1">Shop Address:</h5><input id="in-6" type="text" name="Shop_Address" placeholder="Enter Product Code">
                <h5 id="le-16">Product Code:</h5><input id="in-14" type="text" name="Product_Code" placeholder="Enter Product Name">
                <h5 id="le-17">Product Name:</h5><input id="in-15" type="text" name="Product_Name" placeholder="Enter Product Model">
                <h5 id="le-18">Product Model:</h5><input id="in-16" type="text" name="Product_Model" placeholder="Enter Product Quentity">
                <h5 id="le-11">Quentity:</h5><input id="in-9" type="text" name="Quentity" placeholder="Enter Unit Price">
                <h5 id="le-2">Unit Price:</h5><input id="in-7" type="text" name="Unit_Price" placeholder="Enter Sales Amount">
                <h5 id="le-12">Total Price:</h5><input onkeyup="sum(this.value)" id="in-10" type="text" name="Total_Price" placeholder="Enter Collected Amount">
                <h5 id="le-13">Total Due:</h5><input id="in-11" type="text" name="Total_Due" placeholder="Enter Total Due">
                <h5 id="le-14">Total Paid:</h5><input id="in-12" type="text" name="Total_Paid" placeholder="Enter Total Paid">
                <h5 id="le-15">Seller Name:</h5><input id="in-13" type="text" name="Seller_Name" placeholder="Seller Name">
                <h5 id="le-3">Date Time:</h5><input id="in-8" type="datetime-local" name="Date_Time">
                <div id="Up_btn">
                    <input id="paid" type="radio" name="Paid_Unpaid" value="paid"><p class="paid">PAID</p> 
                    <input id="unpaid" type="radio" name="Paid_Unpaid" value="unpaid"><p class="unpaid">UNPAID</p>
                </div>
                
                <div id="Show_img">
                    <input id="in-10" type="file" name="Aditional_Documents" onchange="readurl(this)">
                    <img src="http://placehold.it/180" id="blah">
                    <script src="Product_Entry.js"></script>
                </div>
                <!--<div class="d-3"></div>-->
                <button class="save-btn" name="S_btn" type="submit">Save</button>
                <!--<button class="update-btn" type="submit">Update</button>-->
                <button class="reset-btn" type="reset">Reset</button>
                <button class="delete-btn" type="submit">Delete</button>
                <div class="d-2"></div>
            </div>
            <div class="Footer">
                <button><a href="index.php">Back</a></button>
                <p>Developer by MD Ratul Hassan Phone:01979053684</p>
            </div>
        </form>
    </body>
</html>