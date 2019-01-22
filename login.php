
<!DOCTYPE html>

<html>
<head>
    <script language="javascript" src="http://127.0.0.1/cv_maker/\js\test.js"></script>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/cv_maker/css/login.css">
</head>
    <body>
        
<p onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >login</p>

<div id="id01" class="modal">
  
  <form class="modal-content animate"  method="post" action="http://127.0.0.1/cv_maker/test.php" name='f'>
      
     <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="imgcontainer">
    
      <img src="http://127.0.0.1/cv_maker/images/images.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <b>Username</b>
<input type="text" name="username" >
  		<b>Password</b>
     <input type="password" name="password">
      <button type="submit" onclick="return verif()">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

</body>
</html>