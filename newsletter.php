<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<?php
include ( 'includes/headerout.php' ) ;
?>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}

.container {
  padding: 20px;
  background-color: #f1f1f1;
}

input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=checkbox] {
  margin-top: 16px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
</style>
<body>

<h2>Newsletter</h2>

<form action="newslettercomplete.php">
  <div class="container">
    <h2>Subscribe to our Newsletter</h2>
    <p>Enter your name and Email Address.</p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Email address" name="mail" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container">
    <input type="submit" value="Subscribe">
  </div>
</form>

</body>
      <?php
include ( 'includes/footer.php' ) ;
?>
    
</html>
