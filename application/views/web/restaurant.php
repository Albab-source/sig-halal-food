<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ChariTeam - Free Nonprofit Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=base_url()?>assets/web/img/favicon.ico" rel="icon">

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
                <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
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
                <h1 class="fw-bold text-primary m-0">Sepong<span class="text-white">Food</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?=base_url()?>" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link active">About</a>
                    <a href="<?=base_url()?>web/restaurant" class="nav-item nav-link">Restoran</a>
                    <a href="<?=base_url()?>web/maps" class="nav-item nav-link">Maps</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="">
                        Donate Now
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Restaurant</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?=base_url()?>">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Restaurant</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Restaurant Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Feature Causes</div>
                <h1 class="display-6 mb-5">Find Your Favorite Restaurant!</h1>
            </div>
            <div class="row g-5 justify-content-center" id="restaurant-list">
                <!-- cards will be loaded here -->
            </div>
        </div>
    </div>
    <!-- Restaurant End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Chari<span class="text-white">Team</span></h1>
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
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
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
    <script>
        $(document).ready(function(){
            $.getJSON("<?=base_url()?>assets/maps/resto_list/resto_points.geojson", function(data) {
                var container = $('#restaurant-list');
                var delay = 0.1;

                // Loop every features in the geojson
                data.features.forEach(function(feature, index){
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
</body>

</html>