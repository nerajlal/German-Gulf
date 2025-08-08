import { useState } from 'react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Textarea } from '@/components/ui/textarea';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { MapPin, Phone, Mail, Clock, Send } from 'lucide-react';

const Contact = () => {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    subject: '',
    message: ''
  });

  const handleInputChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    const { name, value } = e.target;
    setFormData(prev => ({ ...prev, [name]: value }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    // Handle form submission logic here
    console.log('Form submitted:', formData);
  };

  const contactInfo = [
    {
      icon: Phone,
      title: "Phone Number",
      details: ["+971 6 766 2626", "+971 50 123 4567"],
      action: "tel:+97167662626"
    },
    {
      icon: Mail,
      title: "Email Address",
      details: ["info@germangulf.ae", "sales@germangulf.ae"],
      action: "mailto:info@germangulf.ae"
    },
    {
      icon: MapPin,
      title: "Our Location",
      details: ["Umm Al Quwain Industrial Area", "United Arab Emirates"],
      action: "https://maps.google.com"
    },
    {
      icon: Clock,
      title: "Business Hours",
      details: ["Monday - Friday: 8:00 AM - 6:00 PM", "Saturday: 8:00 AM - 2:00 PM"],
      action: null
    }
  ];

  return (
    <section id="contact" className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-4xl md:text-5xl font-montserrat font-bold mb-6 text-gradient-primary">
            Get In Touch
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            Ready to discuss your next project? Contact our expert team for consultation
            and discover how our GRC & GRP solutions can transform your vision into reality.
          </p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
          {/* Contact Information */}
          <div className="lg:col-span-1">
            <div className="space-y-6">
              {contactInfo.map((info, index) => (
                <Card 
                  key={info.title}
                  className="feature-card animate-fade-in-up"
                  style={{ animationDelay: `${index * 0.1}s` }}
                >
                  <CardContent className="p-6">
                    <div className="flex items-start space-x-4">
                      <div className="w-12 h-12 bg-gradient-primary rounded-lg flex items-center justify-center flex-shrink-0">
                        <info.icon className="w-6 h-6 text-white" />
                      </div>
                      <div>
                        <h3 className="font-montserrat font-semibold text-lg mb-2 text-primary">
                          {info.title}
                        </h3>
                        {info.details.map((detail, idx) => (
                          <p 
                            key={idx}
                            className="text-muted-foreground mb-1 last:mb-0"
                          >
                            {info.action && idx === 0 ? (
                              <a 
                                href={info.action}
                                className="hover:text-accent transition-colors duration-300"
                              >
                                {detail}
                              </a>
                            ) : (
                              detail
                            )}
                          </p>
                        ))}
                      </div>
                    </div>
                  </CardContent>
                </Card>
              ))}
            </div>

            {/* Google Maps Placeholder */}
            <Card className="mt-6 animate-fade-in-up" style={{ animationDelay: '0.4s' }}>
              <CardContent className="p-0">
                <div className="w-full h-64 bg-muted rounded-lg flex items-center justify-center">
                  <div className="text-center">
                    <MapPin className="w-12 h-12 text-accent mx-auto mb-4" />
                    <p className="text-muted-foreground">
                      Interactive Map View
                      <br />
                      <span className="text-sm">Umm Al Quwain Industrial Area</span>
                    </p>
                  </div>
                </div>
              </CardContent>
            </Card>
          </div>

          {/* Contact Form */}
          <div className="lg:col-span-2">
            <Card className="animate-slide-in-right">
              <CardHeader>
                <CardTitle className="text-2xl font-montserrat text-primary">
                  Send Us a Message
                </CardTitle>
                <p className="text-muted-foreground">
                  Fill out the form below and we'll get back to you within 24 hours
                </p>
              </CardHeader>
              <CardContent>
                <form onSubmit={handleSubmit} className="space-y-6">
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                      <label htmlFor="name" className="block text-sm font-medium mb-2">
                        Full Name *
                      </label>
                      <Input
                        id="name"
                        name="name"
                        type="text"
                        required
                        value={formData.name}
                        onChange={handleInputChange}
                        placeholder="Your full name"
                        className="transition-all duration-300 focus:ring-2 focus:ring-accent"
                      />
                    </div>
                    <div>
                      <label htmlFor="email" className="block text-sm font-medium mb-2">
                        Email Address *
                      </label>
                      <Input
                        id="email"
                        name="email"
                        type="email"
                        required
                        value={formData.email}
                        onChange={handleInputChange}
                        placeholder="your.email@domain.com"
                        className="transition-all duration-300 focus:ring-2 focus:ring-accent"
                      />
                    </div>
                  </div>

                  <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                      <label htmlFor="phone" className="block text-sm font-medium mb-2">
                        Phone Number
                      </label>
                      <Input
                        id="phone"
                        name="phone"
                        type="tel"
                        value={formData.phone}
                        onChange={handleInputChange}
                        placeholder="+971 50 123 4567"
                        className="transition-all duration-300 focus:ring-2 focus:ring-accent"
                      />
                    </div>
                    <div>
                      <label htmlFor="subject" className="block text-sm font-medium mb-2">
                        Subject *
                      </label>
                      <Input
                        id="subject"
                        name="subject"
                        type="text"
                        required
                        value={formData.subject}
                        onChange={handleInputChange}
                        placeholder="Project inquiry, quote request, etc."
                        className="transition-all duration-300 focus:ring-2 focus:ring-accent"
                      />
                    </div>
                  </div>

                  <div>
                    <label htmlFor="message" className="block text-sm font-medium mb-2">
                      Message *
                    </label>
                    <Textarea
                      id="message"
                      name="message"
                      required
                      rows={6}
                      value={formData.message}
                      onChange={handleInputChange}
                      placeholder="Please describe your project requirements, timeline, and any specific questions you have..."
                      className="transition-all duration-300 focus:ring-2 focus:ring-accent"
                    />
                  </div>

                  <Button type="submit" className="btn-hero-primary w-full group">
                    Send Message
                    <Send className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
                  </Button>
                </form>
              </CardContent>
            </Card>
          </div>
        </div>

        {/* CTA Section */}
        <div className="mt-16 text-center">
          <div className="bg-gradient-primary rounded-2xl p-8 md:p-12 text-white">
            <h3 className="text-3xl font-montserrat font-bold mb-4">
              Need Immediate Assistance?
            </h3>
            <p className="text-xl mb-8 text-white/90 max-w-2xl mx-auto">
              For urgent inquiries or immediate support, call our dedicated project team
            </p>
            <div className="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
              <Button className="btn-hero-accent" asChild>
                <a href="tel:+97167662626">
                  <Phone className="mr-2 w-5 h-5" />
                  Call Now: +971 6 766 2626
                </a>
              </Button>
              <Button variant="outline" className="bg-white/10 border-white/30 text-white hover:bg-white/20" asChild>
                <a href="mailto:info@germangulf.ae">
                  <Mail className="mr-2 w-5 h-5" />
                  Email Us
                </a>
              </Button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;