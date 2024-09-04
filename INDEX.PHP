<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPONSIVE-WEBSITE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="./CSS/STYLE.CSS">
    <!-- font google -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

</head>

<body>
    <!-- nav br code -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dr.Hari Singh Gour University</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="INDEX.PHP">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="ABOUT.PHP">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <!-- ADDING CARISOUL -->


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./IMAGE/03.jpg" class="d-block w-100" alt="logo">
            </div>
            <div class="carousel-item">
                <img src="./IMAGE/02.jpg" class="d-block w-100" alt="vice chanceller">
            </div>
            <div class="carousel-item">
                <img src="./IMAGE/04.jpeg" class="d-block w-100" alt="amrit_mahoutsab">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- about us code -->

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">About Us</h3>
        </div>
        <div class="container-fluid">
            <DIV class="row">
                <DIV class="col-lg-6 col-md-6 col-12">
                    <img src="./IMAGE/cemra_proj.jpg" alt="image" class="img-fluid aboutimg">
                </DIV>
                <DIV class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Dr. Hari Singh Gour University</h2>
                    <p display="py-3">Doctor Harisingh Gour Vishwavidyalaya Sagar, formerly University of Saugor, was
                        established on 18th July 1946 by Dr. Sir Hari Singh Gour (Nov. 26, 1870 – Dec. 25, 1949) by his
                        lifetime savings. This 18th University of India and the oldest and the biggest University of
                        Madhya Pradesh has perhaps the singular distinction of being founded by the munificence of a
                        single person's hard earned money of about two crore of rupees. Apart from being a great jurist
                        and legal luminary par excellence, he was a great Patriot, Philanthropist, Educationist and
                        Social Reformer.

                        Dr. Hari Singh Gour was the first Vice-Chancellor of University of Delhi (1922 to 1926) and
                        first Dean (1924) of The Faculty of Law in the University of Delhi. Dr. Hari Singh Gour also
                        held the position of Vice-Chancellor of the Nagpur University, (two times in 1928 and 1936).</p>
                    <a class="btn btn-success"
                        href="https://www.dhsgsu.edu.in/index.php/en/about-us/about-us-overview">Check More</a>
                </DIV>
            </DIV>
        </div>

    </section>

    <!-- our services  code -->

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Our Services</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- FIRST IMAGE  -->
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="./IMAGE/cemra_proj.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cemra</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <!-- SECOND IMAGE  -->
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="./IMAGE/cemra_proj.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cemra</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <!-- THIRD IMAGE  -->
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="./IMAGE/cemra_proj.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cemra</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- GALLARY SECTION  -->

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Gallary</h3>
        </div>
        <DIV class="container-fluid">
            <DIV class="row">
                <!-- FIRST IMAGE  -->

                <DIV class="col-lg-4 col-md-4 col-12">
                    <img src="./IMAGE/cemra_proj.JPG" alt="" class="img-fluid pb-3">
                </DIV>

                <!-- SECOND IMAGE  -->

                <DIV class="col-lg-4 col-md-4 col-12">
                    <img src="./IMAGE/cemra_proj.JPG" alt="" class="img-fluid pb-3">
                </DIV>

                <!-- THIRD IMAGE  -->

                <DIV class="col-lg-4 col-md-4 col-12">
                    <img src="./IMAGE/cemra_proj.JPG" alt="" class="img-fluid pb-3">
                </DIV>

                <!-- FOURTH IMAGE  -->

                <DIV class="col-lg-4 col-md-4 col-12">
                    <img src="./IMAGE/cemra_proj.JPG" alt="" class="img-fluid pb-3">
                </DIV>

                <!-- FIFTH IMAGE  -->

                <DIV class="col-lg-4 col-md-4 col-12">
                    <img src="./IMAGE/cemra_proj.JPG" alt="" class="img-fluid pb-3">
                </DIV>

                <!-- SIXTH IMAGE  -->

                <DIV class="col-lg-4 col-md-4 col-12">
                    <img src="./IMAGE/cemra_proj.JPG" alt="" class="img-fluid pb-3">
                </DIV>

                <!-- SEVENTH IMAGE  -->

                <DIV class="col-lg-4 col-md-4 col-12">
                    <img src="./IMAGE/cemra_proj.JPG" alt="" class="img-fluid pb-3">
                </DIV>

                <!-- EIGHTH IMAGE  -->

                <DIV class="col-lg-4 col-md-4 col-12">
                    <img src="./IMAGE/cemra_proj.JPG" alt="" class="img-fluid pb-3">
                </DIV>

                <!-- NINTH IMAGE  -->

                <DIV class="col-lg-4 col-md-4 col-12">
                    <img src="./IMAGE/cemra_proj.JPG" alt="" class="img-fluid pb-3">
                </DIV>
            </DIV>
        </DIV>
    </section>


    <!-- CONTACT US CODE  -->


    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Contact Us</h3>
        </div>

        <DIV class="w-50 m-auto">
            <FORM action="./DATA.PHP" method="post">
                <DIV class="form-group">
                    <label>Username</label>
                    <input type="text" name="user_name" autocomplete="off" class="form-control">
                </DIV>


                <DIV class="form-group">
                    <label>Email Id</label>
                    <input type="email" name="email" autocomplete="off" class="form-control">
                </DIV>


                <DIV class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="phone_number" autocomplete="off" class="form-control">
                </DIV>

                <DIV class="form-group">
                    <label>Feedback</label>
                   <textarea name="comment" class="form-control"></textarea>
                </DIV>
            

                <button type="submit" class="btn btn-success" name="submit">Submit</button>
            </FORM>
        </DIV>
    </section>


    <!-- footer section code  -->

<footer>
    <p class="pb-3 bg-dark text-white text-center">Dr. Hari Singh Gour University</p>
</footer>














    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>