<?php get_header();  ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php endwhile; endif; ?>

<?php
if( have_rows('slides') ):
   echo get_template_part("templates/block", 'slider');
endif;

if( get_field('orange_section_enable') ):
   echo get_template_part("templates/block", 'orange_section');
endif;
if( have_rows('boxes') ):
   echo get_template_part("templates/block", 'icon_boxes');
endif;
if(get_field('content_fields_title') || get_field('content_fields_text')):
   echo get_template_part("templates/block", 'content');
endif;
if( have_rows('tours_fields_tours') ):
   echo get_template_part("templates/block", 'tours');
endif;
?>				
	
<?php
if(get_field('testimonials')):
   echo get_template_part("templates/block", 'testimonials');
endif;
if(get_field('logos')):
   echo get_template_part("templates/block", 'logos');
endif;
?>
				
				

<?php get_footer(); ?>
