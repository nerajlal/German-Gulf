import { Star, Quote } from 'lucide-react';
import { Card, CardContent } from '@/components/ui/card';

const Testimonials = () => {
  const testimonials = [
    {
      id: 1,
      name: "Ahmed Al-Mansouri",
      position: "Project Manager",
      company: "Emaar Properties",
      content: "German Gulf Fibreglass delivered exceptional GRC façade elements for our Dubai Marina project. Their attention to detail and quality craftsmanship exceeded our expectations.",
      rating: 5,
      image: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face"
    },
    {
      id: 2,
      name: "Sarah Al-Zahra",
      position: "Chief Architect",
      company: "Aldar Properties",
      content: "Working with German Gulf Fibreglass has been a game-changer for our residential projects. Their GRC columns and architectural elements are both beautiful and durable.",
      rating: 5,
      image: "https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop&crop=face"
    },
    {
      id: 3,
      name: "Mohammed Hassan",
      position: "Engineering Director",
      company: "ADDC",
      content: "The GRP water tanks supplied by German Gulf Fibreglass have performed flawlessly in our treatment plants. Their corrosion resistance and quality are unmatched in the region.",
      rating: 5,
      image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face"
    },
    {
      id: 4,
      name: "Fatima Al-Qasimi",
      position: "Senior Contractor",
      company: "Sharjah Municipality",
      content: "German Gulf Fibreglass consistently delivers high-quality GRC screens and decorative elements. Their ISO certification gives us complete confidence in their products.",
      rating: 5,
      image: "https://images.unsplash.com/photo-1557053910-d9eadeed1c58?w=100&h=100&fit=crop&crop=face"
    },
    {
      id: 5,
      name: "Omar Al-Thani",
      position: "Infrastructure Manager",
      company: "Qatar Railways",
      content: "The GRP pedestrian bridge installed by German Gulf Fibreglass has exceeded all performance expectations. Lightweight yet incredibly strong and durable.",
      rating: 5,
      image: "https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=100&fit=crop&crop=face"
    },
    {
      id: 6,
      name: "Khalid Al-Busaidi",
      position: "Heritage Preservation Specialist",
      company: "Ministry of Heritage & Tourism",
      content: "German Gulf Fibreglass helped us preserve our architectural heritage with authentic-looking GRC elements. Their craftsmanship honors our traditional designs perfectly.",
      rating: 5,
      image: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop&crop=face"
    }
  ];

  const renderStars = (rating: number) => {
    return Array.from({ length: 5 }, (_, index) => (
      <Star
        key={index}
        className={`w-5 h-5 ${
          index < rating 
            ? 'text-accent fill-accent' 
            : 'text-muted-foreground'
        }`}
      />
    ));
  };

  return (
    <section className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-4xl md:text-5xl font-montserrat font-bold mb-6 text-gradient-primary">
            What Our Clients Say
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            Trusted by leading companies across the GCC region for delivering excellence
            in every GRC & GRP project we undertake.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {testimonials.map((testimonial, index) => (
            <Card 
              key={testimonial.id}
              className="feature-card animate-fade-in-up"
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              <CardContent className="p-6">
                <div className="flex items-center mb-4">
                  <Quote className="w-8 h-8 text-accent mr-3" />
                  <div className="flex">
                    {renderStars(testimonial.rating)}
                  </div>
                </div>
                
                <p className="text-muted-foreground mb-6 leading-relaxed italic">
                  "{testimonial.content}"
                </p>
                
                <div className="flex items-center">
                  <img
                    src={testimonial.image}
                    alt={testimonial.name}
                    className="w-12 h-12 rounded-full object-cover mr-4"
                  />
                  <div>
                    <h4 className="font-montserrat font-semibold text-primary">
                      {testimonial.name}
                    </h4>
                    <p className="text-sm text-muted-foreground">
                      {testimonial.position}
                    </p>
                    <p className="text-sm font-medium text-accent">
                      {testimonial.company}
                    </p>
                  </div>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>

        {/* Trust Indicators */}
        <div className="mt-16 text-center">
          <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div className="animate-fade-in-up" style={{ animationDelay: '0.2s' }}>
              <div className="text-4xl font-montserrat font-bold text-accent mb-2">200+</div>
              <div className="text-muted-foreground">Happy Clients</div>
            </div>
            <div className="animate-fade-in-up" style={{ animationDelay: '0.4s' }}>
              <div className="text-4xl font-montserrat font-bold text-accent mb-2">1000+</div>
              <div className="text-muted-foreground">Projects Completed</div>
            </div>
            <div className="animate-fade-in-up" style={{ animationDelay: '0.6s' }}>
              <div className="text-4xl font-montserrat font-bold text-accent mb-2">4.9</div>
              <div className="text-muted-foreground">Average Rating</div>
            </div>
            <div className="animate-fade-in-up" style={{ animationDelay: '0.8s' }}>
              <div className="text-4xl font-montserrat font-bold text-accent mb-2">20+</div>
              <div className="text-muted-foreground">Years Experience</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Testimonials;