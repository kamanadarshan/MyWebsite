<html>
<head>
<style>
body{
background:#efefef;

}

.form-holder2{
width:980px;
background:#fffeee;
margin:0 auto;
padding:10px;

}

h1,h2{
  color:red;
  text-align:center;
}

form#Form {
  width: 450px;
  margin: 0 auto;
}

input [type="text"]{
   width:200px;
}

p span{
   width: 190px;
  float: left;
}
.wrapper {
    display: block;
  width: 39%;
  margin: 10px 0% 10% 34%;
}

table {
  width: 79%;
  border: 1px solid #F27070;
  MARGIN: 10px 0% 0% 14%;
}
table td,th{
   width:25%;
   border-right:1px solid #f27070;
   border-bottom:1px solid #f27070;
   text-align:center;
}

</style>
</head>
<body>
<div class="form-holder2">
<h1>Customer Information</h1><br>
<div class="wrapper">
<p><span>Name</span>: <?php echo $_POST["customername"];?></p>
<p><span>Address</span>: <?php echo $_POST["customeraddress"];?></p>
<p><span>Phone</span>: <?php echo $_POST["phone"];?></p>
<p><span>Zip</span>: <?php echo $_POST["zipcode"];?></p>
<p><span>Payment Type</span>: <?php echo $_POST["paymenttype"];?></p>
<p><span>Order Type</span>: <?php echo $_POST["ordertype"];?></p>
</div>
<h1>Product Purchase Information</h1>

<?php 
$p = $_POST["pizzaqty"];
$s = $_POST["subsqty"];
$w = $_POST["wingsqty"];
$b = $_POST["breadqty"];
$d = $_POST["drinksqty"];
$sa = $_POST["saladqty"];
?>

<table>
<tr><th>Product Name</th><th>Quantity</th><th>Rate</th><th>Total</th></tr>
<tr><td>Pizza</td><td><?php echo $_POST["pizzaqty"];?></td><td>$5.99</td><td><?php echo $p*5.99;?>  </td></tr>
<tr><td>Subs</td><td><?php echo $_POST["subsqty"];?></td><td>$4.99</td><td><?php echo $s*4.99;?>    </td></tr>
<tr><td>Bread</td><td><?php echo $_POST["breadqty"];?></td><td>$2.99</td><td><?php echo $b*2.99;?>  </td></tr>
<tr><td>Wings</td><td><?php echo $_POST["wingsqty"];?></td><td>$0.99</td><td><?php echo $w*0.99;?>  </td></tr>
<tr><td>Salad</td><td><?php echo $_POST["saladqty"];?></td><td>$5.99</td><td><?php echo $sa*5.99;?> </td></tr>
<tr><td>Drink</td><td><?php echo $_POST["drinksqty"];?></td><td>$1.99</td><td><?php echo $d*1.99;?> </td></tr>
<tr><td colspan="4">&nbsp;</td></tr>
<?php 
   $gtotal = ($p*5.99)+($d*1.99)+($s*4.99)+($b*2.99)+($w*0.99)+($sa*5.99); 
   $tips = 0.15 * $gtotal;
   $total = $gtotal + $tips;
?>
<tr><td colspan="3">Sub Total:</td><td><?php echo $gtotal;?> </td></tr>
<tr><td colspan="3">Tips(15%):</td><td><?php echo $tips;?> </td></tr>
<tr><td colspan="3">Grand Total:</td><td><?php echo $total;?> </td></tr>

</table>
</div>
</div>
</body>
</html>