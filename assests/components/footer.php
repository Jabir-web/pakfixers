
</div>
  </div>
  <footer class="footer bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mb-4">
          <h4>About Us</h4>
          <p>Salman is a passionate programmer who thrives on solving complex problems through code. With
            expertise in various programming languages, he enjoys creating innovative software
            solutions. Always eager to learn, he embraces challenges that enhance his skills and
            contribute to impactful projects.</p>
        </div>

        <div class="col-lg-4 col-md-4 col-12 text-center mb-4">
          <b>
            <a class="navbar-brand" href="#">
              <span class="text-success">PaK</span>Fixer
            </a>
          </b>
          <p>&copy; 2024 PakFixer. All rights reserved.</p>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <h4>Contact Us</h4>
          <p>Email: Pakfixer@gmail.com</p>
          <p>Phone: 15</p>
          <p>Address: Gulshan e Maymar</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Custom JS -->
  <script src="./assests/js/my.js"></script>
  <!-- Bootstrap JS Bundle -->
  <script src="./assests/bootsrap/bootstrap.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
  $(document).ready(function () {
    // Listen for checkbox changes
    $('input[type="checkbox"]').on('change', function () {
        
        let value = $(this).val(); // Get parameter value

        // Update URL
        let url = new URL(window.location.href);
        if ($(this).is(':checked')) {
            window.location.href = url+'?skill='+value
        } 
    
    });
});

</script>
</body>

</html>