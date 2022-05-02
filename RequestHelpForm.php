<?php the_content(); 

/*Template Name: SPRequestHelpForm */
get_header();
?>

<HTML>

<p> 
If you are a newcomer and your children need basic necessities, please complete the form below.  
We will contact you soon with more information about becoming a Starting Point family.
</p>

<form action="" method="post" id="contact" onsubmit="" style="text-align: center;">

<label> First Name: </label> <input type="text" name="firstNameTextbox" size="15" />
<label> Last Name: </label> <input type="text" name="lastNameTextbox"size="15" />
<label> Address: </label> <input type="text" name="addressTextbox" size="15" />
<label> Phone: </label> <input type="tel" name="phoneTextbox" size="15" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
<label> Country of Origin: </label> <input type="text" name="countryTextbox" size="15" />
<label> Country of Origin: </label> <input list="country" name="countryTextbox" size="15" />
<datalist id="country">
    <option value="Afghanistan">
    <option value="Ukrain">
    <option value="Mexico">
</datalist>
<label> Arrival Date to Sacramento: </label> <input type="date" name="arivalDateTextbox" size="15" />
<label> Immigration Status: </label> <input list="status" name="statusTextbox" size="15" >
<datalist id="status">
    <option value="SIV">
    <option value="evacuee">
    <option value="parolee">
    <option value="asylee">
    <option value="diversity visa">
</datalist>
<label> Do you speak english?: </label> 
<input type="checkbox" id="yes" name="arivalDateTextbox" size="15" checked/>
<label for="yes">Yes</label>
<input type="checkbox" id="no" name="arivalDateTextbox" size="15" checked/>
<label for="no">No</label>

<div class="child_info">
    <input type="text" class="child_info" size="15" placeholder="Name of Child"/>
    <input type="number" class="child_info" size="15" placeholder="Age of Child"/>
    <input type="text" class="child_info" size="15" placeholder="Gender of Child"/>
</div>
<div class="controls">
    <a href="#" id="add_more_fields">Add Another Child</a>
    <a href="#" id="remove_fields">Remove Child</a>
</div>

<script type="text/javascript">
var child_info = document.getElementById('child_info');
var add_more_fields = document.getElementById('add_more_fields');
var remove_fields = document.getElementById('remove_fields');

add_more_fields.onclick = function(){
  var nameField = document.createElement('input');
  nameField.setAttribute('type','text');
  nameField.setAttribute('class','child_info');
  nameField.setAttribute('size',15);
  nameField.setAttribute('placeholder','Name of Child');
  child_info.appendChild(nameField);
  var ageField = document.createElement('input');
  ageField.setAttribute('type','number');
  ageField.setAttribute('class','child_info');
  ageField.setAttribute('size',15);
  ageField.setAttribute('placeholder','Age of Child');
  child_info.appendChild(ageField);
  var genderField = document.createElement('input');
  genderField.setAttribute('type','text');
  genderField.setAttribute('class','child_info');
  genderField.setAttribute('size',15);
  genderField.setAttribute('placeholder','Gender of Child');
  child_info.appendChild(genderField);
}

remove_fields.onclick = function(){
  var input_tags = survey_options.getElementsByTagName('input');
  if(input_tags.length > 2) {
    survey_options.removeChild(input_tags[(input_tags.length) - 1]);
  }
}
</script>

<style>
 form {
        padding-left: 700px;
        padding-right: 700px;
    }
    label {
        text-align: left;
        padding-top: 15px;
    }
</style>

<br>

<input type="submit" name="submit" value="SUBMIT"/>

</form>

</HTML>

<?php

if($_POST['submit'])
{
    $wpdb;
    $firstname=$_POST['firstNameTextbox'];
    $lastname=$_POST['lastNameTextbox'];
    $phone=$_POST['phoneTextbox'];
    $email=$_POST['emailTextbox'];
    $date=$_POST['dateTextbox'];
    $inquiry=$_POST['inquiryTextbox'];

    $toEmail = "alexlux@live.com";
	$mailHeaders = "From: " . $firstname . $lastname . "<". $email .">\r\n";
	if(mail($toEmail, $date, $inquiry, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}

    if ($wpdb->insert('contactInfo', array('firstname'=>$firstname, 'lastname'=>$lastname, 'phone'=>$phone, 'email'=>$email)) == false) wp_die('Database is down try again later');
    else
        $contactid=$wpdb->get_var("Select max(contactid) from contactInfo");
        $wpdb->insert('contactInquiry', array('date'=>$date, 'inquiry'=>$inquiry, 'contactid'=>$contactid));
        echo '<br><br> CONTACT FORM SUBMITTED';

}

get_footer();
?>