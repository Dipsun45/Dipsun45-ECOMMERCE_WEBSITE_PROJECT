<script>
window.addEventListener('scroll', () => {
  const navbar = document.querySelector('.nav');
  const scrollPosition = window.scrollY;

  if (scrollPosition > 100) { // Adjust this value as needed
    navbar.classList.add('navbar-scrolled');
  else {
    navbar.classList.remove('navbar-scrolled');
  
});
</script>