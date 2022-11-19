<?php  include'files\overall\overallheader.php' ;?>
  

<body>
<form action="welcome2.php" method="POST">
        <label for="">Username</label>
        <input type="text" name="username1" id="" class="ik" placeholder="Enter your name">
       
        <label for="">Email address</label> 
        <input type="text" name="email" id="" class="ik"  placeholder="Enter your email id">
        <label for="">Password</label>
        <input type="password" name="password1" id=""  class="ik" placeholder="Enter password">
        <label for="">Phone no</label>
        <input type="text" name="phone" id="" class="ik"  placeholder="Enter you phone number">
        <label for="">Country</label>
        <select name="country" value="select">
          <option value="">pakistan</option>
          <option value="">India</option>
          <option value="">Banglor</option>
          <option value="">America</option>
          <option value="">Europe</option>
        </select>
        <label for="">Pincode</label>
        <input type="text" name="pincode" id="" class="ik"  placeholder="Enter your pincode">
        <label for="">Account number</label>
        <input type="text" name="accountnumber" id="" class="ik"  placeholder="Enter your account number">
        <label for=""> Currency</label>
        <select name="select" id="" value="select">
          <option value="">pkr</option>
          <option value="">₹</option>
          <option value="">$</option>
          <option value="">INR</option>
          <option value="">€</option>
        </select>
        <label for="">Transaction method</label>
        <select name="method" id="" value="Select">
          <option value="">Paypal</option>
          <option value="">easypaisa</option>
          <option value="">jazzcache</option>
          <option value="">bitcoin</option>
        </select>
        <label for="">Bank name</label>
        <input type="text" name="bankname" id=""  class="ik" placeholder="Enter bank name">
        <label for="">Amount</label>
        <input type="text" name="amount" id="" class="ik"  placeholder="Enter your amount">
        <label for="">Transaction place</label>
        <input type="text" name="transaction" class="ik"  placeholder="write any trancsaction place"><br><br>
        <input type="submit">
      </form> 
</body><script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>

      <?php include'files\overall\overallfooter.php' ;?>