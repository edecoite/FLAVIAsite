<?php
/**
 * Single Service Template
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); 
    $service_icon = get_post_meta(get_the_ID(), '_flavia_service_icon', true);
    $service_features = get_post_meta(get_the_ID(), '_flavia_service_features', true);
    $service_price = get_post_meta(get_the_ID(), '_flavia_service_price', true);
    $service_duration = get_post_meta(get_the_ID(), '_flavia_service_duration', true);
?>

<!-- Service Hero Section -->
<div class="et_pb_section service-hero-section" style="background: linear-gradient(135deg, #f9fafb, #fdf2f8); padding: 4rem 0;">
    <div class="et_pb_row">
        <div class="et_pb_column et_pb_column_1_2">
            <div class="service-hero-content">
                <span class="professional-badge">Therapy Service</span>
                
                <h1 class="service-title" style="font-size: 3rem; color: #374151; margin-bottom: 1rem;">
                    <?php the_title(); ?>
                </h1>
                
                <div class="service-excerpt" style="font-size: 1.25rem; color: #6b7280; margin-bottom: 2rem;">
                    <?php the_excerpt(); ?>
                </div>
                
                <div class="service-details-header" style="display: flex; gap: 2rem; margin-bottom: 2rem;">
                    <?php if ($service_price) : ?>
                        <div class="service-price-info">
                            <span style="color: #9ca3af; font-size: 0.875rem;">Session Price</span>
                            <div style="color: var(--gold-primary); font-size: 1.5rem; font-weight: 700;">
                                <?php echo esc_html($service_price); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($service_duration) : ?>
                        <div class="service-duration-info">
                            <span style="color: #9ca3af; font-size: 0.875rem;">Duration</span>
                            <div style="color: #374151; font-size: 1.5rem; font-weight: 700;">
                                <?php echo esc_html($service_duration); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="service-cta-buttons" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="<?php echo home_url('#contact'); ?>" class="btn-primary-gold">
                        Schedule Consultation
                    </a>
                    <a href="tel:<?php echo esc_attr(get_theme_mod('flavia_phone', '(925) 354-6444')); ?>" class="btn-secondary-gold">
                        Call Now
                    </a>
                </div>
            </div>
        </div>
        
        <div class="et_pb_column et_pb_column_1_2">
            <div class="service-hero-visual" style="text-align: center; padding: 2rem;">
                <div class="service-icon-large" style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary)); border-radius: 2rem; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; font-size: 3rem; color: white; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);">
                    <?php echo flavia_get_icon($service_icon); ?>
                </div>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="service-image" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto;')); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Service Content Section -->
<div class="et_pb_section service-content-section" style="padding: 4rem 0;">
    <div class="et_pb_row">
        <div class="et_pb_column et_pb_column_2_3">
            <div class="service-content">
                <h2 style="color: #374151; margin-bottom: 1.5rem; font-size: 2rem;">
                    About This <span class="gradient-text-pink-gold">Service</span>
                </h2>
                
                <div class="service-description" style="color: #6b7280; line-height: 1.8; margin-bottom: 2rem;">
                    <?php the_content(); ?>
                </div>
                
                <?php if ($service_features) : 
                    $feature_list = explode("\n", $service_features);
                    if (!empty(array_filter($feature_list))) :
                ?>
                <div class="service-features-section" style="background: linear-gradient(135deg, #fdf2f8, #ffffff); padding: 2rem; border-radius: 1rem; margin-bottom: 2rem; border: 1px solid rgba(230, 194, 0, 0.1);">
                    <h3 style="color: #374151; margin-bottom: 1.5rem; font-size: 1.5rem;">
                        What You'll Gain
                    </h3>
                    
                    <div class="service-features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                        <?php foreach ($feature_list as $feature) : 
                            $feature = trim($feature);
                            if ($feature) :
                        ?>
                            <div class="feature-item" style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem; background: white; border-radius: 0.5rem; border: 1px solid #f3f4f6;">
                                <div style="color: var(--gold-primary); font-size: 1.25rem;">✓</div>
                                <span style="color: #374151; font-weight: 500;"><?php echo esc_html($feature); ?></span>
                            </div>
                        <?php endif; endforeach; ?>
                    </div>
                </div>
                <?php endif; endif; ?>
                
                <!-- Therapeutic Approach for this Service -->
                <div class="service-approach-section" style="background: white; padding: 2rem; border-radius: 1rem; border: 1px solid #e5e7eb; margin-bottom: 2rem;">
                    <h3 style="color: #374151; margin-bottom: 1.5rem; font-size: 1.5rem;">
                        My Approach
                    </h3>
                    
                    <div class="approach-content" style="color: #6b7280; line-height: 1.7;">
                        <?php
                        // Custom approach content based on service type
                        $service_title = strtolower(get_the_title());
                        
                        if (strpos($service_title, 'couples') !== false) {
                            echo '<p>In couples therapy, I create a safe space where both partners can express themselves openly and honestly. Using evidence-based approaches like Emotionally Focused Therapy (EFT) and the Gottman Method, we work together to:</p>
                            <ul style="margin: 1rem 0; padding-left: 1.5rem;">
                                <li>Improve communication patterns and reduce conflict</li>
                                <li>Rebuild trust and emotional intimacy</li>
                                <li>Develop healthy coping strategies for relationship challenges</li>
                                <li>Strengthen your bond and create lasting positive change</li>
                            </ul>';
                        } elseif (strpos($service_title, 'family') !== false) {
                            echo '<p>Family therapy focuses on improving family dynamics and relationships. I work with families to understand patterns of interaction and communication that may be causing distress. Together, we:</p>
                            <ul style="margin: 1rem 0; padding-left: 1.5rem;">
                                <li>Address family conflicts and improve communication</li>
                                <li>Navigate major life transitions and changes</li>
                                <li>Strengthen family bonds and relationships</li>
                                <li>Develop healthy boundaries and coping strategies</li>
                            </ul>';
                        } else {
                            echo '<p>In individual therapy, I provide a supportive, non-judgmental environment where you can explore your thoughts, feelings, and experiences. Using person-centered and cognitive-behavioral approaches, we work together to:</p>
                            <ul style="margin: 1rem 0; padding-left: 1.5rem;">
                                <li>Identify and address patterns that may be holding you back</li>
                                <li>Develop healthy coping strategies and life skills</li>
                                <li>Process past experiences and trauma</li>
                                <li>Build self-awareness and emotional resilience</li>
                            </ul>';
                        }
                        ?>
                        <p style="margin-top: 1rem;">Every individual and situation is unique, so I tailor my approach to meet your specific needs and goals.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="et_pb_column et_pb_column_1_3">
            <aside class="service-sidebar" style="padding-left: 2rem;">
                
                <!-- Booking Widget -->
                <div class="sidebar-widget" style="background: linear-gradient(135deg, var(--pink-light), var(--gold-primary)); padding: 2rem; border-radius: 1rem; margin-bottom: 2rem; color: white; text-align: center;">
                    <h3 style="color: white; margin-bottom: 1rem;">Ready to Get Started?</h3>
                    <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 1.5rem;">
                        Schedule your consultation today and take the first step toward positive change.
                    </p>
                    <a href="<?php echo home_url('#contact'); ?>" style="background: white; color: var(--gold-primary); padding: 0.75rem 1.5rem; border-radius: 2rem; text-decoration: none; font-weight: 600; display: inline-block; margin-bottom: 1rem;">
                        Schedule Consultation
                    </a>
                    <div style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem;">
                        Or call: <a href="tel:<?php echo esc_attr(get_theme_mod('flavia_phone')); ?>" style="color: white; font-weight: 600;">
                            <?php echo esc_html(get_theme_mod('flavia_phone', '(925) 354-6444')); ?>
                        </a>
                    </div>
                </div>
                
                <!-- Service Details -->
                <div class="sidebar-widget" style="background: white; padding: 1.5rem; border-radius: 1rem; margin-bottom: 2rem; border: 1px solid #e5e7eb;">
                    <h3 style="color: #374151; margin-bottom: 1rem;">Service Details</h3>
                    
                    <div class="service-detail-item" style="display: flex; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px solid #f3f4f6;">
                        <span style="color: #6b7280;">Session Length:</span>
                        <span style="color: #374151; font-weight: 500;">
                            <?php echo $service_duration ? esc_html($service_duration) : '50 minutes'; ?>
                        </span>
                    </div>
                    
                    <div class="service-detail-item" style="display: flex; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px solid #f3f4f6;">
                        <span style="color: #6b7280;">Session Fee:</span>
                        <span style="color: #374151; font-weight: 500;">
                            <?php echo $service_price ? esc_html($service_price) : 'Contact for pricing'; ?>
                        </span>
                    </div>
                    
                    <div class="service-detail-item" style="display: flex; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px solid #f3f4f6;">
                        <span style="color: #6b7280;">Location:</span>
                        <span style="color: #374151; font-weight: 500;">
                            <?php echo esc_html(get_theme_mod('flavia_address', 'Danville, CA')); ?>
                        </span>
                    </div>
                    
                    <div class="service-detail-item" style="display: flex; justify-content: space-between; padding: 0.75rem 0;">
                        <span style="color: #6b7280;">Format:</span>
                        <span style="color: #374151; font-weight: 500;">In-Person & Telehealth</span>
                    </div>
                </div>
                
                <!-- Other Services -->
                <?php
                $other_services = get_posts(array(
                    'post_type' => 'flavia_services',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'exclude' => array(get_the_ID())
                ));
                
                if ($other_services) :
                ?>
                <div class="sidebar-widget" style="background: white; padding: 1.5rem; border-radius: 1rem; margin-bottom: 2rem; border: 1px solid #e5e7eb;">
                    <h3 style="color: #374151; margin-bottom: 1rem;">Other Services</h3>
                    
                    <?php foreach ($other_services as $other_service) : 
                        $other_icon = get_post_meta($other_service->ID, '_flavia_service_icon', true);
                    ?>
                        <div class="other-service-item" style="display: flex; align-items: center; gap: 1rem; padding: 0.75rem 0; border-bottom: 1px solid #f3f4f6;">
                            <div style="width: 2.5rem; height: 2.5rem; background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary)); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 1rem; flex-shrink: 0;">
                                <?php echo flavia_get_icon($other_icon); ?>
                            </div>
                            <div style="flex: 1;">
                                <a href="<?php echo get_permalink($other_service->ID); ?>" style="color: #374151; text-decoration: none; font-weight: 500; line-height: 1.3;">
                                    <?php echo get_the_title($other_service->ID); ?>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    <div style="text-align: center; margin-top: 1rem;">
                        <a href="<?php echo home_url('#services'); ?>" style="color: var(--gold-primary); text-decoration: none; font-weight: 500; font-size: 0.875rem;">
                            View All Services →
                        </a>
                    </div>
                </div>
                <?php endif; ?>
                
                <!-- Testimonials for this service -->
                <?php
                $service_testimonials = get_posts(array(
                    'post_type' => 'flavia_testimonials',
                    'posts_per_page' => 2,
                    'meta_query' => array(
                        array(
                            'key' => '_flavia_service_type',
                            'value' => get_the_title(),
                            'compare' => 'LIKE'
                        )
                    )
                ));
                
                if ($service_testimonials) :
                ?>
                <div class="sidebar-widget" style="background: linear-gradient(135deg, #fdf2f8, #ffffff); padding: 1.5rem; border-radius: 1rem; margin-bottom: 2rem; border: 1px solid rgba(230, 194, 0, 0.1);">
                    <h3 style="color: #374151; margin-bottom: 1rem;">What Clients Say</h3>
                    
                    <?php foreach ($service_testimonials as $testimonial) : 
                        $client_name = get_post_meta($testimonial->ID, '_flavia_client_name', true);
                        $rating = get_post_meta($testimonial->ID, '_flavia_client_rating', true);
                    ?>
                        <div class="sidebar-testimonial" style="margin-bottom: 1.5rem; padding: 1rem; background: white; border-radius: 0.5rem; border: 1px solid #f3f4f6;">
                            <div style="color: #fbbf24; margin-bottom: 0.5rem;">
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                    <?php echo $i <= $rating ? '★' : '☆'; ?>
                                <?php endfor; ?>
                            </div>
                            <blockquote style="color: #6b7280; font-size: 0.875rem; margin-bottom: 0.5rem; font-style: italic;">
                                "<?php echo wp_trim_words(get_the_content($testimonial->ID), 15); ?>"
                            </blockquote>
                            <cite style="color: #374151; font-size: 0.8rem; font-weight: 500;">
                                — <?php echo esc_html($client_name); ?>
                            </cite>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                
            </aside>
        </div>
    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>

<style>
@media (max-width: 980px) {
    .service-sidebar {
        padding-left: 0;
        margin-top: 2rem;
    }
    
    .service-title {
        font-size: 2.5rem !important;
    }
    
    .service-details-header {
        flex-direction: column !important;
        gap: 1rem !important;
    }
}

@media (max-width: 768px) {
    .service-title {
        font-size: 2rem !important;
    }
    
    .service-cta-buttons {
        flex-direction: column !important;
    }
    
    .service-features-grid {
        grid-template-columns: 1fr !important;
    }
}
</style>