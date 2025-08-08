import { ArrowRight, Play } from 'lucide-react';
import { Button } from '@/components/ui/button';
import heroImage from '@/assets/hero-construction.jpg';

const Hero = () => {
  return (
    <section id="home" className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Background Image with Overlay */}
      <div 
        className="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style={{ backgroundImage: `url(${heroImage})` }}
      >
        <div className="absolute inset-0 bg-gradient-hero"></div>
      </div>

      {/* Content */}
      <div className="relative z-10 container mx-auto px-4 py-20">
        <div className="max-w-4xl mx-auto text-center text-white">
          {/* Badge */}
          <div className="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6 animate-fade-in-up">
            <span className="text-sm font-medium">🏆 ISO 9001:2015 Certified</span>
          </div>

          {/* Main Heading */}
          <h1 className="text-5xl md:text-7xl font-montserrat font-bold mb-6 animate-fade-in-up" style={{ animationDelay: '0.2s' }}>
            Innovative <span className="text-gradient-accent">Fiberglass</span>
            <br />
            Solutions for Modern
            <br />
            <span className="text-gradient-accent">Construction</span>
          </h1>

          {/* Subtitle */}
          <p className="text-xl md:text-2xl mb-8 max-w-3xl mx-auto leading-relaxed animate-fade-in-up" style={{ animationDelay: '0.4s' }}>
            Leading GRC & GRP Manufacturer in UAE Since 2003
            <br />
            <span className="text-accent font-semibold">200+ Satisfied Clients</span> across the GCC region
          </p>

          {/* Call-to-Action Buttons */}
          <div className="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6 animate-fade-in-up" style={{ animationDelay: '0.6s' }}>
            <Button className="btn-hero-primary group">
              Explore Products
              <ArrowRight className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
            </Button>
            <Button className="btn-hero-accent group">
              Get a Quote
              <Play className="ml-2 w-5 h-5 group-hover:scale-110 transition-transform" />
            </Button>
          </div>

          {/* Stats Row */}
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16 animate-fade-in-up" style={{ animationDelay: '0.8s' }}>
            <div className="text-center">
              <div className="text-4xl font-montserrat font-bold text-accent mb-2">20+</div>
              <div className="text-white/80">Years Experience</div>
            </div>
            <div className="text-center">
              <div className="text-4xl font-montserrat font-bold text-accent mb-2">200+</div>
              <div className="text-white/80">Satisfied Clients</div>
            </div>
            <div className="text-center">
              <div className="text-4xl font-montserrat font-bold text-accent mb-2">1000+</div>
              <div className="text-white/80">Projects Completed</div>
            </div>
          </div>
        </div>
      </div>

      {/* Scroll Indicator */}
      <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div className="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
          <div className="w-1 h-3 bg-white/70 rounded-full mt-2 animate-float"></div>
        </div>
      </div>
    </section>
  );
};

export default Hero;