<?php
/**
 * Advanced Theme Configuration & Premium Features
 * 
 * @package FlaviaTherapy
 * @version 2.0.0
 */

// Advanced Customizer Sections
function flavia_advanced_customizer($wp_customize) {
    
    // Hero Section Configuration
    $wp_customize->add_section('flavia_hero_section', array(
        'title' => 'Hero Section Settings',
        'priority' => 25,
    ));
    
    // Hero Background Image
    $wp_customize->add_setting('flavia_hero_bg', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'flavia_hero_bg', array(
        'label' => 'Hero Background Image',
        'section' => 'flavia_hero_section',
        'mime_type' => 'image',
    )));
    
    // Hero Title
    $wp_customize->add_setting('flavia_hero_title', array(
        'default' => 'The Care You Deserve',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('flavia_hero_title', array(
        'label' => 'Hero Title',
        'section' => 'flavia_hero_section',
        'type' => 'text',
    ));
    
    // Hero Subtitle
    $wp_customize->add_setting('flavia_hero_subtitle', array(
        'default' => 'Compassionate, evidence-based therapy to help you heal, grow, and thrive.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('flavia_hero_subtitle', array(
        'label' => 'Hero Subtitle',
        'section' => 'flavia_hero_section',
        'type' => 'textarea',
    ));
    
    // About Section
    $wp_customize->add_section('flavia_about_section', array(
        'title' => 'About Section Settings',
        'priority' => 26,
    ));
    
    // About Image
    $wp_customize->add_setting('flavia_about_image', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'flavia_about_image', array(
        'label' => 'About Section Image',
        'section' => 'flavia_about_section',
        'mime_type' => 'image',
    )));
    
    // About Content
    $wp_customize->add_setting('flavia_about_content', array(
        'default' => 'With over 15 years of experience in marriage and family therapy...',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('flavia_about_content', array(
        'label' => 'About Content',
        'section' => 'flavia_about_section',
        'type' => 'textarea',
        'description' => 'Full about section content',
    ));
    
    // Google Tag Manager Section
    $wp_customize->add_section('flavia_analytics', array(
        'title' => 'Analytics & Tracking',
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('flavia_gtm_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('flavia_gtm_id', array(
        'label' => 'Google Tag Manager ID',
        'section' => 'flavia_analytics',
        'type' => 'text',
        'description' => 'Enter your GTM-XXXXXXX ID',
    ));
    
    // Google Analytics
    $wp_customize->add_setting('flavia_ga_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('flavia_ga_id', array(
        'label' => 'Google Analytics ID',
        'section' => 'flavia_analytics',
        'type' => 'text',
        'description' => 'Enter your GA4 Measurement ID',
    ));
    
    // Facebook Pixel
    $wp_customize->add_setting('flavia_fb_pixel', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('flavia_fb_pixel', array(
        'label' => 'Facebook Pixel ID',
        'section' => 'flavia_analytics',
        'type' => 'text',
    ));
    
    // Simple Practice Integration
    $wp_customize->add_section('flavia_integrations', array(
        'title' => 'Third-Party Integrations',
        'priority' => 36,
    ));
    
    $wp_customize->add_setting('flavia_simplepractice_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('flavia_simplepractice_url', array(
        'label' => 'Simple Practice Booking URL',
        'section' => 'flavia_integrations',
        'type' => 'url',
        'description' => 'Your Simple Practice online booking link',
    ));
    
    // Psychology Today Profile
    $wp_customize->add_setting('flavia_psychology_today_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('flavia_psychology_today_url', array(
        'label' => 'Psychology Today Profile URL',
        'section' => 'flavia_integrations',
        'type' => 'url',
    ));
    
    // Social Media Section
    $wp_customize->add_section('flavia_social_media', array(
        'title' => 'Social Media Links',
        'priority' => 37,
    ));
    
    // LinkedIn
    $wp_customize->add_setting('flavia_linkedin', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('flavia_linkedin', array(
        'label' => 'LinkedIn Profile',
        'section' => 'flavia_social_media',
        'type' => 'url',
    ));
    
    // Professional Website
    $wp_customize->add_setting('flavia_professional_site', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('flavia_professional_site', array(
        'label' => 'Professional Website',
        'section' => 'flavia_social_media',
        'type' => 'url',
    ));
}
add_action('customize_register', 'flavia_advanced_customizer');

/**
 * Advanced Analytics Integration
 */
function flavia_add_analytics() {
    // Google Analytics 4
    $ga_id = get_theme_mod('flavia_ga_id', '');
    if ($ga_id) {
        echo "<!-- Google Analytics 4 -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id={$ga_id}\"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', '{$ga_id}', {
            anonymize_ip: true,
            respect_privacy_settings: true
          });
        </script>
        <!-- End Google Analytics 4 -->";
    }
    
    // Facebook Pixel
    $fb_pixel = get_theme_mod('flavia_fb_pixel', '');
    if ($fb_pixel) {
        echo "<!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{$fb_pixel}');
        fbq('track', 'PageView');
        </script>
        <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
        src=\"https://www.facebook.com/tr?id={$fb_pixel}&ev=PageView&noscript=1\"/></noscript>
        <!-- End Facebook Pixel Code -->";
    }
}
add_action('wp_head', 'flavia_add_analytics');

/**
 * Advanced Contact Form with CRM Integration
 */
function flavia_advanced_contact_form() {
    if (!wp_verify_nonce($_POST['flavia_nonce'], 'flavia_nonce')) {
        wp_die('Security check failed');
    }
    
    // Enhanced form data
    $form_data = array(
        'name' => sanitize_text_field($_POST['first_name'] . ' ' . $_POST['last_name']),
        'first_name' => sanitize_text_field($_POST['first_name']),
        'last_name' => sanitize_text_field($_POST['last_name']),
        'email' => sanitize_email($_POST['email']),
        'phone' => sanitize_text_field($_POST['phone']),
        'service' => sanitize_text_field($_POST['service']),
        'message' => sanitize_textarea_field($_POST['message']),
        'preferred_contact' => sanitize_text_field($_POST['preferred_contact'] ?? 'email'),
        'insurance' => sanitize_text_field($_POST['insurance'] ?? ''),
        'emergency_contact' => sanitize_text_field($_POST['emergency_contact'] ?? ''),
        'referral_source' => sanitize_text_field($_POST['referral_source'] ?? ''),
        'ip_address' => $_SERVER['REMOTE_ADDR'],
        'user_agent' => $_SERVER['HTTP_USER_AGENT'],
        'submitted_at' => current_time('mysql')
    );
    
    // Save to database for CRM
    global $wpdb;
    $table_name = $wpdb->prefix . 'flavia_contacts';
    
    $wpdb->insert(
        $table_name,
        $form_data,
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    // Enhanced email to Flavia
    $to = 'edecoite@gmail.com';
    $subject = 'New Client Inquiry - ' . $form_data['service'];
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $form_data['name'] . ' <noreply@' . $_SERVER['HTTP_HOST'] . '>',
        'Reply-To: ' . $form_data['email']
    );
    
    $body = "
    <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background: #f9fafb; border-radius: 10px;'>
        <div style='background: linear-gradient(135deg, #FFD8F0, #E6C200); padding: 20px; border-radius: 10px 10px 0 0; text-align: center;'>
            <h2 style='color: white; margin: 0;'>New Client Inquiry</h2>
        </div>
        
        <div style='background: white; padding: 30px; border-radius: 0 0 10px 10px;'>
            <h3 style='color: #374151; border-bottom: 2px solid #E6C200; padding-bottom: 10px;'>Contact Information</h3>
            <table style='width: 100%; margin-bottom: 20px;'>
                <tr><td style='padding: 8px 0; font-weight: bold; color: #6b7280;'>Name:</td><td style='padding: 8px 0;'>{$form_data['name']}</td></tr>
                <tr><td style='padding: 8px 0; font-weight: bold; color: #6b7280;'>Email:</td><td style='padding: 8px 0;'><a href='mailto:{$form_data['email']}'>{$form_data['email']}</a></td></tr>
                <tr><td style='padding: 8px 0; font-weight: bold; color: #6b7280;'>Phone:</td><td style='padding: 8px 0;'><a href='tel:{$form_data['phone']}'>{$form_data['phone']}</a></td></tr>
                <tr><td style='padding: 8px 0; font-weight: bold; color: #6b7280;'>Service Interest:</td><td style='padding: 8px 0;'>{$form_data['service']}</td></tr>
                <tr><td style='padding: 8px 0; font-weight: bold; color: #6b7280;'>Preferred Contact:</td><td style='padding: 8px 0;'>{$form_data['preferred_contact']}</td></tr>
            </table>
            
            <h3 style='color: #374151; border-bottom: 2px solid #E6C200; padding-bottom: 10px;'>Message</h3>
            <div style='background: #f9fafb; padding: 15px; border-radius: 5px; margin-bottom: 20px;'>
                <p style='margin: 0; line-height: 1.6;'>{$form_data['message']}</p>
            </div>
            
            <h3 style='color: #374151; border-bottom: 2px solid #E6C200; padding-bottom: 10px;'>Additional Information</h3>
            <table style='width: 100%; font-size: 12px; color: #6b7280;'>
                <tr><td style='padding: 4px 0;'>Insurance:</td><td style='padding: 4px 0;'>{$form_data['insurance']}</td></tr>
                <tr><td style='padding: 4px 0;'>Referral Source:</td><td style='padding: 4px 0;'>{$form_data['referral_source']}</td></tr>
                <tr><td style='padding: 4px 0;'>Submitted:</td><td style='padding: 4px 0;'>{$form_data['submitted_at']}</td></tr>
                <tr><td style='padding: 4px 0;'>IP Address:</td><td style='padding: 4px 0;'>{$form_data['ip_address']}</td></tr>
            </table>
            
            <div style='margin-top: 30px; text-align: center;'>
                <a href='mailto:{$form_data['email']}' style='background: linear-gradient(135deg, #FFD8F0, #E6C200); color: white; padding: 12px 24px; text-decoration: none; border-radius: 25px; font-weight: bold;'>Reply to Client</a>
            </div>
        </div>
        
        <div style='text-align: center; margin-top: 20px; font-size: 12px; color: #9ca3af;'>
            <p>This inquiry was submitted through flaviadecoitemft.com</p>
        </div>
    </div>
    ";
    
    // Auto-responder to client
    $client_subject = 'Thank you for your inquiry - Flavia DeCoite, LMFT';
    $client_body = "
    <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;'>
        <div style='text-align: center; margin-bottom: 30px;'>
            <div style='display: inline-block; background: linear-gradient(135deg, #FFD8F0, #E6C200); color: white; padding: 15px 30px; border-radius: 50px; font-size: 20px; font-weight: bold;'>
                Flavia DeCoite, LMFT
            </div>
        </div>
        
        <h2 style='color: #374151;'>Thank you for reaching out, {$form_data['first_name']}!</h2>
        
        <p style='color: #6b7280; line-height: 1.6;'>I've received your inquiry about <strong>{$form_data['service']}</strong> and appreciate you taking this important step toward your mental health and well-being.</p>
        
        <div style='background: linear-gradient(135deg, #fdf2f8, #ffffff); padding: 20px; border-radius: 10px; margin: 20px 0; border-left: 4px solid #E6C200;'>
            <h3 style='color: #374151; margin-top: 0;'>What happens next?</h3>
            <ul style='color: #6b7280; line-height: 1.8;'>
                <li><strong>Within 24 hours:</strong> I'll personally review your inquiry and respond via your preferred contact method</li>
                <li><strong>Initial consultation:</strong> We'll schedule a brief, confidential consultation to discuss your needs</li>
                <li><strong>Personalized plan:</strong> Together, we'll develop an approach tailored to your specific goals</li>
            </ul>
        </div>
        
        <div style='background: #f9fafb; padding: 20px; border-radius: 10px; margin: 20px 0;'>
            <h3 style='color: #374151; margin-top: 0;'>In the meantime:</h3>
            <p style='color: #6b7280; margin-bottom: 10px;'><strong>Crisis Resources:</strong> If you're experiencing a mental health emergency, please call 911 or go to your nearest emergency room.</p>
            <p style='color: #6b7280; margin-bottom: 10px;'><strong>24/7 Support:</strong> National Suicide Prevention Lifeline: <a href='tel:988' style='color: #E6C200;'>988</a></p>
            <p style='color: #6b7280;'><strong>Crisis Text Line:</strong> Text HOME to <a href='sms:741741' style='color: #E6C200;'>741741</a></p>
        </div>
        
        <div style='text-align: center; margin: 30px 0;'>
            <p style='color: #6b7280;'>Questions? Feel free to call me directly:</p>
            <a href='tel:(925) 354-6444' style='background: linear-gradient(135deg, #FFD8F0, #E6C200); color: white; padding: 15px 30px; text-decoration: none; border-radius: 25px; font-weight: bold; display: inline-block;'>(925) 354-6444</a>
        </div>
        
        <div style='border-top: 1px solid #e5e7eb; padding-top: 20px; text-align: center; color: #9ca3af; font-size: 12px;'>
            <p>Flavia DeCoite, LMFT | Licensed Marriage & Family Therapist<br>
            Danville, CA | edecoite@gmail.com | (925) 354-6444</p>
            <p style='margin-top: 15px;'><em>This communication is confidential and intended only for the addressee. If you received this in error, please delete it immediately.</em></p>
        </div>
    </div>
    ";
    
    // Send emails
    $email_sent = wp_mail($to, $subject, $body, $headers);
    wp_mail($form_data['email'], $client_subject, $client_body, $headers);
    
    // Track conversion
    if (function_exists('gtag')) {
        echo "<script>gtag('event', 'form_submit', {'event_category': 'Contact Form', 'event_label': '{$form_data['service']}'});</script>";
    }
    
    if ($email_sent) {
        wp_send_json_success('Thank you! Your message has been sent successfully. I will contact you within 24 hours.');
    } else {
        wp_send_json_error('There was an error sending your message. Please try calling directly: (925) 354-6444');
    }
}
add_action('wp_ajax_flavia_contact_form', 'flavia_advanced_contact_form');
add_action('wp_ajax_nopriv_flavia_contact_form', 'flavia_advanced_contact_form');

/**
 * Create CRM Database Table
 */
function flavia_create_crm_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'flavia_contacts';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name tinytext NOT NULL,
        first_name varchar(100) NOT NULL,
        last_name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20) DEFAULT '',
        service varchar(100) DEFAULT '',
        message text DEFAULT '',
        preferred_contact varchar(20) DEFAULT 'email',
        insurance varchar(100) DEFAULT '',
        emergency_contact varchar(200) DEFAULT '',
        referral_source varchar(100) DEFAULT '',
        ip_address varchar(45) DEFAULT '',
        user_agent text DEFAULT '',
        submitted_at datetime DEFAULT CURRENT_TIMESTAMP,
        status varchar(20) DEFAULT 'new',
        notes text DEFAULT '',
        follow_up_date date DEFAULT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'flavia_create_crm_table');

/**
 * Add CRM Admin Menu
 */
function flavia_add_crm_menu() {
    add_menu_page(
        'Client Inquiries',
        'Client Inquiries',
        'manage_options',
        'flavia-crm',
        'flavia_crm_dashboard',
        'dashicons-groups',
        6
    );
    
    add_submenu_page(
        'flavia-crm',
        'All Inquiries',
        'All Inquiries',
        'manage_options',
        'flavia-crm',
        'flavia_crm_dashboard'
    );
    
    add_submenu_page(
        'flavia-crm',
        'Analytics',
        'Analytics',
        'manage_options',
        'flavia-analytics',
        'flavia_crm_analytics'
    );
}
add_action('admin_menu', 'flavia_add_crm_menu');

/**
 * CRM Dashboard
 */
function flavia_crm_dashboard() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'flavia_contacts';
    
    // Handle status updates
    if (isset($_POST['update_status']) && wp_verify_nonce($_POST['_wpnonce'], 'update_status')) {
        $contact_id = intval($_POST['contact_id']);
        $new_status = sanitize_text_field($_POST['status']);
        $notes = sanitize_textarea_field($_POST['notes']);
        
        $wpdb->update(
            $table_name,
            array('status' => $new_status, 'notes' => $notes),
            array('id' => $contact_id),
            array('%s', '%s'),
            array('%d')
        );
        
        echo '<div class="notice notice-success"><p>Contact updated successfully!</p></div>';
    }
    
    // Get all contacts
    $contacts = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submitted_at DESC");
    
    ?>
    <div class="wrap">
        <h1>Client Inquiries Dashboard</h1>
        
        <div class="flavia-crm-stats" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin: 20px 0;">
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); text-align: center;">
                <h3 style="margin: 0; color: #E6C200;">Total Inquiries</h3>
                <p style="font-size: 2em; margin: 10px 0; color: #374151;"><?php echo count($contacts); ?></p>
            </div>
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); text-align: center;">
                <h3 style="margin: 0; color: #E6C200;">This Month</h3>
                <p style="font-size: 2em; margin: 10px 0; color: #374151;">
                    <?php 
                    $this_month = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE MONTH(submitted_at) = MONTH(CURRENT_DATE()) AND YEAR(submitted_at) = YEAR(CURRENT_DATE())");
                    echo $this_month;
                    ?>
                </p>
            </div>
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); text-align: center;">
                <h3 style="margin: 0; color: #E6C200;">New Inquiries</h3>
                <p style="font-size: 2em; margin: 10px 0; color: #374151;">
                    <?php 
                    $new_inquiries = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE status = 'new'");
                    echo $new_inquiries;
                    ?>
                </p>
            </div>
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); text-align: center;">
                <h3 style="margin: 0; color: #E6C200;">Conversion Rate</h3>
                <p style="font-size: 2em; margin: 10px 0; color: #374151;">
                    <?php 
                    $total = count($contacts);
                    $converted = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE status = 'client'");
                    echo $total > 0 ? round(($converted / $total) * 100) . '%' : '0%';
                    ?>
                </p>
            </div>
        </div>
        
        <div class="flavia-crm-table" style="background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Service</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts as $contact) : ?>
                    <tr>
                        <td><?php echo date('M j, Y', strtotime($contact->submitted_at)); ?></td>
                        <td><strong><?php echo esc_html($contact->name); ?></strong></td>
                        <td>
                            <a href="mailto:<?php echo esc_attr($contact->email); ?>"><?php echo esc_html($contact->email); ?></a><br>
                            <a href="tel:<?php echo esc_attr($contact->phone); ?>"><?php echo esc_html($contact->phone); ?></a>
                        </td>
                        <td><?php echo esc_html($contact->service); ?></td>
                        <td>
                            <span class="status-badge status-<?php echo esc_attr($contact->status); ?>" style="
                                padding: 4px 12px; 
                                border-radius: 20px; 
                                font-size: 12px; 
                                font-weight: bold;
                                background: <?php 
                                switch($contact->status) {
                                    case 'new': echo '#fef3c7; color: #92400e;'; break;
                                    case 'contacted': echo '#dbeafe; color: #1e40af;'; break;
                                    case 'scheduled': echo '#d1fae5; color: #065f46;'; break;
                                    case 'client': echo '#dcfce7; color: #166534;'; break;
                                    default: echo '#f3f4f6; color: #374151;';
                                }
                                ?>
                            ">
                                <?php echo ucfirst($contact->status); ?>
                            </span>
                        </td>
                        <td>
                            <button onclick="editContact(<?php echo $contact->id; ?>)" class="button button-small">Edit</button>
                            <button onclick="viewDetails(<?php echo $contact->id; ?>)" class="button button-small">Details</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <style>
    .flavia-crm-stats h3 {
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    </style>
    
    <script>
    function editContact(id) {
        // Implementation for editing contact
        alert('Edit contact functionality - integrate with your preferred CRM system');
    }
    
    function viewDetails(id) {
        // Implementation for viewing contact details
        alert('View details functionality - integrate with your preferred CRM system');
    }
    </script>
    <?php
}

/**
 * Advanced Schema Markup
 */
function flavia_enhanced_schema_markup() {
    if (is_front_page()) {
        $schema = array(
            "@context" => "https://schema.org",
            "@graph" => array(
                array(
                    "@type" => "Person",
                    "@id" => home_url() . "/#person",
                    "name" => "Flavia DeCoite",
                    "jobTitle" => "Licensed Marriage and Family Therapist",
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
                    "hasCredential" => array(
                        "@type" => "EducationalOccupationalCredential",
                        "credentialCategory" => "Professional License",
                        "recognizedBy" => array(
                            "@type" => "Organization",
                            "name" => "California Board of Behavioral Sciences"
                        )
                    ),
                    "knowsAbout" => array(
                        "Marriage and Family Therapy",
                        "Individual Therapy",
                        "Couples Counseling",
                        "Anxiety Treatment",
                        "Depression Treatment",
                        "Trauma Therapy"
                    )
                ),
                array(
                    "@type" => "MedicalBusiness",
                    "@id" => home_url() . "/#business",
                    "name" => "Flavia DeCoite, LMFT",
                    "description" => "Professional therapy practice specializing in marriage and family therapy, individual counseling, and couples therapy",
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
                    "priceRange" => "$150-$185",
                    "paymentAccepted" => array("Cash", "Check", "Credit Card", "Insurance"),
                    "currenciesAccepted" => "USD",
                    "openingHours" => "Mo-Fr 09:00-18:00",
                    "hasOfferCatalog" => array(
                        "@type" => "OfferCatalog",
                        "name" => "Therapy Services",
                        "itemListElement" => array(
                            array(
                                "@type" => "Offer",
                                "itemOffered" => array(
                                    "@type" => "Service",
                                    "name" => "Individual Therapy",
                                    "description" => "One-on-one therapy sessions for personal growth and mental health support"
                                )
                            ),
                            array(
                                "@type" => "Offer",
                                "itemOffered" => array(
                                    "@type" => "Service",
                                    "name" => "Couples Therapy",
                                    "description" => "Relationship counseling for couples looking to improve communication and connection"
                                )
                            ),
                            array(
                                "@type" => "Offer",
                                "itemOffered" => array(
                                    "@type" => "Service",
                                    "name" => "Family Counseling",
                                    "description" => "Family therapy to improve relationships and communication within families"
                                )
                            )
                        )
                    ),
                    "aggregateRating" => array(
                        "@type" => "AggregateRating",
                        "ratingValue" => "5.0",
                        "reviewCount" => "50",
                        "bestRating" => "5",
                        "worstRating" => "1"
                    )
                )
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
    }
}
add_action('wp_head', 'flavia_enhanced_schema_markup');

?>