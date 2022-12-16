<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<head>
  <body>
    
  <?php include('index.php');?>
    <div class="container">
  
  <p></p>
    <div class="row">
    <div class="col-md-3">
    
      </div>

      <div class="col-md-10">
          <a href="product.php?act=add" class="btn btn-outline-info"> ADD +</a>
          <p></p>

          <?php
            $act = $_GET['act'];
            if($act == 'add'){
            include('product_form_add.php');
            }elseif ($act == 'edit') {
            include('product_form_edit.php');
            }
            else {
            include('product_list.php');
            }
        ?>
      </div>

    </div>
         
  </div>
  </body>
</html>