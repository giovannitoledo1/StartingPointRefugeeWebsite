<?php
/*Template Name:Example1Report*/
get_header();
?>

<html>

<div class="wrap">
<div id="primary" class="content-area">

<table border="1">
<!--TR means create a row in my table-->
<tr>
<!--TH means create a header-I would like to use my first row as headers -->
<th><center>ID</center></th>
<th><center>Member Name</center></th>
<th><center>Phone</center></th>
<th><center>Email</center></th>
</tr>

</html>

<?php
/*$wpdb is a built variable and this variable contains all database connectivity related info*/
global $wpdb;
/*We create variables in php by using the $ sign.*/
/*We do not need to speciffy a data type when creating a variable in php.*/
/*Get Results method returns an array*/
$result=$wpdb->get_results("Select *from newmember");

for($result as $print)
{
	?>
	<tr>
	<!--td means create a column in a row-->
	<td><center><?php echo $print->membernumber; ?></center></td>
	<td><center><?php echo $print->membername; ?></center></td>
	<td><center><?php echo $print->phone; ?></center></td>
	<td><center><?php echo $print->email; ?></center></td>
	<tr>
	<?php
}
?>
</table>
</div>
</div>
<?php get_footer(); ?>
	
