import { MapPin, Phone, Mail, Clock, Facebook, Instagram, Linkedin, Twitter } from 'lucide-react';

const Footer = () => {
  const currentYear = new Date().getFullYear();

  const quickLinks = [
    { name: 'Home', href: '#home' },
    { name: 'About Us', href: '#about' },
    { name: 'Products', href: '#products' },
    { name: 'Projects', href: '#projects' },
    { name: 'Contact', href: '#contact' }
  ];

  const services = [
    'GRC Columns',
    'GRC Screens',
    'GRC Flower Pots',
    'GRP Domes',
    'GRP Water Tanks',
    'GRP Pedestrian Bridges'
  ];

  const certifications = [
    'ISO 9001:2015 Certified',
    'Dubai Municipality Approved',
    'ADDC Approved Supplier',
    'GCC Quality Standards'
  ];

  return (
    <footer className="bg-primary text-white">
      <div className="container mx-auto px-4 py-16">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Company Info */}
          <div className="space-y-6">
            <div>
              <h3 className="text-2xl font-montserrat font-bold mb-4 text-accent">
                German Gulf Fibreglass
              </h3>
              <p className="text-white/80 leading-relaxed">
                Leading manufacturer of high-quality GRC & GRP products in the UAE since 2003.
                Serving the GCC region with innovative fiberglass solutions.
              </p>
            </div>
            
            <div className="space-y-3">
              <div className="flex items-center space-x-3">
                <MapPin className="w-5 h-5 text-accent flex-shrink-0" />
                <span className="text-sm text-white/80">
                  Umm Al Quwain Industrial Area, UAE
                </span>
              </div>
              <div className="flex items-center space-x-3">
                <Phone className="w-5 h-5 text-accent flex-shrink-0" />
                <a href="tel:+97167662626" className="text-sm text-white/80 hover:text-accent transition-colors">
                  +971 6 766 2626
                </a>
              </div>
              <div className="flex items-center space-x-3">
                <Mail className="w-5 h-5 text-accent flex-shrink-0" />
                <a href="mailto:info@germangulf.ae" className="text-sm text-white/80 hover:text-accent transition-colors">
                  info@germangulf.ae
                </a>
              </div>
              <div className="flex items-center space-x-3">
                <Clock className="w-5 h-5 text-accent flex-shrink-0" />
                <span className="text-sm text-white/80">
                  Mon-Fri: 8AM-6PM, Sat: 8AM-2PM
                </span>
              </div>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="text-lg font-montserrat font-semibold mb-6 text-accent">
              Quick Links
            </h4>
            <ul className="space-y-3">
              {quickLinks.map((link) => (
                <li key={link.name}>
                  <a
                    href={link.href}
                    className="text-white/80 hover:text-accent transition-colors duration-300 text-sm"
                  >
                    {link.name}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Services */}
          <div>
            <h4 className="text-lg font-montserrat font-semibold mb-6 text-accent">
              Our Products
            </h4>
            <ul className="space-y-3">
              {services.map((service) => (
                <li key={service}>
                  <span className="text-white/80 text-sm">
                    {service}
                  </span>
                </li>
              ))}
            </ul>
          </div>

          {/* Certifications & Social */}
          <div>
            <h4 className="text-lg font-montserrat font-semibold mb-6 text-accent">
              Certifications
            </h4>
            <ul className="space-y-3 mb-6">
              {certifications.map((cert) => (
                <li key={cert}>
                  <span className="text-white/80 text-sm">
                    {cert}
                  </span>
                </li>
              ))}
            </ul>
            
            {/* Social Media */}
            <div>
              <h5 className="font-montserrat font-medium mb-4 text-accent">
                Follow Us
              </h5>
              <div className="flex space-x-4">
                <a 
                  href="#" 
                  className="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-300"
                >
                  <Facebook className="w-5 h-5" />
                </a>
                <a 
                  href="#" 
                  className="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-300"
                >
                  <Instagram className="w-5 h-5" />
                </a>
                <a 
                  href="#" 
                  className="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-300"
                >
                  <Linkedin className="w-5 h-5" />
                </a>
                <a 
                  href="#" 
                  className="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-300"
                >
                  <Twitter className="w-5 h-5" />
                </a>
              </div>
            </div>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="border-t border-white/20 mt-12 pt-8">
          <div className="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div className="text-white/60 text-sm">
              © {currentYear} German Gulf Fibreglass. All rights reserved.
            </div>
            <div className="flex space-x-6 text-sm">
              <a href="#" className="text-white/60 hover:text-accent transition-colors">
                Privacy Policy
              </a>
              <a href="#" className="text-white/60 hover:text-accent transition-colors">
                Terms of Service
              </a>
              <a href="#" className="text-white/60 hover:text-accent transition-colors">
                Site Map
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;