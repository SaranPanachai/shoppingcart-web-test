<?php
	error_reporting( error_reporting() & ~E_NOTICE );
    session_start();   
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
@media print{
    #hid{
        display:none;
    }
}
</style>

</head>
<body>
<div class="row">
        <div class="col-md-6">
<div class="container" >
    
	<div class="row">
    	<div class="col-md-2"></div>
        <div class="col-md-8">
<br>
<br>
<br>
  <div id="hid">
  <p> <a href="cart.php" type="submit" class="btn btn-warning" id="btn"> Back  </a></p>
  <hr>
</div>

  <table width="700" border="1" align="center" class="table">
    <tr>
      <td width="1558" colspan="5" align="center">
      <strong> Products </strong></td>
    </tr>
    <tr class="success">
    <td align="center">No</td>
      <td align="center">Product</td>
      <td align="center">Price</td>
      <td align="center">Unit</td>
      <td align="center">Totle</td>
    </tr>
<?php
	require_once('backend/condb.php');
	$total=0;
	foreach($_SESSION['shopping_cart'] as $p_id =>$p_qty)
	{
		$sql = "select * from tbl_product where p_id=$p_id";
		$query = mysqli_query($con, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['p_price']*$p_qty;
		$total	+= $sum;
    echo "<tr>";
	echo "<td align='center'>";
	echo  $i += 1;
	echo "</td>";
    echo "<td>" . $row["p_name"] . "</td>";
    echo "<td align='right'>" .number_format($row['p_price'],2) ."</td>";
    echo "<td align='right'>$p_qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='right' colspan='4'><b>รวม</b></td>";
    echo "<td align='right'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";
?>
</table>
<hr>
		</div>
	</div>
</div>
</div>

<div class="col-md-6">
<div class="container" id="hid" style="margin-top: 100px;">
  <div class="row">
  <div class="col-md-4" style=" margin-right: 200px;"></div>
    <div class="col-md-5" >
      <h5 align="center" >  ที่อยู่ในการส่งสินค้า  </h5>
      
      <form  name="formlogin" action="saveorder.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text"  name="name" class="form-control" required placeholder="ชื่อ-สกุล" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <textarea name="address" class="form-control"  rows="3"  required placeholder="ที่อยู่"></textarea> 
          </div>
 
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text"  name="phone" class="form-control" required placeholder="เบอร์โทรศัพท์" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="email"  name="email" class="form-control" required placeholder="อีเมล" />
          </div>
        </div>
        <div class="form-group">
          
          <div class="col-sm-12">

            <input type="file" name="slip_img"  class="form-control" required placeholder="สลีป"/>
          </div>
        </div>



        <div class="form-group">
          <div class="col-sm-12" align="center">
            <button type="submit" class="btn btn-success" id="btn">
             ยืนยันสั่งซื้อ </button>

             &nbsp;  <button class="btn btn-primary" onClick="window.print()"> print </button>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>
