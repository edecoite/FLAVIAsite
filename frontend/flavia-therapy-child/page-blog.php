<?php
/**
 * Blog Page Template
 * Template Name: Therapy Blog
 */

get_header(); ?>

<div class="et_pb_section blog-hero-section" style="background: linear-gradient(135deg, #f9fafb, #fdf2f8); padding: 4rem 0;">
    <div class="et_pb_row">
        <div class="et_pb_column et_pb_column_4_4">
            <div class="blog-hero-content" style="text-align: center;">
                <span class="professional-badge">Therapy Insights</span>
                <h1 class="blog-hero-title" style="font-size: 3rem; margin-bottom: 1rem;">
                    Mental Health <span class="gradient-text-pink-gold">Resources & Insights</span>
                </h1>
                <p style="font-size: 1.25rem; color: #6b7280; max-width: 600px; margin: 0 auto;">
                    Explore articles, tips, and resources to support your mental health journey and personal growth.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="et_pb_section blog-content-section" style="padding: 4rem 0;">
    <div class="et_pb_row">
        <div class="et_pb_column et_pb_column_3_4">
            <div class="blog-posts">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $blog_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'post_status' => 'publish'
                ));
                
                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                ?>
                
                <article class="blog-post-card" style="margin-bottom: 2rem;">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="blog-post-image" style="height: 200px; overflow: hidden; border-radius: 1rem 1rem 0 0;">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <div class="blog-post-content" style="padding: 1.5rem;">
                        <div class="blog-post-meta" style="color: #9ca3af; font-size: 0.875rem; margin-bottom: 0.5rem;">
                            <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('F j, Y'); ?></time>
                            <?php
                            $categories = get_the_category();
                            if ($categories) {
                                echo ' • ';
                                $cat_links = array();
                                foreach ($categories as $category) {
                                    $cat_links[] = '<a href="' . get_category_link($category->term_id) . '" style="color: var(--gold-primary);">' . $category->name . '</a>';
                                }
                                echo implode(', ', $cat_links);
                            }
                            ?>
                        </div>
                        
                        <h2 class="blog-post-title">
                            <a href="<?php the_permalink(); ?>" style="color: #374151; text-decoration: none; font-size: 1.5rem; font-weight: 700; line-height: 1.3;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <div class="blog-post-excerpt" style="color: #6b7280; margin: 1rem 0; line-height: 1.6;">
                            <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="blog-read-more" style="color: var(--gold-primary); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                            Read More →
                        </a>
                    </div>
                </article>
                
                <?php
                    endwhile;
                    
                    // Pagination
                    $total_pages = $blog_query->max_num_pages;
                    if ($total_pages > 1) {
                        echo '<div class="blog-pagination" style="text-align: center; margin-top: 3rem;">';
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%',
                            'current' => $paged,
                            'total' => $total_pages,
                            'prev_text' => '← Previous',
                            'next_text' => 'Next →',
                            'mid_size' => 2,
                            'end_size' => 1
                        ));
                        echo '</div>';
                    }
                    
                    wp_reset_postdata();
                else :
                ?>
                
                <div class="no-posts-message" style="text-align: center; padding: 3rem; background: #f9fafb; border-radius: 1rem;">
                    <h3 style="color: #374151; margin-bottom: 1rem;">No Blog Posts Yet</h3>
                    <p style="color: #6b7280; margin-bottom: 2rem;">We're working on creating valuable content for you. Check back soon!</p>
                    <a href="<?php echo home_url(); ?>" class="btn-primary-gold">Return Home</a>
                </div>
                
                <?php endif; ?>
            </div>
        </div>
        
        <div class="et_pb_column et_pb_column_1_4">
            <aside class="blog-sidebar" style="padding-left: 2rem;">
                
                <!-- About Flavia Widget -->
                <div class="sidebar-widget" style="background: linear-gradient(135deg, #fdf2f8, #ffffff); padding: 1.5rem; border-radius: 1rem; margin-bottom: 2rem; border: 1px solid rgba(230, 194, 0, 0.1);">
                    <h3 style="color: #374151; margin-bottom: 1rem; font-size: 1.25rem;">About Flavia DeCoite, LMFT</h3>
                    <p style="color: #6b7280; font-size: 0.875rem; line-height: 1.6; margin-bottom: 1rem;">
                        Licensed Marriage and Family Therapist with over 15 years of experience helping individuals, couples, and families heal and grow.
                    </p>
                    <a href="<?php echo home_url('#about'); ?>" class="btn-secondary-gold" style="font-size: 0.875rem; padding: 0.5rem 1rem;">
                        Learn More
                    </a>
                </div>
                
                <!-- Categories Widget -->
                <?php
                $categories = get_categories(array('hide_empty' => true));
                if ($categories) :
                ?>
                <div class="sidebar-widget" style="background: white; padding: 1.5rem; border-radius: 1rem; margin-bottom: 2rem; border: 1px solid #e5e7eb;">
                    <h3 style="color: #374151; margin-bottom: 1rem; font-size: 1.25rem;">Categories</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php foreach ($categories as $category) : ?>
                            <li style="margin-bottom: 0.5rem;">
                                <a href="<?php echo get_category_link($category->term_id); ?>" style="color: #6b7280; text-decoration: none; display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0; border-bottom: 1px solid #f3f4f6;">
                                    <span><?php echo $category->name; ?></span>
                                    <span style="background: var(--gold-primary); color: white; font-size: 0.75rem; padding: 0.25rem 0.5rem; border-radius: 1rem; font-weight: 500;">
                                        <?php echo $category->count; ?>
                                    </span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
                
                <!-- Recent Posts Widget -->
                <?php
                $recent_posts = get_posts(array(
                    'numberposts' => 5,
                    'post_status' => 'publish'
                ));
                if ($recent_posts) :
                ?>
                <div class="sidebar-widget" style="background: white; padding: 1.5rem; border-radius: 1rem; margin-bottom: 2rem; border: 1px solid #e5e7eb;">
                    <h3 style="color: #374151; margin-bottom: 1rem; font-size: 1.25rem;">Recent Posts</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php foreach ($recent_posts as $recent_post) : ?>
                            <li style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid #f3f4f6;">
                                <a href="<?php echo get_permalink($recent_post->ID); ?>" style="color: #374151; text-decoration: none; font-weight: 500; line-height: 1.4;">
                                    <?php echo get_the_title($recent_post->ID); ?>
                                </a>
                                <div style="color: #9ca3af; font-size: 0.75rem; margin-top: 0.25rem;">
                                    <?php echo get_the_date('M j, Y', $recent_post->ID); ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
                
                <!-- Contact CTA Widget -->
                <div class="sidebar-widget" style="background: linear-gradient(135deg, var(--pink-light), var(--gold-primary)); padding: 1.5rem; border-radius: 1rem; margin-bottom: 2rem; color: white; text-align: center;">
                    <h3 style="color: white; margin-bottom: 1rem; font-size: 1.25rem;">Ready to Start Therapy?</h3>
                    <p style="color: rgba(255, 255, 255, 0.9); font-size: 0.875rem; margin-bottom: 1rem;">
                        Take the first step toward healing and growth.
                    </p>
                    <a href="<?php echo home_url('#contact'); ?>" style="background: white; color: var(--gold-primary); padding: 0.75rem 1.5rem; border-radius: 2rem; text-decoration: none; font-weight: 600; display: inline-block;">
                        Schedule Consultation
                    </a>
                </div>
                
            </aside>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<style>
.blog-post-card {
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.blog-post-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
}

.blog-post-title a:hover {
    color: var(--gold-primary) !important;
}

.blog-read-more:hover {
    color: var(--gold-dark) !important;
}

.blog-pagination {
    margin-top: 2rem;
}

.blog-pagination .page-numbers {
    display: inline-block;
    padding: 0.75rem 1rem;
    margin: 0 0.25rem;
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    color: #6b7280;
    text-decoration: none;
    transition: all 0.3s ease;
}

.blog-pagination .page-numbers:hover,
.blog-pagination .page-numbers.current {
    background: var(--gold-primary);
    color: white;
    border-color: var(--gold-primary);
}

.sidebar-widget h3 {
    position: relative;
    padding-bottom: 0.5rem;
    margin-bottom: 1rem;
}

.sidebar-widget h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px;
    height: 2px;
    background: linear-gradient(90deg, var(--gold-primary), var(--gold-secondary));
}

@media (max-width: 980px) {
    .blog-sidebar {
        padding-left: 0;
        margin-top: 2rem;
    }
    
    .blog-hero-title {
        font-size: 2rem !important;
    }
}

@media (max-width: 768px) {
    .blog-hero-title {
        font-size: 1.75rem !important;
    }
    
    .blog-post-content {
        padding: 1rem !important;
    }
}
</style>