<?php include "assests/components/header.php"; ?>
<!-- =========================================== Cards Box =============================================== -->
<div class="col-lg-9 col-sm-12">
  <div class="topbar">
    <input type="text" class="animated-input" placeholder="Search...">
    <button class="search-btn">
      <i class="fas fa-search"></i>
    </button>
  </div>



  <!-- ---card-section----- -->

  <div class="card-section   ">
    <div class="row  ">
      <?php
      include "admin/logics/common.php";

      $sql = "SELECT * FROM skillcards";
      $data = mysqli_query($connection, $sql);
      if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_assoc($data)) {
      ?>
          <div class="col-lg-4 col-sm-6 col-xs-12 p-3  rounded g-3 ">
            <a href="skillman.php?cardid=<?php echo $row['skill_id'] ?>">
              <div class="skill-card shadow-none bg-light shadow-lg border  p-3  rounded g-3"> <img class="w-100 rounded" src="./assests/images/one.jpg"
                  alt="">
                <div class="box bg-warning">
                  <div class="label bg-warning text-dark">TOP RATED</div>
                </div>
                <h3 class=" text-uppercase p-0 m-0"><b><?php echo $row['skill_name'] ?></b></h3>
                <span class="text-primary text-capitalize mb-4"><?php echo $row['skill_category'] ?></span>
                <!-- <div class="star">
                <i class="fas fa-star text-warning "></i>
                <i class="fas fa-star text-warning "></i>
                <i class="fas fa-star text-warning "></i>
                <i class="fas fa-star text-warning "></i>
                <i class="fas fa-star text-warning "></i>
                </div> -->
                <p class=""><i class="fas fa-map-marker-alt "></i><span class="mx-2 "><?php echo $row['skill_location'] ?></span></p>
                <div>
                <a href="skillman.php?cardid=<?php echo $row['skill_id'] ?>" class="btn btn-outline-primary ">View More</a>
              </div>
              </div>
              
            </a>
          </div>
      <?php

        }
      }
      ?>
  


  </div>

</div>




</div>
<!-- =========================================== Cards Box =============================================== -->

<?php include "assests/components/footer.php"; ?>
