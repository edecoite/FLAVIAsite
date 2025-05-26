import React, { useState } from 'react';
import './App.css';
import { 
  Header, 
  HeroSection, 
  AboutSection, 
  ServicesSection, 
  ApproachSection,
  TestimonialsSection,
  ContactSection,
  Footer,
  AppointmentModal
} from './components';

function App() {
  const [isAppointmentOpen, setIsAppointmentOpen] = useState(false);

  return (
    <div className="App bg-white min-h-screen">
      <Header onBookAppointment={() => setIsAppointmentOpen(true)} />
      <HeroSection onBookAppointment={() => setIsAppointmentOpen(true)} />
      <AboutSection />
      <ServicesSection />
      <ApproachSection />
      <TestimonialsSection />
      <ContactSection onBookAppointment={() => setIsAppointmentOpen(true)} />
      <Footer />
      
      <AppointmentModal 
        isOpen={isAppointmentOpen} 
        onClose={() => setIsAppointmentOpen(false)} 
      />
    </div>
  );
}

export default App;