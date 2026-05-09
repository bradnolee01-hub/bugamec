<?php include 'partials/header.php'; ?>

<section class="py-20 bg-gray-50">
  <div class="max-w-3xl mx-auto px-6">
    <h1 class="text-5xl font-bold text-center mb-8">Request a Quote</h1>
    
    <form id="quoteForm" action="api/process_form.php" method="POST" class="bg-white shadow-2xl rounded-3xl p-10 space-y-8">
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium mb-2">Full Name *</label>
          <input type="text" name="name" required class="w-full px-5 py-4 border rounded-2xl focus:outline-none focus:border-[#0a3d62]">
        </div>
        <div>
          <label class="block text-sm font-medium mb-2">Company (Optional)</label>
          <input type="text" name="company" class="w-full px-5 py-4 border rounded-2xl focus:outline-none focus:border-[#0a3d62]">
        </div>
      </div>

      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium mb-2">Email Address *</label>
          <input type="email" name="email" required class="w-full px-5 py-4 border rounded-2xl focus:outline-none focus:border-[#0a3d62]">
        </div>
        <div>
          <label class="block text-sm font-medium mb-2">Phone Number *</label>
          <input type="tel" name="phone" required class="w-full px-5 py-4 border rounded-2xl focus:outline-none focus:border-[#0a3d62]">
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium mb-2">Service Required</label>
        <select name="service" class="w-full px-5 py-4 border rounded-2xl focus:outline-none focus:border-[#0a3d62]">
          <option value="">Select Service</option>
          <option>Geotechnical Site Investigation</option>
          <option>Boreholes Drilling</option>
          <option>Materials Testing</option>
          <option>Foundation Analysis</option>
          <option>Road Design</option>
          <option>Structural Integrity Assessment</option>
          <option>Concrete Mix Design</option>
          <option>Other</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-medium mb-2">Project Description *</label>
        <textarea name="message" rows="6" required class="w-full px-5 py-4 border rounded-3xl focus:outline-none focus:border-[#0a3d62]"></textarea>
      </div>

      <button type="submit" class="w-full bg-[#0a3d62] hover:bg-[#f39c12] text-white py-5 rounded-2xl text-xl font-semibold transition">
        Submit Request
      </button>
    </form>
  </div>
</section>

<?php include 'partials/footer.php'; ?>