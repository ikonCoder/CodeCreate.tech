<?php 
    // require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/test.css" type="text/css"/>

    <title>CodeCreate</title>

</head>
    <body>
        <div id="section1">
            
            <div id="menuToggle">
                <input type="checkbox" />
                
                <span></span>
                <span></span>
                <span></span>
                
                <ul id="menu">
                <a href="#section2"><li>about me</li></a>
                <a href="#section3"><li>my work</li></a>
                <a href="#section4"><li>contact me</li></a>
                </ul>
            </div>

            <div id="section1Info">
                <p class="name">MATTHEW <br> JOSEPH</p>
                <p class="job">Software Developer</p>
                    <button class="enterBtn">Scroll to see more..</button>
            </div>

            <div id="section1ImgContainer">
                <span id="section1Img"></span>
            </div>

            

            <div id="socialContainer">
                <a target="_blank" href="https://www.instagram.com/m.jo33/"><span class="instaIcon"></span></a>
                <a href="https://twitter.com/theurbandev" target="_blank"><span class="twitterIcon"></span></a>
                <a href="https://github.com/ikonCoder" target="_blank"><span class="gitIcon"></span></a>
            </div>

        </div>

        <span id="greySep"></span>

        <div id="section2">
            <div id="section2ImgContainer">
                <span id="section2Img"></span>
            </div>

            <div>
                <p id="aboutMeTitle">ABOUT ME</p>
            </div>

            <div id="aboutMeContainer">
                <div class="aboutMeContent">Hello, I’m Matt! I am a software developer that loves to use my skills to build, and create. I believe that apps, websites, etc, need to connect with the user while also providing as much functionality as possible. I have always had a passion for the web and using different technologies to create beautiful web experiences. My drive for excellence allows me to use my skills to build modern and mobile ready projects! Providing value is the most important thing for me!
                <span class="sig">MJ</span>
                </div>
            </div>

        </div>

        <span id="greySep"></span>

        <div id="section3">
            <div id="section3ImgContainer">
                <span id="section3Img"></span>
            </div>

            <div>
                <p id="portfolioTitle"></p>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item"><a target="_blank" href="https://ikoncoder.github.io/Flavor-Castle/index.html"><img id="carImg" src="imgs/projImg1.svg"></img></a> <p id="websiteName">flavorcastle</p> </div>
                <div class="item"><a target="_blank" href="building.html"><img id="carImg" src="imgs/projImg2.svg"></img></a> <p id="websiteName">dott</p> </div>
                <div class="item"><a target="_blank" href="building.html"><img id="carImg" src="imgs/projImg3.svg"></img></a> <p id="websiteName">crate coffee</p> </div>
                <div class="item"><a target="_blank" href="building.html"><img id="carImg" style="object-fit: contain;" src="imgs/projImg4.png"></img></a> <p id="websiteName">BlackLivesMatter</p> </div>
            </div>

        </div>

        <span id="greySep"></span>

        <div id="section4">

            <div>
                <p id="contactTitle">CONTACT ME</p>
            </div>

            <div id="socialContainer" class="sec4SocialContainer">
                <a target="_blank" href="https://www.instagram.com/m.jo33/"><span class="instaIcon"></span></a>
                <a href="https://twitter.com/theurbandev" target="_blank"><span class="twitterIcon"></span></a>
                <a href="https://github.com/ikonCoder" target="_blank"><span class="gitIcon"></span></a>
            </div>

            <form action="" onSubmit="return false;" id="form">
                
                <img src='imgs/contactMan.svg'/>
                <div style="margin:0 auto;padding-right:5%;" id="disp_err_container">
                    <span style="font-size: 12px; font-weight:bold; color:#ff0000;" id="disp_err">&nbsp;</span>
                </div>
                
                <input id="name" class="nameInput" type="text" name="name" placeholder="Name">
                <br>
        
                <input id="emailAdd" class="email" type="text" name="email" placeholder="Email">
                <br>
        
                <input id="subject" class="subject"  type="text" name="subject" placeholder="Subject"></input>
                <br>
        
                <textarea id="msg" class="message" type="text" name="message" placeholder="Message" ></textarea>
                <br>
                <div class="status"></div>
                <button type="submit" class="button submit btn btn-success" onclick="validateForm()">SUBMIT</button> 
            </form>
        </div>
    </body>
    <script src="js/jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/main.js"></script>
   
    <script>
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })
    </script>
</html>






