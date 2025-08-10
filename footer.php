<style>
  /* Mobile: 2 columns grid for Quick Links & Products */
  @media (max-width: 639px) {
    .mobile-two-cols {
      display: grid !important;
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 2rem; /* gap-8 */
    }
  }
</style>

<footer class="bg-gradient-to-r from-[#b91c1c] to-[#7f1d1d] text-white mt-12">
  <div class="container mx-auto px-6 py-10
              grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-4 gap-8 mobile-two-cols">

    <!-- Company Info -->
    <div class="col-span-2 sm:col-span-1 lg:col-span-1 mb-8 sm:mb-0">
      <h3 class="text-2xl font-bold text-red-400 mb-4">German Gulf Fibreglass</h3>
      <ul class="space-y-2">
        <li class="flex items-center space-x-2">
          <i class="fas fa-map-marker-alt w-5 h-5 text-red-400"></i>
          <span>Umm Al Quwain Industrial Area, UAE</span>
        </li>
        <li>
          <a href="tel:+97167662626" class="flex items-center space-x-2 hover:text-red-400 transition-colors">
            <i class="fas fa-phone-alt w-5 h-5 text-red-400"></i>
            <span>+971 6 766 2626</span>
          </a>
        </li>
        <li>
          <a href="mailto:info@germangulf.ae" class="flex items-center space-x-2 hover:text-red-400 transition-colors">
            <i class="fas fa-envelope w-5 h-5 text-red-400"></i>
            <span>info@germangulf.ae</span>
          </a>
        </li>
        <li class="flex items-center space-x-2">
          <i class="fas fa-clock w-5 h-5 text-red-400"></i>
          <span>Mon-Fri: 8AM-6PM, Sat: 8AM-2PM</span>
        </li>
      </ul>
    </div>

    <!-- Quick Links -->
    <div class="col-span-1 lg:col-span-1">
      <h4 class="text-lg font-semibold mb-6 text-red-400">Quick Links</h4>
      <ul class="space-y-3">
        <li><a href="#about" class="hover:text-red-400 transition-colors">About Us</a></li>
        <li><a href="#products" class="hover:text-red-400 transition-colors">Services</a></li>
        <li><a href="#projects" class="hover:text-red-400 transition-colors">Projects</a></li>
        <li><a href="#contact" class="hover:text-red-400 transition-colors">Contact</a></li>
      </ul>
    </div>

    <!-- Our Products -->
    <div class="col-span-1 lg:col-span-1">
      <h4 class="text-lg font-semibold mb-6 text-red-400">Our Products</h4>
      <ul class="space-y-3">
        <li>GRC Screens</li>
        <li>GRP Domes</li>
        <li>GRP Water Tanks</li>
        <li>GRP Pedestrian Bridges</li>
      </ul>
    </div>

    <!-- Certifications -->
    <div class="col-span-2 sm:col-span-1 lg:col-span-1 mb-8 sm:mb-0">
      <h4 class="text-lg font-semibold mb-6 text-red-400">Certifications</h4>
      <ul class="space-y-3">
        <li>ISO 9001:2015 Certified</li>
        <li>Dubai Municipality Approved</li>
        <li>ADDC Approved Supplier</li>
        <li>GCC Quality Standards</li>
      </ul>
    </div>

  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-white/20 mt-4 pt-4 pb-3 text-white/70 text-sm flex flex-col md:flex-row justify-between items-center px-6 lg:px-12">
    <span>© <span id="year"></span> German Gulf Fibreglass. All rights reserved.</span>
    <div class="flex gap-6 mt-2 md:mt-0">
      <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-red-400 transition-colors text-white">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-red-400 transition-colors text-white">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-red-400 transition-colors text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-red-400 transition-colors text-white">
        <i class="fab fa-twitter"></i>
      </a>
    </div>
    <div class="flex gap-6 mt-2 md:mt-0">
      <a href="#" class="hover:text-red-400 transition-colors">Privacy Policy</a>
      <a href="#" class="hover:text-red-400 transition-colors">Terms of Service</a>
      <a href="#" class="hover:text-red-400 transition-colors">Site Map</a>
    </div>
  </div>
</footer>

<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>
