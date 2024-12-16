<?php include "assests/components/header.php"; ?>
      <!-- Placeholder for Skill Cards (col-9) -->
      <div class="col-lg-9 col-sm-12">
        <div class="topbar">
          <input type="text" class="animated-input" placeholder="Search...">
          <button class="search-btn">
            <i class="fas fa-search"></i>
          </button>
        </div>



        <!-- ---card-section----- -->
       
        <div class="row h-100 ">
            <!-- Left column with contact card, centered vertically -->


            <!-- Right column with image -->
            <div class="container mt-5">
                <div class="row justify-content-center align-items-center">
                    <!-- Contact Form Column --> 
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h2 class="text-center mb-4">Contact Us</h2>
                        <form>
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Enter subject">
                            </div>
                            <div class="form-group mb-3">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Write your message here"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                        <p class="text-center mt-4">We'll get back to you as soon as possible!</p>
                    </div>
            
                    <!-- Lottie Animation Column --><div class="col-lg-6 col-md-8 d-flex justify-content-center mt-4 mt-lg-0">
                        <dotlottie-player src="https://lottie.host/8f42a5cd-7144-4059-9da8-12c54179e68d/l61A3TV3Y1.json"
                        background="transparent" speed="1" style="width: 100%; max-width: 400px; height: auto;" loop autoplay>
                    </dotlottie-player>
                    
                </div>
                   
                </div>
            </div>
            
        </div>

        </div> 



      </div>
      <?php include "assests/components/footer.php"; ?>