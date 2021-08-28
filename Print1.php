<!DOCTYPE html>
<html>
    <head>
        <title>Print</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Print1.css">
        <link rel="icon" href="media/LOGO1.png">
    </head>
    <body> 
    
<?php
   
    $b = $_GET['Customar_Code'];
  

    $conn = mysqli_connect("localhost","root","","bbe&e");
    $sql = "SELECT `ID`, `Customar_Code`, `Customar_Name`, `Customar_Phone`, `Shop_Name`, `Shop_Address`, `Product_Code`, `Product_Name`, `Product_Model`, `Quentity`, `Unit_Price`, `Total_Price`, `Total_Due`, `Total_Paid`, `Seller_Name`, `Paid_Unpaid`, `Date Time`, `Aditional_Documents` FROM `distubuter_update_data` WHERE Customar_Code = 2080099483 ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);


    $a = "{$row['ID']}";
    $b = "{$row['Customar_Code']}";
    $c = "{$row['Customar_Name']}";
    $d = "{$row['Shop_Address']}";
    $e = "{$row['Customar_Phone']}";
    $f = "{$row['Product_Code']}";
    $g = "{$row['Product_Name']}";
    $h = "{$row['Product_Model']}";
    $i = "{$row['Quentity']}";
    $j = "{$row['Unit_Price']}";


    $m = "{$row['Total_Due']}";
    $n = "{$row['Total_Paid']}";
    $o = "{$row['Seller_Name']}";
    $p = "{$row['Paid_Unpaid']}";
    $q = "{$row['Date Time']}";

?>

        <form method="POST" action="">
            <img src="media/Logo.png">
            <h1>BHI BHI ELECTRONICS & ELECTRIC</h1>
            <p id="Id_ID">ID:</p> <textarea id="id_field" readonly><?php echo $a ?></textarea>
            <p id="p-1">Your Daily Products</p>
            <h5>আপনি এখানে খুচরা ও দামে এলইডি টিভি, ফ্রাইড, এসি, ওয়াশিং মেশিন, রাইস কুকার, ওউফার, সাউন্ড সিস্টেম, মাইক্রোওয়েভ, ব্লেন্ডার, গ্রেন্ডার, আয়রন, ফ্যান, রিমোট, লাইট ইত্যাদি কিনতে পারবেন।</h5>
            <h4>Propiter: Hazi Alamgir Hossain<br>
            Hazi Hossan Market, Dumni Annada Bazar, Khilket, Dhaka-1229<br>
            Phone: 01832337877, 01732609119</h4>
            <h2>Invoice/Bill</h2>
            Customar Code:<textarea class="si-no" name="si_no" readonly><?php echo $b; ?></textarea><br>
            Customar Name:<textarea class="buyer" name="buyer_name" readonly><?php echo $c; ?></textarea>
            Customar Address:<textarea class="buyer" name="buyer_address" readonly><?php echo $d;  ?></textarea><br>
            Customar Phone:<textarea class="buyer" name="phone" readonly><?php echo $e; ?></textarea>
            Date:<input type="text" id="Date_Time" class="buyer" name="date" value="<?php echo $q; ?>" readonly>
            <table border="2px">
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Product Model</th>
                    <th id="Quentity">Quentity</th>
                    <th>Unit Price</th>
                    <th>Sales Amount</th>
                    <th>Collected Amount</th>
                    <th>Total Due</th>
                    <th>Total Paid</th>
                    <th>Seller Name</th>
                    <th>Paid/Unpaid</th>
                </tr>

                <tr>
                    <td><textarea name="" id="" readonly><?php echo $f; ?></textarea></td>
                    <td><textarea name="" id="" readonly><?php echo $g; ?></textarea></td>
                    <td><textarea name="" id="" readonly><?php echo $h; ?></textarea></td>
                    <td><textarea name="" id="quentity" readonly><?php echo $i." Pice"; ?></textarea></td>
                    <td><textarea name="" id="" readonly><?php echo $j.".00 BDT"; ?></textarea></td>
                    <td><textarea name="" id="" readonly><?php echo $k.".00 BDT"; ?></textarea></td>
                    <td><textarea name="" id="" readonly><?php echo $l.".00 BDT"; ?></textarea></td>
                    <td><textarea name="" id="" readonly><?php echo $m.".00 BDT"; ?></textarea></td>
                    <td><textarea name="" id="" readonly><?php echo $n.".00 BDT"; ?></textarea></td>
                    <td><textarea name="" id="" readonly><?php echo $o; ?></textarea></td>
                    <td><textarea name="" id="paid_unpaid" readonly><?php echo $p; ?></textarea></td>
                </tr>    

             
            </table>

                <textarea class="details" placeholder="Details" name="details"></textarea>
                
                <h4 id="Cs">Customar Signature</h4>
                <h4 id="Ps">Propitor Signature</h4>

              <footer><h5>Developed by: Md Ratul Hassan-01979053684</h5></footer>
        </form>

    </body>
</html>