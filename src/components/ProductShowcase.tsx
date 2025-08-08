import { useState } from 'react';
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs';
import { Button } from '@/components/ui/button';
import { ExternalLink, ArrowRight } from 'lucide-react';
import grcImage from '@/assets/grc-products.jpg';
import grpImage from '@/assets/grp-products.jpg';

const ProductShowcase = () => {
  const [activeTab, setActiveTab] = useState('grc');

  const grcProducts = [
    {
      name: "GRC Columns",
      description: "Architectural lightweight columns with superior strength and design flexibility",
      features: ["Lightweight", "Weather Resistant", "Customizable Design", "Easy Installation"]
    },
    {
      name: "GRC Screens",
      description: "Decorative and functional screens for modern architectural applications",
      features: ["Decorative Patterns", "Privacy Solutions", "Ventilation", "Aesthetic Appeal"]
    },
    {
      name: "GRC Flower Pots",
      description: "Durable and aesthetic planters for landscaping and urban development",
      features: ["Weather Proof", "Various Sizes", "Custom Designs", "Long Lasting"]
    },
    {
      name: "GRC Cornices",
      description: "Elegant architectural elements with exceptional design flexibility",
      features: ["Traditional Designs", "Modern Styles", "Easy Maintenance", "Cost Effective"]
    }
  ];

  const grpProducts = [
    {
      name: "GRP Domes",
      description: "Lightweight and weather-resistant domes for various architectural needs",
      features: ["Lightweight", "UV Resistant", "Corrosion Proof", "Long Service Life"]
    },
    {
      name: "GRP Water Tanks",
      description: "Corrosion-proof water storage solutions for residential and commercial use",
      features: ["Corrosion Resistant", "Food Grade", "Various Capacities", "Easy Maintenance"]
    },
    {
      name: "GRP Pedestrian Bridges",
      description: "Strong and lightweight bridges with easy installation process",
      features: ["High Strength", "Anti-Slip Surface", "Quick Installation", "Low Maintenance"]
    },
    {
      name: "GRP Panels",
      description: "Versatile panels for construction and architectural applications",
      features: ["Fire Resistant", "Chemical Resistant", "Customizable", "Durable"]
    }
  ];

  return (
    <section id="products" className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-4xl md:text-5xl font-montserrat font-bold mb-6 text-gradient-primary">
            Our Product Range
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            Comprehensive GRC & GRP solutions engineered for excellence, designed for durability, 
            and crafted for your specific construction needs.
          </p>
        </div>

        <Tabs value={activeTab} onValueChange={setActiveTab} className="w-full">
          <TabsList className="grid w-full max-w-md mx-auto grid-cols-2 mb-12">
            <TabsTrigger value="grc" className="text-lg font-montserrat">
              GRC Products
            </TabsTrigger>
            <TabsTrigger value="grp" className="text-lg font-montserrat">
              GRP Products
            </TabsTrigger>
          </TabsList>

          <TabsContent value="grc" className="mt-0">
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
              <div className="animate-fade-in-up">
                <img
                  src={grcImage}
                  alt="GRC Products - Glass Fiber Reinforced Concrete"
                  className="w-full h-96 object-cover rounded-2xl shadow-card"
                />
              </div>
              <div className="animate-slide-in-right">
                <h3 className="text-3xl font-montserrat font-bold mb-6 text-primary">
                  Glass Fiber Reinforced Concrete (GRC)
                </h3>
                <p className="text-lg text-muted-foreground mb-8 leading-relaxed">
                  Our GRC products combine the strength of concrete with the flexibility of glass fiber, 
                  creating lightweight yet durable architectural elements that transform any structure 
                  into a masterpiece of modern design.
                </p>
                <Button className="btn-hero-primary group">
                  View All GRC Products
                  <ArrowRight className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
                </Button>
              </div>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
              {grcProducts.map((product, index) => (
                <div 
                  key={product.name}
                  className="product-card animate-scale-in"
                  style={{ animationDelay: `${index * 0.1}s` }}
                >
                  <div className="p-6">
                    <h4 className="text-xl font-montserrat font-semibold mb-3 text-primary">
                      {product.name}
                    </h4>
                    <p className="text-muted-foreground mb-4 leading-relaxed">
                      {product.description}
                    </p>
                    <div className="flex flex-wrap gap-2 mb-4">
                      {product.features.map((feature) => (
                        <span 
                          key={feature}
                          className="px-3 py-1 bg-muted rounded-full text-sm text-muted-foreground"
                        >
                          {feature}
                        </span>
                      ))}
                    </div>
                    <Button variant="outline" size="sm" className="group">
                      Learn More
                      <ExternalLink className="ml-2 w-4 h-4 group-hover:scale-110 transition-transform" />
                    </Button>
                  </div>
                </div>
              ))}
            </div>
          </TabsContent>

          <TabsContent value="grp" className="mt-0">
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
              <div className="animate-fade-in-up">
                <img
                  src={grpImage}
                  alt="GRP Products - Glass Fiber Reinforced Plastic"
                  className="w-full h-96 object-cover rounded-2xl shadow-card"
                />
              </div>
              <div className="animate-slide-in-right">
                <h3 className="text-3xl font-montserrat font-bold mb-6 text-primary">
                  Glass Fiber Reinforced Plastic (GRP)
                </h3>
                <p className="text-lg text-muted-foreground mb-8 leading-relaxed">
                  Our GRP solutions offer exceptional strength-to-weight ratio, corrosion resistance, 
                  and design flexibility, making them ideal for demanding industrial and commercial 
                  applications across the GCC region.
                </p>
                <Button className="btn-hero-primary group">
                  View All GRP Products
                  <ArrowRight className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
                </Button>
              </div>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
              {grpProducts.map((product, index) => (
                <div 
                  key={product.name}
                  className="product-card animate-scale-in"
                  style={{ animationDelay: `${index * 0.1}s` }}
                >
                  <div className="p-6">
                    <h4 className="text-xl font-montserrat font-semibold mb-3 text-primary">
                      {product.name}
                    </h4>
                    <p className="text-muted-foreground mb-4 leading-relaxed">
                      {product.description}
                    </p>
                    <div className="flex flex-wrap gap-2 mb-4">
                      {product.features.map((feature) => (
                        <span 
                          key={feature}
                          className="px-3 py-1 bg-muted rounded-full text-sm text-muted-foreground"
                        >
                          {feature}
                        </span>
                      ))}
                    </div>
                    <Button variant="outline" size="sm" className="group">
                      Learn More
                      <ExternalLink className="ml-2 w-4 h-4 group-hover:scale-110 transition-transform" />
                    </Button>
                  </div>
                </div>
              ))}
            </div>
          </TabsContent>
        </Tabs>
      </div>
    </section>
  );
};

export default ProductShowcase;