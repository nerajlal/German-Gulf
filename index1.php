<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>German Gulf Fibreglass - Leading GRC & GRP Manufacturer UAE</title>
    <meta name="description" content="Premier GRC & GRP manufacturer in UAE since 2003. ISO 9001:2015 certified. Specializing in fiberglass columns, screens, water tanks, and architectural elements for construction projects across the GCC.">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #1a5276;
            --secondary-color: #2980b9;
            --accent-color: #e67e22;
            --dark-bg: #0f172a;
            --light-gray: #f8fafc;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }

        /* Custom Colors */
        .bg-primary-custom { background-color: var(--primary-color) !important; }
        .bg-secondary-custom { background-color: var(--secondary-color) !important; }
        .bg-accent-custom { background-color: var(--accent-color) !important; }
        .text-primary-custom { color: var(--primary-color) !important; }
        .text-accent-custom { color: var(--accent-color) !important; }

        /* Hero Section */
        .hero-section {
            height: 100vh;
            background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(26, 82, 118, 0.8)), url('src/assets/hero-construction.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
        }

        .hero-badge {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            margin-bottom: 2rem;
            display: inline-block;
        }

        .gradient-text {
            background: linear-gradient(135deg, #3b82f6, #e67e22);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-hero-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            color: white;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .btn-hero-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(26, 82, 118, 0.3);
            color: white;
        }

        .btn-hero-accent {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            color: white;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .btn-hero-accent:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            color: white;
        }

        /* Animations */
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-10px);
            }
            60% {
                transform: translateX(-50%) translateY(-5px);
            }
        }

        /* Cards */
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(26, 82, 118, 0.15);
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(26, 82, 118, 0.3);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        /* Product Tabs */
        .nav-tabs .nav-link {
            border: none;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            margin-right: 1rem;
            background: #f8fafc;
            color: var(--primary-color);
            font-weight: 500;
        }

        .nav-tabs .nav-link.active {
            background: var(--primary-color);
            color: white;
        }

        /* Project Gallery */
        .project-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(26, 82, 118, 0.9), rgba(41, 128, 185, 0.8));
            opacity: 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        /* Testimonials */
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .stars {
            color: #ffd700;
            margin-bottom: 1rem;
        }

        /* Footer */
        .footer {
            background: var(--dark-bg);
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer h5 {
            color: var(--accent-color);
            margin-bottom: 1.5rem;
        }

        .footer a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--accent-color);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section .lead {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#home">
                <i class="bi bi-building"></i> German Gulf Fibreglass
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="#contact" class="btn btn-warning rounded-pill">Get Quote</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="hero-badge fade-in-up">
                        🏆 ISO 9001:2015 Certified
                    </div>
                    
                    <h1 class="display-2 fw-bold mb-4 fade-in-up" style="animation-delay: 0.2s">
                        Innovative <span class="gradient-text">Fiberglass</span><br>
                        Solutions for Modern<br>
                        <span class="gradient-text">Construction</span>
                    </h1>
                    
                    <p class="lead mb-5 fade-in-up" style="animation-delay: 0.4s">
                        Leading GRC & GRP Manufacturer in UAE Since 2003<br>
                        <span class="text-accent-custom fw-semibold">200+ Satisfied Clients</span> across the GCC region
                    </p>
                    
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 mb-5 fade-in-up" style="animation-delay: 0.6s">
                        <a href="#products" class="btn-hero-primary">
                            Explore Products <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="#contact" class="btn-hero-accent">
                            Get a Quote <i class="bi bi-play-fill ms-2"></i>
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="row mt-5 fade-in-up" style="animation-delay: 0.8s">
                        <div class="col-md-4">
                            <div class="h2 fw-bold text-accent-custom mb-2">20+</div>
                            <div class="text-white-50">Years Experience</div>
                        </div>
                        <div class="col-md-4">
                            <div class="h2 fw-bold text-accent-custom mb-2">200+</div>
                            <div class="text-white-50">Satisfied Clients</div>
                        </div>
                        <div class="col-md-4">
                            <div class="h2 fw-bold text-accent-custom mb-2">1000+</div>
                            <div class="text-white-50">Projects Completed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div style="width: 24px; height: 40px; border: 2px solid rgba(255,255,255,0.5); border-radius: 20px; display: flex; justify-content: center;">
                <div style="width: 4px; height: 12px; background: rgba(255,255,255,0.7); border-radius: 2px; margin-top: 8px; animation: float 2s ease-in-out infinite;"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold text-primary-custom mb-4">About German Gulf Fibreglass</h2>
                    <p class="lead">We specialize in high-quality GRC & GRP products for construction projects across the GCC. With over 20 years of experience, we've become the trusted partner for architects, contractors, and developers.</p>
                    <p>Our state-of-the-art manufacturing facility in Umm Al Quwain produces world-class fiberglass solutions that meet international standards and exceed client expectations.</p>
                </div>
                <div class="col-lg-6">
                    <img src="assets/iso-certification.jpg" alt="ISO Certification" class="img-fluid rounded">
                </div>
            </div>
            
            <!-- Features Grid -->
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="bi bi-award"></i>
                        </div>
                        <h5 class="fw-bold mb-3">20+ Years Experience</h5>
                        <p>Two decades of expertise in fiberglass manufacturing and construction solutions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="bi bi-people"></i>
                        </div>
                        <h5 class="fw-bold mb-3">200+ Satisfied Clients</h5>
                        <p>Trusted by leading construction companies across UAE, Oman, Qatar, and Saudi Arabia.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="bi bi-patch-check"></i>
                        </div>
                        <h5 class="fw-bold mb-3">ISO 9001:2015 Certified</h5>
                        <p>Quality management system certified to international standards for your peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary-custom mb-4">Our Products</h2>
                <p class="lead">Comprehensive range of GRC & GRP solutions for all your construction needs</p>
            </div>
            
            <!-- Product Tabs -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="productTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="grc-tab" data-bs-toggle="tab" data-bs-target="#grc" type="button">
                        GRC Products
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="grp-tab" data-bs-toggle="tab" data-bs-target="#grp" type="button">
                        GRP Products
                    </button>
                </li>
            </ul>
            
            <div class="tab-content" id="productTabsContent">
                <!-- GRC Products -->
                <div class="tab-pane fade show active" id="grc" role="tabpanel">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="src/assets/grc-products.jpg" alt="GRC Products" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-6">
                            <h3 class="fw-bold mb-4">Glass Fiber Reinforced Concrete (GRC)</h3>
                            <p class="mb-4">Our GRC products combine the strength of concrete with the flexibility of glass fiber, creating lightweight yet durable architectural elements.</p>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="fw-bold">GRC Columns</h6>
                                            <p class="small mb-0">Architectural columns with decorative finishes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="fw-bold">GRC Screens</h6>
                                            <p class="small mb-0">Decorative screening panels for privacy and aesthetics</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="fw-bold">GRC Flower Pots</h6>
                                            <p class="small mb-0">Durable planters for landscaping projects</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="fw-bold">GRC Cornices</h6>
                                            <p class="small mb-0">Decorative architectural elements</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- GRP Products -->
                <div class="tab-pane fade" id="grp" role="tabpanel">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="src/assets/grp-products.jpg" alt="GRP Products" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-6">
                            <h3 class="fw-bold mb-4">Glass Fiber Reinforced Plastic (GRP)</h3>
                            <p class="mb-4">Our GRP products offer excellent corrosion resistance and lightweight properties, perfect for harsh environmental conditions.</p>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="fw-bold">GRP Domes</h6>
                                            <p class="small mb-0">Lightweight architectural domes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="fw-bold">GRP Water Tanks</h6>
                                            <p class="small mb-0">Corrosion-resistant storage solutions</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="fw-bold">GRP Bridges</h6>
                                            <p class="small mb-0">Pedestrian walkways and bridges</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="fw-bold">GRP Panels</h6>
                                            <p class="small mb-0">Structural and decorative panels</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary-custom mb-4">Our Projects</h2>
                <p class="lead">Showcasing our expertise across diverse construction projects</p>
            </div>
            
            <!-- Filter Buttons -->
            <div class="text-center mb-4">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary active" data-filter="all">All Projects</button>
                    <button type="button" class="btn btn-outline-primary" data-filter="grc">GRC</button>
                    <button type="button" class="btn btn-outline-primary" data-filter="grp">GRP</button>
                    <button type="button" class="btn btn-outline-primary" data-filter="commercial">Commercial</button>
                </div>
            </div>
            
            <!-- Projects Grid -->
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 project-item" data-category="grc commercial">
                    <div class="project-card position-relative">
                        <img src="src/assets/hero-construction.jpg" alt="Modern Office Complex" class="img-fluid">
                        <div class="project-overlay">
                            <div class="text-center">
                                <h5>Modern Office Complex</h5>
                                <p>GRC columns and decorative elements</p>
                                <span class="badge bg-warning">GRC</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 project-item" data-category="grp commercial">
                    <div class="project-card position-relative">
                        <img src="src/assets/grc-products.jpg" alt="Shopping Mall" class="img-fluid">
                        <div class="project-overlay">
                            <div class="text-center">
                                <h5>Shopping Mall Facade</h5>
                                <p>GRP panels and architectural features</p>
                                <span class="badge bg-info">GRP</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 project-item" data-category="grc residential">
                    <div class="project-card position-relative">
                        <img src="src/assets/grp-products.jpg" alt="Luxury Villa" class="img-fluid">
                        <div class="project-overlay">
                            <div class="text-center">
                                <h5>Luxury Villa Project</h5>
                                <p>Custom GRC elements and landscaping</p>
                                <span class="badge bg-warning">GRC</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary-custom mb-4">What Our Clients Say</h2>
                <p class="lead">Trusted by leading construction companies across the GCC</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-4">"Exceptional quality and timely delivery. German Gulf Fibreglass has been our trusted partner for multiple projects."</p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary-custom text-white d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                AH
                            </div>
                            <div>
                                <h6 class="mb-0">Ahmed Hassan</h6>
                                <small class="text-muted">Project Manager, Emirates Construction</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-4">"Outstanding craftsmanship and professional service. Their GRC products exceeded our expectations in both quality and design."</p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary-custom text-white d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                SK
                            </div>
                            <div>
                                <h6 class="mb-0">Sarah Khan</h6>
                                <small class="text-muted">Architect, Modern Designs LLC</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-4">"Reliable, innovative, and cost-effective solutions. German Gulf Fibreglass is our go-to partner for all fiberglass requirements."</p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary-custom text-white d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                MR
                            </div>
                            <div>
                                <h6 class="mb-0">Mohammed Rahman</h6>
                                <small class="text-muted">Director, Gulf Contractors</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Trust Indicators -->
            <div class="row mt-5 text-center">
                <div class="col-md-3">
                    <div class="h3 fw-bold text-accent-custom">200+</div>
                    <div class="text-muted">Happy Clients</div>
                </div>
                <div class="col-md-3">
                    <div class="h3 fw-bold text-accent-custom">1000+</div>
                    <div class="text-muted">Projects Completed</div>
                </div>
                <div class="col-md-3">
                    <div class="h3 fw-bold text-accent-custom">4.9/5</div>
                    <div class="text-muted">Average Rating</div>
                </div>
                <div class="col-md-3">
                    <div class="h3 fw-bold text-accent-custom">20+</div>
                    <div class="text-muted">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary-custom mb-4">Get In Touch</h2>
                <p class="lead">Ready to start your project? Contact us for a free consultation</p>
            </div>
            
            <div class="row g-5">
                <!-- Contact Info -->
                <div class="col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <h5 class="fw-bold">Phone</h5>
                        <p class="text-muted">+971 6 767 1234</p>
                        <a href="tel:+97167671234" class="btn btn-outline-primary btn-sm">Call Now</a>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <h5 class="fw-bold">Email</h5>
                        <p class="text-muted">info@ggfibreglass.com</p>
                        <a href="mailto:info@ggfibreglass.com" class="btn btn-outline-primary btn-sm">Send Email</a>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <h5 class="fw-bold">Location</h5>
                        <p class="text-muted">Umm Al Quwain, UAE</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">View Map</a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">Send us a Message</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="subject" class="form-label">Subject</label>
                                        <select class="form-select" id="subject">
                                            <option>General Inquiry</option>
                                            <option>GRC Products</option>
                                            <option>GRP Products</option>
                                            <option>Project Quote</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary-custom btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5>German Gulf Fibreglass</h5>
                    <p>Leading manufacturer of GRC & GRP products in the UAE since 2003. We deliver quality, innovation, and excellence in every project.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-facebook fs-5"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-instagram fs-5"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-linkedin fs-5"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-twitter fs-5"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-2">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3">
                    <h5>Products</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">GRC Columns</a></li>
                        <li><a href="#">GRC Screens</a></li>
                        <li><a href="#">GRP Domes</a></li>
                        <li><a href="#">GRP Water Tanks</a></li>
                        <li><a href="#">Custom Solutions</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3">
                    <h5>Contact Info</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt me-2"></i>Umm Al Quwain, UAE</li>
                        <li><i class="bi bi-telephone me-2"></i>+971 6 767 1234</li>
                        <li><i class="bi bi-envelope me-2"></i>info@ggfibreglass.com</li>
                        <li><i class="bi bi-clock me-2"></i>Mon-Fri: 8AM-6PM</li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 German Gulf Fibreglass. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="me-3">Privacy Policy</a>
                    <a href="#" class="me-3">Terms of Service</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Project filtering
        const filterButtons = document.querySelectorAll('[data-filter]');
        const projectItems = document.querySelectorAll('.project-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');

                projectItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category').includes(filter)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
        });

        // Add floating animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-10px); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>