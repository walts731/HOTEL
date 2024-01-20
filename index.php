<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walton's Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px){
            .availability-form{
            margin-top: 0px;
            padding: 0 35px;
            }
        }
    </style>
</head>
<body>
    <?php require('inc/heaader.php'); ?>

    <!-- carousel -->
    <div class="container-fluid">
        <!-- Swiper -->
        <div class="swiper swiper-container px-lg-4 mt-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.0.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.0.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.0.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.0.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.0.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.0.jpg" class="w-100 d-block"/>
                </div>
            </div>
        </div>
    </div>

    <!-- check availability form -->
    <div class="container availability-form">
        <div class="row align-items-end">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms  -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/h1.jpg" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">₱200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofas
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                WiFi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/h1.jpg" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">₱200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofas
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                WiFi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/h1.jpg" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">₱200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofas
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                WiFi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
            </div>
        </div>
    </div>

    <!-- Our Facilities  -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.png" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.png" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.png" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.png" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.png" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
            </div>
        </div>
    </div>

    <!-- Testimonials  -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.png" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Laboriosam impedit corrupti aperiam officia accusantium, voluptate explicabo beatae adipisci consequuntur dolor!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.png" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Laboriosam impedit corrupti aperiam officia accusantium, voluptate explicabo beatae adipisci consequuntur dolor!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.png" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Laboriosam impedit corrupti aperiam officia accusantium, voluptate explicabo beatae adipisci consequuntur dolor!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More</a>
        </div>
    </div>

    <!-- Reach Us  -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.86803545447!2d123.48468659999999!3d13.296182899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a1a0f8e33fed49%3A0x50cbb3fd2083cc1!2sBicol%20University%20Polangui!5e0!3m2!1sen!2sph!4v1705739575235!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: +917778889991" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+917778889991</a>
                    <br>
                    <a href="tel: +917778889991" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+917778889991</a>
                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-decoration-none text-dark">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block text-decoration-none text-dark">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p4">
                <h3 class="h-font fw-bold fs-3 mb-2">WALTON'S HOTEL</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Placeat iusto minima quas cupiditate quae non fugit. 
                    Consequuntur, deleniti beatae? Odio officia natus laudantium velit placeat illo excepturi, esse veritatis quod?</p>
            </div>
            <div class="col-lg-4 p4">
                <h5 class="mb-3">Links</h5>
                <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Home</a><br>
                <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Rooms</a><br>
                <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Facilities</a><br>
                <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Contact Us</a><br>
                <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">About</a>
            </div>
            <div class="col-lg-4 p4">
                <h5 class="mb-3">Follow Us</h5>
                <a href="#" class="d-inline-block text-dark text-decoration none mb-2 text-decoration-none"><i class="bi bi-twitter me-1"></i>Twitter</a><br>
                <h5 class="mb-3">Follow Us</h5>
                <a href="#" class="d-inline-block text-dark text-decoration none mb-2 text-decoration-none"><i class="bi bi-facebook me-1"></i>Facebook</a><br>
                <h5 class="mb-3">Follow Us</h5>
                <a href="#" class="d-inline-block text-dark text-decoration none text-decoration-none mb-2"><i class="bi bi-instagram me-1"></i>Instagram</a><br>
            </div>
        </div>
    </div>

    <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by WALTON LONEZA</h6>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
        });

        var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
        });
    </script>
</body>
</html>