<!-- CONTACT -->
<section id="contact" class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    
    <!-- Section Header -->
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-5xl font-bold mb-4 text-[#b91c1c]">
        Get in Touch
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Have a question about our products, services, or pricing?  
        Our team is here to help you every step of the way.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      
      <!-- Contact Form -->
      <div class="bg-white rounded-xl shadow-lg p-8">
        <form action="mailto:info@germangulf.com" method="POST" enctype="text/plain" class="space-y-6">
          
          <!-- Name -->
          <div class="relative">
            <input type="text" id="name" name="name" required
              class="peer w-full border-b-2 border-gray-300 bg-transparent focus:border-[#b91c1c] focus:outline-none py-2 placeholder-transparent">
            <label for="name"
              class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-[#b91c1c] peer-focus:text-sm">
              Name
            </label>
          </div>

          <!-- Email -->
          <div class="relative">
            <input type="email" id="email" name="email" required
              class="peer w-full border-b-2 border-gray-300 bg-transparent focus:border-[#b91c1c] focus:outline-none py-2 placeholder-transparent">
            <label for="email"
              class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-[#b91c1c] peer-focus:text-sm">
              Email
            </label>
          </div>

          <!-- Phone -->
          <div class="relative">
            <input type="tel" id="phone" name="phone" pattern="[0-9+ ]{7,15}"
              class="peer w-full border-b-2 border-gray-300 bg-transparent focus:border-[#b91c1c] focus:outline-none py-2 placeholder-transparent">
            <label for="phone"
              class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-[#b91c1c] peer-focus:text-sm">
              Phone
            </label>
          </div>

          <!-- Message -->
          <div class="relative">
            <textarea id="message" name="message" rows="4" required
              class="peer w-full border-b-2 border-gray-300 bg-transparent focus:border-[#b91c1c] focus:outline-none py-2 placeholder-transparent"></textarea>
            <label for="message"
              class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-[#b91c1c] peer-focus:text-sm">
              Message
            </label>
          </div>

          <button type="submit"
            class="w-full py-3 bg-gradient-to-r from-[#b91c1c] to-[#7f1d1d] text-white font-semibold rounded-lg shadow hover:shadow-xl transition">
            Send Message
          </button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="space-y-8">
        
        <div class="bg-gradient-to-r from-[#b91c1c] to-[#7f1d1d] text-white rounded-xl shadow-lg p-8">
          <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
          <ul class="space-y-5">
            <li class="flex items-start">
              <i class="fas fa-map-marker-alt w-6 h-6 text-red-300 mr-3"></i>
              <span>German Gulf Fibreglass, Industrial Area, Sharjah, UAE</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-phone w-6 h-6 text-red-300 mr-3"></i>
              <span>+971 6 123 4567</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-envelope w-6 h-6 text-red-300 mr-3"></i>
              <span>info@germangulf.com</span>
            </li>
          </ul>
        </div>

        <!-- Google Map -->
        <div class="rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition">
          <iframe class="w-full h-64" frameborder="0" style="border:0"
            src="https://maps.google.com/maps?q=Sharjah%20UAE&t=&z=13&ie=UTF8&iwloc=&output=embed"
            allowfullscreen></iframe>
        </div>

      </div>
      
    </div>

    <!-- Immediate Assistance Section -->
    <div class="bg-gradient-to-r from-[#b91c1c] to-[#7f1d1d] text-white text-center py-8 mt-12 rounded-xl shadow-lg">
      <h3 class="text-2xl font-bold mb-2">Need Immediate Assistance?</h3>
      <p class="mb-6">
        For urgent inquiries or immediate support, call or email our dedicated project team
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="tel:+97167662626"
          class="inline-flex items-center px-6 py-3 bg-white text-[#b91c1c] font-semibold rounded shadow hover:bg-gray-100 transition-colors">
          <i class="fas fa-phone mr-2"></i> +971 6 766 2626
        </a>
        <a href="mailto:info@germangulf.com"
          class="inline-flex items-center px-6 py-3 bg-white text-[#b91c1c] font-semibold rounded shadow hover:bg-gray-100 transition-colors">
          <i class="fas fa-envelope mr-2"></i> Email Us
        </a>
      </div>

    </div>

  </div>
</section>
