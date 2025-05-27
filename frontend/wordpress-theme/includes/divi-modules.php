<?php
/**
 * Premium DIVI Custom Modules for Flavia Therapy
 * 
 * @package FlaviaTherapy
 * @version 2.0.0
 */

// Include DIVI Builder
function flavia_initialize_extension() {
    require_once get_stylesheet_directory() . '/includes/modules/FlaviaBookingModule/FlaviaBookingModule.php';
    require_once get_stylesheet_directory() . '/includes/modules/FlaviaTestimonialsModule/FlaviaTestimonialsModule.php';
    require_once get_stylesheet_directory() . '/includes/modules/FlaviaServicesModule/FlaviaServicesModule.php';
}
add_action('divi_extensions_init', 'flavia_initialize_extension');

/**
 * Enhanced Booking Module for DIVI
 */
class FlaviaBookingModule extends ET_Builder_Module {
    public $slug       = 'flavia_booking';
    public $vb_support = 'on';

    protected $module_credits = array(
        'module_uri' => 'https://flaviadecoitemft.com',
        'author'     => 'Flavia DeCoite Therapy',
        'author_uri' => 'https://flaviadecoitemft.com',
    );

    public function init() {
        $this->name = esc_html__('Flavia Booking Form', 'flavia-therapy');
        $this->icon_path = get_stylesheet_directory() . '/includes/modules/icons/booking.svg';
        
        $this->settings_modal_toggles = array(
            'general'  => array(
                'toggles' => array(
                    'main_content' => esc_html__('Content', 'flavia-therapy'),
                    'form_settings' => esc_html__('Form Settings', 'flavia-therapy'),
                ),
            ),
            'advanced' => array(
                'toggles' => array(
                    'form_styling' => esc_html__('Form Styling', 'flavia-therapy'),
                ),
            ),
        );
    }

    public function get_fields() {
        return array(
            'form_title' => array(
                'label'           => esc_html__('Form Title', 'flavia-therapy'),
                'type'            => 'text',
                'option_category' => 'basic_option',
                'description'     => esc_html__('Enter the form title.', 'flavia-therapy'),
                'default'         => 'Schedule Your Consultation',
                'toggle_slug'     => 'main_content',
            ),
            'form_subtitle' => array(
                'label'           => esc_html__('Form Subtitle', 'flavia-therapy'),
                'type'            => 'textarea',
                'option_category' => 'basic_option',
                'description'     => esc_html__('Enter the form subtitle.', 'flavia-therapy'),
                'default'         => 'Take the first step toward healing and growth.',
                'toggle_slug'     => 'main_content',
            ),
            'show_insurance_field' => array(
                'label'           => esc_html__('Show Insurance Field', 'flavia-therapy'),
                'type'            => 'yes_no_button',
                'option_category' => 'configuration',
                'options'         => array(
                    'off' => esc_html__('No', 'flavia-therapy'),
                    'on'  => esc_html__('Yes', 'flavia-therapy'),
                ),
                'default'         => 'on',
                'toggle_slug'     => 'form_settings',
            ),
            'simple_practice_integration' => array(
                'label'           => esc_html__('Simple Practice Integration', 'flavia-therapy'),
                'type'            => 'yes_no_button',
                'option_category' => 'configuration',
                'options'         => array(
                    'off' => esc_html__('Show Contact Modal', 'flavia-therapy'),
                    'on'  => esc_html__('Redirect to Simple Practice', 'flavia-therapy'),
                ),
                'default'         => 'off',
                'toggle_slug'     => 'form_settings',
            ),
        );
    }

    public function render($attrs, $content = null, $render_slug) {
        $form_title = $this->props['form_title'];
        $form_subtitle = $this->props['form_subtitle'];
        $show_insurance = $this->props['show_insurance_field'];
        $simple_practice = $this->props['simple_practice_integration'];
        
        $output = sprintf(
            '<div class="flavia-booking-module">
                <div class="flavia-booking-header">
                    <h3 class="flavia-booking-title">%1$s</h3>
                    <p class="flavia-booking-subtitle">%2$s</p>
                </div>
                
                <form class="flavia-enhanced-booking-form" data-simple-practice="%3$s">
                    <div class="form-row">
                        <div class="form-group half">
                            <label for="booking_first_name">First Name *</label>
                            <input type="text" id="booking_first_name" name="first_name" required>
                        </div>
                        <div class="form-group half">
                            <label for="booking_last_name">Last Name *</label>
                            <input type="text" id="booking_last_name" name="last_name" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group half">
                            <label for="booking_email">Email *</label>
                            <input type="email" id="booking_email" name="email" required>
                        </div>
                        <div class="form-group half">
                            <label for="booking_phone">Phone *</label>
                            <input type="tel" id="booking_phone" name="phone" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="booking_service">Service Type *</label>
                        <select id="booking_service" name="service" required>
                            <option value="">Select a service</option>
                            <option value="individual">Individual Therapy</option>
                            <option value="couples">Couples Therapy</option>
                            <option value="family">Family Counseling</option>
                            <option value="consultation">Free Consultation</option>
                        </select>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group half">
                            <label for="booking_preferred_contact">Preferred Contact Method</label>
                            <select id="booking_preferred_contact" name="preferred_contact">
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                                <option value="text">Text Message</option>
                            </select>
                        </div>
                        <div class="form-group half">
                            <label for="booking_preferred_time">Preferred Time</label>
                            <select id="booking_preferred_time" name="preferred_time">
                                <option value="">No preference</option>
                                <option value="morning">Morning (9AM-12PM)</option>
                                <option value="afternoon">Afternoon (12PM-4PM)</option>
                                <option value="evening">Evening (4PM-7PM)</option>
                            </select>
                        </div>
                    </div>
                    
                    %4$s
                    
                    <div class="form-group">
                        <label for="booking_referral">How did you hear about us?</label>
                        <select id="booking_referral" name="referral_source">
                            <option value="">Select source</option>
                            <option value="google">Google Search</option>
                            <option value="psychology_today">Psychology Today</option>
                            <option value="referral">Professional Referral</option>
                            <option value="friend">Friend/Family</option>
                            <option value="social_media">Social Media</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="booking_message">Tell me a bit about what brought you here (Optional)</label>
                        <textarea id="booking_message" name="message" rows="4" placeholder="Feel free to share what you\'re hoping to work on or any questions you have..."></textarea>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="consent" required>
                            <span class="checkmark"></span>
                            I understand that this form submission is not a guarantee of appointment availability and that all information shared is confidential and HIPAA compliant.
                        </label>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn-primary-gold booking-submit-btn">
                            <span class="btn-text">Request Appointment</span>
                            <span class="btn-loading" style="display: none;">Sending...</span>
                        </button>
                    </div>
                    
                    <div class="booking-footer-note">
                        <p><strong>Response Time:</strong> I typically respond within 24 hours. For urgent matters, please call <a href="tel:(925) 354-6444">(925) 354-6444</a></p>
                    </div>
                </form>
            </div>',
            esc_html($form_title),
            esc_html($form_subtitle),
            $simple_practice,
            $show_insurance === 'on' ? $this->get_insurance_field() : ''
        );

        return $output;
    }
    
    private function get_insurance_field() {
        return '
        <div class="form-group">
            <label for="booking_insurance">Insurance Provider (if applicable)</label>
            <select id="booking_insurance" name="insurance">
                <option value="">Select insurance or Self-Pay</option>
                <option value="self_pay">Self-Pay</option>
                <option value="aetna">Aetna</option>
                <option value="blue_cross">Blue Cross Blue Shield</option>
                <option value="cigna">Cigna</option>
                <option value="kaiser">Kaiser Permanente</option>
                <option value="united">United Healthcare</option>
                <option value="anthem">Anthem</option>
                <option value="other">Other (please specify in message)</option>
            </select>
        </div>';
    }
}

new FlaviaBookingModule;

/**
 * Advanced Testimonials Module
 */
class FlaviaTestimonialsModule extends ET_Builder_Module {
    public $slug       = 'flavia_testimonials';
    public $vb_support = 'on';

    public function init() {
        $this->name = esc_html__('Flavia Testimonials Slider', 'flavia-therapy');
        $this->icon_path = get_stylesheet_directory() . '/includes/modules/icons/testimonials.svg';
    }

    public function get_fields() {
        return array(
            'testimonial_style' => array(
                'label'           => esc_html__('Testimonial Style', 'flavia-therapy'),
                'type'            => 'select',
                'option_category' => 'layout',
                'options'         => array(
                    'slider'    => esc_html__('Slider', 'flavia-therapy'),
                    'grid'      => esc_html__('Grid', 'flavia-therapy'),
                    'masonry'   => esc_html__('Masonry', 'flavia-therapy'),
                ),
                'default'         => 'slider',
            ),
            'columns' => array(
                'label'           => esc_html__('Columns', 'flavia-therapy'),
                'type'            => 'range',
                'option_category' => 'layout',
                'range_settings'  => array(
                    'min'  => 1,
                    'max'  => 4,
                    'step' => 1,
                ),
                'default'         => '3',
                'show_if'         => array(
                    'testimonial_style' => array('grid', 'masonry'),
                ),
            ),
        );
    }

    public function render($attrs, $content = null, $render_slug) {
        $style = $this->props['testimonial_style'];
        $columns = $this->props['columns'];
        
        // Get testimonials from database
        $testimonials = get_posts(array(
            'post_type' => 'flavia_testimonials',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'meta_key' => '_flavia_display_order',
            'orderby' => 'meta_value_num',
            'order' => 'ASC'
        ));

        if (empty($testimonials)) {
            return '<p>No testimonials found.</p>';
        }

        $output = '<div class="flavia-testimonials-module testimonials-' . esc_attr($style) . '">';
        
        if ($style === 'slider') {
            $output .= '<div class="testimonials-slider" data-columns="' . esc_attr($columns) . '">';
        } else {
            $output .= '<div class="testimonials-grid" style="grid-template-columns: repeat(' . esc_attr($columns) . ', 1fr);">';
        }

        foreach ($testimonials as $testimonial) {
            $client_name = get_post_meta($testimonial->ID, '_flavia_client_name', true);
            $rating = get_post_meta($testimonial->ID, '_flavia_client_rating', true);
            $service_type = get_post_meta($testimonial->ID, '_flavia_service_type', true);
            
            $output .= '<div class="testimonial-slide">';
            $output .= '<div class="testimonial-card-premium">';
            
            // Stars
            $output .= '<div class="testimonial-stars">';
            for ($i = 1; $i <= 5; $i++) {
                $output .= $i <= $rating ? '<span class="star filled">★</span>' : '<span class="star">☆</span>';
            }
            $output .= '</div>';
            
            $output .= '<blockquote class="testimonial-content">' . get_the_content($testimonial->ID) . '</blockquote>';
            
            $output .= '<div class="testimonial-attribution">';
            $output .= '<cite class="client-name">' . esc_html($client_name) . '</cite>';
            if ($service_type) {
                $output .= '<span class="service-type">' . esc_html($service_type) . '</span>';
            }
            $output .= '</div>';
            
            $output .= '</div></div>';
        }

        $output .= '</div>';
        
        if ($style === 'slider') {
            $output .= '<div class="testimonials-controls">';
            $output .= '<button class="testimonial-prev">‹</button>';
            $output .= '<button class="testimonial-next">›</button>';
            $output .= '</div>';
        }
        
        $output .= '</div>';

        return $output;
    }
}

new FlaviaTestimonialsModule;

/**
 * Enhanced Services Module
 */
class FlaviaServicesModule extends ET_Builder_Module {
    public $slug       = 'flavia_services';
    public $vb_support = 'on';

    public function init() {
        $this->name = esc_html__('Flavia Services Grid', 'flavia-therapy');
        $this->icon_path = get_stylesheet_directory() . '/includes/modules/icons/services.svg';
    }

    public function get_fields() {
        return array(
            'services_layout' => array(
                'label'           => esc_html__('Layout Style', 'flavia-therapy'),
                'type'            => 'select',
                'option_category' => 'layout',
                'options'         => array(
                    'cards'     => esc_html__('Cards', 'flavia-therapy'),
                    'minimal'   => esc_html__('Minimal', 'flavia-therapy'),
                    'detailed'  => esc_html__('Detailed', 'flavia-therapy'),
                ),
                'default'         => 'cards',
            ),
            'show_pricing' => array(
                'label'           => esc_html__('Show Pricing', 'flavia-therapy'),
                'type'            => 'yes_no_button',
                'option_category' => 'configuration',
                'options'         => array(
                    'off' => esc_html__('No', 'flavia-therapy'),
                    'on'  => esc_html__('Yes', 'flavia-therapy'),
                ),
                'default'         => 'on',
            ),
            'show_features' => array(
                'label'           => esc_html__('Show Features List', 'flavia-therapy'),
                'type'            => 'yes_no_button',
                'option_category' => 'configuration',
                'options'         => array(
                    'off' => esc_html__('No', 'flavia-therapy'),
                    'on'  => esc_html__('Yes', 'flavia-therapy'),
                ),
                'default'         => 'on',
            ),
        );
    }

    public function render($attrs, $content = null, $render_slug) {
        $layout = $this->props['services_layout'];
        $show_pricing = $this->props['show_pricing'];
        $show_features = $this->props['show_features'];
        
        $services = get_posts(array(
            'post_type' => 'flavia_services',
            'posts_per_page' => -1,
            'post_status' => 'publish'
        ));

        if (empty($services)) {
            return '<p>No services found.</p>';
        }

        $output = '<div class="flavia-services-module services-layout-' . esc_attr($layout) . '">';
        $output .= '<div class="services-grid">';

        foreach ($services as $service) {
            $icon = get_post_meta($service->ID, '_flavia_service_icon', true);
            $features = get_post_meta($service->ID, '_flavia_service_features', true);
            $price = get_post_meta($service->ID, '_flavia_service_price', true);
            $duration = get_post_meta($service->ID, '_flavia_service_duration', true);
            
            $output .= '<div class="service-card-premium">';
            
            if ($layout === 'detailed' && has_post_thumbnail($service->ID)) {
                $output .= '<div class="service-image">';
                $output .= get_the_post_thumbnail($service->ID, 'service-card');
                $output .= '</div>';
            }
            
            $output .= '<div class="service-content">';
            
            $output .= '<div class="service-header">';
            $output .= '<div class="service-icon">' . flavia_get_icon($icon) . '</div>';
            $output .= '<h3 class="service-title">' . get_the_title($service->ID) . '</h3>';
            $output .= '</div>';
            
            $output .= '<div class="service-description">' . get_the_excerpt($service->ID) . '</div>';
            
            if ($show_features === 'on' && $features) {
                $feature_list = explode("\n", $features);
                $output .= '<ul class="service-features">';
                foreach ($feature_list as $feature) {
                    if (trim($feature)) {
                        $output .= '<li><span class="feature-check">✓</span>' . trim($feature) . '</li>';
                    }
                }
                $output .= '</ul>';
            }
            
            if ($show_pricing === 'on' && ($price || $duration)) {
                $output .= '<div class="service-pricing">';
                if ($price) $output .= '<span class="service-price">' . esc_html($price) . '</span>';
                if ($duration) $output .= '<span class="service-duration">' . esc_html($duration) . '</span>';
                $output .= '</div>';
            }
            
            $output .= '<div class="service-actions">';
            $output .= '<a href="' . get_permalink($service->ID) . '" class="btn-service-learn">Learn More</a>';
            $output .= '<a href="#contact" class="btn-service-book">Book Now</a>';
            $output .= '</div>';
            
            $output .= '</div></div>';
        }

        $output .= '</div></div>';

        return $output;
    }
}

new FlaviaServicesModule;

?>