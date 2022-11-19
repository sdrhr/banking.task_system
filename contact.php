<link rel="stylesheet" href="css1.css">
<body>
<form  action="welcome.php" method="POST">
<label for="">Username</label>
<input type="text" name=" username" id="" placeholder="Enter your name">

<label for="">Email address</label> 
<input type="text" name="email" id="" placeholder="Enter your email id">
<label for="">CNIC NO</label>
<input type="password" name="cnic" id="" placeholder="Enter your CNICs">
<label for="">Phone no</label>
<input type="text" name="phone" id="" placeholder="Enter your phone number"><br>
<label for="">Country</label>
<select name="country" value="select">
  <option value="">pakistan</option>
  <option value="">India</option>
  <option value="">Banglor</option>
  <option value="">America</option>
  <option value="">Europe</option>
</select>
<br><br>
<label for="">Account number</label>
<input type="text" name="account" id="" placeholder="Enter your account number">
<br>
  
<label for="">City</label>
<select name="city" id="" value="select">
  <option value="">lahore</option>
  <option value="">adebazzi</option>
  <option value="">jhudo</option>
  <option value="">jehlum</option>
  <option value="">bhawalpur</option>
  <option value="">bhakhar</option>
  <option value="">amersar</option>
  <option value="">islamabad</option>
  <option value="">jamesbad</option>
</select><br><br>
<label for="">Masseage</label>
<textarea col="12" row="6">
   
</textarea>
<input type="submit">
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