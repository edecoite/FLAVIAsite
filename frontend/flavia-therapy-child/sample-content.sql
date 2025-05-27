/**
 * Sample content for Flavia DeCoite Therapy website
 * Import this through WordPress admin: Tools > Import
 */

-- Sample Services Data
INSERT INTO wp_posts (post_title, post_content, post_excerpt, post_type, post_status) VALUES
(
  'Individual Therapy',
  'Individual therapy provides a safe, confidential space for you to explore your thoughts, feelings, and experiences. Whether you\'re dealing with anxiety, depression, life transitions, or relationship challenges, we\'ll work together to develop strategies for positive change and personal growth.

  My approach combines person-centered therapy with cognitive-behavioral techniques, tailored to your unique needs and goals. In our sessions, you\'ll gain deeper self-awareness, develop healthy coping strategies, and build resilience to navigate life\'s challenges.

  Individual therapy can help you:
  - Process difficult emotions and experiences
  - Develop effective coping strategies
  - Improve self-esteem and confidence
  - Navigate major life transitions
  - Address anxiety and depression
  - Build healthier relationships
  - Achieve personal goals and growth',
  'Personal growth and healing through one-on-one sessions tailored to your unique needs and goals.',
  'flavia_services',
  'publish'
),
(
  'Couples Therapy',
  'Couples therapy helps partners strengthen their relationship through improved communication, conflict resolution, and deeper emotional connection. Whether you\'re newlyweds looking to build a strong foundation or a long-term couple working through challenges, therapy can help you reconnect and thrive together.

  I use evidence-based approaches including Emotionally Focused Therapy (EFT) and the Gottman Method to help couples:
  - Improve communication patterns
  - Resolve conflicts constructively
  - Rebuild trust and intimacy
  - Navigate major life changes together
  - Strengthen emotional bonds

  Couples therapy is beneficial for:
  - Communication difficulties
  - Trust and infidelity issues
  - Intimacy and connection problems
  - Life transitions (marriage, parenthood, career changes)
  - Financial stress and disagreements
  - Family planning and parenting decisions
  - Pre-marital counseling',
  'Strengthen your relationship through improved communication, conflict resolution, and deeper emotional connection.',
  'flavia_services',
  'publish'
),
(
  'Family Counseling',
  'Family counseling focuses on improving family dynamics and relationships between family members of all ages. Every family faces challenges, and therapy provides a neutral space to address conflicts, improve communication, and strengthen family bonds.

  I work with families to understand patterns of interaction that may be causing distress and help develop healthier ways of relating to one another. Family therapy can be particularly helpful during times of transition, crisis, or when family members are struggling with behavioral or emotional issues.

  Family counseling addresses:
  - Parent-child relationship difficulties
  - Sibling conflicts and rivalry
  - Blended family challenges
  - Behavioral issues in children and teens
  - Communication breakdowns
  - Major life transitions
  - Grief and loss within the family
  - Divorce and separation support

  My approach considers the unique dynamics of each family system and works to strengthen connections while respecting individual needs and boundaries.',
  'Navigate family dynamics, resolve conflicts, and build stronger bonds between family members of all ages.',
  'flavia_services',
  'publish'
);

-- Sample Testimonials Data
INSERT INTO wp_posts (post_title, post_content, post_type, post_status) VALUES
(
  'Testimonial from Sarah M.',
  'Flavia helped my husband and I rebuild our relationship when we thought all hope was lost. Her compassionate approach and practical tools made all the difference. We learned how to communicate effectively and reconnect on a deeper level. Our marriage is stronger now than it has ever been.',
  'flavia_testimonials',
  'publish'
),
(
  'Testimonial from Michael R.',
  'After struggling with anxiety for years, I finally found the support I needed with Flavia. Her gentle guidance helped me develop coping strategies that actually work. I feel more confident and in control of my life. The tools I learned in therapy continue to help me every day.',
  'flavia_testimonials',
  'publish'
),
(
  'Testimonial from The Johnson Family',
  'Our family dynamic completely changed for the better after working with Flavia. She taught us how to communicate more effectively and understand each other\'s perspectives. Our teenage daughter is more open with us now, and we feel closer as a family than we have in years.',
  'flavia_testimonials',
  'publish'
);

-- Sample Blog Posts
INSERT INTO wp_posts (post_title, post_content, post_excerpt, post_type, post_status, post_category) VALUES
(
  '5 Signs It\'s Time to Consider Couples Therapy',
  'Many couples wonder when it\'s the right time to seek professional help for their relationship. While every relationship faces challenges, certain signs indicate that couples therapy could be beneficial...

  **1. Communication Has Broken Down**
  When conversations regularly turn into arguments or when one or both partners have stopped communicating altogether, it\'s a clear sign that professional guidance could help.

  **2. Trust Has Been Damaged**
  Whether due to infidelity, financial dishonesty, or other betrayals, rebuilding trust requires specific skills and strategies that therapy can provide.

  **3. You\'re Stuck in Negative Patterns**
  If you find yourselves having the same arguments repeatedly without resolution, a therapist can help identify these patterns and develop new ways of interacting.

  **4. Intimacy Has Decreased**
  When physical or emotional intimacy significantly decreases, it often indicates underlying issues that therapy can address.

  **5. You\'re Considering Separation**
  Before making major decisions about your relationship, couples therapy can help you explore all options and work through issues constructively.

  Remember, seeking therapy is a sign of strength and commitment to your relationship, not failure.',
  'Learn the key indicators that suggest it might be time to seek professional help for your relationship.',
  'post',
  'publish',
  'Relationships'
),
(
  'Understanding Anxiety: When Worry Becomes Overwhelming',
  'Anxiety is a normal human emotion that everyone experiences from time to time. However, when anxiety becomes persistent, excessive, and interferes with daily life, it may indicate an anxiety disorder...

  **What is Normal Anxiety vs. Anxiety Disorder?**
  Normal anxiety is temporary and situational, while anxiety disorders involve persistent worry that significantly impacts your life.

  **Common Types of Anxiety Disorders:**
  - Generalized Anxiety Disorder (GAD)
  - Panic Disorder
  - Social Anxiety Disorder
  - Specific Phobias

  **Physical Symptoms of Anxiety:**
  - Rapid heartbeat
  - Sweating
  - Muscle tension
  - Difficulty sleeping
  - Fatigue

  **Coping Strategies:**
  - Deep breathing exercises
  - Regular exercise
  - Mindfulness and meditation
  - Limiting caffeine
  - Seeking professional support

  If anxiety is interfering with your daily life, relationships, or work, it may be time to consider professional help. Therapy can provide you with effective tools to manage anxiety and improve your quality of life.',
  'Understanding the difference between normal worry and anxiety disorders, plus practical coping strategies.',
  'post',
  'publish',
  'Mental Health'
),
(
  'The Importance of Self-Care in Mental Health',
  'Self-care isn\'t selfish—it\'s essential for maintaining good mental health and well-being. In our busy lives, we often put everyone else\'s needs before our own, but this can lead to burnout and emotional exhaustion...

  **What is Self-Care?**
  Self-care involves intentionally taking care of your physical, emotional, and mental health needs.

  **Types of Self-Care:**

  **Physical Self-Care:**
  - Regular exercise
  - Adequate sleep
  - Nutritious eating
  - Medical check-ups

  **Emotional Self-Care:**
  - Setting boundaries
  - Expressing feelings
  - Practicing gratitude
  - Seeking support

  **Mental Self-Care:**
  - Learning new skills
  - Reading
  - Meditation
  - Limiting negative media

  **Social Self-Care:**
  - Spending time with loved ones
  - Building supportive relationships
  - Setting social boundaries

  **Creating a Self-Care Plan:**
  1. Identify your needs
  2. Choose realistic activities
  3. Schedule self-care time
  4. Start small and build gradually
  5. Be consistent

  Remember, self-care looks different for everyone. The key is finding what works for you and making it a priority.',
  'Discover why self-care is crucial for mental health and learn practical strategies to incorporate it into your daily life.',
  'post',
  'publish',
  'Wellness'
);

-- Meta data for services
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES
-- Individual Therapy meta
((SELECT ID FROM wp_posts WHERE post_title = 'Individual Therapy' AND post_type = 'flavia_services'), '_flavia_service_icon', 'heart'),
((SELECT ID FROM wp_posts WHERE post_title = 'Individual Therapy' AND post_type = 'flavia_services'), '_flavia_service_features', 'Anxiety & Depression Support\nLife Transition Guidance\nSelf-Esteem Building\nCoping Strategy Development\nPersonal Growth Focus\nTrauma Recovery'),
((SELECT ID FROM wp_posts WHERE post_title = 'Individual Therapy' AND post_type = 'flavia_services'), '_flavia_service_price', '$150'),
((SELECT ID FROM wp_posts WHERE post_title = 'Individual Therapy' AND post_type = 'flavia_services'), '_flavia_service_duration', '50 minutes'),

-- Couples Therapy meta
((SELECT ID FROM wp_posts WHERE post_title = 'Couples Therapy' AND post_type = 'flavia_services'), '_flavia_service_icon', 'users'),
((SELECT ID FROM wp_posts WHERE post_title = 'Couples Therapy' AND post_type = 'flavia_services'), '_flavia_service_features', 'Communication Skills\nConflict Resolution\nIntimacy Building\nTrust Rebuilding\nRelationship Strengthening\nPre-marital Counseling'),
((SELECT ID FROM wp_posts WHERE post_title = 'Couples Therapy' AND post_type = 'flavia_services'), '_flavia_service_price', '$175'),
((SELECT ID FROM wp_posts WHERE post_title = 'Couples Therapy' AND post_type = 'flavia_services'), '_flavia_service_duration', '60 minutes'),

-- Family Counseling meta
((SELECT ID FROM wp_posts WHERE post_title = 'Family Counseling' AND post_type = 'flavia_services'), '_flavia_service_icon', 'home'),
((SELECT ID FROM wp_posts WHERE post_title = 'Family Counseling' AND post_type = 'flavia_services'), '_flavia_service_features', 'Parent-Child Relationships\nSibling Conflicts\nBlended Families\nFamily Communication\nBehavioral Issues\nTransition Support'),
((SELECT ID FROM wp_posts WHERE post_title = 'Family Counseling' AND post_type = 'flavia_services'), '_flavia_service_price', '$185'),
((SELECT ID FROM wp_posts WHERE post_title = 'Family Counseling' AND post_type = 'flavia_services'), '_flavia_service_duration', '60 minutes');

-- Meta data for testimonials
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES
-- Sarah M. testimonial
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from Sarah M.' AND post_type = 'flavia_testimonials'), '_flavia_client_name', 'Sarah M.'),
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from Sarah M.' AND post_type = 'flavia_testimonials'), '_flavia_client_rating', '5'),
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from Sarah M.' AND post_type = 'flavia_testimonials'), '_flavia_service_type', 'Couples Therapy'),
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from Sarah M.' AND post_type = 'flavia_testimonials'), '_flavia_display_order', '1'),

-- Michael R. testimonial
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from Michael R.' AND post_type = 'flavia_testimonials'), '_flavia_client_name', 'Michael R.'),
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from Michael R.' AND post_type = 'flavia_testimonials'), '_flavia_client_rating', '5'),
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from Michael R.' AND post_type = 'flavia_testimonials'), '_flavia_service_type', 'Individual Therapy'),
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from Michael R.' AND post_type = 'flavia_testimonials'), '_flavia_display_order', '2'),

-- Johnson Family testimonial
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from The Johnson Family' AND post_type = 'flavia_testimonials'), '_flavia_client_name', 'The Johnson Family'),
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from The Johnson Family' AND post_type = 'flavia_testimonials'), '_flavia_client_rating', '5'),
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from The Johnson Family' AND post_type = 'flavia_testimonials'), '_flavia_service_type', 'Family Counseling'),
((SELECT ID FROM wp_posts WHERE post_title = 'Testimonial from The Johnson Family' AND post_type = 'flavia_testimonials'), '_flavia_display_order', '3');

-- Default customizer settings
INSERT INTO wp_options (option_name, option_value) VALUES
('theme_mods_flavia-therapy-child', 'a:6:{s:13:"flavia_phone";s:14:"(925) 354-6444";s:13:"flavia_email";s:19:"edecoite@gmail.com";s:15:"flavia_address";s:12:"Danville, CA";s:13:"flavia_hours";s:26:"Monday - Friday: 9AM - 6PM";s:15:"flavia_license";s:20:"LMFT License #XXXXX";s:18:"custom_css_post_id";i:-1;}');