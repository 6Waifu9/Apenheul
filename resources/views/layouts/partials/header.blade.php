<script>
// JavaScript to add the active class on click
const links = document.querySelectorAll("nav a");
links.forEach(link => {
  link.addEventListener("click", e => {
    e.preventDefault();
    links.forEach(link => link.classList.remove("active"));
    e.target.classList.add("active");
  });
});
</script>