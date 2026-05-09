<?php include 'partials/header.php'; ?>

<section class="py-20">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid md:grid-cols-2 gap-16">
      <div>
        <h1 class="text-5xl font-bold mb-8">Get In Touch</h1>
        <p class="text-lg mb-10">We respond to all inquiries within 24 hours.</p>
        
        <div class="space-y-8">
          <div class="flex gap-5">
            <i class="fas fa-envelope text-3xl text-[#f39c12]"></i>
            <div>
              <p class="font-medium">Email</p>
              <a href="mailto:bukogeotechnical@gmail.com" class="text-lg">bukogeotechnical@gmail.com</a>
            </div>
          </div>
          <div class="flex gap-5">
            <i class="fas fa-phone text-3xl text-[#f39c12]"></i>
            <div>
              <p class="font-medium">Phone / WhatsApp</p>
              <a href="tel:+256777466508" class="text-lg">+256 777 466 508</a>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-gray-50 p-10 rounded-3xl">
        <form action="api/process_form.php" method="POST" class="space-y-6">
          <input type="text" name="name" placeholder="Your Name" required class="w-full px-6 py-4 rounded-2xl border">
          <input type="email" name="email" placeholder="Email Address" required class="w-full px-6 py-4 rounded-2xl border">
          <input type="tel" name="phone" placeholder="Phone Number" class="w-full px-6 py-4 rounded-2xl border">
          <textarea name="message" rows="6" placeholder="Your Message" required class="w-full px-6 py-4 rounded-3xl border"></textarea>
          <button type="submit" class="w-full bg-[#0a3d62] text-white py-5 rounded-2xl text-lg font-semibold">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>