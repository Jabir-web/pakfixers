<footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo BASE_URL ?><?php echo BASE_URL ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo BASE_URL ?>assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="<?php echo BASE_URL ?>assets/js/pages/dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo BASE_URL ?>assets/js/main.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
       $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    <script>
  $(document).ready(function () {
    // Listen for checkbox changes
    $('input[type="checkbox"]').on('change', function () {
        
        let value = $(this).val(); // Get parameter value

        // Update URL
        let url = new URL(window.location.href);
        if ($(this).is(':checked')) {
            window.location.href = url
        } 
    
    });
});

</script>
 
</body>

</html>