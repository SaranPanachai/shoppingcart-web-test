<?php
    error_reporting( error_reporting() & ~E_NOTICE );
    session_start(); 
    $p_id = $_REQUEST['p_id']; 
	$act = $_REQUEST['act'];

	if($act=='add' && !empty($p_id))
	{
		if(!isset($_SESSION['shopping_cart']))
		{
			 
			$_SESSION['shopping_cart']=array();
		}else{
		 
		}
		if(isset($_SESSION['shopping_cart'][$p_id]))
		{
			$_SESSION['shopping_cart'][$p_id]++;
		}
		else
		{
			$_SESSION['shopping_cart'][$p_id]=1;
		}
	}

	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['shopping_cart'][$p_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['shopping_cart'][$p_id]=$amount;
		}
	}
	?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<body>
<p align="left" style="margin-left: 50px"> <a href="home.php" class="btn btn-dark" style="margin-top: 20px" > กลับไปเลือกสินค้า</a> </p>
<hr>
<tr>
	<br>
			<td>  
			<div align="left" style="margin-left: 150px">
			
			<?php include('qqq.php');?>
			</div>
            </td>
        </tr>

<div class="container" style="margin-top: -200px">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-7">
      <form id="frmcart" name="frmcart" method="post" action="?act=update">
        <table width="100%" border="0" align="center" class="table table-hover">
        <tr>
          <td height="40" colspan="7" align="center" bgcolor="#CCCCCC"><strong><b>Products</span></strong></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#EAEAEA"><strong>No</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>image</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>Product</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>Price</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>Unit</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>Totle</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>Remove</strong></td>
        </tr>
        <?php

if(!empty($_SESSION['shopping_cart']))
{
require_once('backend/condb.php');
	foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
	{
		$sql = "select * from tbl_product where p_id=$p_id";
		$query = mysqli_query($con, $sql);
		while($row = mysqli_fetch_array($query))
		{
		 
		$sum = $row['p_price'] * $p_qty;
		$total += $sum;
		echo "<tr>";
		echo "<td>";
        echo $i += 1;
        echo ".";
		echo "</td>";
		echo "<td width='100' align='middle'>"."<img src='backend/p_img/$row[p_img]'  width='50'/>"."</td>";
		echo "<td width='334'  align='middle'>"."" . $row["p_name"] . "</td>";
		echo "<td width='100' align='right'>" . number_format($row["p_price"],2) . "</td>";
		
		echo "<td width='57' align='right'>";  
		echo "<input type='text' name='amount[$p_id]' value='$p_qty' size='2'/></td>";
		
		echo "<td width='100' align='right'>" .number_format($sum,2)."</td>";
		echo "<td width='100' align='center'><a href='cart.php?p_id=$p_id&act=remove' class='btn btn-danger btn-xs'>ลบ</a></td>";
		
		echo "</tr>";
		}
 
	}
	echo "<tr>";
  	echo "<td colspan='5' bgcolor='#CEE7FF' align='right'>Total</td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>";
  	echo "<b>";
  	echo  number_format($total,2);
  	echo "</b>";
  	echo "</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>
        
          <td colspan="5" align="right">
          <button type="submit" name="button" id="button" class="btn btn-warning"> คำนวณ </button>
            <button type="button" name="Submit2"  onclick="window.location='confirm.php';" class="btn btn-primary"> 
            <span class="glyphicon glyphicon-shopping-cart"> </span> สั่งซื้อ </button>
        
		
      </form>
      
    </div>
  </div>
</div>
</body>
</head>


</html>
