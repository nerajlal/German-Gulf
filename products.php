<!-- PRODUCTS -->
<section id="products" class="py-20 bg-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-5xl font-bold mb-6 text-[#b91c1c]">
        Our Product Range
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        Comprehensive GRC & GRP solutions engineered for excellence, designed for durability,
        and crafted for your specific construction needs.
      </p>
    </div>

    <!-- Tabs -->
    <div class="w-full max-w-md mx-auto grid grid-cols-2 mb-12 rounded-lg overflow-hidden border border-gray-200">
      <button onclick="showTab('grc')"
        class="tab-btn px-4 py-3 text-lg font-semibold bg-[#b91c1c] text-white transition-all"
        id="tab-grc">
        GRC Products
      </button>
      <button onclick="showTab('grp')"
        class="tab-btn px-4 py-3 text-lg font-semibold bg-gray-100 text-gray-700 hover:bg-gray-200 transition-all"
        id="tab-grp">
        GRP Products
      </button>
    </div>

    <!-- GRC Tab Content -->
    <div id="content-grc" class="tab-content">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
        <div>
          <img src="assets/grc-products.jpg" alt="GRC Products"
            class="w-full h-96 object-cover rounded-2xl shadow-md">
        </div>
        <div>
          <h3 class="text-3xl font-bold mb-6 text-[#b91c1c]">
            Glass Fiber Reinforced Concrete (GRC)
          </h3>
          <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Our GRC products combine the strength of concrete with the flexibility of glass fiber,
            creating lightweight yet durable architectural elements.
          </p>
          <a href="#"
            class="px-6 py-3 rounded bg-[#b91c1c] text-white font-semibold flex items-center group w-max shadow hover:bg-[#7f1212] transition">
            View All GRC Products
            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Product List -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-6 border rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-semibold mb-3 text-[#b91c1c]">GRC Columns</h4>
          <p class="text-gray-600 mb-4">Lightweight architectural columns with superior strength and design flexibility</p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-600">Lightweight</span>
            <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-600">Weather Resistant</span>
          </div>
          <a href="#" class="px-4 py-2 border border-[#b91c1c] rounded text-sm font-medium text-[#b91c1c] hover:bg-[#b91c1c] hover:text-white transition">Learn More</a>
        </div>
        <div class="p-6 border rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-semibold mb-3 text-[#b91c1c]">GRC Screens</h4>
          <p class="text-gray-600 mb-4">Decorative and functional screens for modern applications</p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-600">Decorative</span>
            <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-600">Privacy Solutions</span>
          </div>
          <a href="#" class="px-4 py-2 border border-[#b91c1c] rounded text-sm font-medium text-[#b91c1c] hover:bg-[#b91c1c] hover:text-white transition">Learn More</a>
        </div>
      </div>
    </div>

    <!-- GRP Tab Content -->
    <div id="content-grp" class="tab-content hidden">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
        <div>
          <img src="assets/grp-products.jpg" alt="GRP Products"
            class="w-full h-96 object-cover rounded-2xl shadow-md">
        </div>
        <div>
          <h3 class="text-3xl font-bold mb-6 text-[#b91c1c]">
            Glass Fiber Reinforced Plastic (GRP)
          </h3>
          <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Our GRP solutions offer exceptional strength-to-weight ratio, corrosion resistance,
            and design flexibility for demanding applications.
          </p>
          <a href="#"
            class="px-6 py-3 rounded bg-[#b91c1c] text-white font-semibold flex items-center group w-max shadow hover:bg-[#7f1212] transition">
            View All GRP Products
            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Product List -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-6 border rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-semibold mb-3 text-[#b91c1c]">GRP Domes</h4>
          <p class="text-gray-600 mb-4">Lightweight and weather-resistant domes for architectural needs</p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-600">Lightweight</span>
            <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-600">UV Resistant</span>
          </div>
          <a href="#" class="px-4 py-2 border border-[#b91c1c] rounded text-sm font-medium text-[#b91c1c] hover:bg-[#b91c1c] hover:text-white transition">Learn More</a>
        </div>
        <div class="p-6 border rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-semibold mb-3 text-[#b91c1c]">GRP Water Tanks</h4>
          <p class="text-gray-600 mb-4">Corrosion-proof water storage solutions</p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-600">Corrosion Resistant</span>
            <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-600">Food Grade</span>
          </div>
          <a href="#" class="px-4 py-2 border border-[#b91c1c] rounded text-sm font-medium text-[#b91c1c] hover:bg-[#b91c1c] hover:text-white transition">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tab Switching Script -->
<script>
  function showTab(tab) {
    document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
    document.querySelector(`#content-${tab}`).classList.remove('hidden');

    ['grc', 'grp'].forEach(t => {
      document.getElementById(`tab-${t}`).classList.remove('bg-[#b91c1c]', 'text-white');
      document.getElementById(`tab-${t}`).classList.add('bg-gray-100', 'text-gray-700');
    });

    document.getElementById(`tab-${tab}`).classList.add('bg-[#b91c1c]', 'text-white');
    document.getElementById(`tab-${tab}`).classList.remove('bg-gray-100', 'text-gray-700');
  }
</script>
