<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>German Gulf Fibreglass</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-primary { background-color: #b91c1c; }
    .text-primary { color: #b91c1c; }
  </style>

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
</head>
<body class="font-sans">

  <!-- HEADER -->
  <header
    class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-md shadow-sm z-50"
  >
    <!-- Top Bar - FULL WIDTH -->
    <div class="bg-primary text-white text-xs w-full">
      <div class="flex justify-between items-center py-3 px-4 max-w-[1400px] mx-auto">
        <!-- Left Contact Info -->
        <div class="flex items-center space-x-4">
          <div class="flex items-center space-x-1">
            <i class="fa fa-phone text-sm"></i>
            <span>+971 6 766 2626</span>
          </div>
          <div class="flex items-center space-x-1">
            <i class="fa fa-envelope text-sm"></i>
            <span>info@germangulf.ae</span>
          </div>
        </div>
        <!-- Right Tagline -->
        <div class="hidden md:block">
          <span>Leading GRC &amp; GRP Manufacturer in UAE Since 2003</span>
        </div>
      </div>
    </div>

    <!-- Main Navigation -->
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center py-4">
        <!-- Logo -->
        <h1 class="text-xl font-bold text-primary">German Gulf Fibreglass</h1>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center space-x-7 text-base font-medium">
          <a
            href="#home"
            class="text-gray-700 hover:text-primary transition-colors"
            >Home</a
          >
          <a
            href="#about"
            class="text-gray-700 hover:text-primary transition-colors"
            >About Us</a
          >
          <a
            href="#products"
            class="text-gray-700 hover:text-primary transition-colors"
            >Products</a
          >
          <a
            href="#projects"
            class="text-gray-700 hover:text-primary transition-colors"
            >Projects</a
          >
          <a
            href="#news"
            class="text-gray-700 hover:text-primary transition-colors"
            >News</a
          >
          <a
            href="#contact"
            class="text-gray-700 hover:text-primary transition-colors"
            >Contact</a
          >
        </nav>

        <!-- CTA -->
        <div class="hidden md:block">
          <button
            class="px-5 py-2.5 rounded bg-gradient-to-r from-[#b91c1c] to-[#7f1d1d] text-white text-sm font-semibold shadow hover:shadow-md transition"
          >
            Get Quote
          </button>
        </div>

        <!-- Mobile Menu Button -->
        <button class="lg:hidden p-1" onclick="toggleMenu()">
          <svg
            id="menu-icon"
            class="w-6 h-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-md pt-24">
    <nav class="flex flex-col p-4 space-y-4 text-gray-700">
      <a href="#home" class="hover:text-[#b91c1c]">Home</a>
      <a href="#about" class="hover:text-[#b91c1c]">About Us</a>
      <a href="#products" class="hover:text-[#b91c1c]">Products</a>
      <a href="#projects" class="hover:text-[#b91c1c]">Projects</a>
      <a href="#news" class="hover:text-[#b91c1c]">News</a>
      <a href="#contact" class="hover:text-[#b91c1c]">Contact</a>
    </nav>
  </div>

  <script>
    function toggleMenu() {
      document.getElementById("mobile-menu").classList.toggle("hidden");
    }
  </script>
</body>
</html>
