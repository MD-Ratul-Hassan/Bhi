<!DOCTYPE html>
<html>
    <head>
        <title>Add Product</title>
        <link rel="stylesheet" href="Add_Product.css">
        <link rel="icon" href="media/LOGO1.png">
    </head>
    <body>
        <form method="GET" action="Add_Product-script.php">
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
                <h4 id="le-5">ID:</h4><input id="in-1" type="text" name="Id" placeholder="Enter a ID" readonly>
                <h5 id="le-6"> Product Code:</h5><input id="in-2" type="text" name="Product_Code" placeholder="Enter Product Code" value="<?php $randomNumber = rand();  echo $randomNumber; ?>">
                <h5 id="le-7">Product Name:</h5><input id="in-3" type="text" name="Product_Name" placeholder="Enter Product Name">
                <h5 id="le-8">Product Model:</h5><input id="in-4" type="text" name="Product_Model" placeholder="Enter Product Model">
                <h5 id="le-9">DP Price:</h5><input id="in-5" type="text" name="DP_Price" placeholder="Enter Product DP Price">
                <h5 id="le-10">MRP Price:</h5><input id="in-9" type="text" name="MRP_Price" placeholder="Enter MRP Price">
                <h5 id="le-1">Percent(%):</h5><input id="in-6" type="text" name="Percent(%)" placeholder="Enter Granted Percent">
                <h5 id="le-2">Quentity:</h5><input id="in-7" type="text" name="Quentity" placeholder="Enter Product Quentity">
                <h5 id="le-3">P.Collected From Name:</h5><input id="in-8" type="text" name="P_Collected_From" placeholder="Enter Company Officer Name">
                <h5 id="le-11">Total Amount:</h5><input id="in-10" type="text" name="Total_Amount" placeholder="Enter Total Amount">
                <h5 id="le-12">Able Due:</h5><input id="in-11" type="text" name="Able_Due" placeholder="Enter Total Able Due">
                <h5 id="le-13">Date & Time</h5><input id="in-12" type="datetime-local" name="Date_Time">

                <div id="Show_img">
                    <input id="in-10" type="file" name="Aditional_Documents" onchange="readurl(this)">
                    <img src="http://placehold.it/180" id="blah">
                    <script src="Product_Entry.js"></script>
                </div>
                <button class="save-btn" name="s_btn" type="submit">Save</button>
                <button class="update-btn" type="submit">Update</button>
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