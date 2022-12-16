

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9966CC;">
  <a class="navbar-brand" href="home.php">MODEL STORE</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">Basket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
        <?php 
        if(!empty($_SESSION['m_name'])){
          echo $_SESSION['m_name']; 
        }
        ?></a>
      </li>
      
      <form class="form-inline my-2 my-lg-0" action="home.php" method="GET" style="margin-left: 300px;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="z">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php" onClick="return confirm('Logout ?')">Logout</a>
      </li>
    </ul>
  </div>
</nav>
