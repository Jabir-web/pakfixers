<?php
    if (isset($_GET['status'])) {
        if ($_GET['status']==true) {
            echo '<script>
            swal("Congratulation!", "'.$_GET['msg'].'", "success")
            </script>';
        }elseif ($_GET['status']==false) {
            echo '<script>
            swal("Oops!", "'.$_GET['msg'].'", "error")
            </script>';
        }
    }

    
    ?>