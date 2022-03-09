		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Import demo','car-rental-booking-system'); ?></h5>
				<span class="to-legend">
					<?php esc_html_e('To import demo content, click on below button.','car-rental-booking-system'); ?><br/>
					<?php esc_html_e('You should run this function only once (the same content will be created when you run it once again).','car-rental-booking-system'); ?><br/>
					<?php esc_html_e('This operation takes a few minutes. This operation is not reversible.','car-rental-booking-system'); ?><br/>
				</span>
				<input type="button" name="<?php CRBSHelper::getFormName('import_dummy_content'); ?>" id="<?php CRBSHelper::getFormName('import_dummy_content'); ?>" class="to-button to-margin-0" value="<?php esc_attr_e('Import','car-rental-booking-system'); ?>"/>
			</li>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				$('#<?php CRBSHelper::getFormName('import_dummy_content'); ?>').bind('click',function(e) 
				{
					e.preventDefault();
					$('#action').val('<?php echo PLUGIN_CRBS_CONTEXT.'_option_page_import_demo'; ?>');
					$('#to_form').submit();
					$('#action').val('<?php echo PLUGIN_CRBS_CONTEXT.'_option_page_save'; ?>');
				});
			});
		</script>