<?php

include("../logics/common.php");
include("../components/sidebar.php");

?>


<div id="main">

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="container">
                    <div class="col-12">
                        <div class="layout">
                            <h1 class="mb-4">Total SKill Cards</h1>
                            <!-- -------------------------- table  -->
                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Whatsapp</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $sql = "SELECT * FROM skillcards";
                                    $data = mysqli_query($connection, $sql);
                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['skill_id'] ?></td>
                                                <td><?php echo $row['skill_name'] ?></td>
                                                <td><?php echo $row['skill_category'] ?></td>
                                                <td><?php echo $row['skill_wnumber'] ?></td>
                                                <td><?php echo $row['skill_date'] ?></td>
                                                <td>1</td>
                                                <td>
                                                    <a href=""><i class="btn btn-outline-success">Edit</i></a>
                                                    <a onclick="confirmDelete(<?php echo $row['skill_id'] ?>)"><i class="btn btn-outline-danger">Delete</i></a>
                                                </td>
                                            </tr>

                                    <?php
                                        }
                                    } else {
                                        echo "<tr>Data Not Found</tr>";
                                    }

                                    ?>


                                </tbody>
                            </table>
                            <!-- -------------------------- table  -->
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include("../components/leftbar.php")
            ?>
        </section>
    </div>


    <?php
    include("../components/footer.php")

    ?>

       <script>
    function confirmDelete(skillId) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });

        swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Perform deletion via AJAX
                $.ajax({
                    url: "../logics/delete_skillcard.php",
                    type: "POST",
                    data: { sid: skillId },
                    success: function (response) {
                        swalWithBootstrapButtons.fire({
                            title: "Deleted!",
                            text: "The skill card has been deleted.",
                            icon: "success"
                        }).then(() => {
                            // Reload the page to update the table
                            location.reload();
                        });
                    },
                    error: function () {
                        swalWithBootstrapButtons.fire({
                            title: "Error!",
                            text: "There was an error deleting the skill card.",
                            icon: "error"
                        });
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your skill card is safe.",
                    icon: "error"
                });
            }
        });
    }
</script>

