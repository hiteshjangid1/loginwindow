<!DOCTYPE html>
<html>
<head>
<title>This is login Authentication</title>
<link rel='stylesheet' href='../w3.css'>
<script src='../angular.min.js'></script>
</head>
<body>
<div ng-app="">
  <div style='margin-left:40%; margin-top:10%'>
  <div class='w3-card-4 w3-center' style='width:40%' id='window1'>
    <div class='w3-container' style='margin-top:5%'>
      <p class='w3-center w3-hide-small'>Login/Signup</p>
      <img src='images.png'class='w3-center w3-mobile' style='width:80%' id='x'>
    </div>
    <div class='w3-bar w3-section'>
      <button class='w3-button w3-blue w3-bar-item w3-small'style='margin-right:5px;' onclick="document.getElementById('id01').style.display='block'">Sign in</button>
      <div id="id01" class="w3-modal">
        <div class='w3-card-4 w3-center w3-display-container w3-modal-content' style='width:32%' id='window1'>
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright w3-hover-red">&times;</span>
          <div class='w3-container'style='margin-top:-40px;'>
            <p class='w3-center w3-hide-small'>Sign in</p>
            <br>
        <form method="post" action="welcome2.php">
          <input type='text' name='email' placeholder="Email" class='w3-input' >
          <br>
          <input type="password" name='passwod' placeholder="Password" class='w3-input ' id='a1'>
          <br>
        <div class='w3-left'>  <input type='checkbox' onclick=passhow('a1')><span> Show Password</span></div>
        <br>
          <br>
          <input type='submit' name='submit' value='Submit'class='w3-button w3-center w3-blue w3-hover-black' style='width:100%;margin-bottom:20px'>
        </form>
      </div>
    </div>
  </div>
  <button class='w3-button w3-blue w3-bar-item w3-small' onclick="document.getElementById('id02').style.display='block'">Sign up</button>
  <div id="id02" class="w3-modal">
    <div class='w3-card-4 w3-center w3-display-container w3-modal-content' style='width:32%' id='window1'>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright w3-hover-red">&times;</span>
      <div class='w3-container'style='margin-top:-40px;'>
        <p class='w3-center w3-hide-small'>Sign Up</p>

    <form method="post" action="welcome.php">
      <input type='text' name='name' placeholder="Name" class='w3-input' >
      <br>
      <input type='text' name='email' placeholder="Email" class='w3-input' >
      <br>
      <input type="password" name='password1'placeholder="Password" class='w3-input' id='dj' ng-model='pp'>
      <br>
      <input type="password" name='password2'placeholder="Retype Password" class='w3-input' id='kj' ng-model='qq'>
      <br>

      <div class='w3-left'> <input type='checkbox' onclick=passhowx('dj','kj')><span> Show Password</span></div>
      <br>
        <br>
      <input type='submit' name='submit' value='Submit'class='w3-button w3-center w3-blue w3-hover-black' style='width:100%;margin-bottom:20px' ng-show='pp==qq && pp && qq'>
    </form>

  </div>
</div>
</div>
    </div>

</div>
</div>
<script>
function passhow(hj)
{
  var x=document.getElementById(hj);
  if(x.type==='password')
      x.type='text';
      else {
        x.type='password';
      }
}

function passhowx(hj,ij)
{
  var x=document.getElementById(hj);
  var y=document.getElementById(ij);
  if(x.type==='password' && y.type==='password' )
  {
      x.type='text';
      y.type='text';
    }
      else {
        x.type='password';
        y.type='password';
      }
}
</script>

</div>
</body>
</html>