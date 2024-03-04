<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<style>
    .main-color {
        color: #21D0B3;
    }
    .nav-link {
        color: white;
    }
    .navbar-nav li {
        float: left;
        position: relative;
    }
    .navbar-nav li:hover a {
        color: #21D0B3;
        border-bottom: #21D0B3 2px solid;
        padding: 0%;
        margin: 0;
    }
    .hover-nav #submenu {
        margin: auto;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        width: 100%;
    }
    #submenu {
        left: 0;
        opacity: 1;
        position: absolute;
        visibility: hidden;
        z-index: 1;
        height: auto;
        width: 100%;
        background-color: #1b1525;
        flex-wrap: wrap;
    }

    li:hover ul#submenu {
        opacity: 10;
        top: 50px;
        visibility: visible;
        z-index: 99;
        width: 100%;
        position: fixed;
        left: 0;
        right: 0;
        height: auto;
        top: 50px;
        padding-top: 2%;
    }

    #submenu div {
        float: none;
    }

    .hover-card-section:hover .content-hover h4 {
        color: #21D0B3;
    }
    .hover-card-section:hover .icon-hover .color-ball {
        background-color: #21D0B3;
        animation: pop .4s forwards;
    }
    .hover-card-section:hover .icon-hover .icon-navbar {
        color: white;
        transform: rotateY(180deg);
    }
    .hover-card-section:hover {
        translate: 20px;
        transition: all 0.5s ease-in-out;
    }
    #submenu a:hover {
        background: #21D0B3;
    }

    .hover-card-section {
        display: flex;
        margin: auto;
        position: relative;
    }

    .icon-hover {
        position: absolute;
        right: 5%;
        margin-top: 0%;
        width: 60px;
        height: 40px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        border: 1px solid white;
        cursor: pointer;
        position: relative;
        background-color: white;
    }

    .color-ball {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: white;
        transform: scale(0);
        position: absolute;
    }

    .icon-navbar {

        transition: transform .3s;
        color: #21D0B3;
        font-size: 28px;
        margin-top: -5%;

    }



    @keyframes pop {
        0% {
            transform: scale(0);
        }

        50% {
            transform: scale(1.05);

        }

        100% {
            transform: scale(1);

        }
    }


    .hover-card-section h4 {
        color: white;
        font-size: 18px;
    }

    .hover-card-section p {
        color: white;
        font-size: small;
    }

    .hover-nav-card {
        display: flex;
        width: 100%;
        height: auto;
        gap: 8%;
        padding-left: -5%;
        padding-right: 5%;
    }

    .hover-nav-card li {
        width: 300px;
    }

    #submenu a {
        background-color: #333;
    }

    /*portfolio*/
    .portfolio-box {
        background-color: #231C30;
        width: 200px;
        height: 80px;
        justify-content: center;
        margin: auto;
        align-items: center;
        margin-top: 5%;
        padding-top: 8%;
    }

    .portfolio-box:hover {
        translate: 0px -10px;
        transition: all 0.5s ease-in-out;
        box-shadow: #ffffff 0px 0px 10px;
    }

    .portfolio-main {
        padding-left: -5%;
        width: 100%;
        margin-left: -5%;
    }

    .portfolio-box img {
        width: 100px;
        height: 30px;
        margin: auto;
    }

    .portfolio-card:hover {
        translate: 0px -10px;
        transition: all 0.5s linear;
    }

    .portfolio-card {
        width: 270px;
        height: 300px;
        background-color: #231C30;

        padding: 5px;
    }

    .portfolio-card img {
        width: 260px;
        height: 150px;

    }

    .portfolio-card-content h3 {
        font-size: 18px;
        color: #ffffff;


    }

    .portfolio-card-content p {
        font-size: 14px;
        color: #ffffff;
    }

    .portfolio-card-content img {
        width: 70px;
        height: 25px;
    }

    .hover-nav #submenu-p {
        margin: auto;
        justify-content: center;
        align-items: center;

        cursor: pointer;

        width: 100%;
        padding: 5% 0;
    }

    #submenu-p {

        opacity: 0;
        position: absolute;
        top: 50px;
        visibility: hidden;
        z-index: 1;
        height: auto;
        width: 100%;
        background-color: #1b1525;
    }

    li:hover ul#submenu-p {
        opacity: 1;
        top: 50px;
        visibility: visible;
        display: grid;
        place-items: center;
        width: 100%;
        position: fixed;
        padding-top: 2%;
        left: 0;
        right: 0;
        transition: all 0.05s linear;
    }

    #submenu-p div {
        float: none;
    }

    /*industries*/
    .hover-nav #submenu-i {
        margin: auto;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        width: 100%;
    }

    #submenu-i {
        left: 0;
        opacity: 0;
        position: absolute;
        top: 50px;
        visibility: hidden;
        z-index: 1;
        height: auto;
        width: 100%;
        background-color: #1b1525;
    }

    li:hover ul#submenu-i {
        opacity: 1;
        top: 50px;
        visibility: visible;
        display: grid;
        place-items: center;
        width: 100%;
        padding-top: 2%;
        position: fixed;
        transition: all 0.05s linear;
    }

    #submenu-i div {
        float: none;
    }

    /*flip-card*/
    .flip-card-container {
        display: flex;
        margin: auto;
        width: 100%;
        height: 100%;
        gap: 5%;
        bottom: 0;
    }

    .main-card-container {
        position: relative;
        width: 200px;
        height: 120px;
    }

    .thecard {
        position: absolute;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        /* transition: all 0.5s; */
        background: #1b1525;
    }

    .thecard:hover {
        transform: rotateY(180deg);
        transition: all 0.5s linear;
    }

    .thefront {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        background: #1b1525;
        color: #333;
        margin: auto;
        justify-content: center;
        align-items: center;
        padding: 0 5% 0 5%;
    }

    .thefront h6 {
        color: white;
        font-size: larger;
        margin: 0;
    }

    .thefront p {
        color: white;
    }

    .theback {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        background: #1b1525;
        margin: auto;
        display: grid;
        place-items: center;
        transform: rotateY(180deg);
    }

    .theback i {
        color: white;
        font-size: 50px;
    }

    .navbar-brand img {
        width: 200px;
        height: 38px;
      

    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding: 0 30px 0 0;
        font-size: 20px;
        letter-spacing: 3px;
        color: #ffffff;
        font-weight: 400;
        font-family: "Inter";
        filter: drop-shadow(-0.174px 0.985px 2.5px rgba(0, 0, 0, 0.75));
    }

    .navbar-expand-lg .navbar-collapse {
        justify-content: center;
    }

    .side-nav-contact {

        background-color: #21D0B3;
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url(./images/menu.png);
        width: 40px;
        height: 40px;
        margin: 0;



    }

    .bg-nav {
        background-color: #1b1525;
    }
    .searchbar-div {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
     


    }

    .search-icon {
        height: 40px;
        width: 40px;
        margin-right: 23px;
  
    }

    .side-buttonimp {
        background-color: #21D0B3;
        width: 160px;
        height: 40px;
        border: #21D0B3 2px solid;
        outline: none;
        margin: 0;

    }

    .side-buttonimp span {
        font-size: 18px;
        letter-spacing: 0px;
        line-height: 25px;
        color: #1b1525;
        font-weight: 500;
        font-family: "Inter";
        text-align: center;
    }

    .navbar-toggler {
        line-height: 0 !important;
        padding: 0;

    }
    @media (max-width: 1666px) {
        .navbar-expand-lg .navbar-nav .nav-link{
            font-size: 16px;
        }
    }
    @media (max-width: 1440px) {
        .navbar-expand-lg .navbar-nav .nav-link {
            padding: 0 14px 0 0;
        font-size: 16px;
        
        }

        .searchbar-div{
            margin-right:20px;
        } 
   
    }

    @media (max-width: 1280px) {
        .navbar-expand-lg .navbar-nav .nav-link{
            font-size: 14px;
        }
    }
    @media (max-width: 600px) {
        .search-icon {
            margin-left: 0%;

            height: 35px;
            width: 35px;

        }

        .side-buttonimp {
            margin-bottom: -15%;
            margin-left: 0%;
            font-size: 10px;

            width: 100%;
        }

        .navbar-brand img {
            width: 120px;
            height: 30px;
      

        }
    }

    @media (max-width: 375px) {
        .side-buttonimp {

            margin-bottom: -20%;
            margin-left: 23%
        }

        .search-icon {
            margin-left: 40%;

        }


    }
</style>


<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./images/logo.svg" alt="logo"></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About Us</a>
                </li>
                <li class="nav-item hover-nav">
                    <a class="nav-link text-white" href="services">Services</a>
                    <ul id="submenu">
                        <div class="hover-nav-card">
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="hover-nav-card">
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="hover-nav-card">
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"><i class="ri-code-box-line"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4> Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>

                        </div>

                        <div class="flip-card-container">
                            <div class="main-card-container">
                                <div class="thecard">
                                    <div class="thefront">
                                        <h6>AI/ML</h6>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                    <div class="theback">
                                        <i class="fa-solid fa-snowflake" style="color: #ffffff;"></i></i>
                                    </div>
                                </div>
                            </div>
                            <div class="main-card-container">
                                <div class="thecard">
                                    <div class="thefront">
                                        <h6>AI/ML</h6>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                    <div class="theback">
                                        <i class="fa-solid fa-snowflake" style="color: #ffffff;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="main-card-container">
                                <div class="thecard">
                                    <div class="thefront">
                                        <h6>AI/ML</h6>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                    <div class="theback">
                                        <i class="fa-solid fa-snowflake" style="color: #ffffff;"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="main-card-container">
                                <div class="thecard">
                                    <div class="thefront">
                                        <h6>AI/ML</h6>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                    <div class="theback">
                                        <i class="fa-solid fa-snowflake" style="color: #ffffff;"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="main-card-container">
                                <div class="thecard">
                                    <div class="thefront">
                                        <h6>AI/ML</h6>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                    <div class="theback">
                                        <i class="fa-solid fa-snowflake" style="color: #ffffff;"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </ul>
                </li>
                <li class="nav-item hover-nav ">
                    <a class="nav-link text-white " href="industries-we-serve">Industries</a>
                    <ul id="submenu-i">
                        <div class="hover-nav-card">
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="hover-nav-card">
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="hover-nav-card">
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hover-card-section">
                                    <div class="icon-hover">
                                        <div class="color-ball"></div>
                                        <span class="icon-navbar"> <i class="fa-solid fa-cart-shopping"></i></span>
                                    </div>
                                    <div class="content-hover">
                                        <h4>E-Commerce Solution</h4>
                                        <p>Lorem ipsum dolor sit amet, cstetur adicing ipsum dolor</p>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="nav-item hover-nav">
                    <a class="nav-link text-white" href="#">Portfolio</a>
                    <ul id="submenu-p">
                        <div class="row portfolio-main">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="row portfolio-logo">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="portfolio-box">
                                            <img src="./images/Vector Smart Object copy 5.webp">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="portfolio-box">
                                            <img src="./images/Vector Smart Object copy 5.webp">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="portfolio-box">
                                            <img src="./images/Vector Smart Object copy 5.webp">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="portfolio-box">
                                            <img src="./images/Vector Smart Object copy 5.webp">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="portfolio-card">
                                            <img src="./images/feature-1-1 (1).webp">
                                            <div class="portfolio-card-content">
                                                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                                <img src="./images/Vector Smart Object copy 5.webp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="portfolio-card">
                                            <img src="./images/feature-1-1 (1).webp">
                                            <div class="portfolio-card-content">
                                                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                                <img src="./images/Vector Smart Object copy 5.webp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </ul>

                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Blogs</a>
                </li>
            </ul>

        </div>
        <div>
            <div class="searchbar-div">
                <span class="service-card-image"><img class="search-icon" src="./images/search.svg"></span>
                <button type="button" class="side-buttonimp"><span>Contact Us</span></button>
            </div>


        </div>
    </div>

</nav>