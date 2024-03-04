<style>
  /*main-form*/
.form-main-div {
    height: 100%;
    justify-content: center;
    background-color: rgb(143, 15, 15) !important;
    width: 100%;
    margin: auto;
}
.container-form{
    width:1440px;
    margin: auto;
}
.form-div {
    background-color: white;
    position: relative;
    padding-left: 5%;
    padding-right: 2%;
    margin-top: 5%;
    border-left: #e6e6e6 .5px solid !important;
    border-right: #e6e6e6.5px solid !important;
    width: 100%;
    display: flex;
    height: 100%;
}

.form-div::before {
    position: absolute;
    content: "";
    left: 0;
    height: 7px;
    width: 100%;
    background: linear-gradient(147deg, rgba(33, 208, 179, 1) 29%, rgba(30, 207, 245, 1) 73%);
}
.form-border {
    border-top: solid 5px;
    border-image: linear-gradient(to right, hsl(170, 73%, 47%), #1ecff5) 1;
    padding-bottom: 5%;
}
.content-form-div {
    width: 60%;
    padding-bottom: 100px;
    margin-top: 40px;
}
.content-form-div h2 {
    font-size:3.125rem;
    font-weight: bolder;
}
.side-image-footer {
    background: url(./images/Consulting.webp) center center no-repeat;
    width:40%;
    margin-left: 75px;
    background-size: cover;
    margin-top: 40px;
    height: auto;
}

.main-form {
    width: 100%;
    height: 100%;
    margin: 0%;
    z-index: 50;
}

.main-form img {
    height: 100%;
    width: 100%;
    margin: auto;
}

.first-input-box {
    display: flex;
    gap: 10px;
}

.side-conetent {
    margin-top: 10%;
    margin-left: 8%;

}

.side-conetent h4 {
    font-size: 35px;
    letter-spacing: 0px;
    line-height: 39px;
    color: #ffffff;
    font-weight: 700;
    font-family: "Inter";
  
}
.icone-side-content span {
    font-size: 1.375rem;
    font-weight: 500;
    color: white;
}
.icone-side-content p {
    font-size: 17px;
    color: #ffffff;
    font-weight: 100;
    font-family: "Inter";
    margin-bottom: -1px;
}
.side-conetent p{
font-size: 1.375rem;
    letter-spacing: 0px;
    line-height: 35px;
    color: #ffffff;
    font-weight: 100;
    font-family: "Inter";
}

.icon-image-div {
    display: flex;
    margin-top: 6%;
    gap: 3%;
}

.icon-image {
    background-color: #526988;
    border-radius: 50%;
    height: 70px;
    width: 70px;
    display: flex;



}

.icon-image i {
    font-size: 25px;
    color: white;
    top: 3%;
    margin: auto;
}

.second-icon-div {
    display: flex;
    gap:2%;


}

.seconde-image {
    display: flex;
    margin: auto;
    margin: auto 0;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    background-color: #526482;
}

.seconde-image i {
    color: white;

}


.form-input input {
    width: 100%;
    height: 60px;
    border: #000 0px solid;
    border-bottom: #0000002f 1.5px solid;
    padding-top: 8%;
    padding-bottom: 5%;
    outline: none;
}
.form-submit {
    background-color: #21D0B3;
    padding: .5% 5%;
    font-size: large;
    color: white;
    border: #21D0B3 1px solid;
    margin-top: 5%;
}
.form-name {
    width: 100%;
    padding-right: 10%;
}
.third-input-box .form-About {
    width: 97%
}

@media (max-width: 1540px) {
 
    .content-form-div h2{
        font-size: 2.5rem;
    }

    .container-form{
        width: 80%;
    }
    .icon-image{
        width: 65px;
        height: 65px;
    }
    
    .seconde-image {
        width: 45px;
        height: 45px;
    }
}

@media (max-width: 1440px){
    .content-form-div h2{
        font-size: 2.438rem;
    }
    .icone-side-content span {
        font-size: 1.075rem;
    }
    .side-conetent p{
        font-size: 1.075rem;
    }
    .seconde-image{
        width: 40px;
        height: 40px;
    }
}
@media (max-width: 1300px){
    .content-form-div h2{
        font-size: 2rem;
    }
    .side-conetent p{
        font-size: 1.125rem;
        line-height: 29px;
    }
    .seconde-image {
        width: 38px;
        height: 38px;
    }

    .icon-image{
        width: 50px;
        height: 50px;
    }


}
@media (max-width: 600px) {
    .form-div {
        display: inline;
    }

    .first-input-box {
        display: inline;
    }

    .form-input input {
        width: 100%;
    }

    .third-input-box .form-About {
        width: 100%;
    }

    .side-image-footer {
        width: 100%;
        height: auto;
        margin-top: 0;
        margin-left: 0;
        padding: 10% 5%;
        margin-bottom: -20px;
    }
}

</style>

<!---form-->
<section class=" pb-0" style="margin-bottom:-8.5%; background-color:white;">
        <div class="container-form">
            <div class="form-div ">
                <div class="content-form-div">
                    <h2 class="mb-3 mb-xl-4 mb-xxl-5">Do you have a project in mind ?<br>
                        Talk to the experts.</h2>
                    <form class="form-input">
                        <div class="first-input-box">
                            <input type="text" class="form-name" id="yourname" placeholder="Your Name">
                            <input type="email" class="form-Mobile" id="exampleInputEmail1" placeholder="Mobile Number">

                        </div>
                        <div class="first-input-box">
                            <input type="text" class="form-Email" id="yourname" placeholder="Email">
                            <input type="email" class="form-Budget" id="exampleInputEmail1" placeholder="Budget">

                        </div>
                        <div class="third-input-box">
                            <input type="text" class="form-About" id="yourname" placeholder="About Project">

                        </div>
                        <!-- <button class="g-recaptcha" data-sitekey="6LdnIUcpAAAAAORbE04jT3zJKlLRPbVZCq4_bJXS" data-callback='onSubmit' data-action='submit'>Submit</button> -->
                        <button type="button" class=" form-submit">Submit</button>
                    </form>

                </div>
                <div class="side-image-footer">
                    <div class="side-conetent">
                        <h4>Get in Touch</h4>
                        <p>
                            We’d love to resolve your queries with
                            personalized assistance.
                        </p>
                        <div class="icon-image-div">
                            <div class="icon-image"><i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <div class="icone-side-content">
                                    <p>Chat with us</p>
                                    <span>contact@macwiq.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-image-div">
                            <div class="icon-image"><i class="fa-regular fa-phone"></i>
                            </div>
                            <div>
                                <div class="icone-side-content">
                                    <p>Lets discuss via call</p>
                                    <span>+1-234-567-8910</span>
                                </div>

                            </div>


                        </div>
                        <div class="icon-image-div ">

                            <div class="icon-image"><i class="fa-brands fa-skype"></i>
                            </div>
                            <div>
                                <div class="icone-side-content">
                                    <p>Say Hello! on Skype</p>
                                    <span>vikassharma</span>
                                </div>

                            </div>
                        </div>
                        <div class="icon-down">
                            <div class="second-icon-div">
                                <div class="seconde-image">
                                <i class="fa-brands fa-facebook"></i>
                                </div>
                                <div class="seconde-image">
                                <i class="fa-brands fa-linkedin"></i>
                                </div>
                                <div class="seconde-image">
                                <i class="fa-brands fa-instagram"></i>
                                </div>
                                <div class="seconde-image">
                                <i class="fa-brands fa-twitter"></i>
                                </div>
                                <div class="seconde-image">
                                <i class="fa-brands fa-youtube"></i>
                                </div>
                                <div class="seconde-image">
                                <i class="fa-brands fa-telegram"></i>
                                </div>
                                <div class="seconde-image">
                                <i class="fa-brands fa-whatsapp"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="main-form">
                <img src="./images/3-2 (1).webp">
            </div>
        </div>
    </section>


    