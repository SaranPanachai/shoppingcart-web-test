<!DOCTYPE html>
<html>
<head>
<?php include('h.php');?>
<?php include('menu_left.php');?> 
<head>
  <body>
  <div class="area"></div><nav class="main-menu">
            <ul>
            <br>
                <li>
                    
                <font color=“#FF006C” style="margin-left: 50px">  <?php echo $a_name; ?></font> 
                    
                  
                </li>
                <br>
                
                <li class="has-subnav">
                    <a href="admin.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Admin
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="member.php">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Member
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="type.php">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Type Product
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="product.php">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Product
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="../logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
   
    <div class="container">
  <p></p>
  
    <div class="row">
    <div class="col-md-3">
    
      
  </div>
  </body>
</html>