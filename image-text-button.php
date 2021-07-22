<?php
/**
 * Visie Groep Content Block
 *
 * @package      ClientName
 * @author       Randalph
 * @since        1.1.1
 * @license      GPL-2.0+
**/


// loop optie
if ( have_rows('content') ): 

	// Loop through rows.
    while ( have_rows('content') ): the_row(); 

        // Get sub field values.
        $header = get_sub_field('header');
        $image = get_sub_field('image');
        $text = get_sub_field('text');
		$positionImg = get_sub_field('positioni');
		$background = get_sub_field('color-class');
		$cropImage = get_sub_field('crop_image');
		$videoEmbed = get_sub_field('video_embed');		
		
$class = '';
if($cropImage) { $class .= " crop-image"; }

        ?>
			<div class= "<?php echo 'wp-block-media-text alignwide is-stacked-on-mobile'.$class.' has-media-on-the-'.$positionImg.' has-background-color background-color-'.$background ?>">
				<div class= wrap>
					
					<?php //if there's no video, load the picture, else load the embedded video. If both, the embedded video takes priority
						if (!empty($videoEmbed)){ ?>
							<div class="wp-block-media-text__media--video" tabindex="1">
								<?php the_sub_field('video_embed'); ?>
							</div>
							<?php }  else {?>	
								<figure class="wp-block-media-text__media"  >
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />	
								</figure>								
							<?php }?>
					<div class="wp-block-media-text__content">
						
						<?php 
						
						echo '<h2>' . esc_html( $header ) . '</h2>';
						echo $text; 
						
						?>
						<div class="wp-block-buttons">
					
						<?php
						if ( have_rows('buttons') ):

							// Loop through rows.
							while ( have_rows('buttons') ) : the_row();

							// Load sub field value.
								$link = get_sub_field('link');
								$button_text = get_sub_field('button_text'); 
									if (empty ($button_text)) 
										$button_text = $link->post_title;
										$button_link = get_the_permalink($link->ID);
										// Do something...      
										?> 
													
							<div class="wp-block-button">
								<a class="wp-block-button__link"  href="<?php echo ( $button_link ); ?>"><?php echo esc_html( $button_text )?></a>
							</div>						
						<?php
							endwhile;			
						endif;   						
						?>
						</div>
					</div>
				</div>
			</div>
	<?php 
	endwhile; 
endif; 
?>





