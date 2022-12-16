
<?php include('h.php');?>
<br>

<form  name="register" action="regis_form_add_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
  
  <div class="container">
      <h4> สมัครสมาชิก </h4><hr>
    
  <div class="form-group" >
    <div class="col-sm-2"> Username </div>
      <input  name="m_user" type="text" required class="form-control" />  
    
    </div>
    
    <div class="form-group" >
    <div class="col-sm-2" > Password </div>
      <input  name="m_pass" type="password" required class="form-control" id="m_pass"/>
    
    </div>

    <div class="form-group" >
    <div class="col-sm-2" > ชื่อ-สกุล </div>
    <input  name="m_name" type="text" required class="form-control" id="m_name"  />
    </div>

    <div class="form-group" >
    <div class="col-sm-3"> อีเมล  </div>
      <input  name="m_email" type="email" class="form-control" id="m_email" required  placeholder="name@hotmail.com"/>
    </div>

    <div class="form-group" >
    <div class="col-sm-2" > เบอร์โทรศัพท์  </div>
      <input  name="m_tel" type="text" class="form-control" id="m_tel" required  placeholder="ตัวเลขเท่านั้น" maxlength="10" pattern="^[0-9]+$" title="ตัวเลขเท่านั้น" />
    </div>
    
    <div class="form-group" >
    <div class="col-sm-2"> ที่อยู่  </div>
      <textarea name="m_address" class="form-control" id="m_address" required></textarea>
    </div>
 
  <div class="form-group">
    <div class="col-sm-2"> </div>
      <button type="submit" class="btn btn-success" id="btn"> สมัครสมาชิก  </button>
      <a href="index.php" type="submit" class="btn btn-danger" id="btn"> ยกเลิก  </a>
    </div>
</div>
</div>
</form>
</div>

