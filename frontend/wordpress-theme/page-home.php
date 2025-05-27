<?php
/**
 * Home Page Template
 * Template Name: Flavia Therapy Home
 */

get_header(); ?>

<!-- Hero Section -->
<section class="flavia-hero-section" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/hero-bg.jpg');">
    <div class="et_pb_row">
        <div class="et_pb_column et_pb_column_1_2">
            <div class="hero-content">
                <span class="professional-badge">Licensed Marriage & Family Therapist</span>
                
                <h1 class="hero-title">
                    The Care You <span class="gradient-text-pink-gold">Deserve</span>
                </h1>
                
                <p class="hero-description">
                    Compassionate, evidence-based therapy to help you heal, grow, and thrive. 
                    In a safe, judgment-free environment, we'll work together toward your goals.
                </p>
                
                <div class="hero-buttons">
                    <a href="#contact" class="btn-primary-gold">
                        Schedule Consultation →
                    </a>
                    <a href="tel:<?php echo esc_attr(get_theme_mod('flavia_phone', '(925) 354-6444')); ?>" class="btn-secondary-gold">
                        Call <?php echo esc_html(get_theme_mod('flavia_phone', '(925) 354-6444')); ?>
                    </a>
                </div>
                
                <div class="hero-credentials">
                    <div class="rating">
                        <span class="stars">★★★★★</span>
                        <span>5.0 Rating</span>
                    </div>
                    <div class="experience">
                        <strong>15+ Years</strong> Experience
                    </div>
                </div>
            </div>
        </div>
        
        <div class="et_pb_column et_pb_column_1_2">
            <div class="hero-quote">
                <blockquote>
                    "The curious paradox is that when I accept myself just as I am, 
                    then I can change."
                </blockquote>
                <cite>— Carl Rogers</cite>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="et_pb_section">
    <div class="et_pb_row">
        <div class="et_pb_column et_pb_column_1_2">
            <div class="about-image">
                <?php 
                $about_image = get_theme_mod('flavia_about_image');
                if ($about_image): ?>
                    <img src="<?php echo esc_url($about_image); ?>" alt="Flavia DeCoite, LMFT" />
                <?php else: ?>
                    <div class="placeholder-image">
                        <p>Flavia DeCoite, LMFT Professional Photo</p>
                    </div>
                <?php endif; ?>
                
                <div class="license-badge">
                    🏆
                    <div>
                        <strong>Licensed LMFT</strong>
                        <small><?php echo esc_html(get_theme_mod('flavia_license', 'LMFT License #XXXXX')); ?></small>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="et_pb_column et_pb_column_1_2">
            <span class="professional-badge">About Flavia</span>
            
            <h2>Compassionate Healing for <span class="gradient-text-pink-gold">Mind & Heart</span></h2>
            
            <div class="about-content">
                <?php 
                $about_content = get_theme_mod('flavia_about_content', 
                    'With over 15 years of experience in marriage and family therapy, I am dedicated to providing a safe, nurturing environment where healing and growth can flourish.
                    
                    My approach is rooted in humanistic principles, believing that every individual has the innate capacity for positive change when provided with the right support and unconditional acceptance.
                    
                    I specialize in working with couples, families, and individuals facing challenges such as relationship conflicts, anxiety, depression, trauma, and life transitions. Together, we\'ll explore your unique story and develop practical strategies for lasting change.'
                );
                echo wpautop($about_content);
                ?>
            </div>
            
            <div class="credentials-grid">
                <div class="credential-item">
                    🛡️
                    <div>
                        <strong>Licensed LMFT</strong>
                        <small>California Licensed</small>
                    </div>
                </div>
                <div class="credential-item">
                    📚
                    <div>
                        <strong>15+ Years</strong>
                        <small>Professional Experience</small>
                    </div>
                </div>
                <div class="credential-item">
                    ❤️
                    <div>
                        <strong>Specialized Care</strong>
                        <small>Couples & Families</small>
                    </div>
                </div>
                <div class="credential-item">
                    ✨
                    <div>
                        <strong>Holistic Approach</strong>
                        <small>Mind, Body, Spirit</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="et_pb_section" style="background: #f9fafb;">
    <div class="et_pb_row">
        <div class="et_pb_column et_pb_column_4_4">
            <div class="section-header">
                <span class="professional-badge">Therapeutic Services</span>
                <h2>Comprehensive Mental Health <span class="gradient-text-pink-gold">Support</span></h2>
                <p>Evidence-based therapeutic approaches tailored to your unique needs and goals for healing and growth.</p>
            </div>
            
            <?php echo do_shortcode('[flavia_services columns="3"]'); ?>
        </div>
    </div>
</section>

<!-- Approach Section -->
<section id="approach" class="et_pb_section" style="background: linear-gradient(135deg, #fdf2f8, #fff7ed);">
    <div class="et_pb_row">
        <div class="et_pb_column et_pb_column_1_2">
            <span class="professional-badge-gold">Therapeutic Approach</span>
            
            <h2>Evidence-Based <span class="gradient-text-pink-gold">Healing Methods</span></h2>
            
            <p>My therapeutic approach is grounded in the belief that every person has the capacity for growth and positive change. I integrate multiple evidence-based modalities to create a personalized treatment plan that honors your unique journey.</p>
            
            <div class="approach-methods">
                <div class="method-item">
                    <div class="method-icon gradient-gold">💝</div>
                    <div>
                        <h4>Person-Centered Therapy</h4>
                        <p>Creating a non-judgmental, empathetic environment where you feel heard, understood, and valued.</p>
                    </div>
                </div>
                
                <div class="method-item">
                    <div class="method-icon gradient-gold">💭</div>
                    <div>
                        <h4>Cognitive Behavioral Therapy</h4>
                        <p>Identifying and changing negative thought patterns that impact your emotions and behaviors.</p>
                    </div>
                </div>
                
                <div class="method-item">
                    <div class="method-icon gradient-gold">👥</div>
                    <div>
                        <h4>Systems Theory</h4>
                        <p>Understanding how family and relationship dynamics influence individual well-being and growth.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="et_pb_column et_pb_column_1_2">
            <div class="approach-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/therapy-office.jpg" alt="Peaceful therapy environment" />
                
                <div class="approach-quote">
                    💬
                    <p>"Your healing journey is unique, and together we'll find the path that works for you."</p>
                    <cite>— Flavia DeCoite, LMFT</cite>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="et_pb_section">
    <div class="et_pb_row">
        <div class="et_pb_column et_pb_column_4_4">
            <div class="section-header">
                <span class="professional-badge">Client Testimonials</span>
                <h2>Stories of <span class="gradient-text-pink-gold">Transformation</span></h2>
                <p>Real experiences from clients who have found healing, growth, and renewed hope through therapy.</p>
            </div>
            
            <?php echo do_shortcode('[flavia_testimonials columns="3"]'); ?>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="et_pb_section" style="background: #f9fafb;">
    <div class="et_pb_row">
        <div class="et_pb_column et_pb_column_1_2">
            <span class="professional-badge-gold">Get In Touch</span>
            
            <h2>Ready to Begin Your <span class="gradient-text-pink-gold">Healing Journey?</span></h2>
            
            <p>Taking the first step toward healing takes courage. I'm here to support you with compassion, expertise, and understanding. Let's work together toward positive change.</p>
            
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon gradient-gold">📞</div>
                    <div>
                        <strong>Phone</strong>
                        <a href="tel:<?php echo esc_attr(get_theme_mod('flavia_phone')); ?>">
                            <?php echo esc_html(get_theme_mod('flavia_phone', '(925) 354-6444')); ?>
                        </a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon gradient-gold">✉️</div>
                    <div>
                        <strong>Email</strong>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('flavia_email')); ?>">
                            <?php echo esc_html(get_theme_mod('flavia_email', 'edecoite@gmail.com')); ?>
                        </a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon gradient-gold">📍</div>
                    <div>
                        <strong>Location</strong>
                        <span><?php echo esc_html(get_theme_mod('flavia_address', 'Danville, CA')); ?></span>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon gradient-gold">🕒</div>
                    <div>
                        <strong>Office Hours</strong>
                        <span><?php echo esc_html(get_theme_mod('flavia_hours', 'Monday - Friday: 9AM - 6PM')); ?></span>
                    </div>
                </div>
            </div>
            
            <a href="#contact-form" class="btn-primary-gold">
                Schedule Free Consultation →
            </a>
        </div>
        
        <div class="et_pb_column et_pb_column_1_2">
            <div class="flavia-contact-form" id="contact-form">
                <h3>Free 15-Minute Consultation</h3>
                <p>Not sure if therapy is right for you? Let's talk. I offer a brief, no-pressure consultation to discuss your needs and how I can help.</p>
                
                <form id="flavia-contact-form" action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
                    <input type="hidden" name="action" value="flavia_contact_form">
                    <input type="hidden" name="flavia_nonce" value="<?php echo wp_create_nonce('flavia_nonce'); ?>">
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Service Interest</label>
                        <select id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="individual">Individual Therapy</option>
                            <option value="couples">Couples Therapy</option>
                            <option value="family">Family Counseling</option>
                            <option value="consultation">Free Consultation</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message (Optional)</label>
                        <textarea id="message" name="message" rows="3" placeholder="Tell me a bit about what brought you here..."></textarea>
                    </div>
                    
                    <div class="hipaa-notice">
                        🛡️ Your information is confidential and HIPAA compliant. 
                        I'll contact you within 24 hours to schedule your appointment.
                    </div>
                    
                    <button type="submit" class="btn-primary-gold">
                        Request Appointment
                    </button>
                </form>
                
                <p class="contact-direct">
                    Or call directly: <a href="tel:<?php echo esc_attr(get_theme_mod('flavia_phone')); ?>">
                        <?php echo esc_html(get_theme_mod('flavia_phone', '(925) 354-6444')); ?>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<style>
/* Page-specific styles */
.hero-content {
    color: white;
    padding: 60px 0;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1.5rem;
}

.hero-description {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.hero-credentials {
    display: flex;
    gap: 2rem;
    align-items: center;
}

.stars {
    color: #fbbf24;
    margin-right: 0.5rem;
}

.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.section-header h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.credentials-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    margin-top: 2rem;
}

.credential-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.approach-methods {
    margin-top: 2rem;
}

.method-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.method-icon {
    width: 3rem;
    height: 3rem;
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    flex-shrink: 0;
}

.contact-info {
    margin: 2rem 0;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.contact-icon {
    width: 3rem;
    height: 3rem;
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    color: white;
    flex-shrink: 0;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--gray-dark);
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid #e5e7eb;
    border-radius: 0.5rem;
    transition: all 0.3s ease;
}

.hipaa-notice {
    background: rgba(230, 194, 0, 0.1);
    border: 1px solid rgba(230, 194, 0, 0.3);
    border-radius: 0.5rem;
    padding: 1rem;
    font-size: 0.875rem;
    margin-bottom: 1.5rem;
}

.contact-direct {
    text-align: center;
    margin-top: 1rem;
    font-size: 0.875rem;
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-buttons {
        flex-direction: column;
    }
    
    .hero-credentials {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .credentials-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
}
</style>