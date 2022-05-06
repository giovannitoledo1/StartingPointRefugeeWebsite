<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<p style="font-size: 16px; text-align: center">
Thank you to the foundations, companies, and organizations that have supported our work in aiding refugee children from around the world!
</p>

<div class="image-container">
	<?php echo '<img src="StartingPointImages/project_linus_edited.jpg" style="width: 142px; height: 32;">' ?>
</div>

<div class="site-info" >
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'https://www.startingpointworld.com/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php
			/* translators: %s: WordPress */
		printf( __( '&#169;%s for Refugee Children', 'twentyseventeen' ), 'Starting Point' );
		echo "<br>";
		printf( __( '%s for Refugee Children | Sacramento, CA', 'twentyseventeen' ), 'Starting Point' );
		?>
	</a>
	<button type="button">Contact Us</button>
	<a href="https://www.facebook.com/startingpointforrefugeechildren"><img src="StartingPointImages/facebook.png"></a>
	<a href="https://www.instagram.com/startingpointsac/"><img src="StartingPointImages/instagram.png"></a>
</div><!-- .site-info -->

<style>
	* {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	.site-info {
		background-color: lightgray;
		width: 100%;
		height: 12vh;
		display: flex;
		margin-right: 30px;
		padding-left: 30px;
		padding-right: 30px;
		padding-top: 30px;
	}
	button {
		background-color: lightgray;
		border: 5px solid white;
		margin-left: 150px;
		padding-left: 0px;
		padding-right: 0px;
		padding-bottom: 30px;
		height: 60px;
		width: 130px;
	}
	img {
		padding-left: 70px;
		height: 35px;
		width: 35px;
	}
</style>
