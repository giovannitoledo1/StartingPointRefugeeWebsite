<?php

/*Template Name:JavascriptExample3 */

get_header();

?>

<HTML>

<form action="" method="post" id="javascriptexample3form" onsubmit="return validation()">

<label>SKU:</label><input type="text" name="skutextbox" size="30"/>

<label>Quantity:</label><input type="text" name="quantitytextbox" size="30"/>

<label>Price:</label><input type="text" name="pricetextbox" size="30"/>

<label>Extended Price</label><input type="text" name="extendedpricetextbox" size="30"/>

<br>
<input type="submit" name="Submit" value="SUBMIT"/>

</form>

</HTML>

<script type="text/javascript">

function validation()
{
	var errormessage="";
	
	if(document.forms["javascriptexample3form"]["skutextbox"].value=="")
	{
		errormessage+="Missing SKU Number\n";
		document.forms["javascriptexample3form"]["skutextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["javascriptexample3form"]["skutextbox"].style.borderColor="black";
	}
	
	if(document.forms["javascriptexample3form"]["quantitytextbox"].value=="")
	{
		errormessage+="Missing Quantity\n";
		document.forms["javascriptexample3form"]["quantitytextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["javascriptexample3form"]["quantitytextbox"].style.borderColor="black";
	}
	
	if(document.forms["javascriptexample3form"]["pricetextbox"].value=="")
	{
		errormessage+="Missing Price\n";
		document.forms["javascriptexample3form"]["pricetextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["javascriptexample3form"]["pricetextbox"].style.borderColor="black";
	}
	
	if(document.forms["javascriptexample3form"]["extendedpricetextbox"].value=="")
	{
		errormessage+="Missing Extended Price\n";
		document.forms["javascriptexample3form"]["extendedpricetextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["javascriptexample3form"]["extendedpricetextbox"].style.borderColor="black";
	}
	
	
	if(!parseInt(document.forms["javascriptexample3form"]["skutextbox"].value))
	{
		errormessage+="Enter a number for SKU\n";
	}
	
	if(!parseInt(document.forms["javascriptexample3form"]["quantitytextbox"].value))
	{
		errormessage+="Enter a number for Quantity\n";
	}
	
	if(!parseInt(document.forms["javascriptexample3form"]["pricetextbox"].value))
	{
		errormessage+="Enter a number for Price\n";
	}
	
	if(!parseInt(document.forms["javascriptexample3form"]["extendedpricetextbox"].value))
	{
		errormessage+="Enter a number for Extended Price\n";
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

/* $ sign represents a varaiable. We do not need to specify data types when creating variables in php */
	$wpdb;
	$sku=$_POST['skutextbox'];
	$quantity=$_POST['quantitytextbox'];
	$price=$_POST['pricetextbox'];
	$extendedprice=$_POST['extendedpricetextbox'];

if($wpdb->insert('order_item',array('sku'=>$sku,'quantity'=>$quantity,'price'=>$price,'extendedprice'=>$extendedprice))==false)wp_die('Database Insertion Failed');

else


/* Echo means we print something on the screen. Similar to print commamnd in java */

echo '<br><br> Database Insertion Succesful'; 

}
get_footer();
?>