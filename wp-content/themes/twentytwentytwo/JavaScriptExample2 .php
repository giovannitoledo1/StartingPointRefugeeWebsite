<?php

/*Template Name:JavaScriptExample2 */

get_header();

?>

<HTML>
<!--In php file all textboxes, checboxes, radiobuttons... must be inside a form -->
<form action="" method="post" id="subscription" onsubmit="return validateform()">

<label>Member Name test: </label> <input type="text" name="membernametextbox" size="30"/>

<label>Phone: </label> <input type="text" name="phonetextbox" size="30"/>

<label>Email: </label> <input type="text" name="emailtextbox" size="30"/>

<label>Date: </label> <input type="text" name="datetextbox" size="30"/>

<label>Payment Type: </label> <input type="text" name="paymenttypetextbox" size="30"/>

<br>
<!--name attribute allows me to connect this button to php coding later on-->
<input type="submit" name="Submit" value="SUBMIT"/>

</form>
</HTML>

<script>
function validateform()
{
	var errormessage="";
	if(document.forms["subscription"]["membernametextbox"].value=="")
	{
		errormessage+="Missing Name\n";
		document.forms["subscription"]["membernametextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["subscription"]["membernametextbox"].style.borderColor="black";
	}
	
	if(document.forms["subscription"]["phonetextbox"].value=="")
	{
		errormessage+="Missing Phone Number\n";
		document.forms["subscription"]["phonetextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["subscription"]["phonetextbox"].style.borderColor="black";
	}
	if(document.forms["subscription"]["emailtextbox"].value=="")
	{
		errormessage+="Missing Email Address\n";
		document.forms["subscription"]["emailtextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["subscription"]["emailtextbox"].style.borderColor="black";
	}
	var correctphonenumber=/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
	
	if(!document.forms["subscription"]["phonetextbox"].value.match(correctphonenumber))
	{
		errormessage+="Proper Phone Number Syntax:123-456-7890\n";
	}
	var correctemail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(!document.forms["subscription"]["emailtextbox"].value.match(correctemail))
	{
		errormessage+="Incorrect Email Address";
	}
	
	if(errormessage!="")
	{
		alert(errormessage);
		return false;
	}
}


</script>

<?php
if($_POST['Submit'])
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

 



