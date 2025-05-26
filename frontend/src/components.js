import React from 'react';
import { motion } from 'framer-motion';
import { 
  X, 
  ChevronRight, 
  Users, 
  Calendar, 
  TrendingUp, 
  Smartphone,
  CreditCard,
  BarChart3,
  Mail,
  FileText,
  Brain,
  Target,
  Clock,
  Star
} from 'lucide-react';

// Header Component
export const Header = ({ onSignInClick, onSignUpClick }) => {
  return (
    <header className="bg-white border-b border-gray-100 sticky top-0 z-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between h-16">
          <div className="flex items-center">
            <div className="flex-shrink-0">
              <div className="bg-black text-white px-3 py-1 rounded font-bold text-lg">
                btwb
              </div>
            </div>
          </div>
          
          <nav className="hidden md:flex space-x-8">
            <a href="#" className="text-gray-900 hover:text-blue-600 font-medium">
              PROGRAMS
            </a>
            <a href="#" className="text-gray-900 hover:text-blue-600 font-medium">
              PRICING
            </a>
          </nav>
          
          <div className="flex items-center space-x-4">
            <button 
              onClick={onSignInClick}
              className="text-gray-900 hover:text-blue-600 font-medium"
            >
              SIGN IN
            </button>
            <button 
              onClick={onSignUpClick}
              className="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 font-medium"
            >
              SIGN UP
            </button>
          </div>
        </div>
      </div>
    </header>
  );
};

// Hero Section Component
export const HeroSection = ({ onBookDemoClick }) => {
  return (
    <section className="bg-gray-50 py-20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6 }}
          >
            <h1 className="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
              YOUR ALL-IN-ONE GYM MANAGEMENT SYSTEM THAT PUTS{' '}
              <span className="text-blue-600">FITNESS FIRST.</span>
            </h1>
            
            <div className="flex items-center mb-6">
              <div className="bg-black text-white px-3 py-1 rounded font-bold text-sm mr-3">
                btwb
              </div>
              <div className="text-sm text-gray-600">
                Trusted for over a decade by hundreds of thousands of users.
              </div>
              <div className="flex items-center ml-2">
                {[...Array(5)].map((_, i) => (
                  <Star key={i} className="h-4 w-4 text-yellow-400 fill-current" />
                ))}
                <span className="text-sm text-gray-600 ml-1">1.5k Ratings</span>
              </div>
            </div>
            
            <p className="text-lg text-gray-700 mb-8 leading-relaxed">
              Experience premier workout tracking with btwb's all-in-one gym management system. 
              Focus on what drives gym growth and retention: fostering culture and providing programming 
              that consistently delivers exceptional results.
            </p>
            
            <button 
              onClick={onBookDemoClick}
              className="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 font-medium text-lg"
            >
              BOOK A DEMO
            </button>
          </motion.div>
          
          <motion.div 
            initial={{ opacity: 0, x: 20 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.6, delay: 0.2 }}
            className="relative"
          >
            <div className="relative">
              <img 
                src="https://images.unsplash.com/photo-1434494878577-86c23bcb06b9"
                alt="Gym management dashboard"
                className="w-full h-auto rounded-lg shadow-2xl"
              />
              <div className="absolute -bottom-4 -left-4 w-32 h-32">
                <img 
                  src="https://images.pexels.com/photos/267391/pexels-photo-267391.jpeg"
                  alt="Mobile fitness tracking"
                  className="w-full h-full object-cover rounded-lg shadow-lg"
                />
              </div>
              <div className="absolute -top-4 -right-4 w-40 h-28">
                <img 
                  src="https://images.pexels.com/photos/5083221/pexels-photo-5083221.jpeg"
                  alt="Fitness tracking device"
                  className="w-full h-full object-cover rounded-lg shadow-lg"
                />
              </div>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

// Affiliate Section Component
export const AffiliateSection = () => {
  const affiliates = [
    {
      name: "MAYHEM AFFILIATE",
      description: "CrossFit Mayhem's Gym programming. Created by Rich Froning Jr., 5-time CrossFit Games Champion, and led by Hunter McIntyre, the winningest coach in CrossFit history.",
      image: "https://images.pexels.com/photos/1552242/pexels-photo-1552242.jpeg",
      color: "bg-red-600"
    },
    {
      name: "PRVN AFFILIATE", 
      description: "Preparing and motivating coaches for every session to inspire members. Built on years of knowledge of both the elite and everyday affiliate athletes.",
      image: "https://images.unsplash.com/photo-1601422407692-ec4eeec1d9b3",
      color: "bg-orange-600"
    },
    {
      name: "LINCHPIN GYM",
      description: "Top notch programming from the warm-up to the cool down & everything in between. Five different programs just in case one doesn't work – we've provided. We handle all of this so you can focus on your members & your business.",
      image: "https://images.unsplash.com/photo-1517343985841-f8b2d66e010b",
      color: "bg-gray-900"
    }
  ];

  return (
    <section className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6 }}
          viewport={{ once: true }}
          className="mb-12"
        >
          <div className="border-l-4 border-blue-600 pl-4">
            <h2 className="text-3xl font-bold text-gray-900 mb-2">
              TOP-TIER AFFILIATE PROGRAMMING
            </h2>
            <p className="text-gray-600">
              Programming by top coaches in the community automatically added to your programming calendar each week.
            </p>
            <a href="#" className="text-blue-600 hover:text-blue-700 font-medium inline-flex items-center mt-2">
              MORE PROGRAMS <ChevronRight className="h-4 w-4 ml-1" />
            </a>
          </div>
        </motion.div>
        
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {affiliates.map((affiliate, index) => (
            <motion.div 
              key={affiliate.name}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: index * 0.1 }}
              viewport={{ once: true }}
              className="group"
            >
              <div className="relative overflow-hidden rounded-lg mb-4">
                <img 
                  src={affiliate.image}
                  alt={affiliate.name}
                  className="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                />
                <div className={`absolute inset-0 ${affiliate.color} bg-opacity-80 flex items-center justify-center`}>
                  <h3 className="text-white text-xl font-bold text-center px-4">
                    {affiliate.name}
                  </h3>
                </div>
              </div>
              <p className="text-gray-700 text-sm leading-relaxed">
                {affiliate.description}
              </p>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

// Platform Section Component
export const PlatformSection = () => {
  const features = [
    { icon: CreditCard, title: "MEMBER BILLING", description: "Easily create, manage, and bill your clients' memberships for your gym." },
    { icon: Calendar, title: "CLASS SCHEDULING", description: "Simply add, edit, cancel & remove classes from your gym's schedule for 1 or multiple locations." },
    { icon: TrendingUp, title: "TRACKING & RESERVATIONS", description: "View schedules, reserve classes, and track workout progress in one seamless app." },
    { icon: FileText, title: "DIGITAL WAIVERS", description: "Easily send or request Documents to be e-signed by members or staff for any occasion." },
    { icon: Calendar, title: "EMBEDDABLE CLASS SCHEDULE", description: "Add a high-google scheduling calendar to your website that your members can use to view or reserve spots." },
    { icon: Target, title: "EMBEDDABLE WORKOUTS", description: "Share your gym's workout programming from your webpage." },
    { icon: Mail, title: "MAIL CHIMP INTEGRATION", description: "Utilize MailChimp for email marketing, communication & automation for your gym." },
    { icon: BarChart3, title: "FINANCIAL REPORTING", description: "Access reporting & insights on your gym's financial performance to ensure your business goals are being met." }
  ];

  return (
    <section className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6 }}
          viewport={{ once: true }}
          className="text-center mb-12"
        >
          <div className="border-l-4 border-blue-600 pl-4 text-left inline-block">
            <h2 className="text-3xl font-bold text-gray-900 mb-2">
              THE PREMIER ALL-IN-ONE PLATFORM
            </h2>
            <p className="text-gray-600">
              Whether it's planning workouts, managing membership options, class schedules or your billing, we have it covered.
            </p>
          </div>
        </motion.div>
        
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6, delay: 0.2 }}
          viewport={{ once: true }}
          className="mb-16"
        >
          <img 
            src="https://images.unsplash.com/photo-1540497077202-7c8a3999166f"
            alt="Platform dashboard"
            className="w-full h-auto rounded-lg shadow-2xl"
          />
        </motion.div>
        
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {features.map((feature, index) => (
            <motion.div 
              key={feature.title}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: index * 0.05 }}
              viewport={{ once: true }}
              className="text-center"
            >
              <div className="bg-blue-100 w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
                <feature.icon className="h-8 w-8 text-blue-600" />
              </div>
              <h3 className="font-bold text-gray-900 mb-2 text-sm">
                {feature.title}
              </h3>
              <p className="text-gray-600 text-sm leading-relaxed">
                {feature.description}
              </p>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

// AI Section Component
export const AISection = () => {
  const aiFeatures = [
    {
      icon: Target,
      title: "FLAGSHIP AI PROJECT",
      description: "The first of many AI features coming to btwb in the near future."
    },
    {
      icon: BarChart3,
      title: "100+ MILLION RESULTS",
      description: "Powered by over 100 million btwb results, and counting."
    },
    {
      icon: Clock,
      title: "SAVE VALUABLE TIME",
      description: "Copy and paste workout descriptions from the internet and spreadsheets."
    }
  ];

  return (
    <section className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6 }}
          viewport={{ once: true }}
          className="text-center mb-12"
        >
          <div className="border-l-4 border-blue-600 pl-4 text-left inline-block">
            <h2 className="text-3xl font-bold text-gray-900 mb-2">
              AI PLANNING
            </h2>
            <p className="text-gray-600">
              Leverage the power of Artificial Intelligence to easily create & program new workouts.
            </p>
          </div>
        </motion.div>
        
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6, delay: 0.2 }}
          viewport={{ once: true }}
          className="mb-16"
        >
          <img 
            src="https://images.pexels.com/photos/260352/pexels-photo-260352.jpeg"
            alt="AI workout planning interface"
            className="w-full h-auto rounded-lg shadow-2xl"
          />
        </motion.div>
        
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {aiFeatures.map((feature, index) => (
            <motion.div 
              key={feature.title}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: index * 0.1 }}
              viewport={{ once: true }}
              className="text-center"
            >
              <div className="bg-blue-100 w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
                <feature.icon className="h-8 w-8 text-blue-600" />
              </div>
              <h3 className="font-bold text-gray-900 mb-2">
                {feature.title}
              </h3>
              <p className="text-gray-600 text-sm leading-relaxed">
                {feature.description}
              </p>
            </motion.div>
          ))}
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
          <div>
            <div className="bg-white text-black px-3 py-1 rounded font-bold text-lg mb-4">
              btwb
            </div>
            <p className="text-gray-400 text-sm">
              The premier all-in-one gym management system that puts fitness first.
            </p>
          </div>
          
          <div>
            <h3 className="font-bold mb-4">PROGRAMS</h3>
            <ul className="space-y-2 text-sm text-gray-400">
              <li><a href="#" className="hover:text-white">Mayhem Affiliate</a></li>
              <li><a href="#" className="hover:text-white">PRVN Affiliate</a></li>
              <li><a href="#" className="hover:text-white">Linchpin Gym</a></li>
            </ul>
          </div>
          
          <div>
            <h3 className="font-bold mb-4">PLATFORM</h3>
            <ul className="space-y-2 text-sm text-gray-400">
              <li><a href="#" className="hover:text-white">Member Billing</a></li>
              <li><a href="#" className="hover:text-white">Class Scheduling</a></li>
              <li><a href="#" className="hover:text-white">Tracking & Reservations</a></li>
              <li><a href="#" className="hover:text-white">AI Planning</a></li>
            </ul>
          </div>
          
          <div>
            <h3 className="font-bold mb-4">COMPANY</h3>
            <ul className="space-y-2 text-sm text-gray-400">
              <li><a href="#" className="hover:text-white">About</a></li>
              <li><a href="#" className="hover:text-white">Careers</a></li>
              <li><a href="#" className="hover:text-white">Support</a></li>
              <li><a href="#" className="hover:text-white">Contact</a></li>
            </ul>
          </div>
        </div>
        
        <div className="border-t border-gray-800 mt-8 pt-8 text-center">
          <p className="text-gray-400 text-sm">
            © 2024 Beyond the Whiteboard. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
  );
};

// Sign In Modal Component
export const SignInModal = ({ isOpen, onClose }) => {
  if (!isOpen) return null;

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <motion.div 
        initial={{ opacity: 0, scale: 0.9 }}
        animate={{ opacity: 1, scale: 1 }}
        exit={{ opacity: 0, scale: 0.9 }}
        className="bg-white rounded-lg p-8 w-full max-w-md mx-4"
      >
        <div className="flex items-center justify-between mb-6">
          <h2 className="text-2xl font-bold text-gray-900">Sign In</h2>
          <button 
            onClick={onClose}
            className="text-gray-400 hover:text-gray-600"
          >
            <X className="h-6 w-6" />
          </button>
        </div>
        
        <form className="space-y-4">
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">
              Email
            </label>
            <input 
              type="email" 
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter your email"
            />
          </div>
          
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">
              Password
            </label>
            <input 
              type="password" 
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter your password"
            />
          </div>
          
          <button 
            type="submit"
            className="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 font-medium"
          >
            Sign In
          </button>
        </form>
        
        <p className="text-center text-sm text-gray-600 mt-4">
          Don't have an account?{' '}
          <button 
            onClick={() => {
              onClose();
              // This would open sign up modal in a real app
            }}
            className="text-blue-600 hover:text-blue-700 font-medium"
          >
            Sign up
          </button>
        </p>
      </motion.div>
    </div>
  );
};

// Sign Up Modal Component
export const SignUpModal = ({ isOpen, onClose }) => {
  if (!isOpen) return null;

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <motion.div 
        initial={{ opacity: 0, scale: 0.9 }}
        animate={{ opacity: 1, scale: 1 }}
        exit={{ opacity: 0, scale: 0.9 }}
        className="bg-white rounded-lg p-8 w-full max-w-md mx-4"
      >
        <div className="flex items-center justify-between mb-6">
          <h2 className="text-2xl font-bold text-gray-900">Sign Up</h2>
          <button 
            onClick={onClose}
            className="text-gray-400 hover:text-gray-600"
          >
            <X className="h-6 w-6" />
          </button>
        </div>
        
        <form className="space-y-4">
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">
              Gym Name
            </label>
            <input 
              type="text" 
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter your gym name"
            />
          </div>
          
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">
              Email
            </label>
            <input 
              type="email" 
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter your email"
            />
          </div>
          
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">
              Password
            </label>
            <input 
              type="password" 
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Create a password"
            />
          </div>
          
          <button 
            type="submit"
            className="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 font-medium"
          >
            Start Free Trial
          </button>
        </form>
        
        <p className="text-center text-sm text-gray-600 mt-4">
          Already have an account?{' '}
          <button 
            onClick={() => {
              onClose();
              // This would open sign in modal in a real app
            }}
            className="text-blue-600 hover:text-blue-700 font-medium"
          >
            Sign in
          </button>
        </p>
      </motion.div>
    </div>
  );
};