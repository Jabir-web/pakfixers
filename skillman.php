<?php include "assests/components/header.php"; ?>

<!-- Placeholder for Skill Cards (col-9) -->
<div class="col-lg-9 col-sm-12">
    <div class="topbar">
        <input type="text" class="animated-input" placeholder="Search...">
        <button class="search-btn">
            <i class="fas fa-search"></i>
        </button>
    </div>
    <!-- ---skill man info--- -->
    <?php
    include "./admin/logics/common.php";
    if (isset($_GET['cardid'])) {
        $id = $_GET['cardid'];

        $sql = "SELECT * FROM skillcards WHERE skill_id = '{$id}'";
        $data = mysqli_query($connection, $sql);
        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_assoc($data)) {
    ?>
 <div class="skillman container">
        <div class="row">
            <!-- Banner Section -->
            <div class="col-12 banner ">

                <b class="brand text-white"><span class="text-warning">PAK</span> FIXER </b>

            </div>

            <!-- Profile Section -->
            <div class="col-md-5 col-12 d-flex justify-content-center four">
                <div class="information">
                    <div class="roundimg">
                        <div class="img">
                            <img src="./assests/images/one.jpg" alt="Profile Picture">
                        </div>
                    </div>
                    <div class="info-content">
                        <h4><strong><?php echo $row['skill_name'] ?></strong> <i class="far fa-code fs-6"></i></h4>
                        <div>
                            <p class="text-primary" style="line-height: 5px;">Programmer</p>
                        </div>

                        <div>
                            <p class="text-primary" style="line-height: 5px;"> <i
                                    class="fas fa-map-marker-alt mx-2"></i>Gulshan e Maymar Sector Z6</p>
                        </div>
                        <div class="experience  d-flex justify-content-center"> <button
                                class="unique-button my-2">
                                <i class="fas fa-briefcase text-primary"></i>
                                <span class="text">1 Year</span>
                            </button></div>

                        <div style="line-height: 5px;"
                            class="star d-flex align-items-center justify-content-center">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <p class="mb-0 ms-2 align-self-center">(4.0)</p>
                        </div>
                        <hr>
                        <div class="like-eye">


                            <div class="btn mx-1"><i class="fas fa-thumbs-up text-info"></i> <span>5</span>
                            </div>

                            <div class="btn mx-1"><i class="fas fa-eye text-black"></i> <span>25</span>
                            </div>


                            <div class="btn mx-1"><i class="fas fa-share text-primary"></i> <span>245</span>
                            </div>




                        </div>

                    </div>
                </div>
            </div>

            <!-- Spacer for layout balance, could add more content here if desired -->
            <div class="col-md-7 my-3 d-block  seven">
                <div class="skill-about my-3">
                    <div class=" col-12 fs-3"><b>ABOUT ME</b></div>
                    <p style="font-family: Arial, Helvetica, sans-serif;" class="my-3">Salman is a
                        passionate programmer who thrives on solving complex problems through code. With
                        expertise in various programming languages, he enjoys creating innovative software
                        solutions. Always eager to learn, he embraces challenges that enhance his skills and
                        contribute to impactful .</p>
                </div>
                <div class=" col-12 fs-3"><b>CONTACT ME</b></div>

                <div class="row my-3">
                    <div class="col-12 col-md-4 mb-2">
                        <i class="fas fa-phone-alt me-2"></i>
                        <span>Phone: <a href="tel:+1234567890">+1234567890</a></span>
                    </div>
                    <div class="col-12 col-md-4 mb-2">
                        <i class="fab fa-whatsapp me-2"></i>
                        <span>WhatsApp: <a href="https://wa.me/1234567890">+1234567890</a></span>
                    </div>
                    <div class="col-12 col-md-4 mb-2">
                        <i class="fas fa-envelope me-2"></i>
                        <span>Email: <a href="mailto:example@example.com">example@example.com</a></span>
                    </div>
                </div>

                <div class="input-group mb-3 ">
                    <input type="text" class="form-control py-4 shadow" placeholder="Comment here......"
                        aria-label="Comment Here" aria-describedby="button-addon2">
                    <button class="btn btn-primary px-4" type="button" id="button-addon2">Post</button>
                </div>

            </div>



        </div>
        <div class="col-12  ">
            <div class="comment-container">
                <div class="comment">
                    <div class="user-info">
                        <img src="./assests/images/electric.png" alt="User Avatar" class="user-avatar">
                        <div class="user-details">
                            <span class="user-name">John Doe</span>
                            <span class="comment-date">October 30, 2024</span>
                        </div>
                    </div>
                    <p class="comment-text">This is a great post! I really enjoyed reading it. Keep up the
                        good work!</p>
                    <div class="comment-icon">
                        <div class="btn mx-1"><i class="fas fa-thumbs-up text-info"></i> <span>59</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment-container">
                <div class="comment">
                    <div class="user-info">
                        <img src="./assests/images/one.jpg" alt="User Avatar" class="user-avatar">
                        <div class="user-details">
                            <span class="user-name">M.Salman</span>
                            <span class="comment-date">October 29, 2024</span>
                        </div>
                    </div>
                    <p class="comment-text">I found this information really helpful. Thank you for sharing!
                    </p>
                    <div class="comment-icon">
                        <div class="btn mx-1"><i class="fas fa-thumbs-up text-info"></i> <span>55</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-container">
                <div class="comment">
                    <div class="user-info">
                        <img src="./assests/images/one.jpg" alt="User Avatar" class="user-avatar">
                        <div class="user-details">
                            <span class="user-name"><?php echo $row['skill_name'] ?></span>
                            <span class="comment-date">October 29, 2024</span>
                        </div>
                    </div>
                    <p class="comment-text">I found this information really helpful. Thank you for sharing!
                    </p>
                    <div class="comment-icon">
                        <div class="btn mx-1"><i class="fas fa-thumbs-up text-info"></i> <span>55</span>
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>
    <div class="experience  d-flex justify-content-center"> <button class="unique-button my-2">

            <span class="text">View More</span>
        </button>
    </div>
    <?php
            }
        }
    }
    ?>
   

    <!-- ---skill man info--- -->




    <?php include "assests/components/footer.php"; ?>