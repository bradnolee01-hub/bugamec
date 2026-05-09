<?php include 'partials/header.php'; ?>

<!-- Hero -->
<section class="hero flex items-center text-white">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h1 class="text-6xl md:text-7xl font-bold mb-6">BUGAMEC LTD</h1>
    <p class="text-2xl md:text-3xl mb-8">Geotechnical & Materials Engineering Experts</p>
    <p class="max-w-2xl mx-auto text-lg mb-10">Reliable site investigations, drilling, testing & foundation solutions across Uganda.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="quote.php" class="bg-orange-500 hover:bg-orange-600 px-10 py-4 rounded-full text-lg font-semibold transition">Request Quote</a>
      <a href="projects.php" class="border-2 border-white hover:bg-white hover:text-[#0a3d62] px-10 py-4 rounded-full text-lg font-semibold transition">View Projects</a>
    </div>
  </div>
</section>

<!-- Services Overview -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-4xl font-bold text-center mb-12">Our Services</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Repeat cards with your images -->
      <div class="bg-white rounded-2xl overflow-hidden card-hover">
        <img src="assets/images/services/geotechnical-investigation.jpg" alt="Geotechnical Site Investigation" class="w-full h-56 object-cover">
        <div class="p-8">
          <h3 class="text-2xl font-semibold mb-3">Geotechnical Site Investigation</h3>
          <p class="text-gray-600">Comprehensive soil testing and analysis.</p>
        </div>
      </div>
      <!-- Add more cards for Boreholes, Materials Testing, Foundation Analysis, Road Design, etc. -->
    </div>
  </div>
</section>

<!-- Quick CTA -->
<section class="bg-[#0a3d62] text-white py-16">
  <div class="max-w-4xl mx-auto text-center px-6">
    <h2 class="text-4xl font-bold mb-4">Ready to Build on Solid Ground?</h2>
    <a href="quote.php" class="inline-block bg-white text-[#0a3d62] px-12 py-5 rounded-full text-xl font-semibold hover:scale-105 transition">Get a Free Quote Today</a>
  </div>
</section>

<?php include 'partials/footer.php'; ?>