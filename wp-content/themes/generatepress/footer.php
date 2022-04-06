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

<?php include_once 'book.php'; ?>

<?php // should be 1st ?>
<script src="/wp-content/themes/khl/js/jquery-3.6.0.min.js"></script>

<script src="/wp-content/themes/khl/js/jquery-ui.min.js"></script>
<script src="/wp-content/themes/khl/js/popup.js"></script>
<script src="/wp-content/themes/khl/js/priceTotal.js"></script>
<script src="/wp-content/themes/khl/js/rentalDays.js"></script>
<script src="/wp-content/themes/khl/js/sendmail.js"></script>

<?php // should be last ?>
<script src="/wp-content/themes/khl/js/custom.js?v<?php echo(date("YmdHi")); ?>"></script>

</body>
</html>
