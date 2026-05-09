<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BUGAMEC LTD - Geotechnical & Materials Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-white text-gray-800">
  <!-- Navbar -->
  <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex justify-between items-center py-5">
        <div class="flex items-center gap-3">
          <img src="assets/images/logo.png" alt="BUGAMEC Logo" class="h-12 w-auto">
          <div>
            <h1 class="text-2xl font-bold text-[#0a3d62]">BUGAMEC</h1>
            <p class="text-xs text-gray-500 -mt-1">Geotechnical Ltd</p>
          </div>
        </div>

        <div class="hidden md:flex items-center gap-8 text-lg">
          <a href="index.php" class="nav-link font-medium hover:text-[#0a3d62]">Home</a>
          <a href="about.php" class="nav-link font-medium hover:text-[#0a3d62]">About Us</a>
          <a href="services.php" class="nav-link font-medium hover:text-[#0a3d62]">Services</a>
          <a href="projects.php" class="nav-link font-medium hover:text-[#0a3d62]">Projects</a>
          <a href="quote.php" class="nav-link font-medium hover:text-[#0a3d62]">Request Quote</a>
          <a href="contact.php" class="nav-link font-medium hover:text-[#0a3d62]">Contact</a>
        </div>

        <a href="tel:+256777466508" class="hidden md:flex items-center gap-2 bg-[#0a3d62] text-white px-6 py-3 rounded-full hover:bg-orange-600 transition">
          <i class="fas fa-phone"></i> +256 777 466 508
        </a>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden text-3xl">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
      <div class="flex flex-col px-6 py-6 gap-4 text-lg">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="services.php">Services</a>
        <a href="projects.php">Projects</a>
        <a href="quote.php">Request Quote</a>
        <a href="contact.php">Contact</a>
        <a href="tel:+256777466508" class="font-semibold text-[#0a3d62]">Call: +256 777 466 508</a>
      </div>
    </div>
  </nav>