const contactForm = document.getElementById('contact-form');
const toggleButton = document.getElementById('toggle-contact-form');

toggleButton.addEventListener('click', () => {
   contactForm.classList.toggle('hidden');
});