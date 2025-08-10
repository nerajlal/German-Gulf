<!-- HERO -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
  <!-- Background Image with Red Overlay -->
  <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
    style="background-image: url('assets/hero-construction.jpg');">
    <div class="absolute inset-0 bg-[#b91c1c]/70 mix-blend-multiply animate-fadeIn"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/60 animate-fadeIn delay-100"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 container mx-auto px-6 py-20 text-center text-white">
    <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6 opacity-0 animate-slideUp delay-200">
      <!-- <span class="text-sm font-medium">🏆 ISO 9001:2015 Certified</span> -->
    </div>

    <h1 class="text-5xl md:text-7xl font-bold mb-6 opacity-0 animate-slideUp delay-300">
      Innovative <span class="bg-gradient-to-r from-red-500 to-red-700 bg-clip-text text-transparent">Fiberglass</span>
      <br />
      Solutions for Modern
      <br />
      <span class="bg-gradient-to-r from-red-500 to-red-700 bg-clip-text text-transparent">Construction</span>
    </h1>

    <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed opacity-0 animate-slideUp delay-400">
      Leading GRC & GRP Manufacturer in UAE Since 2003
      <br />
      <span class="text-red-400 font-semibold">200+ Satisfied Clients</span> across the GCC region
    </p>

    <!-- Call-to-Action Buttons -->
    <div class="flex flex-row justify-center items-center gap-4 opacity-0 animate-slideUp delay-500 flex-wrap">
      <a href="#products"
        class="px-5 py-2.5 rounded bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold flex items-center group shadow-md hover:shadow-lg transition">
        Explore Products
        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
          stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </a>
      <a href="#contact"
        class="px-5 py-2.5 rounded bg-gradient-to-r from-orange-500 to-yellow-500 text-white font-semibold flex items-center group shadow-md hover:shadow-lg transition">
        Get a Quote
        <svg class="ml-2 w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <polygon points="5 3 19 12 5 21 5 3" />
        </svg>
      </a>
    </div>


    <!-- Stats Row -->
    <div class="grid grid-cols-3 gap-x-4 mt-16 text-center px-2 sm:px-20 opacity-0 animate-slideUp delay-600">
      <div class="hover:scale-105 transition-transform">
        <div class="count text-2xl sm:text-4xl font-bold text-red-400 mb-1" data-target="20">0</div>
        <div class="text-xs sm:text-base text-white/85">Years Experience</div>
      </div>
      <div class="hover:scale-105 transition-transform">
        <div class="count text-2xl sm:text-4xl font-bold text-red-400 mb-1" data-target="200">0</div>
        <div class="text-xs sm:text-base text-white/85">Satisfied Clients</div>
      </div>
      <div class="hover:scale-105 transition-transform">
        <div class="count text-2xl sm:text-4xl font-bold text-red-400 mb-1" data-target="1000">0</div>
        <div class="text-xs sm:text-base text-white/85">Projects Completed</div>
      </div>
    </div>
  </div>
</section>

<!-- Animations -->
<style>
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
@keyframes slideUp {
  from { transform: translateY(20px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}
.animate-fadeIn { animation: fadeIn 1s ease forwards; }
.animate-slideUp { animation: slideUp 0.8s ease forwards; }
.delay-100 { animation-delay: 0.1s; }
.delay-200 { animation-delay: 0.2s; }
.delay-300 { animation-delay: 0.3s; }
.delay-400 { animation-delay: 0.4s; }
.delay-500 { animation-delay: 0.5s; }
.delay-600 { animation-delay: 0.6s; }
</style>

<!-- Counter Script -->
<script>
function animateCounter(entry) {
  if (entry.isIntersecting) {
    const counters = document.querySelectorAll('.count');
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      let count = 0;
      const step = target / 100; // speed
      const updateCounter = () => {
        count += step;
        if (count < target) {
          counter.textContent = Math.ceil(count) + '+';
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target + '+';
        }
      };
      updateCounter();
    });
    observer.disconnect(); // run only once
  }
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach(animateCounter);
}, { threshold: 0.5 });

observer.observe(document.querySelector('#home .count'));
</script>
