<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

   <!-- Customized Bootstrap Stylesheet -->
   <link href="./css/bootstrap.min.css" rel="stylesheet">
   <!-- Template Stylesheet -->
   <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="./css/a.css">

        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>Contact us</title>
    <style>

    .form-container {
    background:linear-gradient(0deg, rgba(0, 0, 0, 0.664), rgba(0, 0, 0, 0.486)),url(./img/timg.jpg) center center no-repeat ;
    background-size: cover;
    padding: 20px 40px;


    max-width: 100%;
    width: 100%;
}

form h2 {
    color: #FF3E41;
    margin-bottom: 30px;
    text-align: center;
    font-weight: 600;
    font-size: 50px;
}

form label {
    display: block;
    margin-bottom: 5px;
    color: #333;
    font-size: 20px;
    font-weight: 600;
}

form input, form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

form input:focus, form textarea:focus {
    border-color: #FF3E41;
    outline: none;
}
form button {
    background-color: #FF3E41;
    color: #fff;
    padding: 12px 45px;
    border: none;
    border-radius: 5px;
    font-size: 20px;
    cursor: pointer;
    display: flex;
    margin: auto;
    align-items: center;
    justify-content: center;
    
    
}

form button:hover {
    background-color: #e6393a;
}

.labels{
    display: flex;
gap: 2%;
margin-bottom: 2%;
}
input {
    background-color: rgba(243, 241, 241, 0.925);
    height: 9vh;

}
::placeholder {
  color: black;
  font-weight: 600;
}
#message{
    
    background-color: rgba(243, 241, 241, 0.925);
}
.number-black{
    width: 100%;
    height: 23vh;
    background-color: black;
    padding-top: 2%;
    padding-bottom: 2%;

}
.number-black h2 {
    color: white;
    display:flex;
    justify-content: center;
    align-items: center;
}
.number-black h3 {
    color: white;
    display:flex;
    justify-content: center;
    align-items: center;
}
.blogs{
    width: 100%;
    height: 100%;
    display: flex;
    padding: 10% 0;
    justify-content: center;
    align-items: center;
    margin: auto;
    gap: 7%;

}
.innerblogs{
    max-width: 500px;
    height: 110vh;
    border: #e6393a 2px solid;
}
.img{
    width: 100%;
    height: 45%!important;
}
.img img{
    width: 100%;
    height: 100%;
}
.details{
    width: 100%;
    margin: auto;
    text-align: center;
    padding: 5%;
}
.details h5{
    font-size:34px;
    font-weight: 600;
}
.details p{
    font-size:20px;
    font-weight: 500;
}
.innerblogs button {
    background-color: #e6393a;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
    border: #ccc;
    font-size: larger;
    padding: 2% 4%;
    color: white;

}




    </style>
</head>


<body>
<?php include "./include/header-navbar.php" ?>
   
<?php include "./include/navbar.php" ?>

<div class="fluid-container">
<div class="form-container">
        <form class="main-form">
            <h2>Contact Us</h2>
            <div class="labels">
          
            <input type="text" id="name" name="name" required placeholder="First Name"> 
    
            <input type="text" id="name" name="name" required placeholder="Last Name"> 
            </div>

            <div class="labels">
          
                <input type="text" id="name" name="name" required placeholder="Phone"> 
        
                <input type="text" id="name" name="name" required placeholder="Email"> 
                </div>
   
            <textarea id="message" name="message" rows="4" placeholder="Message:" required></textarea>

            <button type="submit" class="submit">Submit</button>
        </form>
    </div>
</div>

<div class="number-black">
    <h2>Questions? give us a call!</h2>
    <h3>(833) 233-4447</h3>
</div>


<div class="blogs container">
    <div class="innerblogs">
        <div class="img"><img src="./img/about.jpg"></div>
        <div class="details"><h5>Heavy Haulers In Action</h5>
            <P>Heavy Haulers offer trustworthy and reliable transportation services for all varieties of freight including shipments of individual, commercial, and heavy machinery.</P>
        </div>
        <button>Click To All Our Videos </button>
    </div>
    <div class="innerblogs">
        <div class="img"><img src="./img/about.jpg"></div>
        <div class="details"><h5>Heavy Haulers In Action</h5>
            <P>Heavy Haulers offer trustworthy and reliable transportation services for all varieties of freight including shipments of individual, commercial, and heavy machinery.</P>
        </div>
        <button>Click To All Our Photos </button>
    </div>

</div>




<?php include "./include/footer.php" ?>



</body>
</html>