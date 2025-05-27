import React from 'react';
import { motion } from 'framer-motion';
import { 
  X, 
  Heart, 
  Users, 
  Calendar, 
  Phone,
  Mail,
  MapPin,
  Clock,
  Star,
  Quote,
  Award,
  Shield,
  CheckCircle,
  ArrowRight,
  User,
  MessageCircle,
  BookOpen,
  Sparkles
} from 'lucide-react';

// Header Component
export const Header = ({ onBookAppointment }) => {
  const [isMenuOpen, setIsMenuOpen] = React.useState(false);

  return (
    <header className="bg-white/95 backdrop-blur-md border-b border-gray-100 sticky top-0 z-50 shadow-sm">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between h-20">
          <div className="flex items-center">
            <div className="flex-shrink-0">
              <div className="flex items-center space-x-3">
                <div className="w-12 h-12 bg-gradient-to-br from-pink-200 to-yellow-500 rounded-full flex items-center justify-center border-2 border-yellow-500 shadow-lg">
                  <span className="text-gray-800 font-bold text-lg">FD</span>
                </div>
                <div>
                  <h1 className="text-xl font-bold text-gray-900">Flavia DeCoite</h1>
                  <p className="text-sm text-gray-600">LMFT, Psychotherapy</p>
                </div>
              </div>
            </div>
          </div>
          
          <nav className="hidden md:flex space-x-8">
            <a href="#home" className="text-gray-700 hover:text-yellow-600 font-medium transition-colors">
              Home
            </a>
            <a href="#about" className="text-gray-700 hover:text-yellow-600 font-medium transition-colors">
              About
            </a>
            <a href="#services" className="text-gray-700 hover:text-yellow-600 font-medium transition-colors">
              Services
            </a>
            <a href="#approach" className="text-gray-700 hover:text-yellow-600 font-medium transition-colors">
              Approach
            </a>
            <a href="#contact" className="text-gray-700 hover:text-yellow-600 font-medium transition-colors">
              Contact
            </a>
          </nav>
          
          <div className="flex items-center space-x-4">
            <a href="tel:925-354-6444" className="hidden md:flex items-center text-gray-600 hover:text-yellow-600 transition-colors">
              <Phone className="h-4 w-4 mr-2" />
              (925) 354-6444
            </a>
            <button 
              onClick={onBookAppointment}
              className="bg-gradient-to-r from-pink-200 via-pink-300 to-yellow-500 text-gray-800 px-6 py-2 rounded-full hover:shadow-lg transition-all duration-300 font-medium border border-yellow-500"
            >
              Book Consultation
            </button>
          </div>
        </div>
      </div>
    </header>
  );
};

// Hero Section Component
export const HeroSection = ({ onBookAppointment }) => {
  return (
    <section id="home" className="relative min-h-screen flex items-center">
      <div 
        className="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style={{
          backgroundImage: `linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/5217851/pexels-photo-5217851.jpeg')`,
        }}
      />
      
      <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <motion.div 
            initial={{ opacity: 0, y: 30 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8 }}
            className="text-white"
          >
            <div className="mb-6">
              <span className="inline-block bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-medium mb-4">
                Licensed Marriage & Family Therapist
              </span>
            </div>
            
            <h1 className="text-5xl lg:text-6xl font-bold leading-tight mb-6">
              The Care You{' '}
              <span className="bg-gradient-to-r from-pink-200 to-yellow-500 bg-clip-text text-transparent">
                Deserve
              </span>
            </h1>
            
            <p className="text-xl text-gray-200 mb-8 leading-relaxed max-w-lg">
              Compassionate, evidence-based therapy to help you heal, grow, and thrive. 
              In a safe, judgment-free environment, we'll work together toward your goals.
            </p>
            
            <div className="flex flex-col sm:flex-row gap-4">
              <button 
                onClick={onBookAppointment}
                className="bg-gradient-to-r from-pink-200 via-pink-300 to-yellow-500 text-gray-800 px-8 py-4 rounded-full hover:shadow-xl transition-all duration-300 font-medium text-lg flex items-center justify-center border border-yellow-500"
              >
                Schedule Consultation
                <ArrowRight className="ml-2 h-5 w-5" />
              </button>
              <a 
                href="tel:925-354-6444"
                className="border-2 border-white text-white px-8 py-4 rounded-full hover:bg-white hover:text-gray-900 transition-all duration-300 font-medium text-lg text-center"
              >
                Call (925) 354-6444
              </a>
            </div>
            
            <div className="mt-12 flex items-center space-x-6">
              <div className="flex items-center">
                <div className="flex -space-x-1">
                  {[...Array(5)].map((_, i) => (
                    <Star key={i} className="h-5 w-5 text-yellow-400 fill-current" />
                  ))}
                </div>
                <span className="ml-2 text-white text-sm">5.0 Rating</span>
              </div>
              <div className="text-white text-sm">
                <span className="font-semibold">15+ Years</span> Experience
              </div>
            </div>
          </motion.div>
          
          <motion.div 
            initial={{ opacity: 0, x: 30 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8, delay: 0.2 }}
            className="hidden lg:block"
          >
            <div className="relative">
              <div className="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                <div className="text-center text-white">
                  <Quote className="h-12 w-12 mx-auto mb-4 text-purple-300" />
                  <blockquote className="text-lg italic mb-4">
                    "The curious paradox is that when I accept myself just as I am, 
                    then I can change."
                  </blockquote>
                  <cite className="text-purple-300 font-medium">— Carl Rogers</cite>
                </div>
              </div>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

// About Section Component
export const AboutSection = () => {
  return (
    <section id="about" className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <motion.div 
            initial={{ opacity: 0, x: -30 }}
            whileInView={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8 }}
            viewport={{ once: true }}
          >
            <div className="relative">
              <img 
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAwIiBoZWlnaHQ9IjYwMCIgdmlld0JveD0iMCAwIDUwMCA2MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNjAwIiBmaWxsPSIjRjNGNEY2Ii8+Cjx0ZXh0IHg9IjI1MCIgeT0iMzAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmb250LWZhbWlseT0iSW50ZXIiIGZvbnQtc2l6ZT0iMTgiIGZpbGw9IiM2QjcyODAiPkZsYXZpYSBEZUNvaXRlLCBMTUZUPC90ZXh0Pgo8L3N2Zz4K"
                alt="Flavia DeCoite, LMFT"
                className="w-full h-auto rounded-2xl shadow-2xl"
              />
              <div className="absolute -bottom-6 -right-6 bg-gradient-to-r from-amber-500 to-yellow-500 rounded-2xl p-6 text-white">
                <Award className="h-8 w-8 mb-2" />
                <div className="text-sm font-medium">Licensed LMFT</div>
                <div className="text-xs opacity-90">California #XXXXX</div>
              </div>
            </div>
          </motion.div>
          
          <motion.div 
            initial={{ opacity: 0, x: 30 }}
            whileInView={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8, delay: 0.2 }}
            viewport={{ once: true }}
          >
            <div className="mb-6">
              <span className="inline-block bg-pink-100 text-pink-600 px-4 py-2 rounded-full text-sm font-medium mb-4">
                About Flavia
              </span>
            </div>
            
            <h2 className="text-4xl font-bold text-gray-900 mb-6 leading-tight">
              Compassionate Healing for{' '}
              <span className="bg-gradient-to-r from-pink-200 to-yellow-500 bg-clip-text text-transparent">
                Mind & Heart
              </span>
            </h2>
            
            <div className="space-y-6 text-gray-700 leading-relaxed">
              <p className="text-lg">
                With over 15 years of experience in marriage and family therapy, I am dedicated 
                to providing a safe, nurturing environment where healing and growth can flourish.
              </p>
              
              <p>
                My approach is rooted in humanistic principles, believing that every individual 
                has the innate capacity for positive change when provided with the right support 
                and unconditional acceptance.
              </p>
              
              <p>
                I specialize in working with couples, families, and individuals facing challenges 
                such as relationship conflicts, anxiety, depression, trauma, and life transitions. 
                Together, we'll explore your unique story and develop practical strategies for lasting change.
              </p>
            </div>
            
            <div className="mt-8 grid grid-cols-2 gap-6">
              <div className="flex items-center space-x-3">
                <Shield className="h-6 w-6 text-purple-600" />
                <div>
                  <div className="font-semibold text-gray-900">Licensed LMFT</div>
                  <div className="text-sm text-gray-600">California Licensed</div>
                </div>
              </div>
              <div className="flex items-center space-x-3">
                <BookOpen className="h-6 w-6 text-purple-600" />
                <div>
                  <div className="font-semibold text-gray-900">15+ Years</div>
                  <div className="text-sm text-gray-600">Professional Experience</div>
                </div>
              </div>
              <div className="flex items-center space-x-3">
                <Heart className="h-6 w-6 text-purple-600" />
                <div>
                  <div className="font-semibold text-gray-900">Specialized Care</div>
                  <div className="text-sm text-gray-600">Couples & Families</div>
                </div>
              </div>
              <div className="flex items-center space-x-3">
                <Sparkles className="h-6 w-6 text-purple-600" />
                <div>
                  <div className="font-semibold text-gray-900">Holistic Approach</div>
                  <div className="text-sm text-gray-600">Mind, Body, Spirit</div>
                </div>
              </div>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

// Services Section Component
export const ServicesSection = () => {
  const services = [
    {
      icon: Users,
      title: "Couples Therapy",
      description: "Strengthen your relationship through improved communication, conflict resolution, and deeper emotional connection.",
      image: "https://images.pexels.com/photos/4098232/pexels-photo-4098232.jpeg",
      features: ["Communication Skills", "Conflict Resolution", "Intimacy Building", "Trust Rebuilding"]
    },
    {
      icon: Heart,
      title: "Family Counseling",
      description: "Navigate family dynamics, resolve conflicts, and build stronger bonds between family members of all ages.",
      image: "https://images.pexels.com/photos/5217833/pexels-photo-5217833.jpeg",
      features: ["Parent-Child Relationships", "Sibling Conflicts", "Blended Families", "Family Communication"]
    },
    {
      icon: User,
      title: "Individual Therapy",
      description: "Personal growth and healing through one-on-one sessions tailored to your unique needs and goals.",
      image: "https://images.pexels.com/photos/4098369/pexels-photo-4098369.jpeg",
      features: ["Anxiety & Depression", "Trauma Recovery", "Life Transitions", "Self-Esteem Building"]
    }
  ];

  return (
    <section id="services" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8 }}
          viewport={{ once: true }}
          className="text-center mb-16"
        >
          <span className="inline-block bg-pink-100 text-pink-600 px-4 py-2 rounded-full text-sm font-medium mb-4">
            Therapeutic Services
          </span>
          <h2 className="text-4xl font-bold text-gray-900 mb-6">
            Comprehensive Mental Health{' '}
            <span className="bg-gradient-to-r from-pink-200 to-yellow-500 bg-clip-text text-transparent">
              Support
            </span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Evidence-based therapeutic approaches tailored to your unique needs and goals for healing and growth.
          </p>
        </motion.div>
        
        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <motion.div 
              key={service.title}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.8, delay: index * 0.1 }}
              viewport={{ once: true }}
              className="group hover:shadow-2xl transition-all duration-300 rounded-2xl overflow-hidden bg-white border border-gray-100"
            >
              <div className="relative overflow-hidden">
                <img 
                  src={service.image}
                  alt={service.title}
                  className="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent" />
                <div className="absolute top-4 left-4">
                  <div className="bg-white/20 backdrop-blur-sm rounded-full p-3">
                    <service.icon className="h-6 w-6 text-white" />
                  </div>
                </div>
              </div>
              
              <div className="p-6">
                <h3 className="text-xl font-bold text-gray-900 mb-3">
                  {service.title}
                </h3>
                <p className="text-gray-600 mb-4 leading-relaxed">
                  {service.description}
                </p>
                
                <div className="space-y-2">
                  {service.features.map((feature, idx) => (
                    <div key={idx} className="flex items-center text-sm">
                      <CheckCircle className="h-4 w-4 text-purple-600 mr-2 flex-shrink-0" />
                      <span className="text-gray-700">{feature}</span>
                    </div>
                  ))}
                </div>
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

// Approach Section Component
export const ApproachSection = () => {
  const approaches = [
    {
      title: "Person-Centered Therapy",
      description: "Creating a non-judgmental, empathetic environment where you feel heard, understood, and valued.",
      icon: Heart
    },
    {
      title: "Cognitive Behavioral Therapy",
      description: "Identifying and changing negative thought patterns that impact your emotions and behaviors.",
      icon: MessageCircle
    },
    {
      title: "Systems Theory",
      description: "Understanding how family and relationship dynamics influence individual well-being and growth.",
      icon: Users
    }
  ];

  return (
    <section id="approach" className="py-20 bg-gradient-to-br from-purple-50 to-pink-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <motion.div 
            initial={{ opacity: 0, x: -30 }}
            whileInView={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8 }}
            viewport={{ once: true }}
          >
            <span className="inline-block bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-medium mb-4">
              Therapeutic Approach
            </span>
            <h2 className="text-4xl font-bold text-gray-900 mb-6 leading-tight">
              Evidence-Based{' '}
              <span className="bg-gradient-to-r from-pink-200 to-amber-500 bg-clip-text text-transparent">
                Healing Methods
              </span>
            </h2>
            
            <p className="text-lg text-gray-700 mb-8 leading-relaxed">
              My therapeutic approach is grounded in the belief that every person has the capacity 
              for growth and positive change. I integrate multiple evidence-based modalities to 
              create a personalized treatment plan that honors your unique journey.
            </p>
            
            <div className="space-y-6">
              {approaches.map((approach, index) => (
                <motion.div 
                  key={approach.title}
                  initial={{ opacity: 0, y: 20 }}
                  whileInView={{ opacity: 1, y: 0 }}
                  transition={{ duration: 0.6, delay: index * 0.1 }}
                  viewport={{ once: true }}
                  className="flex items-start space-x-4"
                >
                  <div className="bg-gradient-to-r from-amber-500 to-yellow-500 rounded-lg p-3 flex-shrink-0">
                    <approach.icon className="h-6 w-6 text-white" />
                  </div>
                  <div>
                    <h3 className="font-bold text-gray-900 mb-2">{approach.title}</h3>
                    <p className="text-gray-600 text-sm leading-relaxed">{approach.description}</p>
                  </div>
                </motion.div>
              ))}
            </div>
          </motion.div>
          
          <motion.div 
            initial={{ opacity: 0, x: 30 }}
            whileInView={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8, delay: 0.2 }}
            viewport={{ once: true }}
          >
            <div className="relative">
              <img 
                src="https://images.unsplash.com/photo-1520605728164-b6a5c6814203?crop=entropy&cs=srgb&fm=jpg&ixid=M3w3NDQ2NDN8MHwxfHNlYXJjaHwzfHx0aGVyYXB5JTIwb2ZmaWNlfGVufDB8fHx8MTc0ODI5NjU2MHww&ixlib=rb-4.1.0&q=85"
                alt="Peaceful therapy environment"
                className="w-full h-auto rounded-2xl shadow-2xl"
              />
              <div className="absolute -bottom-6 -left-6 bg-white rounded-2xl p-6 shadow-xl border border-gray-100">
                <Quote className="h-8 w-8 text-purple-600 mb-2" />
                <p className="text-sm text-gray-700 italic mb-2">
                  "Your healing journey is unique, and together we'll find the path that works for you."
                </p>
                <p className="text-xs text-gray-500 font-medium">— Flavia DeCoite, LMFT</p>
              </div>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

// Testimonials Section Component
export const TestimonialsSection = () => {
  const testimonials = [
    {
      name: "Sarah M.",
      text: "Flavia helped my husband and I rebuild our relationship when we thought all hope was lost. Her compassionate approach and practical tools made all the difference.",
      rating: 5,
      service: "Couples Therapy"
    },
    {
      name: "Michael R.",
      text: "After struggling with anxiety for years, I finally found the support I needed. Flavia's gentle guidance helped me develop coping strategies that actually work.",
      rating: 5,
      service: "Individual Therapy"
    },
    {
      name: "The Johnson Family",
      text: "Our family dynamic completely changed for the better. Flavia taught us how to communicate more effectively and understand each other's perspectives.",
      rating: 5,
      service: "Family Counseling"
    }
  ];

  return (
    <section className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8 }}
          viewport={{ once: true }}
          className="text-center mb-16"
        >
          <span className="inline-block bg-purple-100 text-purple-600 px-4 py-2 rounded-full text-sm font-medium mb-4">
            Client Testimonials
          </span>
          <h2 className="text-4xl font-bold text-gray-900 mb-6">
            Stories of{' '}
            <span className="bg-gradient-to-r from-pink-200 to-amber-500 bg-clip-text text-transparent">
              Transformation
            </span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Real experiences from clients who have found healing, growth, and renewed hope through therapy.
          </p>
        </motion.div>
        
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <motion.div 
              key={testimonial.name}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.8, delay: index * 0.1 }}
              viewport={{ once: true }}
              className="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-100"
            >
              <div className="flex items-center mb-4">
                {[...Array(testimonial.rating)].map((_, i) => (
                  <Star key={i} className="h-5 w-5 text-yellow-400 fill-current" />
                ))}
              </div>
              
              <p className="text-gray-700 mb-4 leading-relaxed italic">
                "{testimonial.text}"
              </p>
              
              <div className="border-t border-purple-200 pt-4">
                <div className="font-semibold text-gray-900">{testimonial.name}</div>
                <div className="text-sm text-purple-600">{testimonial.service}</div>
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

// Contact Section Component
export const ContactSection = ({ onBookAppointment }) => {
  return (
    <section id="contact" className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16">
          <motion.div 
            initial={{ opacity: 0, x: -30 }}
            whileInView={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8 }}
            viewport={{ once: true }}
          >
            <span className="inline-block bg-purple-100 text-purple-600 px-4 py-2 rounded-full text-sm font-medium mb-4">
              Get In Touch
            </span>
            <h2 className="text-4xl font-bold text-gray-900 mb-6 leading-tight">
              Ready to Begin Your{' '}
              <span className="bg-gradient-to-r from-pink-200 to-amber-500 bg-clip-text text-transparent">
                Healing Journey?
              </span>
            </h2>
            
            <p className="text-lg text-gray-700 mb-8 leading-relaxed">
              Taking the first step toward healing takes courage. I'm here to support you 
              with compassion, expertise, and understanding. Let's work together toward 
              positive change.
            </p>
            
            <div className="space-y-6">
              <div className="flex items-center space-x-4">
                <div className="bg-gradient-to-r from-amber-500 to-yellow-500 rounded-lg p-3">
                  <Phone className="h-6 w-6 text-white" />
                </div>
                <div>
                  <div className="font-semibold text-gray-900">Phone</div>
                  <a href="tel:925-354-6444" className="text-purple-600 hover:text-purple-700">
                    (925) 354-6444
                  </a>
                </div>
              </div>
              
              <div className="flex items-center space-x-4">
                <div className="bg-gradient-to-r from-amber-500 to-yellow-500 rounded-lg p-3">
                  <Mail className="h-6 w-6 text-white" />
                </div>
                <div>
                  <div className="font-semibold text-gray-900">Email</div>
                  <a href="mailto:info@flaviadecoitemft.com" className="text-purple-600 hover:text-purple-700">
                    info@flaviadecoitemft.com
                  </a>
                </div>
              </div>
              
              <div className="flex items-center space-x-4">
                <div className="bg-gradient-to-r from-amber-500 to-yellow-500 rounded-lg p-3">
                  <MapPin className="h-6 w-6 text-white" />
                </div>
                <div>
                  <div className="font-semibold text-gray-900">Location</div>
                  <div className="text-gray-600">Danville, CA</div>
                </div>
              </div>
              
              <div className="flex items-center space-x-4">
                <div className="bg-gradient-to-r from-amber-500 to-yellow-500 rounded-lg p-3">
                  <Clock className="h-6 w-6 text-white" />
                </div>
                <div>
                  <div className="font-semibold text-gray-900">Office Hours</div>
                  <div className="text-gray-600">Monday - Friday: 9AM - 6PM</div>
                </div>
              </div>
            </div>
            
            <div className="mt-8">
              <button 
                onClick={onBookAppointment}
                className="bg-gradient-to-r from-purple-600 via-pink-200 to-amber-500 text-white px-8 py-4 rounded-full hover:shadow-xl transition-all duration-300 font-medium text-lg flex items-center"
              >
                Schedule Free Consultation
                <ArrowRight className="ml-2 h-5 w-5" />
              </button>
            </div>
          </motion.div>
          
          <motion.div 
            initial={{ opacity: 0, x: 30 }}
            whileInView={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8, delay: 0.2 }}
            viewport={{ once: true }}
          >
            <div className="bg-white rounded-2xl shadow-2xl p-8">
              <img 
                src="https://images.pexels.com/photos/5699430/pexels-photo-5699430.jpeg"
                alt="Supportive therapy environment"
                className="w-full h-64 object-cover rounded-xl mb-6"
              />
              
              <div className="text-center">
                <h3 className="text-xl font-bold text-gray-900 mb-4">
                  Free 15-Minute Consultation
                </h3>
                <p className="text-gray-600 mb-6">
                  Not sure if therapy is right for you? Let's talk. I offer a brief, 
                  no-pressure consultation to discuss your needs and how I can help.
                </p>
                
                <div className="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-4 border border-purple-100">
                  <div className="flex items-center justify-center mb-2">
                    <Shield className="h-5 w-5 text-purple-600 mr-2" />
                    <span className="text-sm font-medium text-purple-700">HIPAA Compliant</span>
                  </div>
                  <p className="text-xs text-gray-600">
                    Your privacy and confidentiality are my top priorities
                  </p>
                </div>
              </div>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

// Footer Component
export const Footer = () => {
  return (
    <footer className="bg-gray-900 text-white py-12">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div className="col-span-1 md:col-span-2">
            <div className="flex items-center space-x-3 mb-4">
              <div className="w-10 h-10 bg-gradient-to-br from-pink-200 to-yellow-500 rounded-full flex items-center justify-center border-2 border-yellow-500 shadow-lg">
                <span className="text-gray-800 font-bold">FD</span>
              </div>
              <div>
                <h3 className="text-lg font-bold">Flavia DeCoite, LMFT</h3>
                <p className="text-gray-400 text-sm">Licensed Marriage & Family Therapist</p>
              </div>
            </div>
            <p className="text-gray-400 text-sm leading-relaxed max-w-md">
              Providing compassionate, evidence-based therapy to help individuals, 
              couples, and families heal, grow, and thrive in the San Francisco Bay Area.
            </p>
          </div>
          
          <div>
            <h4 className="font-semibold mb-4">Quick Links</h4>
            <ul className="space-y-2 text-sm text-gray-400">
              <li><a href="#about" className="hover:text-white transition-colors">About</a></li>
              <li><a href="#services" className="hover:text-white transition-colors">Services</a></li>
              <li><a href="#approach" className="hover:text-white transition-colors">Approach</a></li>
              <li><a href="#contact" className="hover:text-white transition-colors">Contact</a></li>
            </ul>
          </div>
          
          <div>
            <h4 className="font-semibold mb-4">Contact Info</h4>
            <ul className="space-y-2 text-sm text-gray-400">
              <li>(925) 354-6444</li>
              <li>Danville, CA</li>
              <li>LMFT License #XXXXX</li>
            </ul>
          </div>
        </div>
        
        <div className="border-t border-gray-800 mt-8 pt-8 text-center">
          <p className="text-gray-400 text-sm">
            © 2024 Flavia DeCoite, LMFT. All rights reserved. | Privacy Policy | Terms of Service
          </p>
        </div>
      </div>
    </footer>
  );
};

// Appointment Modal Component
export const AppointmentModal = ({ isOpen, onClose }) => {
  if (!isOpen) return null;

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 modal-backdrop">
      <motion.div 
        initial={{ opacity: 0, scale: 0.9 }}
        animate={{ opacity: 1, scale: 1 }}
        exit={{ opacity: 0, scale: 0.9 }}
        className="bg-white rounded-2xl p-8 w-full max-w-md mx-4 max-h-[90vh] overflow-y-auto"
      >
        <div className="flex items-center justify-between mb-6">
          <h2 className="text-2xl font-bold text-gray-900">Schedule Consultation</h2>
          <button 
            onClick={onClose}
            className="text-gray-400 hover:text-gray-600 transition-colors"
          >
            <X className="h-6 w-6" />
          </button>
        </div>
        
        <form className="space-y-4">
          <div className="grid grid-cols-2 gap-4">
            <div>
              <label className="block text-sm font-medium text-gray-700 mb-1">
                First Name
              </label>
              <input 
                type="text" 
                className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                placeholder="John"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-700 mb-1">
                Last Name
              </label>
              <input 
                type="text" 
                className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                placeholder="Doe"
              />
            </div>
          </div>
          
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">
              Email
            </label>
            <input 
              type="email" 
              className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
              placeholder="john.doe@example.com"
            />
          </div>
          
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">
              Phone
            </label>
            <input 
              type="tel" 
              className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
              placeholder="(555) 123-4567"
            />
          </div>
          
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">
              Service Interest
            </label>
            <select className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
              <option value="">Select a service</option>
              <option value="individual">Individual Therapy</option>
              <option value="couples">Couples Therapy</option>
              <option value="family">Family Counseling</option>
              <option value="consultation">Free Consultation</option>
            </select>
          </div>
          
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">
              Message (Optional)
            </label>
            <textarea 
              rows={3}
              className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
              placeholder="Tell me a bit about what brought you here..."
            />
          </div>
          
          <div className="bg-purple-50 border border-purple-200 rounded-lg p-4">
            <p className="text-xs text-purple-700">
              <Shield className="h-4 w-4 inline mr-1" />
              Your information is confidential and HIPAA compliant. 
              I'll contact you within 24 hours to schedule your appointment.
            </p>
          </div>
          
          <button 
            type="submit"
            className="w-full bg-gradient-to-r from-purple-600 via-pink-200 to-amber-500 text-white py-3 rounded-lg hover:shadow-lg transition-all duration-300 font-medium"
          >
            Request Appointment
          </button>
        </form>
        
        <p className="text-center text-xs text-gray-500 mt-4">
          Or call directly: <a href="tel:925-354-6444" className="text-purple-600 font-medium">(925) 354-6444</a>
        </p>
      </motion.div>
    </div>
  );
};