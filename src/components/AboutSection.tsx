import { CheckCircle, Award, Users, Zap, BarChart, Globe } from 'lucide-react';
import isoImage from '@/assets/iso-certification.jpg';

const AboutSection = () => {
  const features = [
    {
      icon: CheckCircle,
      title: "20+ Years Experience",
      description: "Leading the industry since 2003 with proven expertise"
    },
    {
      icon: Users,
      title: "200+ Satisfied Clients",
      description: "Trusted by major projects across UAE, Oman, Qatar, and Saudi Arabia"
    },
    {
      icon: Award,
      title: "ISO 9001:2015 Certified",
      description: "Committed to world-class quality standards and continuous improvement"
    }
  ];

  const whyChooseUs = [
    {
      icon: Zap,
      title: "High-Quality Service",
      description: "Delivering excellence in every project with precision and reliability"
    },
    {
      icon: Users,
      title: "Stakeholder Satisfaction",
      description: "Building lasting relationships through exceptional customer service"
    },
    {
      icon: BarChart,
      title: "Integrated System",
      description: "Comprehensive solutions from design to installation"
    },
    {
      icon: CheckCircle,
      title: "Continuous Enhancement",
      description: "Always innovating to exceed industry standards"
    },
    {
      icon: Award,
      title: "Performance Prediction",
      description: "Advanced engineering ensures optimal product performance"
    },
    {
      icon: Globe,
      title: "World-Class Standards",
      description: "International quality benchmarks in every product we deliver"
    }
  ];

  return (
    <section id="about" className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        {/* About Summary */}
        <div className="max-w-4xl mx-auto text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-montserrat font-bold mb-6 text-gradient-primary">
            About German Gulf Fibreglass
          </h2>
          <p className="text-xl text-muted-foreground leading-relaxed mb-8">
            We specialize in high-quality GRC & GRP products for construction projects across the GCC.
            With over two decades of expertise, we've established ourselves as the trusted partner for 
            innovative fiberglass solutions in the region.
          </p>
        </div>

        {/* Key Features */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
          {features.map((feature, index) => (
            <div 
              key={feature.title}
              className="feature-card text-center animate-fade-in-up"
              style={{ animationDelay: `${index * 0.2}s` }}
            >
              <div className="w-16 h-16 bg-gradient-primary rounded-full flex items-center justify-center mx-auto mb-4">
                <feature.icon className="w-8 h-8 text-white" />
              </div>
              <h3 className="text-xl font-montserrat font-semibold mb-3 text-primary">
                {feature.title}
              </h3>
              <p className="text-muted-foreground leading-relaxed">
                {feature.description}
              </p>
            </div>
          ))}
        </div>

        {/* Why Choose Us Section */}
        <div className="mb-16">
          <div className="text-center mb-12">
            <h3 className="text-3xl md:text-4xl font-montserrat font-bold mb-4 text-gradient-primary">
              Why Choose Us
            </h3>
            <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
              Our commitment to excellence and innovation sets us apart in the fiberglass industry
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {whyChooseUs.map((item, index) => (
              <div 
                key={item.title}
                className="feature-card animate-fade-in-up"
                style={{ animationDelay: `${index * 0.1}s` }}
              >
                <div className="flex items-start space-x-4">
                  <div className="w-12 h-12 bg-gradient-accent rounded-lg flex items-center justify-center flex-shrink-0">
                    <item.icon className="w-6 h-6 text-white" />
                  </div>
                  <div>
                    <h4 className="text-lg font-montserrat font-semibold mb-2 text-primary">
                      {item.title}
                    </h4>
                    <p className="text-muted-foreground text-sm leading-relaxed">
                      {item.description}
                    </p>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>

        {/* Certification Banner */}
        <div className="bg-gradient-primary rounded-2xl p-8 md:p-12 text-white text-center">
          <div className="flex flex-col md:flex-row items-center justify-center space-y-6 md:space-y-0 md:space-x-8">
            <div className="w-24 h-24 bg-white/10 rounded-full flex items-center justify-center">
              <img 
                src={isoImage} 
                alt="ISO 9001:2015 Certification" 
                className="w-16 h-16 object-contain rounded-full"
              />
            </div>
            <div className="text-center md:text-left">
              <h4 className="text-2xl font-montserrat font-bold mb-2">
                ISO 9001:2015 Certified Quality
              </h4>
              <p className="text-white/90 max-w-md">
                Committed to maintaining international quality standards and continuous improvement 
                in all our manufacturing processes.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default AboutSection;