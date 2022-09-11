<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>Falcon Riders</title>
    <!-- Bootstrap cdn linked -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
          crossorigin="anonymous">
    <!-- Font-awesome linked -->
    <script src="https://kit.fontawesome.com/9bce863ca0.js"
            crossorigin="anonymous"></script>
    <!-- Custom css linked -->
    <link rel="stylesheet"
          href="css/style.css">
  </head>

  <body>
    <!-- Header start -->
    <header>
      <nav class="navbar my-4 navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand me-5"
             href="#">
            <h1>FalconRiders</h1>
          </a>
          <button class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"
               id="navbarSupportedContent">
            <ul class="navbar-nav ms-5 me-auto mb-2 mb-lg-0">
              <li class="nav-item me-5">
                <a class="nav-link"
                   aria-current="page"
                   href="#">Home</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link"
                   href="#">Bicycle </a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link"
                   href="#">parts </a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link"
                href="#">Accessories</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link"
                href="login.php">Sign In</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link"
                href="signup.php">Sign Up</a>
              </li>
            </ul>
            <form role="search">
              <button class="btn btn-outline-success"
                      type="submit">Contact</button>
            </form>
          </div>
        </div>
      </nav>
      <!-- Carousel start -->
      <section class="mt-5 mb-5">
        <div id="carouselExampleControls"
             class="carousel slide container mb-5"
             data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/cover/banner-1.avif"
                   class="d-block w-100"
                   alt="...">
              <div class="carousel-caption  lalign-middle h-75 d-none d-md-block">
                <h1 class="fw-bold mt-5 pt-5">Largest bicycle manufacturer</h1>
                <p>Check out our exclusive collection of mountain bikes, city bikes, girls cycles and more.</p>
                <button type="button"
                        class="btn btn-primary btn-lg mt-4">Shop Now</button>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/cover/banner-2.avif"
                   class="d-block w-100"
                   alt="...">
              <div class="carousel-caption align-middle h-75 d-none d-md-block">
                <h1 class="fw-bold">Women's Special Bicycle Sell</h1>
                <p>Explore the wide collections of women's bicycle</p>
                <button type="button"
                        class="btn btn-primary btn-lg">Shop Now</button>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/cover/banner-3.jpg"
                   class="d-block w-100"
                   alt="...">
              <div class="carousel-caption align-middle h-75 d-none d-md-block">
                <h1 class="fw-bold">Buy Bicycles and Accessories</h1>
                <p>Top brands. Huge selection. Great offers. Best deals</p>
                <button type="button"
                        class="btn btn-primary btn-lg">Shop Now</button>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="prev">
            <span class="carousel-control-prev-icon"
                  aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="next">
            <span class="carousel-control-next-icon"
                  aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <!-- Carousel end -->

    </header>
    <!-- Header end -->

    <!-- Main Section start -->
    <main>

      <!-- Catagories start -->
      <section>
        <div class="container text-center my-5">
          <div class="row g-4 categories">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="p-3 border rounded-3 bg-warning d-flex align-items-center justify-content-around">
                <h1 class="text-white">Bicycle</h1>
                <img src="images/categories/bicycle.png"
                     alt="">
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="p-3 border rounded-3 bg-success d-flex align-items-center justify-content-around">
                <h1 class="text-white">Parts</h1>
                <img src="images/categories/parts.png"
                     alt="">
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="p-3 border rounded-3 bg-primary d-flex align-items-center justify-content-around">
                <h1 class="text-white">Accessories</h1>
                <img src="images/categories/accessories.png"
                     alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Catagories end -->

      <section class="container items my-5"
               id="bicycles">
        <h1 class="text-center my-4">Products</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          <div class="col">
            <div class="card border border-0 shadow-lg h-100">
              <img src="images/bicycles/bicycle-1.png"
                   class="card-img-top"
                   alt="...">
              <div class="card-body">
                <h5 id="item-1" class="card-title">THE PORTOFINO</h5>
                <h2 >$ <span id="price-1">150</span></h2>
                <p class="card-text">Protofino is the biggest names in cycling world, Specialized was bought by Meridia Bikes (a 40 percent share) in 2001 and has relaunched with new efforts and even better designs.</p>
              </div>
              <div class="m-3">
                <small>
                  <div id="btn-1" class="btn panda-btn-buy-now">Buy Me</div>
                </small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border border-0 shadow-lg h-100">
              <img src="images/bicycles/bicycle-2.png"
                   class="card-img-top"
                   alt="...">
              <div class="card-body">
                <h5 id="item-2" class="card-title">THE POWER+ EVO</h5>
                <h2 >$<span id="price-2">270</span></h2>
                <p class="card-text">The Portofino is the first steel frame in the world with proprietary oversized lugs designed to fit the oversized Columbus HSS tubing and a tapered steerer.</p>
              </div>
              <div class="m-3">
                <small>
                  <div id="btn-2" class="btn panda-btn-buy-now">Buy Me</div>
                </small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border border-0 shadow-lg h-100">
              <img src="images/bicycles/bicycle-3.png"
                   class="card-img-top"
                   alt="...">
              <div class="card-body">
                <h5 id="item-3" class="card-title">THE ROCHE</h5>
                <h2 >$<span id="price-3">320</span></h2>
                <p  class="card-text">Stephen Roche is a limited edition of 30 classic lugged framesets that are now completely sold out.
                </p>
              </div>
              <div class="m-3">
                <small>
                  <div id="btn-3"class="btn panda-btn-buy-now">Buy Me</div>
                </small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border border-0 shadow-lg h-100">
              <img src="images/bicycles/bicycle-4.png"
                   class="card-img-top"
                   alt="...">
              <div class="card-body">
                <h5 id="item-4" class="card-title">TREK BIKES</h5>
                <h2 >$<span id="price-4">190</span></h2>
                <p class="card-text">The Trek 850, in 1983, was the first mountain bikes they ever released and it soon caught on that Trek was a name to remember. By the late 1990s they were building all ranges of bikes for all riders.</p>
              </div>
              <div class="m-3">
                <small>
                  <div id="btn-4" class="btn panda-btn-buy-now">Buy Me</div>
                </small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border border-0 shadow-lg h-100">
              <img src="images/bicycles/wheel.jpg"
                   class="card-img-top"
                   alt="...">
              <div class="card-body">
                <h5 id="item-5" class="card-title">wheel</h5>
                <h2 >$<span id="price-5">50</span></h2>
                <p class="card-text">A bicycle wheel is a wheel, most commonly a wire wheel, designed for a bicycle. A pair is often called a wheelset, especially in the context of ready built "off the shelf" performance-oriented wheels.</p>
              </div>
              <div class="m-3">
                <small>
                  <div id="btn-5" class="btn panda-btn-buy-now">Buy Me</div>
                </small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border border-0 shadow-lg h-100">
              <img src="images/bicycles/accessories-1.png"
                   class="card-img-top"
                   alt="...">
              <div class="card-body">
                <h5 id="item-6"class="card-title">HELMET</h5>
                <h2 >$<span id="price-6">30</span></h2>
                <p class="card-text"> This bicycle helmet is a type of helmet designed to attenuate impacts to the head of a cyclist in falls while minimizing side effects such as interference with peripheral vision
                </p>
              </div>
              <div class="m-3">
                <small>
                  <div id="btn-6" class="btn panda-btn-buy-now">Buy Me</div>
                </small>
              </div>
            </div>
          </div>
  
        </div>

      </section>

      <section class="container my-5"
               id="">
        <h1 class="text-center my-4">Dashboard</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card border border-0 shadow-lg h-100">
              <h3 class=" text-2xl text-center mt-2 mb-4 ">List Of Your Order Items</h3>
             
              <ol id="listeditem"
                  class="list-decimal ms-3 fs-4s">

              </ol>
            </div>
          </div>
          <div class="col">
            <div class="card border border-0 shadow-lg h-100">
                <h3 class="  text-center mt-2 mb-4 ">Your Expense</h3>
                
            
                <!-- calculate the total cost by clicking this button -->
                
    
                <div class="d-flex justify-between">
                  <h3 class=" ms-2"> Total cost is:</h3> 
                  <p class="ms-2 fs-3"> $ <span id="totalPriceIs"
                          class="text-red-500 ms-1">00</span></p>
              </div>
            </div>
          </div>
        </div>

      </section>





      <!-- modal start -->
      <section id="register"
               class=" col-12 container mx-auto mt-5 bg-info py-5">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 col-12 text-center ">
            <h1>Ready to join?</h1>
            <p>It is generally accepted that a cycling marathon is 100 miles, also known as a ‘century’. It is understood that it generally takes about the same level of energy and time to run one mile as it does to cycle 4 miles. So the 26-mile running marathon is equivalent to 100 miles cycling</p>

          </div>
          <div class=" col-lg-6 col-12">
            <!-- Button trigger modal -->
            <button type="button"
                    class="btn btn-light text-primary btn-lg"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
              Register Now
            </button>

            <!-- Modal -->
            <div class="modal fade"
                 id="exampleModal"
                 tabindex="-1"
                 aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLabel">Modal title</h5>
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>You are alway valuable to us.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                    <button type="button"
                            class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- modal end -->


      <!-- Accordion start -->
      <section>
        <div class="container my-5 text-center">
          <h1>Frequently Asked Questions</h1>
          <p>It is a long established fact that a reader will be distracted by the readable <br>
            content of a page when looking at its layout.</p>
        </div>

        <div class="accordion container mb-5 w-50"
             id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header"
                id="headingOne">
              <button class="accordion-button fw-semibold"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne">
                What are the difference between flexbox and grid?
              </button>
            </h2>
            <div id="collapseOne"
                 class="accordion-collapse collapse show"
                 aria-labelledby="headingOne"
                 data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The basic difference between CSS Grid Layout and CSS Flexbox Layout is that flexbox was designed for
                  layout in one dimension - either a row or a column. Grid was designed for two-dimensional layout -
                  rows, and columns at the same time. The two specifications share some common features, however, and if
                  you have already learned how to use flexbox, the similarities should help you get to grips with Grid.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"
                id="headingTwo">
              <button class="accordion-button fw-semibold collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo">
                What are the difference between bootstrap and tailwind?
              </button>
            </h2>
            <div id="collapseTwo"
                 class="accordion-collapse collapse"
                 aria-labelledby="headingTwo"
                 data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Bootstrap comes with a set of pre-styled responsive, mobile-first components that possess a definite
                  UI kit. Tailwind offers predesigned widgets to build a site from scratch with fast UI development.
                  Sites created using Bootstrap follow the generic pattern that makes them look identical. Tailwind CSS
                  uses a set of utility classes to create a neat UI with more flexibility and uniqueness. </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"
                id="headingThree">
              <button class="accordion-button fw-semibold collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree">
                What is css box model?
              </button>
            </h2>
            <div id="collapseThree"
                 class="accordion-collapse collapse"
                 aria-labelledby="headingThree"
                 data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The CSS box model is a container that contains multiple properties including borders, margin,
                  padding, and the content itself. It is used to create the design and layout of web pages. It can be
                  used as a toolkit for customizing the layout of different elements. The web browser renders every
                  element as a rectangular box according to the CSS box model. Box-Model has multiple properties in CSS
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"
                id="headingFour">
              <button class="accordion-button collapsed fw-semibold"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseFour"
                      aria-expanded="true"
                      aria-controls="collapseFour">
                What is Semantic Element?
              </button>
            </h2>
            <div id="collapseFour"
                 class="accordion-collapse collapse"
                 aria-labelledby="headingFour"
                 data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Semantic elements have meaningful names which tells about type of content. For example header,
                  footer, table, … etc. HTML5 introduces many semantic elements as mentioned below which make the code
                  easier to write and understand for the developer as well as instructs the browser on how to treat
                  them.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Accordion end -->

      <section class="container d-none d-lg-block .d-xl-none">
        <h1 class="text-center py-3">Trusted by over 800+ companies</h1>

        <div class=" ms-4 mt-3 mb-5 logo">
          <img class="pe-5"
               src="images/company/company-1.png"
               alt="">
          <img class="pe-5"
               src="images/company/company-2.png"
               alt="">
          <img class="pe-5"
               src="images/company/company-3.png"
               alt="">
          <img class="pe-5"
               src="images/company/company-4.png"
               alt="">
          <img class="pe-5"
               src="images/company/company-5.png"
               alt="">
          <img class="pe-5"
               src="images/company/company-6.png"
               alt="">

        </div>

      </section>

    </main>
    <!-- Main Section end -->

    <!-- Footer start -->
    <footer id="about"
            class="container">
      <div class=" py-5 text-center">
        <h1>FalconRiders</h1>
        <small>Hamid Tower, Level 5, Gulshan-2, <br>
          Dhaka, Bangladesh <br>
          Privacy Ploicy | Terms of use</small><br>
        <a href="https://web.facebook.com/AlwaysNoman/"><i class=" pe-3 fa-brands fa-facebook"></i></a>
        <a href="https://twitter.com/FcNoman"><i class=" pe-3 fa-brands fa-square-twitter"></i></a>
        <a href="https://github.com/NomanSpeaks"><i class=" pe-3 fa-brands fa-github"></i></a>
        <a href="https://www.instagram.com/noman_on_live/"><i class=" pe-3 fa-brands fa-instagram"></i></a>
      </div>

    </footer>
    <!-- Footer end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>

    <script src="js/dom.js"></script>
  </body>

</html>