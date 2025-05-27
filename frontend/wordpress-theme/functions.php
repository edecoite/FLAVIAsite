<?php
/**
 * Flavia DeCoite Therapy - DIVI Child Theme Functions
 * 
 * @package FlaviaTherapy
 * @version 2.0.0 - Premium Edition
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include advanced features
require_once get_stylesheet_directory() . '/inc/advanced-features.php';

/**
 * Theme Setup
 */
function flavia_therapy_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add support for wide and full width blocks
    add_theme_support('align-wide');
    
    // Add support for editor color palette
    add_theme_support('editor-color-palette', array(
        array(
            'name' => 'Gold Primary',
            'slug' => 'gold-primary',
            'color' => '#E6C200',
        ),
        array(
            'name' => 'Gold Secondary',
            'slug' => 'gold-secondary',
            'color' => '#FFD700',
        ),
        array(
            'name' => 'Pink Primary',
            'slug' => 'pink-primary',
            'color' => '#FFD8F0',
        ),
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'flavia-therapy'),
        'footer' => esc_html__('Footer Menu', 'flavia-therapy'),
        'social' => esc_html__('Social Media Menu', 'flavia-therapy'),
    ));
    
    // Add image sizes
    add_image_size('service-card', 400, 300, true);
    add_image_size('testimonial-avatar', 80, 80, true);
    add_image_size('blog-featured', 600, 400, true);
}
add_action('after_setup_theme', 'flavia_therapy_setup');

/**
 * Enqueue parent and child theme styles
 */
function flavia_therapy_enqueue_styles() {
    // Get parent theme version
    $parent_theme = wp_get_theme('Divi');
    $version = $parent_theme->get('Version');
    
    // Enqueue parent theme stylesheet
    wp_enqueue_style('divi-style', get_template_directory_uri() . '/style.css', array(), $version);
    
    // Enqueue child theme stylesheet
    wp_enqueue_style('flavia-child-style', 
        get_stylesheet_directory_uri() . '/style.css',
        array('divi-style'),
        wp_get_theme()->get('Version')
    );
    
    // Enqueue custom JavaScript
    wp_enqueue_script('flavia-custom-js',
        get_stylesheet_directory_uri() . '/js/custom.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('flavia-custom-js', 'flavia_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('flavia_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'flavia_therapy_enqueue_styles');

/**
 * Custom Post Types
 */
function flavia_register_post_types() {
    
    // Services Post Type
    register_post_type('flavia_services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'menu_name' => 'Therapy Services',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'new_item' => 'New Service',
            'view_item' => 'View Service',
            'search_items' => 'Search Services',
            'not_found' => 'No services found',
            'not_found_in_trash' => 'No services found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-heart',
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite' => array('slug' => 'services'),
        'show_in_rest' => true
    ));
    
    // Testimonials Post Type
    register_post_type('flavia_testimonials', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
            'menu_name' => 'Client Testimonials',
            'add_new' => 'Add New Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'new_item' => 'New Testimonial',
            'view_item' => 'View Testimonial',
            'search_items' => 'Search Testimonials',
            'not_found' => 'No testimonials found',
            'not_found_in_trash' => 'No testimonials found in trash'
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-format-quote',
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true
    ));
}
add_action('init', 'flavia_register_post_types');

/**
 * Custom Meta Boxes
 */
function flavia_add_meta_boxes() {
    
    // Service meta box
    add_meta_box(
        'flavia_service_details',
        'Service Details',
        'flavia_service_details_callback',
        'flavia_services',
        'normal',
        'high'
    );
    
    // Testimonial meta box
    add_meta_box(
        'flavia_testimonial_details',
        'Testimonial Details',
        'flavia_testimonial_details_callback',
        'flavia_testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'flavia_add_meta_boxes');

/**
 * Service Details Meta Box Callback
 */
function flavia_service_details_callback($post) {
    wp_nonce_field('flavia_service_nonce', 'flavia_service_nonce_field');
    
    $service_icon = get_post_meta($post->ID, '_flavia_service_icon', true);
    $service_features = get_post_meta($post->ID, '_flavia_service_features', true);
    $service_price = get_post_meta($post->ID, '_flavia_service_price', true);
    $service_duration = get_post_meta($post->ID, '_flavia_service_duration', true);
    ?>
    <table class="form-table">
        <tr>
            <th scope="row">Service Icon</th>
            <td>
                <select name="flavia_service_icon" style="width: 100%;">
                    <option value="heart" <?php selected($service_icon, 'heart'); ?>>Heart (Individual Therapy)</option>
                    <option value="users" <?php selected($service_icon, 'users'); ?>>Users (Couples Therapy)</option>
                    <option value="home" <?php selected($service_icon, 'home'); ?>>Home (Family Counseling)</option>
                    <option value="brain" <?php selected($service_icon, 'brain'); ?>>Brain (Cognitive Therapy)</option>
                    <option value="shield" <?php selected($service_icon, 'shield'); ?>>Shield (Trauma Therapy)</option>
                </select>
            </td>
        </tr>
        <tr>
            <th scope="row">Key Features</th>
            <td>
                <textarea name="flavia_service_features" rows="4" style="width: 100%;" placeholder="Enter each feature on a new line"><?php echo esc_textarea($service_features); ?></textarea>
                <p class="description">Enter each feature on a new line (e.g., "Communication Skills")</p>
            </td>
        </tr>
        <tr>
            <th scope="row">Session Price</th>
            <td>
                <input type="text" name="flavia_service_price" value="<?php echo esc_attr($service_price); ?>" placeholder="$150" />
            </td>
        </tr>
        <tr>
            <th scope="row">Session Duration</th>
            <td>
                <input type="text" name="flavia_service_duration" value="<?php echo esc_attr($service_duration); ?>" placeholder="50 minutes" />
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Testimonial Details Meta Box Callback
 */
function flavia_testimonial_details_callback($post) {
    wp_nonce_field('flavia_testimonial_nonce', 'flavia_testimonial_nonce_field');
    
    $client_name = get_post_meta($post->ID, '_flavia_client_name', true);
    $client_rating = get_post_meta($post->ID, '_flavia_client_rating', true);
    $service_type = get_post_meta($post->ID, '_flavia_service_type', true);
    $display_order = get_post_meta($post->ID, '_flavia_display_order', true);
    ?>
    <table class="form-table">
        <tr>
            <th scope="row">Client Name</th>
            <td>
                <input type="text" name="flavia_client_name" value="<?php echo esc_attr($client_name); ?>" style="width: 100%;" placeholder="Sarah M." />
                <p class="description">Use initials for privacy (e.g., "Sarah M.")</p>
            </td>
        </tr>
        <tr>
            <th scope="row">Rating</th>
            <td>
                <select name="flavia_client_rating">
                    <option value="5" <?php selected($client_rating, '5'); ?>>5 Stars</option>
                    <option value="4" <?php selected($client_rating, '4'); ?>>4 Stars</option>
                    <option value="3" <?php selected($client_rating, '3'); ?>>3 Stars</option>
                    <option value="2" <?php selected($client_rating, '2'); ?>>2 Stars</option>
                    <option value="1" <?php selected($client_rating, '1'); ?>>1 Star</option>
                </select>
            </td>
        </tr>
        <tr>
            <th scope="row">Service Type</th>
            <td>
                <select name="flavia_service_type">
                    <option value="Individual Therapy" <?php selected($service_type, 'Individual Therapy'); ?>>Individual Therapy</option>
                    <option value="Couples Therapy" <?php selected($service_type, 'Couples Therapy'); ?>>Couples Therapy</option>
                    <option value="Family Counseling" <?php selected($service_type, 'Family Counseling'); ?>>Family Counseling</option>
                </select>
            </td>
        </tr>
        <tr>
            <th scope="row">Display Order</th>
            <td>
                <input type="number" name="flavia_display_order" value="<?php echo esc_attr($display_order); ?>" min="1" max="100" />
                <p class="description">Lower numbers appear first</p>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Save Meta Box Data
 */
function flavia_save_meta_boxes($post_id) {
    // Check if it's an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save service meta
    if (isset($_POST['flavia_service_nonce_field']) && wp_verify_nonce($_POST['flavia_service_nonce_field'], 'flavia_service_nonce')) {
        update_post_meta($post_id, '_flavia_service_icon', sanitize_text_field($_POST['flavia_service_icon']));
        update_post_meta($post_id, '_flavia_service_features', sanitize_textarea_field($_POST['flavia_service_features']));
        update_post_meta($post_id, '_flavia_service_price', sanitize_text_field($_POST['flavia_service_price']));
        update_post_meta($post_id, '_flavia_service_duration', sanitize_text_field($_POST['flavia_service_duration']));
    }
    
    // Save testimonial meta
    if (isset($_POST['flavia_testimonial_nonce_field']) && wp_verify_nonce($_POST['flavia_testimonial_nonce_field'], 'flavia_testimonial_nonce')) {
        update_post_meta($post_id, '_flavia_client_name', sanitize_text_field($_POST['flavia_client_name']));
        update_post_meta($post_id, '_flavia_client_rating', sanitize_text_field($_POST['flavia_client_rating']));
        update_post_meta($post_id, '_flavia_service_type', sanitize_text_field($_POST['flavia_service_type']));
        update_post_meta($post_id, '_flavia_display_order', intval($_POST['flavia_display_order']));
    }
}
add_action('save_post', 'flavia_save_meta_boxes');

/**
 * Customizer Settings
 */
function flavia_customize_register($wp_customize) {
    
    // Contact Information Section
    $wp_customize->add_section('flavia_contact_info', array(
        'title' => 'Contact Information',
        'priority' => 30,
    ));
    
    // Phone Number
    $wp_customize->add_setting('flavia_phone', array(
        'default' => '(925) 354-6444',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('flavia_phone', array(
        'label' => 'Phone Number',
        'section' => 'flavia_contact_info',
        'type' => 'text',
    ));
    
    // Email Address
    $wp_customize->add_setting('flavia_email', array(
        'default' => 'edecoite@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('flavia_email', array(
        'label' => 'Email Address',
        'section' => 'flavia_contact_info',
        'type' => 'email',
    ));
    
    // Office Address
    $wp_customize->add_setting('flavia_address', array(
        'default' => 'Danville, CA',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('flavia_address', array(
        'label' => 'Office Address',
        'section' => 'flavia_contact_info',
        'type' => 'text',
    ));
    
    // Office Hours
    $wp_customize->add_setting('flavia_hours', array(
        'default' => 'Monday - Friday: 9AM - 6PM',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('flavia_hours', array(
        'label' => 'Office Hours',
        'section' => 'flavia_contact_info',
        'type' => 'text',
    ));
    
    // License Number
    $wp_customize->add_setting('flavia_license', array(
        'default' => 'LMFT License #XXXXX',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('flavia_license', array(
        'label' => 'License Information',
        'section' => 'flavia_contact_info',
        'type' => 'text',
    ));
}
add_action('customize_register', 'flavia_customize_register');

/**
 * Contact Form Handler
 */
function flavia_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['flavia_nonce'], 'flavia_nonce')) {
        wp_die('Security check failed');
    }
    
    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $service = sanitize_text_field($_POST['service']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Email details
    $to = 'edecoite@gmail.com';
    $subject = 'New Contact Form Submission from ' . $name;
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email
    );
    
    // Email body
    $body = "
    <h2>New Contact Form Submission</h2>
    <p><strong>Name:</strong> {$name}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Phone:</strong> {$phone}</p>
    <p><strong>Service Interest:</strong> {$service}</p>
    <p><strong>Message:</strong></p>
    <p>{$message}</p>
    ";
    
    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Message sent successfully!');
    } else {
        wp_send_json_error('Failed to send message. Please try again.');
    }
}
add_action('wp_ajax_flavia_contact_form', 'flavia_handle_contact_form');
add_action('wp_ajax_nopriv_flavia_contact_form', 'flavia_handle_contact_form');

/**
 * Shortcodes for displaying content
 */

// Services Shortcode
function flavia_services_shortcode($atts) {
    $atts = shortcode_atts(array(
        'limit' => -1,
        'columns' => 3
    ), $atts);
    
    $services = get_posts(array(
        'post_type' => 'flavia_services',
        'posts_per_page' => $atts['limit'],
        'post_status' => 'publish'
    ));
    
    if (!$services) {
        return '<p>No services found.</p>';
    }
    
    $output = '<div class="flavia-services-grid" style="grid-template-columns: repeat(' . $atts['columns'] . ', 1fr);">';
    
    foreach ($services as $service) {
        $icon = get_post_meta($service->ID, '_flavia_service_icon', true);
        $features = get_post_meta($service->ID, '_flavia_service_features', true);
        $price = get_post_meta($service->ID, '_flavia_service_price', true);
        $duration = get_post_meta($service->ID, '_flavia_service_duration', true);
        
        $output .= '<div class="therapy-card">';
        $output .= '<div class="therapy-card-icon">';
        $output .= flavia_get_icon($icon);
        $output .= '</div>';
        $output .= '<h3>' . get_the_title($service->ID) . '</h3>';
        $output .= '<p>' . get_the_excerpt($service->ID) . '</p>';
        
        if ($features) {
            $feature_list = explode("\n", $features);
            $output .= '<ul class="service-features">';
            foreach ($feature_list as $feature) {
                if (trim($feature)) {
                    $output .= '<li>✓ ' . trim($feature) . '</li>';
                }
            }
            $output .= '</ul>';
        }
        
        if ($price || $duration) {
            $output .= '<div class="service-details">';
            if ($price) $output .= '<span class="service-price">' . $price . '</span>';
            if ($duration) $output .= '<span class="service-duration">' . $duration . '</span>';
            $output .= '</div>';
        }
        
        $output .= '</div>';
    }
    
    $output .= '</div>';
    return $output;
}
add_shortcode('flavia_services', 'flavia_services_shortcode');

// Testimonials Shortcode
function flavia_testimonials_shortcode($atts) {
    $atts = shortcode_atts(array(
        'limit' => -1,
        'columns' => 3
    ), $atts);
    
    $testimonials = get_posts(array(
        'post_type' => 'flavia_testimonials',
        'posts_per_page' => $atts['limit'],
        'post_status' => 'publish',
        'meta_key' => '_flavia_display_order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
    ));
    
    if (!$testimonials) {
        return '<p>No testimonials found.</p>';
    }
    
    $output = '<div class="flavia-testimonials-grid" style="grid-template-columns: repeat(' . $atts['columns'] . ', 1fr);">';
    
    foreach ($testimonials as $testimonial) {
        $client_name = get_post_meta($testimonial->ID, '_flavia_client_name', true);
        $rating = get_post_meta($testimonial->ID, '_flavia_client_rating', true);
        $service_type = get_post_meta($testimonial->ID, '_flavia_service_type', true);
        
        $output .= '<div class="testimonial-card">';
        
        // Stars
        $output .= '<div class="testimonial-stars">';
        for ($i = 1; $i <= 5; $i++) {
            $output .= $i <= $rating ? '★' : '☆';
        }
        $output .= '</div>';
        
        $output .= '<blockquote>' . get_the_content($testimonial->ID) . '</blockquote>';
        $output .= '<div class="testimonial-attribution">';
        $output .= '<strong>' . $client_name . '</strong>';
        if ($service_type) {
            $output .= '<br><span class="service-type">' . $service_type . '</span>';
        }
        $output .= '</div>';
        $output .= '</div>';
    }
    
    $output .= '</div>';
    return $output;
}
add_shortcode('flavia_testimonials', 'flavia_testimonials_shortcode');

/**
 * Helper function to get icons
 */
function flavia_get_icon($icon_name) {
    $icons = array(
        'heart' => '❤️',
        'users' => '👥',
        'home' => '🏠',
        'brain' => '🧠',
        'shield' => '🛡️'
    );
    
    return isset($icons[$icon_name]) ? $icons[$icon_name] : '💙';
}

/**
 * Add Google Tag Manager support
 */
function flavia_add_gtm_head() {
    $gtm_id = get_theme_mod('flavia_gtm_id', '');
    if ($gtm_id) {
        echo "<!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{$gtm_id}');</script>
        <!-- End Google Tag Manager -->";
    }
}
add_action('wp_head', 'flavia_add_gtm_head');

function flavia_add_gtm_body() {
    $gtm_id = get_theme_mod('flavia_gtm_id', '');
    if ($gtm_id) {
        echo "<!-- Google Tag Manager (noscript) -->
        <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id={$gtm_id}\"
        height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->";
    }
}
add_action('wp_body_open', 'flavia_add_gtm_body');

/**
 * SEO Enhancements
 */
function flavia_add_schema_markup() {
    if (is_front_page()) {
        $schema = array(
            "@context" => "https://schema.org",
            "@type" => "MedicalBusiness",
            "name" => "Flavia DeCoite, LMFT",
            "description" => "Licensed Marriage and Family Therapist providing compassionate therapy services in Danville, CA",
            "url" => home_url(),
            "telephone" => get_theme_mod('flavia_phone', '(925) 354-6444'),
            "email" => get_theme_mod('flavia_email', 'edecoite@gmail.com'),
            "address" => array(
                "@type" => "PostalAddress",
                "addressLocality" => "Danville",
                "addressRegion" => "CA",
                "addressCountry" => "US"
            ),
            "medicalSpecialty" => "Marriage and Family Therapy",
            "priceRange" => "$150"
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>';
    }
}
add_action('wp_head', 'flavia_add_schema_markup');

?>