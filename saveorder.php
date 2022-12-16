<?php
	error_reporting( error_reporting() & ~E_NOTICE );
    session_start();  
	

?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirm</title>
</head>
<body>
<!--สร้างตัวแปรสำหรับบันทึกการสั่งซื้อ -->
<?php
   
require_once('backend/condb.php');

//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');

	$name = $_POST["name"]; 
	$address = $_POST["address"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$slip_img = $_POST["slip_img"];
	$p_qty = $_POST["p_qty"];
	$total = $_POST['total'];
	$order_date = date("Y-m-d H:i:s");
	$status = 1;

	
	//บันทึกการสั่งซื้อลงใน order_detail
	mysqli_query($con, "BEGIN"); 
	$sql1 = "INSERT  INTO tb_order VALUES
	(NULL,  
	'$name',
	'$address',
	'$email',
	'$phone',
	'$slip_img',
	'$status',
	'$order_date' 
	)";
	
	$query1	= mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
	

 
 
	$sql2 = "SELECT MAX(order_id) AS order_id FROM tb_order  WHERE phone='$phone'";
	$query2	= mysqli_query($con, $sql2);
	$row = mysqli_fetch_array($query2);
	$order_id = $row['order_id'];
	
	
	foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
	 
	{
		$sql3	= "SELECT * FROM tbl_product where p_id=$p_id";
		$query3 = mysqli_query($con, $sql3);
		$row3 = mysqli_fetch_array($query3);
		$total=$row3['p_price']*$p_qty;
		
		
		$sql4	= "INSERT INTO  tb_order_detail 
		values(null, 
		'$order_id', 
		'$p_id', 
		'$p_qty', 
		'$total')";
		$query4	= mysqli_query($con, $sql4);
	}
	if ($query1 && $query4){ 
		mysqli_query($con, "COMMIT");
		$msg = "สั่งซื้อเรียบร้อย ";
	
		
		foreach($_SESSION['shopping_cart'] as $p_id)
		{	
			unset($_SESSION['shopping_cart']);
		}
	}
	else{
		mysqli_query($con, "ROLLBACK");  
		$msg = "บันทึกข้อมูลไม่สำเร็จ กรุณาติดต่อเจ้าหน้าที่ค่ะ ";	
	}

	mysqli_close($con);
	
?>



<script type="text/javascript">
	alert("<?php echo $msg;?>");
	window.location ='home.php';
</script>


 
</body>
</html>