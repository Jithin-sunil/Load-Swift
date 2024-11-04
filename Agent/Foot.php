
</main>

<footer>
    <div class="container">
        
        <div class="footer-grid">
            <div>
                <h3>Load Shift</h3>
                <p>Your trusted partner for exports and transportation solutions.</p>
            </div>
            <div>
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#why-us">Why Choose Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4>Follow Us</h4>
                <ul class="footer-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Load Shift. All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../Asset/Templates/Main/lib/easing/easing.min.js"></script>
<script src="../Asset/Templates/Main/lib/waypoints/waypoints.min.js"></script>
<script src="../Asset/Templates/Main/lib/lightbox/js/lightbox.min.js"></script>
<script src="../Asset/Templates/Main/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="../Asset/Templates/Main/js/main.js"></script>

<script>
    // Add scroll-triggered animations
    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
  
    function handleScrollAnimations() {
      const animatedElements = document.querySelectorAll('.animate-fadeIn, .animate-slideIn, .stagger-animation');
      animatedElements.forEach((el) => {
        if (isInViewport(el)) {
          el.style.visibility = 'visible';
          el.style.animationPlayState = 'running';
        }
      });
    }
  
    window.addEventListener('scroll', handleScrollAnimations);
    window.addEventListener('load', handleScrollAnimations);
  </script>
</body>
</html>