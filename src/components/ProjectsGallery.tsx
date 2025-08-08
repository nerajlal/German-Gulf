import { useState } from 'react';
import { Button } from '@/components/ui/button';
import { Badge } from '@/components/ui/badge';
import { ExternalLink, Filter } from 'lucide-react';

const ProjectsGallery = () => {
  const [activeFilter, setActiveFilter] = useState('all');

  const filters = [
    { id: 'all', label: 'All Projects' },
    { id: 'grc', label: 'GRC Projects' },
    { id: 'grp', label: 'GRP Projects' },
    { id: 'commercial', label: 'Commercial' },
    { id: 'residential', label: 'Residential' }
  ];

  const projects = [
    {
      id: 1,
      title: "Dubai Marina Tower",
      category: "Commercial",
      type: "grc",
      description: "Custom GRC façade elements for luxury high-rise development",
      image: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop",
      tags: ["GRC Panels", "Façade", "High-rise"],
      client: "Emaar Properties"
    },
    {
      id: 2,
      title: "Sharjah Cultural Center",
      category: "Commercial",
      type: "grc",
      description: "Intricate GRC screens and decorative elements",
      image: "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=600&h=400&fit=crop",
      tags: ["GRC Screens", "Cultural", "Decorative"],
      client: "Sharjah Municipality"
    },
    {
      id: 3,
      title: "Al Ain Water Treatment Plant",
      category: "Industrial",
      type: "grp",
      description: "Large-scale GRP water tanks and treatment infrastructure",
      image: "https://images.unsplash.com/photo-1518709595132-64d28960d730?w=600&h=400&fit=crop",
      tags: ["GRP Tanks", "Water Treatment", "Industrial"],
      client: "ADDC"
    },
    {
      id: 4,
      title: "Abu Dhabi Residential Complex",
      category: "Residential",
      type: "grc",
      description: "GRC columns and architectural elements for luxury villas",
      image: "https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&h=400&fit=crop",
      tags: ["GRC Columns", "Residential", "Luxury"],
      client: "Aldar Properties"
    },
    {
      id: 5,
      title: "Qatar Pedestrian Bridge",
      category: "Infrastructure",
      type: "grp",
      description: "Lightweight GRP pedestrian bridge with anti-slip surface",
      image: "https://images.unsplash.com/photo-1507501336603-6e31db2be093?w=600&h=400&fit=crop",
      tags: ["GRP Bridge", "Infrastructure", "Pedestrian"],
      client: "Qatar Railways"
    },
    {
      id: 6,
      title: "Oman Heritage Village",
      category: "Cultural",
      type: "grc",
      description: "Traditional GRC elements preserving Omani architectural heritage",
      image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=600&h=400&fit=crop",
      tags: ["Heritage", "Traditional", "Cultural"],
      client: "Ministry of Heritage & Tourism"
    }
  ];

  const filteredProjects = projects.filter(project => {
    if (activeFilter === 'all') return true;
    if (activeFilter === 'grc' || activeFilter === 'grp') {
      return project.type === activeFilter;
    }
    return project.category.toLowerCase() === activeFilter;
  });

  return (
    <section id="projects" className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-4xl md:text-5xl font-montserrat font-bold mb-6 text-gradient-primary">
            Our Projects Portfolio
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            Showcasing excellence across the GCC region with innovative GRC & GRP solutions
            for diverse architectural and industrial applications.
          </p>
        </div>

        {/* Filter Buttons */}
        <div className="flex flex-wrap justify-center gap-4 mb-12">
          {filters.map((filter) => (
            <Button
              key={filter.id}
              variant={activeFilter === filter.id ? "default" : "outline"}
              onClick={() => setActiveFilter(filter.id)}
              className={`
                ${activeFilter === filter.id 
                  ? 'bg-gradient-primary text-white' 
                  : 'hover:bg-primary/10'
                }
                transition-all duration-300
              `}
            >
              <Filter className="w-4 h-4 mr-2" />
              {filter.label}
            </Button>
          ))}
        </div>

        {/* Projects Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {filteredProjects.map((project, index) => (
            <div 
              key={project.id}
              className="product-card animate-scale-in"
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              <div className="relative overflow-hidden">
                <img
                  src={project.image}
                  alt={project.title}
                  className="w-full h-48 object-cover transition-transform duration-500 hover:scale-110"
                />
                <div className="absolute top-4 left-4">
                  <Badge 
                    variant="secondary" 
                    className={`
                      ${project.type === 'grc' 
                        ? 'bg-primary text-white' 
                        : 'bg-accent text-white'
                      }
                    `}
                  >
                    {project.type.toUpperCase()}
                  </Badge>
                </div>
              </div>
              
              <div className="p-6">
                <h3 className="text-xl font-montserrat font-semibold mb-2 text-primary">
                  {project.title}
                </h3>
                <p className="text-muted-foreground mb-4 leading-relaxed">
                  {project.description}
                </p>
                
                <div className="flex flex-wrap gap-2 mb-4">
                  {project.tags.map((tag) => (
                    <span 
                      key={tag}
                      className="px-2 py-1 bg-muted rounded text-xs text-muted-foreground"
                    >
                      {tag}
                    </span>
                  ))}
                </div>
                
                <div className="flex items-center justify-between">
                  <div>
                    <p className="text-sm font-medium text-primary">{project.client}</p>
                    <p className="text-xs text-muted-foreground">{project.category}</p>
                  </div>
                  <Button variant="ghost" size="sm" className="group">
                    View Project
                    <ExternalLink className="ml-2 w-4 h-4 group-hover:scale-110 transition-transform" />
                  </Button>
                </div>
              </div>
            </div>
          ))}
        </div>

        {/* Call to Action */}
        <div className="text-center mt-16">
          <div className="bg-gradient-primary rounded-2xl p-8 md:p-12 text-white">
            <h3 className="text-3xl font-montserrat font-bold mb-4">
              Ready to Start Your Project?
            </h3>
            <p className="text-xl mb-8 text-white/90 max-w-2xl mx-auto">
              Let our experienced team bring your vision to life with innovative GRC & GRP solutions
            </p>
            <Button className="btn-hero-accent text-lg px-8 py-4">
              Get a Free Consultation
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ProjectsGallery;