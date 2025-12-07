<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HalalFoodPoint</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=base_url()?>assets/web/img/food-icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url()?>assets/web/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/web/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>assets/web/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url()?>assets/web/css/style.css" rel="stylesheet">

        <!-- Custom Statistics Styles -->
    <style>
        .stat-card {
            transition: all 0.3s ease;
            cursor: default;
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
        }
        
        .stat-icon {
            transition: transform 0.3s ease;
        }
        
        .stat-card:hover .stat-icon {
            transform: scale(1.1);
        }
        
        .stat-number {
            line-height: 1.2;
        }
        
        @media (max-width: 768px) {
            .stat-card {
                margin-bottom: 1rem;
            }
            
            .stat-number {
                font-size: 2rem !important;
            }
            
            .stat-icon {
                font-size: 2.5rem !important;
            }
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Serpong, Tangsel, Banten</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>foodPoint@example.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Halal<span class="text-white">FoodPoint</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?=base_url()?>" class="nav-item nav-link active">Home</a>
                    <a href="<?=base_url()?>web/about" class="nav-item nav-link">About</a>
                    <a href="<?=base_url()?>web/restaurant" class="nav-item nav-link">Restoran</a>
                    <a href="<?=base_url()?>web/maps" class="nav-item nav-link">Maps</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="">
                        Eat Now
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->    
    
    <!-- Banner Start -->
    <div id="banner" class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?=base_url()?>assets/web/img/banner1.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Save our Tongue With Halal Foods</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                    <!-- <a class="btn btn-primary py-2 px-3 animated slideInDown" href="#important">
                                        Find Out 
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?=base_url()?>assets/web/img/banner2.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Save our Tongue With Halal Foods</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                    <!-- <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Banner End -->
    

    <!-- About Start -->
    <div id="about" class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="<?=base_url()?>assets/web/img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="<?=base_url()?>assets/web/img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">We are committed to helping the Muslim community find halal restaurants quickly and confidently</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">Halal food is more than just a meal — it is faith, comfort, and trust.</p>
                            <span class="text-primary">Daffa Ulhaq, Founder</span>
                        </div>
                        <p class="mb-5">Halal Food Finder provides easy-to-access halal restaurant locations based on reliable geographic information. With updated data and intuitive features, we support your journey in fulfilling halal lifestyle needs</p>
                        <a class="btn btn-primary py-2 px-3 me-3" href="<?=base_url()?>web/about">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Restaurant Start -->
    <div id="restaurant" class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">List of Restaurants</div>
                <h1 class="display-6 mb-5">Everyone Deserves Best Foods To Eat</h1>
            </div>
            <div class="row g-4 justify-content-center" id="restaurant-list">
                <!-- Restaurant list will loaded here -->
            </div>
            <div class="text-center mt-4 wow fadeInUp" data-wow-delay="0.1s">
                <a class="btn btn-primary py-2 px-3 me-3" href="<?=base_url()?>web/restaurant">
                    Find More
                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Restaurant End -->

    <!-- Preview Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="<?=base_url()?>assets/web/img/preview-bg.jpeg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <!-- Statistics Section Start -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center mb-5">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Statistik Data Restoran Halal</div>
                        <h1 class="display-6 text-white mb-3">Halal FoodPoint</h1>
                        <p class="text-white-50 mb-5" style="max-width: 600px; margin: 0 auto;">Informasi terpercaya dan terbaru untuk membantu Anda menemukan kuliner halal dengan mudah.</p>
                    </div>
                    
                    <div class="row g-4 justify-content-center">
                        <!-- Statistik 1: Restoran Terdaftar -->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="stat-card bg-white rounded-4 p-4 text-center h-100 shadow-lg" style="border-top: 4px solid #1A8754; transition: transform 0.3s ease;">
                                <div class="stat-icon mb-3" style="font-size: 3rem;">🍽️</div>
                                <h3 class="stat-number mb-2" style="color: #1A8754; font-size: 2.5rem; font-weight: 700; font-family: 'Saira', sans-serif;">
                                    <span class="counter" data-target="17">0</span>+
                                </h3>
                                <p class="stat-label mb-0" style="color: #333; font-size: 1rem; font-weight: 600;">Restoran Halal Terdaftar</p>
                            </div>
                        </div>
                        
                        <!-- Statistik 2: Rating Rata-rata -->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="stat-card bg-white rounded-4 p-4 text-center h-100 shadow-lg" style="border-top: 4px solid #D4A017; transition: transform 0.3s ease;">
                                <div class="stat-icon mb-3" style="font-size: 3rem;">⭐</div>
                                <h3 class="stat-number mb-2" style="color: #D4A017; font-size: 2.5rem; font-weight: 700; font-family: 'Saira', sans-serif;">
                                    <span class="counter" data-target="4.5" data-decimal="true">0</span>⭐
                                </h3>
                                <p class="stat-label mb-0" style="color: #333; font-size: 1rem; font-weight: 600;">Rating Rata-rata</p>
                            </div>
                        </div>
                        
                        <!-- Statistik 3: Halal Verified -->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="stat-card bg-white rounded-4 p-4 text-center h-100 shadow-lg" style="border-top: 4px solid #1A8754; transition: transform 0.3s ease;">
                                <div class="stat-icon mb-3" style="font-size: 3rem;">🕌</div>
                                <h3 class="stat-number mb-2" style="color: #1A8754; font-size: 2.5rem; font-weight: 700; font-family: 'Saira', sans-serif;">
                                    <span class="counter" data-target="100">0</span>%
                                </h3>
                                <p class="stat-label mb-0" style="color: #333; font-size: 1rem; font-weight: 600;">Halal Verified</p>
                            </div>
                        </div>
                        
                        <!-- Statistik 4: Data Terupdate -->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="stat-card bg-white rounded-4 p-4 text-center h-100 shadow-lg" style="border-top: 4px solid #D4A017; transition: transform 0.3s ease;">
                                <div class="stat-icon mb-3" style="font-size: 3rem;">📅</div>
                                <h3 class="stat-number mb-2" style="color: #D4A017; font-size: 2.5rem; font-weight: 700; font-family: 'Saira', sans-serif;">
                                    <span class="counter" data-target="2025">0</span>
                                </h3>
                                <p class="stat-label mb-0" style="color: #333; font-size: 1rem; font-weight: 600;">Data Terupdate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistics Section End -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="">
                        <iframe src="<?=base_url()?>web/maps_preview" width="100%" height="950" style="border: none; min-height: 600px; max-height: 95vh; border-radius: 8px;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preview End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Testimonial</div>
                <h1 class="display-6 mb-5">Trusted By Thousands Of People And Nonprofits</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="<?=base_url()?>assets/web/img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="<?=base_url()?>assets/web/img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="<?=base_url()?>assets/web/img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Halal</br><span class="text-white">FoodPoint</span></h1>
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Serpong, Tangsel, Banten</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>foodPoint@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>assets/web/js/main.js"></script>

    <!-- Resto list preview -->
     <script>
        $(document).ready(function(){
            $.getJSON("<?=base_url()?>assets/maps/resto_list/resto_points.geojson", function(data) {
                var container = $('#restaurant-list');
                var delay = 0.1;

                var limitedFeatures = data.features.slice(0, 3);

                // Loop every features in the geojson
                limitedFeatures.forEach(function(feature, index){
                    var props = feature.properties;
                    var rating = props.rating || 'N/A';
                    //clean rating format
                    if (rating !== 'N/A' && typeof rating === 'string') {
                        rating = rating.replace(',', '.');
                    }

                    //Count rating's progress bar
                    var ratingNum = parseFloat(rating) || 0;
                    var progressPercent = (ratingNum / 5.0) * 100;

                    //Format picture file's name (suitable used one in map)
                    var imageName = props.name.replace(/\s+/g, '_');
                    var imagePath = "<?=base_url()?>assets/images/restaurant/"+imageName+".jpg";
                    var fallbackImage = "<?=base_url()?>assets/web/img/food-icon.png";

                    //Create card HTML
                    var cardHtml = `
                        <div class="col-lg-4 col-md-6 mb-5 wow fadeInUp" data-wow-delay="${delay}s">
                            <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                                <div class="text-center p-4 pt-0">
                                    <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                        <small>⭐ ${rating}</small>
                                    </div>
                                    <h5 class="mb-3">${props.name || 'Restoran'}</h5>
                                    <p class="mb-2" style="font-size: 0.9rem; color: #666;">${props.address || 'Alamat tidak tersedia'}</p>
                                    <div class="causes-progress bg-white p-3 pt-2">
                                        <div class="d-flex justify-content-between">
                                            <p class="text-dark"><i class="fa fa-phone me-1"></i> <small class="text-body">${props.phone || 'Tidak tersedia'}</small></p>
                                            <p class="text-dark"><i class="fa fa-star me-1"></i> <small class="text-body">Rating</small></p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: ${progressPercent}%" aria-valuenow="${ratingNum}" aria-valuemin="0" aria-valuemax="5">
                                                <span>${rating}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative mt-auto" style="height: 250px; overflow: hidden;">
                                    <img class="img-fluid" src="${imagePath}" alt="${props.name}" 
                                        style="width: 100%; height: 100%; object-fit: cover; object-position: center;"
                                        onerror="this.src='${fallbackImage}'">
                                    <div class="causes-overlay">
                                        <a class="btn btn-outline-primary" href="tel:${props.phone || ''}">
                                            Hubungi
                                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    //add card HTML to container
                    container.append(cardHtml);

                    //increment delay for animation
                    delay += 0.1;
                });
                if (typeof WOW !== 'undefined') {
                    new WOW().init();
                }
            }).fail(function(jqxhr, textStatus, error) {
                console.error("(ERROR) Failed loading restaurant data: ", textStatus, error);
                $('#restaurant-list').html('<div class="col-12 text-center"><p class="text-danger">Gagal memuat data restoran. Silakan refresh halaman.</p></div>');
            });
        });
    </script>

    <!-- Statistics Counter Animation -->
    <script>
        (function() {
            function animateCounter(element) {
                const target = parseFloat(element.getAttribute('data-target'));
                const hasDecimal = element.getAttribute('data-decimal') === 'true';
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;
                
                const timer = setInterval(function() {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    
                    if (hasDecimal) {
                        element.textContent = current.toFixed(1);
                    } else {
                        element.textContent = Math.floor(current);
                    }
                }, 16);
            }
            
            // Intersection Observer untuk trigger animasi saat scroll
            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const counters = entry.target.querySelectorAll('.counter');
                        counters.forEach(function(counter) {
                            if (!counter.classList.contains('animated')) {
                                counter.classList.add('animated');
                                animateCounter(counter);
                            }
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            // Observe statistics section saat DOM ready
            document.addEventListener('DOMContentLoaded', function() {
                const statsSection = document.querySelector('.stat-card')?.closest('.col-12');
                if (statsSection) {
                    observer.observe(statsSection);
                }
            });
        })();
    </script>
</body>

</html>