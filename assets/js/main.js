document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu
  const menuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  menuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));

  // WhatsApp floating button
  const waBtn = document.createElement('a');
  waBtn.href = "https://wa.me/256777466508";
  waBtn.target = "_blank";
  waBtn.className = "fixed bottom-6 right-6 bg-green-500 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-2xl text-3xl hover:scale-110 transition z-50";
  waBtn.innerHTML = '<i class="fab fa-whatsapp"></i>';
  document.body.appendChild(waBtn);
});