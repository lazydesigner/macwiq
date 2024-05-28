<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- Icon Font Stylesheet -->

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/a.css">
</head>

<body>
<?php include "./include/header-navbar.php" ?>
   

    <!-- Navbar Start -->
<?php include "./include/navbar.php" ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 h-100">
        <div class="container py-5 ">
            <div class="row d-flex">


                <div class=" col-lg-6 col-mg-6  col-sm-12 ">

                    <div class="bg-image form-main">
                        <h2 class=" pt-2 text-center text-bright form-br">Get A Free Quote</h2>
                        <h3 class=" pt-2 pb-3"> First Step</h3>

                        <form>
                            <div class="form-row d-flex">
                                <div class="col">
                                    <h5>Origin City</h5>
                                    <input type="text" class="form-control w-75 p-2" placeholder="First name">
                                </div>
                                <div class="col">
                                    <h5>Destination City</h5>
                                    <input type="text" class="form-control w-75 p-2" placeholder="Last name">
                                </div>



                            </div>
                            <div class="form-row pt-2 d-flex">
                                <div class="col ">
                                    <h5>Date Of Pickup</h5>
                                    <input type="date" class="form-control w-75 p-2" name="pick_up_date" id="ship_date">
                                </div>
                                <div class="col ">
                                    <h5> Vehicle Size</h5>
                                    <div class="mb-3">

                                        <input type="text" style="position: relative;" readonly
                                            placeholder="select vehicle size" class="form-control p-2 w-75"
                                            name="Vehicle_size" id="ship_vehicle">
                                        <div class="car-option" id="car-option">
                                            <div class="cars" id="cars"><img src="img/medium-pickup.png" loading="lazy"
                                                    alt="">
                                                <p>medium-pickup</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/midsize-suv.png" loading="lazy"
                                                    alt="">
                                                <p>midsize-suv</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/midsize-car.png" loading="lazy"
                                                    alt="">
                                                <p>midsize-car</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/mini-van.png" loading="lazy"
                                                    alt="">
                                                <p>mini-van</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/motorcycle.png" loading="lazy"
                                                    alt="">
                                                <p>motorcycle</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/small-car.png" loading="lazy"
                                                    alt="">
                                                <p>small-car</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/small-suv.png" loading="lazy"
                                                    alt="">
                                                <p>small-suv</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/small-car.png" loading="lazy"
                                                    alt="">
                                                <p>small-car</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/sports-car.png" loading="lazy"
                                                    alt="">
                                                <p>sports-car</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/hypercar.png" loading="lazy"
                                                    alt="">
                                                <p>hypercar</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/large-car.png" loading="lazy"
                                                    alt="">
                                                <p>large-car</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/large-pickup.png" loading="lazy"
                                                    alt="">
                                                <p>large-pickup</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/large-suv.png" loading="lazy"
                                                    alt="">
                                                <p>large-suv</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/boat-trailer.png" loading="lazy"
                                                    alt="tfj">
                                                <p>boat-trailer</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/dually-pickup.png" loading="lazy"
                                                    alt="">
                                                <p>dually-pickup</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/fullsize-van.png" loading="lazy"
                                                    alt="">
                                                <p>fullsize-van</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/golf-cart.png" loading="lazy"
                                                    alt="">
                                                <p>golf-cart</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/travel-trailer.png" loading="lazy"
                                                    alt="">
                                                <p>travel-trailer</p>
                                            </div>
                                            <div class="cars" id="cars"><img src="img/others.png" loading="lazy" alt="">
                                                <p>others</p>
                                            </div>
                                        </div>

                                    </div>
                        </form>


                    </div>

                </div>

                <button type="submit" name="submit" class="btn btn-primary mb-4" id="next-step">Submit</button>


            </div>



        </div>
        <div class="col-sm-12 col-lg-6 col-mg-6 px-5 glass-effect p-5 ">
            <p class="pb-0 mb-0" style="color:white; font-size: larger;"> The Best Transporter</p>
            <h1 class="text-white display-4 pt-0">
                Trailer Transport
            </h1>
            <p class="text-white px-2" style="font-size: x-large;">We provide quality heavy haul / oversize load
                shipping <br>services across the U.S. and internationally.</p>

            <button type="submit" name="submit" class="btn btn-primary">Watch Us In Action</button>

        </div>
    </div>

    </div>
    </div>
    <!-- Page Header End -->
    <!---strips-->

    <div class="container-fluid steps-bg">
        <div class="row">
            <div class="col-sm-12 col-lg-4 col-mg-4 W-100 text-center pt-4">
                <iconify-icon icon="fluent-mdl2:world" width="60" class="main-color"></iconify-icon>
                <h5 class="fw-bolder main-color">2 million +</h5>
                <p class="fw-bolde main-color">successful Deliveries</p>
            </div>
            <div class="col-sm-12 col-lg-4 col-mg-12 text-center pt-4">
                <iconify-icon icon="ph:truck-bold" width="60" class="main-color"></iconify-icon>
                <h5 class="fw-bolder main-color ">190 +</h5>
                <p class="fw-bolde main-color ">Countries Served</p>
            </div>
            <div class="col-sm-12 col-lg-4 col-mg-12 text-center  pt-4">
                <iconify-icon icon="mdi:drivers-license" class="main-color" width="60"></iconify-icon>
                <h5 class="fw-bolder main-color">15000 +</h5>
                <p class="fw-bolde main-color "> Best Drivers</p>
            </div>
        </div>

    </div>


    <!---end-->

    <!--cardasss-->

    <!-- <div class="row text-center p-5">
            <div class="col-sm-12  col-lg-6  col-mg-6  bg-card2 ">
                <iconify-icon icon="bi:chat-quote-fill" width="60" class="text-primary pt-4 "></iconify-icon>
                <h3 class="text-black fw-bolder pt-4 pb-4">GET A QUOTE</h3>
                <h5 class="text-black fw-bolde pb-4">Request a quote for our professional, cost-effective trailer
                    transport.</h5>
                <button type="submit" name="submit" class="btn btn-primary " id="next-step">Start A QUOTE</button>
            </div>
            <div class="col-sm-12 col-lg-6  col-mg-6  bg-card2 ">
                <iconify-icon icon="bi:chat-quote-fill" width="60" class="text-primary pt-4 "></iconify-icon>
                <h3 class="text-black fw-bolder pt-4 pb-4">GET A QUOTE</h3>
                <h5 class="text-black  fw-bolde pb-4">Request a quote for our professional, cost-effective trailer
                    transport.</h5>
                <button type="submit" name="submit" class="btn btn-primary " id="next-step">Start A QUOTE</button>
            </div>
            <div class="col-sm-12 col-lg-6  col-mg-6  bg-card2 ">
                <iconify-icon icon="bi:chat-quote-fill" width="60" class="text-primary pt-4 "></iconify-icon>
                <h3 class="text-black fw-bolder  pt-4 pb-4">GET A QUOTE</h3>
                <h5 class="text-black  fw-bolde pb-4">Request a quote for our professional, cost-effective trailer
                    transport.</h5>
                <button type="submit" name="submit" class="btn btn-primary " id="next-step">Start A QUOTE</button>
            </div>
        </div> -->

    <div class="container-xxl  border-wc bg-blogs ">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s text-center">
                <h4 class="text-black text-uppercase text-white border-wc  ">Latest Blogs</h4>
                <h1 class="mb-5 text-white">Most Recent Stories </h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp " data-wow-delay="0.3s">
                    <div class="service-item p-4 pb-1">
                        <div class="overflow-hidden mb-4">
                            <div style="width: 100%; height: 100%;"><img class="img-fluid" height="100%" width="100%"
                                    src="img/LATEST-NEWS (1).webp" loading="lazy" alt="open"></div>
                        </div>
                        <h4 class="mb-3 text-center text-white">LATEST NEWS FROM AUTO TRANSPORTATION </h4>
                        <p class="text-white">Discover the latest and out breaking news from Auto Transportation Center
                            and get your
                            vechile easily shipped from the best transportation company. </p>
                        <a class=" mt-2" href="">
                            <button type="submit" name="submit" class="btn bg-white">Read More</button></a>

                    </div>

                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <div style="width: 100%; height: 100%;"><img class="img-fluid" height="100%" width="100%"
                                    src="img/blogs2a (1) (1).webp" loading="lazy" alt="open"></div>
                        </div>
                        <h4 class="mb-3 text-white">MAJOR ROUTES FOR AUTO TRANSPORT</h4>
                        <p class="text-white">California To Texas <br>New York To Florida <br>Alabma To New Jersey <br>
                            Arizona To
                            Nevada <br>California To Florida </p>
                        <a class=" mt-2" href="">
                            <button type="submit" name="submit" class="btn  bg-white">Read More</button></a>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4 pb-0">
                        <div class="overflow-hidden mb-4">
                            <div style="width: 100%; height: 100%;"><img class="img-fluid" height="100%" width="100%"
                                    src="img/auto-transport-open.webp" loading="lazy" alt="open"></div>
                        </div>
                        <h4 class="mb-3 text-center text-white">CAR SHIPPING COST CALCULATOR </h4>
                        <p class="text-white">Use our car shipping cost calculator to understand how much does it cost
                            to ship a car.
                            We can easily guide you using the latest factors on which shipping a car from one state
                            to another cost.</p>
                        <a class=" mt-2" href="">
                            <button type="submit" name="submit" class="btn bg-white">Read More</button></a>

                    </div>

                </div>
                <!-- <a href="blogs" class="mx-auto text-center">
                        <button type="button" class="btn btn-primary btn-lg  mx-auto" style="color: black;">More
                            Blogs</button></a> -->

            </div>
        </div>
    </div>
    <!----->
    <div class="container-fluid p-4 bg-black  ">
        <div class="row pb-0 ">
            <div class="col ">
                <h4 class="text-center text-white">Ready to Ship Your Car with Best Auto Transporter in the Vehicle
                    Transportation Industry ?</h4>
            </div>
        </div>
        <div class="row p-5">
            <div class="col text-center pt-0">
                <button type="submit" name="submit" class="btn bg-white  btn-size">Get Free Instant
                    Quote</button>
                <button type="submit" name="submit" class="btn bg-white  btn-size">+1 (833) 233-4447 </button>

            </div>

        </div>
    </div>
    <!----->

    <!--cost-->

    <!---->
    <!----->
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-sm-12 col-mg-6 col-lg-6  p-0 ">
                <span><img src="./img/heavy-haulll.webp" class="w-100" alt=""></span>

            </div>
            <div class="col-sm-12 col-lg-6 col-mg-6 handle-responsive  ">
                <h2 class="display-5 main-color fw-bolder "> We Can Handle Trailor Transport</h2>
                <p class="text-black" style="font-size: larger;">
                    No matter the size, weight, location, length, width, or height of your load, we can haul it! For the
                    transportation of your large loads, we have heavy haul truck drivers available in all states and
                    towns. We have been moving large cars and equipment both locally and internationally for more than
                    14 years.
                    Leading heavy equipment and oversize cargo transport firm in the business is Heavy Haulers. We
                    provide the industry's top shipping options.

                    Heavy Haulers is the industry-leading heavy equipment and oversize load transport company. We offer
                    the best shipping solutions in the business.
                </p>
            </div>
        </div>
    </div>

    <!---->

    <div class="container-fluid p-5 pt-0">
        <h2 class="border-bottom border-5 border-black mx-auto car-shipment text-center fw-bolder mb-5">How Car Shipment
            Cost is Calculated</h2>
        <div class="row">
            <div class="col-sm-12 col-lg-6 col-mg-6  mx-">
                <h4 style="font-size: xx-large; color: #b32322; "> <iconify-icon
                        icon="charm:tick-double"></iconify-icon>
                    Weight and size of vehicles
                </h4>
                <p style="font-size: larger;"> The cost to ship an automobile is mostly determined by the size and
                    weight of the vehicle. Smaller automobiles often weigh less, are more compact, and require less room
                    in the trailer. Larger vehicles, such as SUVs and commercial trucks, require more space due to their
                    weight and size. In the end, influencing the price.</p>
            </div>
            <div class="col-sm-12 col-lg-6 col-mg-6 ">
                <h4 style="font-size: xx-large; color: #b32322; "> <iconify-icon
                        icon="charm:tick-double"></iconify-icon>
                    Type of car shipping Service
                </h4>
                <p style="font-size: larger;"> Choosing an open car shipping service will result in lower costs for you.
                    However, the cost of the enclosed automobile shipping option will be 60% higher than that of the
                    open car shipping option. Note: Your car is extra safe and protected with the enclosed.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6 col-mg-6">
                <h4 style="font-size: xx-large; color: #b32322; "> <iconify-icon
                        icon="charm:tick-double"></iconify-icon>
                    Weight and size of vehicles
                </h4>
                <p style="font-size: larger;">The cost to ship an automobile is mostly determined by the size and weight
                    of the vehicle. Smaller automobiles often weigh less, are more compact, and require less room in the
                    trailer. Larger vehicles, such as SUVs and commercial trucks, require more space due to their weight
                    and size. In the end, influencing the price.</p>

            </div>
            <div class="col-sm-12 col-lg-6 col-mg-6">
                <h4 style="font-size: xx-large; color: #b32322; "> <iconify-icon
                        icon="charm:tick-double"></iconify-icon>
                    Shipping Distance
                </h4>
                <p style="font-size: larger;">A well-maintained and operational vehicle facilitates the process and so
                    lowers costs. However, if your car isn't working, you'll need more assistance, which will complicate
                    things and raise the expense.
                </p>
            </div>
        </div>
        <div class="row mx-auto final-shipping">
            <div class="col">
                <h4 style="font-size: xx-large; color: #b32322; "> <iconify-icon
                        icon="charm:tick-double"></iconify-icon>
                    Final shipping Cost
                </h4>
                <p style="font-size: larger;">Your final shipping cost is determined by the aforementioned component and
                    includes all applicable federal taxes and insurance for transporting cars. Using the cost calculator
                    listed on our website, you can determine the cost of shipping.
                </p>

            </div>
        </div>

    </div>

    <!--Why Choose Us?-->
    <div class="container-fluid pt-3 border-wc">
        <h1 class="text-center  fw-bolder  mx-auto width-why border-bottom border-4 border-black ">Why choose</h1>


        <!--first part-->

        <div class="row p-4">
            <div class="col-sm-12 col-md-4 col-lg-4  pt-3 space-mg   ">
                <div class="why-card-bg">
                    <div class="row ">
                        <div class="col-12">
                            <iconify-icon icon="fluent-mdl2:world" width="60"
                                class="text-white border-wc  p-3"></iconify-icon>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-white px-3"> In industry since 2012</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 text-white px-4 ">
                            <p> We have been providing auto shipping services since 2012. We are best at doing our work.
                                We
                                provide the most affordable and fast service in the whole United States. </p>
                        </div>

                    </div>
                </div>



            </div>
            <div class="col-sm-12 col-md-4 col-lg-4  pt-3 space-mg   ">
                <div class="why-card-bg">
                    <div class="row ">
                        <div class="col-12">
                            <iconify-icon icon="ph:quotes-fill" width="60"
                                class="text-white border-wc  p-3"></iconify-icon>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-white px-3"> Provides quotes in seconds</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 text-white px-4 ">
                            <p> It will just take a few seconds to obtain an estimate when you use our rapid online
                                quote calculator to receive your instant quote. <br> <br> </p>
                        </div>

                    </div>
                </div>



            </div>
            <div class="col-sm-12 col-md-4 col-lg-4  pt-3 space-mg   ">
                <div class="why-card-bg">
                    <div class="row ">
                        <div class="col-12">
                            <iconify-icon icon="material-symbols:price-change-outline" width="60"
                                class="text-white border-wc  p-3"></iconify-icon>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-white px-3"> Confirm prices</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 text-white px-4 ">
                            <p>We don't impose any additional or hidden fees; we just use the transportation cost that
                                is shown to you in the estimate.<br><br> </p>
                        </div>

                    </div>
                </div>



            </div>

        </div>
        <!--seconde part-->
        <div class="row p-4">
            <div class="col-sm-12 col-md-4 col-lg-4  pt-3 space-mg   ">
                <div class="why-card-bg">
                    <div class="row ">
                        <div class="col-12">
                            <iconify-icon icon="icon-park-outline:attention" width="60"
                                class="text-white border-wc  p-3"></iconify-icon>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-white px-3">Personal attention</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 text-white px-4 ">
                            <p> We attended to each and every consumer personally. Our top goal is to satisfy our
                                clients' needs and offer the best services possible.<br><br> </p>
                        </div>

                    </div>
                </div>



            </div>
            <div class="col-sm-12 col-md-4 col-lg-4  pt-3 space-mg   ">
                <div class="why-card-bg">
                    <div class="row ">
                        <div class="col-12">
                            <iconify-icon icon="medical-icon:social-services" width="60"
                                class="text-white border-wc   p-3"></iconify-icon>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-white px-3"> Multiple services</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 text-white px-4 ">
                            <p>We offer various service options that correspond to your time zone. For customers who
                                require delivery in 1–5 business days, expedited services are available. </p>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-sm-12 col-md-4 col-lg-4  pt-3 space-mg   ">
                <div class="why-card-bg">
                    <div class="row ">
                        <div class="col-12">
                            <iconify-icon icon="fluent-mdl2:world" width="60"
                                class="text-white border-wc  p-3"></iconify-icon>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-white px-3"> Damage-free service or we pay</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 text-white px-4 ">
                            <p>We provide damage-free transportation services to our customers who trust us for their
                                vehicles. If any unwanted damage happens, we provide an insurance policy for the
                                vehicle.

                            </p>
                        </div>

                    </div>
                </div>



            </div>

        </div>



    </div>




    </div>
    <!-- why choose -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row text-center">
            <div class=" col-sm-12 col-lg-3 col-mg-3"><img src="./img/pilot-ca-img.svg"></div>
            <div class=" col-sm-12 col-lg-6 col-mg-6"><h3>Trailor Transport Pilot Car Services</h3>
            <h1>Are you looking for a reliable pilot car
                for your transport?</h1></div>
            <div class=" col-sm-12 col-lg-3 col-mg-3"><img src="./img/pilot-cr-img.svg"></div>
    </div>
    <!-- Testimonials Section -->
    <div id="carouselExampleIndicators" class="carousel slide bg-dark h-100 mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active text-center mb-5 mt-5 ">
                <img class=" shadow-1-strong mb-4" src=".//img/rapid-auto-shipping-trustpilot-faiz (1).webp"
                    alt="avatar" style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3 text-white">Maria Kate</h5>

                        <p class="text-white pb-5">
                            <i class="fas fa-quote-left pe-2"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                            doloremque.
                        </p>
                    </div>
                </div>

            </div>
            <div class="carousel-item  text-center mb-5 mt-5 ">
                <img class=" shadow-1-strong mb-4" src=".//img/rapid-auto-shipping-trustpilot-google.webp" alt="avatar"
                    style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3 text-white">Maria Kate</h5>

                        <p class="text-white pb-5">
                            <i class="fas fa-quote-left pe-2"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                            doloremque.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item text-center mt-5 mb-5 ">
                <img class="shadow-1-strong mb-4" src="../img/rapid-auto-shipping-trustpilot-faiz.webp" alt="avatar"
                    style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3 text-white">Maria Kate</h5>

                        <p class="text-white pb-5">
                            <i class="fas fa-quote-left pe-2"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                            doloremque.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- end-->

    <!-- FaQ start -->
    <section id="faq" class="faq mb-5 mt-5">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <!-- <span>Frequently Asked Questions</span> -->
                <h2 class="text-center color faq mx-auto">Frequently Asked Questions</h2>

            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-10">

                    <div class="accordion accordion-flush" id="faqlist">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <!-- <i class="bi bi-question-circle question-"></i> -->
                                    How can I get a quote for shipping my car?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    To obtain a quote you can either use our instant online quote calculator or you
                                    can
                                    call us at +1 (833) 233-4447 to get your instant quote from one of our
                                    professionals.

                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    <!-- <i class="bi bi-question-circle question-"></i> -->
                                    How will my car shipping cost be calculated?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Car shipping costs are determined by various factors like distance, time, method
                                    of
                                    shipping, type of vehicle and many more. All these factors will determine the
                                    total
                                    cost of transporting a vehicle from one place to another.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    <!-- <i class="bi bi-question-circle question-"></i> -->
                                    What details do I need to fill in to place my order?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    We need your pickup and delivery location along with your phone numbers and
                                    name.
                                    And the vehicle details as well.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    <!-- <i class="bi bi-question-circle question-"></i> -->
                                    What payment methods do you accept?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <!-- <i class="bi bi-question-circle question-"></i> -->
                                    We accept all major credit cards, postal money orders, certified cheques for the
                                    deposit or the full pre-payment of the vehicle.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-5">
                                    <!-- <i class="bi bi-question-circle question-"></i> -->
                                    What is the bill of lading and how is it related to my shipment?
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    The bill of lading is very important to record any pre-existing damage on the
                                    vehicle during the pickup and delivery. It also serves as an official agreement
                                    for
                                    car shipping. To file any insurance claim you will need the bill of lading.
                                </div>
                            </div><!-- # Faq item-->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-6">
                                        <!-- <i class="bi bi-question-circle question-"></i> -->
                                        When will my vehicle be delivered?
                                    </button>
                                </h3>
                                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Mostly the delivery time is based on the distance that is going to be
                                        shipped.
                                        Usually, it takes 2-3 days to cover 1000 miles
                                    </div>
                                </div><!-- # Faq item-->

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-7">
                                            <!-- <i class="bi bi-question-circle question-"></i> -->
                                            Should I put my personal stuff in the car?
                                        </button>
                                    </h3>
                                    <div id="faq-content-7" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            You can transport personal stuff in your vehicle as long as it doesn't
                                            exceed the weight of 100 pounds. Please note that personal stuff is not
                                            covered under insurance if it gets missing or damaged.
                                        </div>
                                    </div><!-- # Faq item-->

                                    <div class="accordion-item">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq-content-8">
                                                <!-- <i class="bi bi-question-circle question-"></i> -->
                                                How much gas should I have in my vehicle during transportation?
                                            </button>
                                        </h3>
                                        <div id="faq-content-8" class="accordion-collapse collapse"
                                            data-bs-parent="#faqlist">
                                            <div class="accordion-body">
                                                Your gas tank should be 1/8 or 1/4 of its full capacity. This will
                                                help
                                                in loading and unloading without adding much additional weight
                                            </div>
                                        </div><!-- # Faq item-->


                                    </div>

                                </div>
                            </div>

                        </div>


    </section>



    <!-- FaQ end -->

    <?php include "./include/footer.php" ?>




    <script>
        a = document.querySelectorAll('#form-box')
        for (i = 0; i < a.length; i++) {
            console.log(a[i])
            a[i].addEventListener('click', () => {
                console.log(a[i])
            })
        }
    </script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        document.getElementById('ship_vehicle').addEventListener('click', () => {
            document.getElementById('car-option').style.display = 'grid'
        })
        var sel = document.querySelectorAll('#cars')
        for (i = 0; i < sel.length; i++) {
            sel[i].addEventListener('click', function (e) {
                e.preventDefault();
                document.getElementById('ship_vehicle').value = "" + this.children[1].innerText + ""
                document.getElementById('car-option').style.display = 'none'
            })
        }




        const myCarouselElement = document.querySelector('#myCarousel')
        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 2000,
            wrap: false
        })

    </script>

</body>

</html>