<?php

/*Template Name:JavaScriptExample1 */

get_header();

?>

<HTML>
<!--In php file all textboxes, checboxes, radiobuttons... must be inside a form -->
<form action="" method="post" id="subscription" onsubmit="return validateform()">

<label>Member Name: </label> <input type="text" name="membernametextbox" size="30"/>

<label>Phone: </label> <input type="text" name="phonetextbox" size="30"/>

<label>Email: </label> <input type="text" name="emailtextbox" size="30"/>

<label>Date: </label> <input type="text" name="datetextbox" size="30"/>

<label>Payment Type: </label> <input type="text" name="paymenttypetextbox" size="30"/>

<br>
<!--name attribute allows me to connect this button to php coding later on-->
<input type="submit" name="Submit" id="addmember" value="SUBMIT"/>

</form>
</HTML>

<script>
function validateform()
{
	if(document.forms["subscription"]["membernametextbox"].value=="")
	{
		document.forms["subscription"]["membernametextbox"].style.borderColor="red";
		return false;
	}
	else
	{
		document.forms["subscription"]["membernametextbox"].style.borderColor="black";
	}
}


</script>

<?php
if($_POST['SUBMIT'])
{
 $wpdb;
 $membername=$_POST['membernametextbox'];
 $phone=$_POST['phonetextbox'];
 $email=$_POST['emailtextbox'];
 $date=$_POST['datetextbox'];
 $paymenttype=$_POST['paymenttypetextbox'];
 
 if ($wpdb->insert('newmember', array('membername'=>$membername,'phone'=>$phone,'email'=>$email))==false)wp_die('Database is down try again later!');
 
 else
	 /* get_var method returns a single value whereas get_results method returns an array */
	 $membernumber=$wpdb->get_var("Select max(membernumber) from newmember");
	 
	 $wpdb->insert('subscription',array('date'=>$date,'paymenttype'=>$paymenttype,'membernumber'=>$membernumber));
	 
	 echo '<br><br> Data inserted succesfully!';
}
get_footer();
?>

 



