<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>

	</div>
</div>

<?php /**
 * generate_before_footer hook.
 *
 * @since 0.1
 */
do_action( 'generate_before_footer' ); ?>

<div <?php generate_do_element_classes( 'footer' ); ?>>
	<?php
	/**
	 * generate_before_footer_content hook.
	 *
	 * @since 0.1
	 */
	do_action( 'generate_before_footer_content' );

	/**
	 * generate_footer hook.
	 *
	 * @since 1.3.42
	 *
	 * @hooked generate_construct_footer_widgets - 5
	 * @hooked generate_construct_footer - 10
	 */
	do_action( 'generate_footer' );

	/**
	 * generate_after_footer_content hook.
	 *
	 * @since 0.1
	 */
	do_action( 'generate_after_footer_content' ); ?>
</div>

<?php
/**
 * generate_after_footer hook.
 *
 * @since 2.1
 */
do_action( 'generate_after_footer' );

wp_footer(); ?>

<!--<script src="//code-ya.jivosite.com/widget/lgCYMdLgiq" async></script>-->

<div class="js-popup popup">
	<div class="popup__bg js-popup-close"></div>

	<div class="popup__content">
		<div class="popup__close js-popup-close"></div>

		<div class="js-popup-content"></div>
	</div>
</div>

<?php include_once 'book.php'; ?>

<?php // vars
$themeFolderJs = '/wp-content/themes/khl/js'; ?>

<?php // should be 1st ?>
<script src="<?php echo $themeFolderJs; ?>/jquery-3.6.0.min.js"></script>

<script src="<?php echo $themeFolderJs; ?>/jquery-ui.min.js"></script>
<script src="<?php echo $themeFolderJs; ?>/getUrlParameter.js"></script>
<script src="<?php echo $themeFolderJs; ?>/popup.js"></script>
<script src="<?php echo $themeFolderJs; ?>/priceTotal.js"></script>
<script src="<?php echo $themeFolderJs; ?>/rentPromo.js"></script>
<script src="<?php echo $themeFolderJs; ?>/rentalDays.js"></script>
<script src="<?php echo $themeFolderJs; ?>/sendmail.js"></script>

<?php // should be last ?>
<script src="<?php echo $themeFolderJs; ?>/custom.js?v<?php echo(date("YmdHi")); ?>"></script>

</body>
</html>
