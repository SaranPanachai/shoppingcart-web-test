<?php session_start();?>


<?php include('h.php');?>
<body >

  <div class="container">

    <?php include('navbar2.php');?>
    
    <div class="row">

    <div>


    </div class="row">
    <div class="col-md-2">
    &nbsp;&nbsp;
    <?php require_once('backend/condb.php');

  $query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
  $result_type =mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
  // echo($query_type);
  // exit()

  ?>

<div class="list-group"> 
<?php
  foreach ($result_type as $row )  { ?>

   <a href="index.php?act=showbytype&type_id=<?php echo $row['type_id'];?>" class="list-group-item list-group-item-action list-group-item-light"> 
     <?php echo $row["type_name"]; ?></a>

<?php } ?>                      
</div>
    </div>
    <div class="col-md-10">

      <?php
      $act = (isset($_GET['act']) ? $_GET['act'] : '');
      if($act == 'showbytype'){

        include('show_indextype.php'); 
      }else{
      include('show_index.php'); 
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
      <div class="row">
      <div class="col-md-8">
        <a class="nav-link" href="form_login.php" style="margin-left: 500px;" >Login Admin</a>
    </div>
    </div>
    </div>
  </footer>
  