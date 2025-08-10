<!-- TESTIMONIALS SECTION -->
<section id="testimonials" class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-5xl font-bold mb-6 text-[#b91c1c]">What Our Clients Say</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        Trusted by leading companies across the GCC region for delivering excellence
        in every GRC & GRP project we undertake.
      </p>
    </div>

    <div class="flex items-center justify-center max-w-full mx-auto space-x-4 px-4">
      <!-- Left Arrow -->
      <button id="prevArrowTestimonial" aria-label="Previous testimonial" class="text-4xl font-bold text-red-400 hover:text-red-600 select-none">
        <i class="fas fa-chevron-left"></i>
      </button>

      <div id="testimonialSlides" class="overflow-hidden w-full h-[320px]">
        <div id="slidesInner" class="flex transition-transform duration-700 ease-in-out will-change-transform">
          <!-- Cards inserted dynamically -->
        </div>
      </div>

      <!-- Right Arrow -->
      <button id="nextArrowTestimonial" aria-label="Next testimonial" class="text-4xl font-bold text-red-400 hover:text-red-600 select-none">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<!-- PROJECTS SECTION -->
<section id="projects" class="py-20 bg-gray-100">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-5xl font-bold mb-6 text-[#b91c1c]">
        Our Projects Portfolio
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        Showcasing excellence across the GCC region with innovative GRC & GRP solutions
        for diverse architectural and industrial applications.
      </p>
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-12">
      <button class="filter-btn px-4 py-2 rounded-full border border-[#b91c1c] bg-gradient-to-r from-[#b91c1c] to-[#7f1d1d] text-white shadow-sm" data-filter="all">All Projects</button>
      <button class="filter-btn px-4 py-2 rounded-full border border-[#b91c1c] text-[#b91c1c] hover:bg-gradient-to-r hover:from-[#b91c1c] hover:to-[#7f1d1d] hover:text-white transition" data-filter="grc">GRC Projects</button>
      <button class="filter-btn px-4 py-2 rounded-full border border-[#b91c1c] text-[#b91c1c] hover:bg-gradient-to-r hover:from-[#b91c1c] hover:to-[#7f1d1c] hover:text-white transition" data-filter="grp">GRP Projects</button>
      <button class="filter-btn px-4 py-2 rounded-full border border-[#b91c1c] text-[#b91c1c] hover:bg-gradient-to-r hover:from-[#b91c1c] hover:to-[#7f1d1d] hover:text-white transition" data-filter="commercial">Commercial</button>
      <button class="filter-btn px-4 py-2 rounded-full border border-[#b91c1c] text-[#b91c1c] hover:bg-gradient-to-r hover:from-[#b91c1c] hover:to-[#7f1d1d] hover:text-white transition" data-filter="residential">Residential</button>
    </div>

    <div id="projectsSlides" class="overflow-hidden w-full h-[480px]">
      <div id="projectsInner" class="flex transition-transform duration-700 ease-in-out will-change-transform">
        <!-- Project cards inserted dynamically -->
      </div>
    </div>
  </div>
</section>

<!-- FontAwesome CDN -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
  // Testimonial Slider IIFE
  (function() {
    const slidesInner = document.getElementById('slidesInner');
    const testimonials = [
      {
        quote: `"German Gulf Fibreglass delivered exceptional GRC façade elements for our Dubai Marina project. Their attention to detail and quality craftsmanship exceeded our expectations."`,
        name: "Ahmed Al-Mansouri",
        role: "Project Manager",
        company: "Emaar Properties",
        img: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100",
      },
      {
        quote: `"From consultation to delivery, their GRP solutions were flawless. The products were durable, beautifully crafted, and delivered ahead of schedule."`,
        name: "Sarah Johnson",
        role: "Architect",
        company: "Dubai Design Studio",
        img: "https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100",
      },
      {
        quote: `"Their GRC screens transformed our commercial property façade. We received numerous compliments from our clients and visitors."`,
        name: "Khalid Bin Saeed",
        role: "Property Developer",
        company: "Al Noor Group",
        img: "https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100",
      },
      {
        quote: `"We partnered with them for GRP water tanks. The quality, delivery time, and after-sales support were truly commendable."`,
        name: "Priya Sharma",
        role: "Operations Head",
        company: "Gulf Water Solutions",
        img: "https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=100",
      },
    ];

    function createCard(t) {
      const card = document.createElement('div');
      card.className = 'flex-shrink-0 w-full md:w-1/3 px-3';
      card.innerHTML = `
        <div class="border rounded-lg shadow p-6 bg-white h-full">
          <div class="flex items-center mb-4">
            <i class="fas fa-quote-left text-red-400 mr-3 text-2xl"></i>
            <div class="flex text-red-400 text-lg">★★★★★</div>
          </div>
          <p class="text-gray-600 mb-6 leading-relaxed italic">${t.quote}</p>
          <div class="flex items-center">
            <img src="${t.img}" alt="${t.name}" class="w-12 h-12 rounded-full object-cover mr-4">
            <div>
              <h4 class="font-semibold text-[#b91c1c]">${t.name}</h4>
              <p class="text-sm text-gray-600">${t.role}</p>
              <p class="text-sm font-medium text-red-400">${t.company}</p>
            </div>
          </div>
        </div>
      `;
      return card;
    }

    let cardsPerView = window.innerWidth >= 768 ? 3 : 1;
    let totalCards = testimonials.length;
    let currentSlide = 0;
    let isTransitioning = false;

    function setupSlides() {
      slidesInner.innerHTML = '';

      // Clone last N cards at start
      for (let i = totalCards - cardsPerView; i < totalCards; i++) {
        slidesInner.appendChild(createCard(testimonials[i]));
      }

      // Original cards
      testimonials.forEach(t => {
        slidesInner.appendChild(createCard(t));
      });

      // Clone first N cards at end
      for (let i = 0; i < cardsPerView; i++) {
        slidesInner.appendChild(createCard(testimonials[i]));
      }
    }

    setupSlides();

    function setInitialPosition() {
      slidesInner.style.transition = 'none';
      const translateX = -cardsPerView * (100 / cardsPerView);
      slidesInner.style.transform = `translateX(${translateX}%)`;
      currentSlide = 0;
      setTimeout(() => {
        slidesInner.style.transition = 'transform 0.7s ease-in-out';
      }, 50);
    }

    setInitialPosition();

    function goToSlide(n) {
      if (isTransitioning) return;
      isTransitioning = true;
      currentSlide = n;
      const translateX = -(n + cardsPerView) * (100 / cardsPerView);
      slidesInner.style.transform = `translateX(${translateX}%)`;
    }

    slidesInner.addEventListener('transitionend', () => {
      isTransitioning = false;
      if (currentSlide >= totalCards) {
        slidesInner.style.transition = 'none';
        currentSlide = 0;
        const translateX = -cardsPerView * (100 / cardsPerView);
        slidesInner.style.transform = `translateX(${translateX}%)`;
        slidesInner.offsetHeight;
        slidesInner.style.transition = 'transform 0.7s ease-in-out';
      }
      if (currentSlide < 0) {
        slidesInner.style.transition = 'none';
        currentSlide = totalCards - 1;
        const translateX = -(currentSlide + cardsPerView) * (100 / cardsPerView);
        slidesInner.style.transform = `translateX(${translateX}%)`;
        slidesInner.offsetHeight;
        slidesInner.style.transition = 'transform 0.7s ease-in-out';
      }
    });

    function nextSlide() {
      if (isTransitioning) return;
      goToSlide(currentSlide + 1);
    }

    function prevSlide() {
      if (isTransitioning) return;
      goToSlide(currentSlide - 1);
    }

    document.getElementById('nextArrowTestimonial').addEventListener('click', () => {
      nextSlide();
      resetAutoSlide();
    });

    document.getElementById('prevArrowTestimonial').addEventListener('click', () => {
      prevSlide();
      resetAutoSlide();
    });

    let autoSlide = setInterval(nextSlide, 5000);

    function resetAutoSlide() {
      clearInterval(autoSlide);
      autoSlide = setInterval(nextSlide, 5000);
    }

    window.addEventListener('resize', () => {
      const newCardsPerView = window.innerWidth >= 768 ? 3 : 1;
      if (newCardsPerView !== cardsPerView) {
        cardsPerView = newCardsPerView;
        setupSlides();
        setInitialPosition();
      }
    });
  })();
</script>

<script>
  // Projects Slider IIFE
  (function() {
    const projectsInner = document.getElementById('projectsInner');
    const projects = [
      {
        img: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600",
        type: "grc",
        category: "commercial",
        title: "Dubai Marina Tower",
        desc: "Custom GRC façade elements for luxury high-rise development",
        tags: ["GRC Panels", "Façade"],
        company: "Emaar Properties",
        companyType: "Commercial",
        url: "#",
      },
      {
        img: "https://images.unsplash.com/photo-1599423300746-b62533397364?w=600",
        type: "grp",
        category: "residential",
        title: "Abu Dhabi Villa",
        desc: "Elegant GRP domes and decorative screens for a luxury villa",
        tags: ["GRP Domes", "Screens"],
        company: "Private Client",
        companyType: "Residential",
        url: "#",
      },
      {
        img: "https://images.unsplash.com/photo-1600585152220-90363fe7e115?w=600",
        type: "grc",
        category: "residential",
        title: "Palm Jumeirah Villa",
        desc: "Bespoke GRC cladding for premium waterfront residence",
        tags: ["Cladding", "Luxury"],
        company: "Nakheel",
        companyType: "Residential",
        url: "#",
      },
      {
        img: "https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600",
        type: "grp",
        category: "commercial",
        title: "Sharjah Mall",
        desc: "Durable GRP roofing and decorative elements for a major shopping complex",
        tags: ["Roofing", "Decorative"],
        company: "City Developments",
        companyType: "Commercial",
        url: "#",
      },
    ];

    let cardsPerView = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
    let totalCards = projects.length;
    let currentSlide = 0;
    let isTransitioning = false;

    function createProjectCard(p) {
      const card = document.createElement('div');
      card.className = 'flex-shrink-0 px-3 ' + (cardsPerView === 1 ? 'w-full' : cardsPerView === 2 ? 'w-1/2' : 'w-1/3');
      card.innerHTML = `
        <div class="project-card border rounded-lg shadow bg-white overflow-hidden hover:shadow-lg transition h-full flex flex-col">
          <div class="relative overflow-hidden">
            <img src="${p.img}" alt="${p.title}" class="w-full h-48 object-cover transform hover:scale-105 transition" />
            <span class="absolute top-4 left-4 bg-gradient-to-r from-[#b91c1c] to-[#7f1d1d] text-white text-xs px-2 py-1 rounded">${p.type.toUpperCase()}</span>
          </div>
          <div class="p-6 flex-grow flex flex-col">
            <h3 class="text-xl font-semibold text-[#b91c1c] mb-2">${p.title}</h3>
            <p class="text-gray-600 mb-4 flex-grow">${p.desc}</p>
            <div class="flex flex-wrap gap-2 mb-4">
              ${p.tags.map(tag => `<span class="px-2 py-1 bg-gray-100 rounded text-xs">${tag}</span>`).join('')}
            </div>
            <div class="flex items-center justify-between mt-auto">
              <div>
                <p class="text-sm font-medium text-[#b91c1c]">${p.company}</p>
                <p class="text-xs text-gray-500">${p.companyType}</p>
              </div>
              <a href="${p.url}" class="text-sm text-[#b91c1c] hover:underline flex items-center">View Project
                <svg class="ml-1 w-4 h-4 fill-[#b91c1c]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M9 5l7 7-7 7" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      `;
      return card;
    }

    function setupSlides() {
      projectsInner.innerHTML = '';

      // Clone last N cards at start
      for (let i = totalCards - cardsPerView; i < totalCards; i++) {
        projectsInner.appendChild(createProjectCard(projects[i]));
      }

      // Original cards
      projects.forEach(p => {
        projectsInner.appendChild(createProjectCard(p));
      });

      // Clone first N cards at end
      for (let i = 0; i < cardsPerView; i++) {
        projectsInner.appendChild(createProjectCard(projects[i]));
      }
    }

    setupSlides();

    function setInitialPosition() {
      projectsInner.style.transition = 'none';
      const translateX = -cardsPerView * (100 / cardsPerView);
      projectsInner.style.transform = `translateX(${translateX}%)`;
      currentSlide = 0;
      setTimeout(() => {
        projectsInner.style.transition = 'transform 0.7s ease-in-out';
      }, 50);
    }

    setInitialPosition();

    function goToSlide(n) {
      if (isTransitioning) return;
      isTransitioning = true;
      currentSlide = n;
      const translateX = -(n + cardsPerView) * (100 / cardsPerView);
      projectsInner.style.transform = `translateX(${translateX}%)`;
    }

    projectsInner.addEventListener('transitionend', () => {
      isTransitioning = false;
      if (currentSlide >= totalCards) {
        projectsInner.style.transition = 'none';
        currentSlide = 0;
        const translateX = -cardsPerView * (100 / cardsPerView);
        projectsInner.style.transform = `translateX(${translateX}%)`;
        projectsInner.offsetHeight;
        projectsInner.style.transition = 'transform 0.7s ease-in-out';
      }
      if (currentSlide < 0) {
        projectsInner.style.transition = 'none';
        currentSlide = totalCards - 1;
        const translateX = -(currentSlide + cardsPerView) * (100 / cardsPerView);
        projectsInner.style.transform = `translateX(${translateX}%)`;
        projectsInner.offsetHeight;
        projectsInner.style.transition = 'transform 0.7s ease-in-out';
      }
    });

    function nextSlide() {
      if (isTransitioning) return;
      goToSlide(currentSlide + 1);
    }

    // Auto slide every 5 seconds
    let autoSlide = setInterval(nextSlide, 5000);

    window.addEventListener('resize', () => {
      const newCardsPerView = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
      if (newCardsPerView !== cardsPerView) {
        cardsPerView = newCardsPerView;
        setupSlides();
        setInitialPosition();
      }
    });

    // Filter buttons
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.dataset.filter;
        document.querySelectorAll('.filter-btn').forEach(b => {
          b.classList.remove('bg-gradient-to-r', 'from-[#b91c1c]', 'to-[#7f1d1d]', 'text-white');
          b.classList.add('bg-white', 'text-[#b91c1c]');
        });
        btn.classList.add('bg-gradient-to-r', 'from-[#b91c1c]', 'to-[#7f1d1d]', 'text-white');

        let filteredProjects = [];

        if (filter === 'all') {
          filteredProjects = projects;
        } else {
          filteredProjects = projects.filter(p => p.type === filter || p.category === filter);
        }

        // Replace project slides with filtered projects
        projectsInner.innerHTML = '';

        // Show clones + filtered projects + clones again for infinite
        const count = filteredProjects.length;
        if (count === 0) return;

        // Determine cards per view
        const cpv = cardsPerView;

        // Clone last cpv cards
        for (let i = count - cpv; i < count; i++) {
          projectsInner.appendChild(createProjectCard(filteredProjects[i]));
        }

        // Original filtered cards
        filteredProjects.forEach(p => {
          projectsInner.appendChild(createProjectCard(p));
        });

        // Clone first cpv cards
        for (let i = 0; i < cpv; i++) {
          projectsInner.appendChild(createProjectCard(filteredProjects[i]));
        }

        currentSlide = 0;
        totalCards = count;
        setInitialPosition();
      });
    });
  })();
</script>
