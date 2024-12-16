<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PakFixer</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assests/bootsrap/bootstrap.min.css">

  <!-- FontAwesome for icons -->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assests/css/style.css">
  <link rel="stylesheet" href="./assests/css/online.css">

</head>

<body>

  <!-- Header Section -->
  <header class="headerbox">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <!-- Brand Name -->
        <b><a class="navbar-brand" href="#"><b><span class="text-success">PaK</span></b>Fixer</a></b>
        <!-- Mobile Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Privacy & Policy</a>
            </li>
          </ul>

          <!-- Right Aligned Navbar Links -->
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link" href="./admin/index.php">Log In <i class="fad fa-sign-in-alt mx-2"></i> </a>

            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header Content -->

    <div class="head-section">
      <div class="container skill-work-section text-white">
        <h1>Home Repairs, Just a Call Away</h1>


        <p class="w-50">"Trusted plumbing, electrical, and repair services—just a call or WhatsApp away. Fast, reliable,
          and ready when you need us."

        </p>
      </div>
    </div>
  </header>
  <!-- End of Header Section -->

  <!-- Skill Cards and Filters Section -->
  <div class="content-section container">
    <div class="row">
      <!-- Filter Section -->
      <div class="col-lg-3 col-sm-12 section-one">
        <div class="filters">
          <!-- Filter Header -->
          <div class="filter-btn">
            <h5><b>FILTERS</b></h5>
            <p>reset</p>
          </div>

          <hr>

          <!-- Accordion for Filters -->
          <div class="accordion accordion-flush" id="accordionFlushExample">

            <!-- Skill Filter -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button p-2 " type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                  <b>Skill</b>
                </button>
              </h2>
              <!-- Add the 'show' class here to make the accordion open by default -->
              <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="category">
                  <a href="#">
                    <div>
                      <div class="checkbox-wrapper-27">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__icon"></span>
                          Electricians
                        </label>
                      </div>
                    </div>
                    <b><span class="text-primary">(24)</span></b>
                  </a>
                  <a href="#">
                    <div>
                      <div class="checkbox-wrapper-27">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__icon"></span>
                          Plumbers
                        </label>
                      </div>
                    </div>
                    <b><span class="text-primary">(15)</span></b>
                  </a>
                  <a href="#">
                    <div>
                      <div class="checkbox-wrapper-27">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__icon"></span>
                          Carpenters
                        </label>
                      </div>
                    </div>
                    <b><span class="text-primary">(8)</span></b>
                  </a>
                  <a href="#">
                    <div>
                      <div class="checkbox-wrapper-27">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__icon"></span>
                          Mechanics
                        </label>
                      </div>
                    </div>
                    <b><span class="text-primary">(12)</span></b>
                  </a>
                  <a href="#">
                    <div>
                      <div class="checkbox-wrapper-27">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__icon"></span>
                          Painters
                        </label>
                      </div>
                    </div>
                    <b><span class="text-primary">(18)</span></b>
                  </a>
                </div>
              </div>
            </div>

            <!-- Additional Accordion Items -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed p-2 " type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <b>Price</b>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse show p-2"
                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="filter-btn">
                  <div class="low-high">
                    <h6>Low to High<i class="fad fa-arrow-down mx-2"
                        style="--fa-primary-color: #000000; --fa-secondary-color: #000000;"></i></h6>
                  </div>
                  <div class="low-high">
                    <h6>High to Low<i class="fad fa-arrow-up mx-2"
                        style="--fa-primary-color: #000000; --fa-secondary-color: #000000;"></i></h6>
                  </div>
                </div>
                <div class="priceinput">
                  <div class="pricetext row">
                    <div class="col-4 tag"><input type="number" placeholder="Min"></div>
                    <div class="col-4 tag"><input type="number" placeholder="Max"></div>
                    <div class="col-4 tag">
                      <div class="btn btn-primary button"><i class="fas fa-check" style="color: #ffffff;"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <b>Experience Level</b>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree">
                <div class="category">
                  <a href="#">
                    <div>
                      <div class="checkbox-wrapper-27">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__icon"></span>
                          6 months
                        </label>
                      </div>
                    </div>
                  </a>

                  <a href="#">
                    <div>
                      <div class="checkbox-wrapper-27">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__icon"></span>
                          1 year
                        </label>
                      </div>
                    </div>
                  </a>

                  <a href="#">
                    <div>
                      <div class="checkbox-wrapper-27">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__icon"></span>
                          2 years
                        </label>
                      </div>
                    </div>
                  </a>

                  <a href="#">
                    <div>
                      <div class="checkbox-wrapper-27">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__icon"></span>
                          3 years
                        </label>
                      </div>
                    </div>
                  </a>

                  <a href="#">
                    <div>
                      <div class="checkbox-wrapper-27">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__icon"></span>
                          5 years
                        </label>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
            </div>

            <hr>
          </div>

        </div>
      </div>
      <!-- End of Filter Section -->

      <!-- Placeholder for Skill Cards (col-9) -->
     