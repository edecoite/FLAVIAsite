import React, { useState } from 'react';
import './App.css';
import { 
  Header, 
  HeroSection, 
  AffiliateSection, 
  PlatformSection, 
  AISection, 
  Footer,
  SignInModal,
  SignUpModal 
} from './components';

function App() {
  const [isSignInOpen, setIsSignInOpen] = useState(false);
  const [isSignUpOpen, setIsSignUpOpen] = useState(false);

  return (
    <div className="App bg-white min-h-screen">
      <Header 
        onSignInClick={() => setIsSignInOpen(true)}
        onSignUpClick={() => setIsSignUpOpen(true)}
      />
      <HeroSection onBookDemoClick={() => setIsSignUpOpen(true)} />
      <AffiliateSection />
      <PlatformSection />
      <AISection />
      <Footer />
      
      <SignInModal 
        isOpen={isSignInOpen} 
        onClose={() => setIsSignInOpen(false)} 
      />
      <SignUpModal 
        isOpen={isSignUpOpen} 
        onClose={() => setIsSignUpOpen(false)} 
      />
    </div>
  );
}

export default App;