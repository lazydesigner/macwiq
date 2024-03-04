<?php $arrow = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11.9999 13.1714L16.9497 8.22168L18.3639 9.63589L11.9999 15.9999L5.63599 9.63589L7.0502 8.22168L11.9999 13.1714Z"></path></svg>';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./mobile.css">

    <style>
        .header-image {
            background-image: url(./images/1.\ Mobile\ App\ Development\ Company\ \(1\).webp);
            height: 500px;
        }

        /*magic section css start*/
        .main-magic-sec {
            background: url(./images/map-2.webp) center center no-repeat;
            background-size: cover;
            padding-top: 4%;
            width: 100%;
            height: 80vh;
            margin: 5% 0;
        }

        .magic-main-content {
            width: 100%;
            height: 100%;
        }

        .content-main {
            width: 100%;
            text-align: center;
            margin-bottom: -13.5%;

        }

        .magic-border {
            background: linear-gradient(147deg, rgba(33, 208, 179, 1) 29%, rgba(30, 207, 245, 1) 73%);
            height: 4px;
            width: 10%;
            margin: auto;
            margin-top: 1%;
            margin-bottom: 6%;
        }

        .content-main h3 {
            font-size: 3.125rem;
            font-weight: 700;
            letter-spacing: 1.5px;

        }

        .magic-box-div {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .magic-box {
            position: relative;
            background-color: #0067b7;
            height: 220px;
            width: 340px;
            border: 2px solid #f1f0ee;
            border-radius: 31px;


        }

        .magic-box::before {
            content: "";
            position: absolute;
            bottom: -50px;
            width: 50%;
            height: 25px;
            background: #0067b7;

            filter: blur(15px);
            border-radius: 60%;
            left: 24%;
            bottom: 0;
            margin: auto;
            top: 100%;

        }

        .magic-box::after {
            content: "";
            background-color: #0067b7;
            border-top: 3.5px solid #f1f0ee;
            border-right: 3.5px solid #F1F0EE;
            width: 30px;
            height: 30px;
            transform: rotate(45deg);
            z-index: 2;
            position: absolute;
            right: -18px;
            top: 90px;
        }
        .m2 {
            background-color: #ff9932;
        }

        .m2:nth-child(2)::after {
            background-color: #ff9932;
        }

        .m2:nth-child(2)::before {
            background-color: #ff9932;
        }

        .m3 {
            background-color: #ff6e3f;
        }

        .m3:nth-child(3)::after {
            background-color: #ff6e3f;
        }

        .m3:nth-child(3)::before {
            background-color: #ff6e3f;
        }

        .m4 {
            background-color: #00c0a1;
        }

        .m4:nth-child(4)::after {
            background-color: #00c0a1;
        }

        .m4:nth-child(4)::before {
            background-color: #00c0a1;

        }
        .magic-box-5 {
            position: relative;
            background-color: #012f47;
            height: 220px;
            width: 340px;
            border: 2px solid #f1f0ee;
            border-radius: 31px;
        }

        .magic-box-5::before {
            content: "";
            position: absolute;
            bottom: -50px;
            width: 50%;
            height: 25px;
            background: #012f47;
            z-index: 1;
            filter: blur(15px);
            border-radius: 60%;
            left: 24%;
            bottom: 0;
            margin: auto;
            top: 100%;
        }

        .magic-content {
            position: absolute;
            top: 10%;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .magic-content h3 {
            font-size: 1.875rem;
            font-weight: bold;
            color: white;
            margin-bottom: 5%;
        }

        .magic-content span {
            font-size: 1.188rem;
            letter-spacing: 0px;
            line-height: 15px;
            color: #ffffff;
            font-weight: 300;
            font-family: "Inter";
            text-align: center;
            z-index: 2;
        }
    
        .service-list-2 {
            
    margin: 1%;
    padding: 1%;
    box-sizing: border-box;
    border: 2px solid #202028!important;
    border-radius: 3px;
}
    
        .service-list-2:hover .service-list-inner-box {
            background-color: #202028!important;
        }
        .dark-icon{
            color: #7e7e86;

        }

        .why-mec {
            font-size: 50px;
            letter-spacing: 1px;
            line-height: 65px;
            color: #ffffff;
            font-weight: 700;
            font-family: "Inter";
            text-align: center;
            padding: 2% 0;
        }
        .why-mec span{
            font-size: 40px;
            font-weight: 500;
        }

        .why-mac-div {
            width: 100%;
            height: 100%;
            padding-bottom: 2%;
        }

        .white-content strong{
            color: white;
        }
        .white-content p{
            color: white;
        }

        @media (max-width:1540px) {
            .magic-content span {
                font-size: 1rem;
            }

            .magic-box {
                width: 280px;
                height: 180px;

            }

            .magic-box-5 {
                width: 280px;
                height: 180px;
            }

            .magic-content h3 {
                font-size: 1.588rem;
            }
        }

        @media (max-width:1280px) {
            .magic-box {
                width: 240px;
                height: 165px;
            }

            .magic-box-5 {
                width: 240px;
                height: 165px;
            }

            .magic-content span {
                font-size: smaller;
                width: 70%;
                line-height: 10px;
                margin: auto;
            }

            .magic-box::after {
                width: 28px;
                height: 28px;
                top: 65px;
                right: -17px;

            }


        }


        /*magic section css end*/
    </style>
</head>

<body>
    <header>
        <?php include "./navbar.php"?>
        <div class="header-image">
            <div class="header-image-col center-the-header-text">
                <div class="header-text">
                    <h1><span>Mobile APP</span> <br>
                        Development Services</h1>
                    <p>Drive profitable growth with our innovation-led mobile app development <br>
                        services that meets business objectives with simplified user experience. </p>
                </div>
            </div>
            <div class="header-image-col">

            </div>
        </div>
    </header>
    <section class="service">
        <p>Home / Services / <b>Custom Software Development</b></p>
        <h2>Services</h2>
        <div class="services-box-grid">
            <div class="service-list">
                <div class="service-list-inner-box">

                    <div class="service-icon-box">
                        <i class="fa-brands fa-apple"></i>
                    </div>
                    <strong>iOS App Development</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time
                        analytics, and agile innovation for your business.with simplified user experience.</p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-inner-box ">
                    <div class="service-icon-box">
                        <i class="fa-brands fa-apple"></i>
                    </div>
                    <strong>
                        Android App<br> Development</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time
                        analytics, and agile innovation for your business.with simplified user experience.</p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-inner-box">
                    <div class="service-icon-box">
                        <i class="fa-brands fa-apple"></i>
                    </div>
                    <strong>
                        Flutter App Development</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time
                        analytics, and agile innovation for your business.with simplified user experience.</p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-inner-box">
                    <div class="service-icon-box">
                        <i class="fa-brands fa-apple"></i>
                    </div>
                    <strong>Reactive App Development</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time
                        analytics, and agile innovation for your business.with simplified user experience.</p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-inner-box">
                    <div class="service-icon-box">
                        <i class="fa-brands fa-apple"></i>
                    </div>
                    <strong>MVP App Development</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time
                        analytics, and agile innovation for your business.with simplified user experience.</p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-inner-box">
                    <div class="service-icon-box">
                        <i class="fa-brands fa-apple"></i>
                    </div>
                    <strong>Progressive Web App<br>(PWA) Development</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time
                        analytics, and agile innovation for your business.with simplified user experience.</p>
                </div>
            </div>
        </div>
    </section>
    <div style="position: fixed;top:5%;height:5%" id="width"></div>

    <section class="section3">
        <img src="./images/section3.svg" class="section3-back" width="100%" height="100%" alt="">
        <div class="section3-w">
            <div class="section3-img"><img src="./images/section3_.svg" width="100%" height="100%" alt=""></div>

            <div class="section3-txt">
                <h2>Technologies That<br>
                    Deliver Brand<br>
                    Experiences</h2>
                <div class="our-custom-border"></div>
                <p>Building intuitive user interface for custom solutions by combining
                    your ideas and our end-to-end front-end development expertise</p>
            </div>
        </div>
    </section>

    <section class="main-magic-sec">
        <div class="magic-main-content">
            <div class="content-main">
                <h3>How to Make The Magic Happen</h3>

                <div class="magic-border"></div>
            </div>
            <div class="magic-box-div">
                <div class="magic-box">
                    <div class="magic-content">
                        <h3>STEP 1</h3>
                        <span>
                            High Level Scoping Proposal
                            PM & Governance Feature
                            Mapping Discovery Workshops Kick Off
                            Meeting.
                        </span>
                    </div>

                </div>
                <div class="magic-box m2">
                    <div class="magic-content">
                        <h3>STEP 2</h3><span>
                            High Level Scoping Proposal
                            PM & Governance Feature
                            Mapping Discovery Workshops Kick Off
                            Meeting.
                        </span>
                    </div>
                </div>
                <div class="magic-box m3">
                    <div class="magic-content">
                        <h3>STEP 3</h3><span>
                            High Level Scoping Proposal
                            PM & Governance Feature
                            Mapping Discovery Workshops Kick Off
                            Meeting.
                        </span>
                    </div>
                </div>
                <div class="magic-box m4">
                    <div class="magic-content">
                        <h3>STEP 4</h3><span>
                            High Level Scoping Proposal
                            PM & Governance Feature
                            Mapping Discovery Workshops Kick Off
                            Meeting.
                        </span>
                    </div>
                </div>
                <div class="magic-box-5">
                    <div class="magic-content">
                        <h3>STEP 5</h3><span>
                            High Level Scoping Proposal
                            PM & Governance Feature
                            Mapping Discovery Workshops Kick Off
                            Meeting.
                        </span>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="why-mac-div" style="background-color: #14141c;">
        <h2 class="why-mec">Why Macwiq <span>Is Your Best Choice<bR>
            For</span> Mobile Development?</h2>
        <div class="service">
            <div class="services-box-grid">
                <div class="service-list-2 dark">
                    <div class="service-list-inner-box white-content">
                        <div class="service-icon-box dark-icon">
                            <i class="fa-solid fa-id-badge"></i>
                        </div>
                        <strong>Qualified App Developers</strong>
                        <p>We offer tailored software solutions, automating processes, scaling products, providing
                            real-time
                            analytics, and agile innovation for your business.with simplified user experience.</p>
                    </div>
                </div>
                <div class="service-list-2">
                    <div class="service-list-inner-box white-content">
                        <div class="service-icon-box dark-icon">
                            <i class="fa-solid fa-id-badge"></i>
                        </div>
                        <strong>
                            Client-centric <br> Approach</strong>
                        <p>We offer tailored software solutions, automating processes, scaling products, providing
                            real-time
                            analytics, and agile innovation for your business.with simplified user experience.</p>
                    </div>
                </div>
                <div class="service-list-2">
                    <div class="service-list-inner-box white-content">
                        <div class="service-icon-box dark-icon">
                            <i class="fa-solid fa-id-badge"></i>
                        </div>
                        <strong>
                            Best UX/UI Experts</strong>
                        <p>We offer tailored software solutions, automating processes, scaling products, providing
                            real-time
                            analytics, and agile innovation for your business.with simplified user experience.</p>
                    </div>
                </div>
                <div class="service-list-2">
                    <div class="service-list-inner-box white-content">
                        <div class="service-icon-box dark-icon">
                            <i class="fa-solid fa-id-badge"></i>
                        </div>
                        <strong>Dedicated Teams</strong>
                        <p>We offer tailored software solutions, automating processes, scaling products, providing
                            real-time
                            analytics, and agile innovation for your business.with simplified user experience.</p>
                    </div>
                </div>
                <div class="service-list-2">
                    <div class="service-list-inner-box white-content">
                        <div class="service-icon-box dark-icon">
                            <i class="fa-solid fa-id-badge"></i>
                        </div>
                        <strong>Agile Development Process</strong>
                        <p>We offer tailored software solutions, automating processes, scaling products, providing
                            real-time
                            analytics, and agile innovation for your business.with simplified user experience.</p>
                    </div>
                </div>
                <div class="service-list-2">
                    <div class="service-list-inner-box white-content">
                        <div class="service-icon-box dark-icon">
                            <i class="fa-solid fa-id-badge"></i>
                        </div>
                        <strong>Quality & Security</strong>
                        <p>We offer tailored software solutions, automating processes, scaling products, providing
                            real-time
                            analytics, and agile innovation for your business.with simplified user experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./swipper-mob.php" ?>
    <section class="section5">
        <div class="section5-txt">
            <!-- <div class="section-5-background">
                <img src="./images/mobiledevelope.webp" width="100%" height="100%" alt="">
            </div> -->
            <h2>Mobile Apps Can<br>
                Be Game-Changing</h2>
            <div class="section-5-color-line"></div>
            <p>A website solution is highly efficient and holds a lot
                to offer to your businesses, whether you are a small
                business or a huge organization</p>
        </div>
        <div class="section5-faq">
            <div class="section5-faq-body">
                <div class="section-5-container">
                    <div class="section-5-faq-box">
                        <div class="section-5-faq-question">
                            <p>Effective Customer Connect</p>
                            <div class="icon">
                                <?= $arrow ?>
                            </div>
                        </div>
                        <div class="section-5-faq-answer" id="section-5-faq-answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident ea amet blanditiis
                                praesentium. Ipsa aut accusamus nemo consequuntur obcaecati.</p>
                        </div>
                    </div>
                    <div class="section-5-faq-box">
                        <div class="section-5-faq-question">
                            <p>Effective Customer Connect</p>
                            <div class="icon">
                                <?= $arrow ?>
                            </div>
                        </div>
                        <div class="section-5-faq-answer" id="section-5-faq-answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident ea amet blanditiis
                                praesentium. Ipsa aut accusamus nemo consequuntur obcaecati.</p>
                        </div>
                    </div>
                    <div class="section-5-faq-box">
                        <div class="section-5-faq-question">
                            <p>Effective Customer Connect</p>
                            <div class="icon">
                                <?= $arrow ?>
                            </div>
                        </div>
                        <div class="section-5-faq-answer" id="section-5-faq-answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident ea amet blanditiis
                                praesentium. Ipsa aut accusamus nemo consequuntur obcaecati.</p>
                        </div>
                    </div>
                    <div class="section-5-faq-box">
                        <div class="section-5-faq-question">
                            <p>Effective Customer Connect</p>
                            <div class="icon">
                                <?= $arrow ?>
                            </div>
                        </div>
                        <div class="section-5-faq-answer" id="section-5-faq-answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident ea amet blanditiis
                                praesentium. Ipsa aut accusamus nemo consequuntur obcaecati.</p>
                        </div>
                    </div>
                    <div class="section-5-faq-box">
                        <div class="section-5-faq-question">
                            <p>Effective Customer Connect</p>
                            <div class="icon">
                                <?= $arrow ?>
                            </div>
                        </div>
                        <div class="section-5-faq-answer" id="section-5-faq-answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident ea amet blanditiis
                                praesentium. Ipsa aut accusamus nemo consequuntur obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tools">
        <div class="container-tools ">
            <h2>Tools & Technologies We Prefer</h2>
            <div class="tools-sec">

                <div class="first-sec">
                    <div class="main-div-tool">
                        <p>Mobile</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/swift.webp">
                        <p>Swift</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/c-sharp (1).webp">
                        <p>C#</p>
                    </div>

                    <div class="tool-parts">
                        <img src="./images/logo/apple_objectivec-icon-svg.webp">
                        <p>Objective c</p>
                    </div>

                </div>
                <div class="tools-border"></div>
                <div class="first-sec">
                    <div class="main-div-tool">
                        <p>Android</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/java (1).png">
                        <p>.Net</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/java (1).png">
                        <p>Java</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/python.webp">
                        <p>Python</p>
                    </div>

                    <div class="tool-parts">
                        <img src="./images/logo/nodejs-icon-svg.webp">
                        <p>Node JS</p>
                    </div>

                </div>

                <div class="tools-border"></div>
                <div class="first-sec">
                    <div class="main-div-tool">
                        <p>Database</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/mysql.webp">
                        <p>My Sql</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/5968342.webp">
                        <p>Postgre Sql</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/oracle-svg.webp">
                        <p>Oracle</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/Apache_Feather_Logo.svg.webp">
                        <p>Apache</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/eyes.webp">
                        <p>Cassandra</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/mongodb-icon-1-svg (1).webp">
                        <p>Mongo DB</p>
                    </div>
                </div>
                <div class="tools-border"></div>
                <div class="first-sec">

                    <div class="main-div-tool" style="width: 260px;">
                        <p>Quality Assurance</p>
                    </div>


                    <div class="tool-parts">
                        <img src="./images/logo/selenium-icon-2048x1986-3fr2ikf8.webp">
                        <p>Selenium</p>
                    </div>
                    <div class="tool-parts">
                        <p>JMeter</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/HPE_LoadRunner_logo.webp">
                        <p>LoadRunner</p>
                    </div>

                </div>
                <div class="tools-border"></div>
                <div class="first-sec">
                    <div class="main-div-tool">
                        <p>Devops</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/docker.webp">
                        <p>Docker</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/kubernetes-icon.webp">
                        <p>Kubernetes </p>
                    </div>
                    <div class="tool-parts">

                        <img src="./images/logo/icon-svg.webp">
                        <p>Ansible</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/1200px-Chef_logo.svg.webp">
                        <p>Chef</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/puppet (1).webp" style="width: 50px; height: auto; margin: 0;">
                        <p>Puppet</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/png-transparent-aws-vector-brand-logos-icon (1).webp">
                        <p>AWS</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/png-transparent-aws-vector-brand-logos-icon (1).webp">
                        <p>AWS</p>
                    </div>

                </div>
                <div class="tools-border"></div>
                <div class="first-sec">
                    <div class="main-div-tool" style="width: 260px;">
                        <p>Cloud Services</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/png-transparent-aws-vector-brand-logos-icon (1).webp">
                        <p>AWS</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/azure.webp">
                        <p> Microsoft Azure</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/google-cloud-icon-2048x1646-7admxejz.webp">
                        <p>Google cloud</p>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section class="sectionN faq-2">
        <h3>Frequently Asked Questions</h3>
        <div class="row-faq">
            <div class="colm-faq">
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>
                </div>
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>
                </div>
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>
                </div>
            </div>
            <div class="colm-faq">
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>
                </div>
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>


                </div>
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>


                </div>


            </div>
        </div>
    </section>

    <?php include "./form.php"?>
    <?php include "./footer.php"?>
    <script>
        var windowWidth = window.innerWidth;
        var windowHeight = window.innerHeight;

        document.getElementById('width').innerText = windowWidth + ',' + windowHeight;

        // Output the window size



        // JavaScript code to handle the FAQ interactions
        document.addEventListener("DOMContentLoaded", function () {
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    // Close all other answers before opening the clicked one
                    faqQuestions.forEach(q => {
                        if (q !== question) {
                            q.classList.remove('opened');
                            q.nextElementSibling.style.display = 'none';
                        }
                    });

                    // Toggle the display of the clicked question's answer
                    const answer = question.nextElementSibling;
                    answer.style.display = (answer.style.display === 'none' || answer.style.display === '') ? 'block' : 'none';

                    // Toggle the opened class for arrow rotation
                    question.classList.toggle('opened');
                });
            });
        });

        a = document.querySelectorAll('#plus_')
        for (i = 0; i < a.length; i++) {
            a[i].addEventListener("click", function (e) {
                e.preventDefault();
                this.parentElement.children[0].children[0].classList.toggle('rotate_');
                this.parentElement.children[1].classList.toggle("plus_");
            })
        }

        const faq_box = document.querySelectorAll('.section-5-faq-box')
        faq_box.forEach(faq => {
            const question = faq.querySelector('.icon');
            const anwser = faq.querySelector('.section-5-faq-answer');

            faq.addEventListener('click', () => {

                faq_box.forEach(item => {
                    if (item !== faq) {
                        item.classList.remove('sec-5');
                        item.querySelector('.icon').classList.remove('rotate-icon');
                        item.querySelector('.section-5-faq-answer').style.maxHeight = null;
                    }
                });
                if (question.classList.contains('rotate-icon')) {
                    question.classList.remove('rotate-icon');
                    faq.classList.remove('sec-5');
                    anwser.style.maxHeight = null;
                } else {
                    question.classList.add('rotate-icon');
                    faq.classList.add('sec-5');
                    anwser.style.maxHeight = anwser.scrollHeight + 'px';
                }
            })

        })

    </script>
</body>

</html>