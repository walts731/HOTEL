<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walton's Hotel - CONTACT</title>
    <?php require('inc/links.php'); ?>
</head>
<body>
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Commodi facilis porro necessitatibus eveniet quos <br> vel quam laudantium similique mollitia blanditiis possimus.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded shadow p-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.86803545447!2d123.48468659999999!3d13.296182899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a1a0f8e33fed49%3A0x50cbb3fd2083cc1!2sBicol%20University%20Polangui!5e0!3m2!1sen!2sph!4v1705739575235!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/7hKCGVsKRWf6oo519" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> 7FWM+FVF, Purok Earth, Centro Occidental, Buhi - Polangui Rd, Polangui, 4506 Albay 
                    </a>
                    
                    <h5 class="mt-4">Call Us</h5>
                    <a href="tel: +917778889991" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+917778889991</a>
                    <br>
                    <a href="tel: +917778889991" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+917778889991</a> 
                    
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: waltonloneza@gmail.com" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> waltonloneza@gmail.com</a>

                    <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i> 
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i> 
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-instagram me-1"></i> 
                    </a>
                    <br>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                        <form action="">
                            <h5>Send a message</h5>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Subject</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Message</label>
                                <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-white custom-bg mt-3 shadow-none">SEND</button>
                        </form>
                </div>
                
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>

    
</body>
</html>