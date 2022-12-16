<?php session_start();
    
?>


<?php include('h.php');?>
<body>

  <div class="container">

    <?php include('navbar3.php');?>
    
    <div class="row">

    <div>


    </div class="row">
    <div class="col-md-2">
    &nbsp;&nbsp;
    
       
      
<?php include('menu.php'); ?>
    </div>
    <div class="col-md-10">

      <?php
      $act = (isset($_GET['act']) ? $_GET['act'] : '');
      $z = (isset($_GET['z']) ? $_GET['z'] : '');
      if($act == 'showbytype'){

        include('show_product_type.php'); 
      }else if($z!=''){
        include('show_product_z.php'); 

      }else{
      include('show_product.php'); 
      }
      ?>
    </div>
    
    </div>    
  </div>
</body>
</html>
<br>
<br>
<br>

  <footer>
    
    <div class="container">
    <hr>
     
  </footer>