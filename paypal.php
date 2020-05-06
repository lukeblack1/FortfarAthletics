<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<?php
include ( 'includes/headerout.php' ) ;

include ( 'includes/footer.php' ) ;
?>

<style>
form. {
  height: 200px;
  width: 400px;
  margin-right: 50px;
}

p.{
  width: 150px;
  height: 150px;
  position: absolute;
  top: 50px;
  left: 50px;
}
</style>
<center>
<p>
<div class="card" style="width: 18rem;">
  
  <div class="card-body">
    <h5 class="card-title"><b>Subscription</b></h5>
    <p class="card-text">Thank you for choosing to Subscribe. </p>
	<p class="card-text"><b>Here are some benefits: <b></p>
	
	
    <ul>
	<li>Weekly News letter</li>
	<li>Support Fan website</li>
	
</ul> 
  </div>
</div>
</p>



    
    
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JZ82GJPJS4H26">
<table>
<tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
	<option value="Yearly">Yearly : £100.00 GBP - yearly</option>
	<option value="Monthly">Monthly : £10.00 GBP - monthly</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="GBP">
<input type="image" src="https://www.sandbox.paypal.com/en_US/GB/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

</center>