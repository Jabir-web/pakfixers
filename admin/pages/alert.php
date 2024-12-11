<?php
    if (isset($_GET['status'])) {
        $msg = $_GET['msg'];
        if ($_GET['status']==true) {
            echo '<script>
           Swal.fire({
  position: "top-end",
  icon: "success",
  title: "'.$msg.'",
  showConfirmButton: false,
  timer: 1500
});
            </script>';
        }elseif ($_GET['status']==false) {
            echo '<script>
            Swal.fire("error!");
            </script>';
        }
    }

    
    ?>