<?php 
	$benzer_hs_call_actions			= get_theme_mod('hide_show_call_actions','on'); 
	$benzer_cta_button_label		= get_theme_mod('call_action_button_label');
	$benzer_cta_button_link			= get_theme_mod('call_action_button_link');
	$benzer_cta_button_target		= get_theme_mod('call_action_button_target');
	$benzer_cta_btn_middle_text		= get_theme_mod('call_action_btn_middle_text');
	$benzer_cta_button2_icon		= get_theme_mod('call_action_button2_icon','fa-bell');
	$benzer_cta_button_label2		= get_theme_mod('call_action_button_label2');
	$benzer_cta_button_link2		= get_theme_mod('call_action_button_link2');
	$benzer_cta_button_title		= get_theme_mod('call_action_button_title');
	$benzer_cta_bg_setting			= get_theme_mod('call_action_background_setting',esc_url(get_template_directory_uri() .'/images/cta.jpg'));
	if($benzer_hs_call_actions == 'on') :
?>

<section id="cta-unique" class="call-to-action-seven wow fadeInDown">
    <div class="background-overlay">
        <div class="container">
            <div class="row flexing flexing-start">                
                <div class="col-md-6 padding-top-25 padding-bottom-25 cta-img-overlay">
                	<?php 
						$benzer_aboutusquery1 = new wp_query('page_id='.get_theme_mod('call_action_page',true)); 
						if( $benzer_aboutusquery1->have_posts() ) 
						{   while( $benzer_aboutusquery1->have_posts() ) { $benzer_aboutusquery1->the_post(); 
					?>
                    <h2 class="demo1"> <?php the_title(); ?> </h2>
                    <?php the_content(); ?>

					<?php } } wp_reset_postdata(); ?>
					<div class="cta-bg">
            			<div style="background-image:url('<?php echo esc_url($benzer_cta_bg_setting); ?>'); background-attachment: fixed;">
            			</div>
            		</div>
            	</div>
				
				<div class="col-md-6 flexing flexing-btn">
					<?php if(!empty($benzer_cta_button2_icon) || !empty($benzer_cta_button_title) || !empty($benzer_cta_button_label2)): ?>
						<div class="call-wrapper call-wrapper1">
							<?php if(!empty($benzer_cta_button2_icon)): ?>
								<div class="call-icon-box"><i class="fa <?php echo esc_attr($benzer_cta_button2_icon); ?>"></i></div>
							<?php endif; ?>	
							<div class="cta-info">
								<?php if(!empty($benzer_cta_button_title)): ?>
									<div class="call-title"><?php echo wp_kses_post($benzer_cta_button_title); ?></div>
								<?php endif; ?>
								<?php if(!empty($benzer_cta_button_label2)): ?>
									<div class="call-phone"><a href="<?php echo esc_url($benzer_cta_button_link2); ?>"><?php echo wp_kses_post($benzer_cta_button_label2); ?></a></div>
								<?php endif; ?>		
							</div>
						</div>
					<?php endif; ?>
					
					<?php if(!empty($benzer_cta_btn_middle_text)): ?>
						<span class="cta-or"><?php echo wp_kses_post($benzer_cta_btn_middle_text); ?></span>
					<?php endif; ?>
					
					<?php if($benzer_cta_button_label) :?>
						<a href="<?php echo esc_url($benzer_cta_button_link); ?>" <?php if(($benzer_cta_button_target)== 1){ echo "target='_blank'"; } ?> class="bt-primary bt-effect-2 call-btn-1"><?php echo esc_html($benzer_cta_button_label); ?></a>
					<?php endif; ?>
                </div>				
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php endif; ?>
