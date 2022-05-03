<?php the_content(); 

/*Template Name: SPRequestHelpForm */
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Help</title>
    <!-- <link rel="stylesheet" href="assets/css/RequestHelpForm.css" type="text/css"> -->
    <style> <?php include 'assets/css/RequestHelpForm.css'; ?> </style>
</head>
<body>
    <p style="text-align: center; max-width: 600px; margin-left: 300px;" align="center" > 
    If you are a newcomer and your children need basic necessities, please complete the form below.  
    We will contact you soon with more information about becoming a Starting Point family.
    </p>

    <form class="request-help-form" action="" method="post" id="contact" onsubmit="">
        <label for="first-name"> First Name: </label> <input type="text" id="first-name" name="firstNameTextbox" size="15" />
        <label for="last-name"> Last Name: </label> <input type="text" id="last-name" name="lastNameTextbox"size="15" />
        <label> Address: </label> <input type="text" name="addressTextbox" size="15" />
        <label> Phone: </label> <input type="tel" name="phoneTextbox" size="15" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
        <label> Country of Origin: </label> <input type="text" name="countryTextbox1" size="15" />
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
        <p> Do you speak english?: </p> 
        <div class="radio-div">
        <label class="radio-label">Yes<input type="radio" id="yes" name="speak_english" value="yes" size="5"></label>
        <label class="radio-label">No<input type="radio" id="no" name="speak_english" value="no" size="5"></label>
        </div>
        <br><br>
        <div class="child-info-div">
            <input name="childNameTextbox" type="text" class="child_info" size="15" placeholder="Name of Child"/>
            <input name="childAgeTextbox" type="number" class="child_info" size="15" placeholder="Age of Child"/>
            <input name="childGenderTextbox" type="text" class="child_info" size="15" placeholder="Gender of Child"/>
        </div>
        
        <div class="change-fields">
        <a href="#" id="add_more_fields" name="add_more_fields">Add Another Child</a>
        &emsp;
        <a href="#" id="remove_fields" name="remove_more_fields">Remove Child</a>
        </div>
        <div id="children"></div>
        <br>
        <input type="submit" name="submit" value="SUBMIT"/> 
    </form>
    
    <!-- <script type="text/javascript" src="assets/js/RequestHelpForm.js"></script> -->
    <script> <?php include 'assets/js/RequestHelpForm.js'; ?> </script>
</body>
</html>

<!-- <?php
if($_POST['submit'])
{
    $wpdb;
    $firstname=$_POST['firstNameTextbox'];
    $lastname=$_POST['lastNameTextbox'];
    $address =$_POST['addressTextbox'];
    $phone=$_POST['phoneTextbox'];
    $country=$_POST['countryTextbox'];
    $arivaldate=$_POST['arivalDateTextbox'];
    $status=$_POST['statusTextbox'];
    $childname=$_POST['childNameTextbox'];
    $childage=$_POST['childAgeTextbox'];
    $childgender=$_POST['childGenderTextbox'];
    $toEmail = "alexlux@live.com";
	$mailHeaders = "From: " . $firstname . $lastname . "<". $country .">\r\n";
	if(mail($toEmail, $status, $arivaldate, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
    if ($wpdb->insert('parentInfo', array('firstname'=>$firstname, 'lastname'=>$lastname, 'address'=>$address,
                        'phone'=>$phone, 'country'=>$country, 'arivaldate'=>$arivaldate, 'status'=>$status)) == false) wp_die('Database is down try again later');
    else
        $parentid=$wpdb->get_var("Select max(parentid) from parentInfo");
        $wpdb->insert('childInfo', array('childname'=>$childname, 'childage'=>$childage, 'childgender'=>$childgender, 'parentid'=>$parentid));
        echo '<br><br> CONTACT FORM SUBMITTED';
}
get_footer();
?> -->