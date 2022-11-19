<?php  include'files\overall\overallheader.php' ;?>
<body>
<form   action="welcome1.php" method="POST">
    <label for="">Username</label>
    <input type="text" name="username" id="" placeholder="Enter your name">
    <label for="">Email id</label>
    <input type="text" name="Email" id="" placeholder="Enter your email id">
    <label for="">Password</label>
    <input type="password" name="password" id="" placeholder="Enter your password"><br>
    <input type="submit" >
</form>
</body>
<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>

   <?php include'files\overall\overallfooter.php' ;?>