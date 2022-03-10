			<div class="slider-container rev_slider_wrapper" style="height: 670px;">

					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">

						<ul>
						<?php while(have_rows('slides')): the_row();?>
							<li class="slide-overlay" data-transition="fade">

								<img src="<?php echo get_sub_field('image'); ?>"  

									alt=""

									data-bgposition="center center" 

									data-bgfit="cover" 

									data-bgrepeat="no-repeat" 

									class="rev-slidebg">


							<?php while(have_rows('layers')): the_row();?>
								
								<?php if(get_row_layout() == 'title'):?>
								<h1 class="<?php echo get_sub_field('class'); ?>"

									data-frames='<?php echo get_sub_field('frames'); ?>'

									data-x="center"

									data-y="center" data-voffset="<?php echo get_sub_field('voffset'); ?>"

									data-fontsize="<?php echo get_sub_field('fontsize'); ?>"

									data-lineheight="<?php echo get_sub_field('lineheight'); ?>"

									data-letterspacing="-1"><?php echo get_sub_field('text'); ?></h1>
								<?php endif;?>


								<?php if(get_row_layout() == 'text'):?>
								<div class="<?php echo get_sub_field('class'); ?>"

									data-frames='<?php echo get_sub_field('frames'); ?>'

									data-x="center"

									data-y="center" data-voffset="<?php echo get_sub_field('voffset'); ?>"
									 
									data-width="['530','530','530','1100']"

									data-fontsize="<?php echo get_sub_field('fontsize'); ?>"

									data-lineheight="<?php echo get_sub_field('lineheight'); ?>"><?php echo get_sub_field('text'); ?></div>
								<?php endif;?>

								<?php if(get_row_layout() == 'button'):?>
								<a class="<?php echo get_sub_field('class'); ?>"

									href="<?php echo get_sub_field('link'); ?>"

									data-frames='<?php echo get_sub_field('frames'); ?>'

									data-x="center"

									data-y="center" data-voffset="<?php echo get_sub_field('voffset'); ?>"

									data-paddingtop="<?php echo get_sub_field('paddingtop'); ?>"

									data-paddingbottom="<?php echo get_sub_field('paddingbottom'); ?>"

									data-paddingleft="<?php echo get_sub_field('paddingleft'); ?>"

									data-paddingright="<?php echo get_sub_field('paddingright'); ?>"

									data-fontsize="<?php echo get_sub_field('fontsize'); ?>"

									data-lineheight="<?php echo get_sub_field('lineheight'); ?>"><?php echo get_sub_field('text'); ?> <i class="fas fa-arrow-right ml-1"></i></a>
								<?php endif;?>

							<?php endwhile;?>
							</li>
						<?php endwhile;?>
						</ul>

					</div>

				</div>