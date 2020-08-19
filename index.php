<?php
    $inputFillValue;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeCreate</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/main.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@900&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="logo" href="http://codecreate.tech/">CodeCreate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav" id='navListContainer'>
                <a href="#logo"><li>Home</li></a>
                <a href="#aboutSection"><li>About</li></a>
                <a href="#pricingSection"><li>Pricing</li></a>
                <a href="contact/index.php"><li>Contact Me</li></a>
                <a href="#myworkSection"><li>My Work</li></a>
            </ul>
        </div>
    </nav>

    <header>
        <div id="header_section1" data-aos="fade-right" style='top: 25%;'>
            <p style="font-family: 'Overpass', sans-serif; color: white; font-size: 60px;">Web<br>Developer</p>
            <span id="headerTxt">Hi 👋 I'm Matt, a full-stack developer that aims to inspire people to create! Changing the world with technology, together we <span style="color:#f58066;">Build</span>, <span style="color:#f58066;">Break</span>, and <span style="color:#f58066;">Create</span>. <br>
                <span style='margin-top: 30px; display: block;'>
                    <ul style="padding: 0px;">
                        <a target="_blank" href="https://www.instagram.com/m.jo33/"><li style="margin-left: 0px !important;" id='cust6'><img id='icons' src='images/instagram.png'/></li></a>
                        <a target="_blank" href="https://www.linkedin.com/in/matthew-joseph-1456a21a7/"><li id='cust6'><img id='icons' src='images/linkedin.png'/></li></a>
                        <a target="_blank" href="https://github.com/ikonCoder/"><li id='cust6'><img id='icons' src='images/github.png'/></li></a>
                    </ul>
                </span>
            </span>
        </div>

        <div data-aos="fade-left" id="header_imgSection" style='top: 25%'><img id='headerImg' src="./images/testHeader.svg"/></div>
    </header>

    <div id="aboutSection">
        <div id='aboutMeTxtContainer'>
            <p class="bold">A LITTLE ABOUT ME</p>
            <p class="aboutTxt">Hello 👋, I’m Matt! Whether this is your first visit, or your tenth, welcome! I specialize in creating beautiful experiences utilizing websites and progressive applications. If you are looking for some of my technical skills, <a href="ResumeV1.docx" download style='color: #403e3e; text-decoration: underline;'>heres my resume</a>. Although I work as a freelance developer, I currently maintain a career in Software as a Full-Stack Developer as well! Aside from code, I love spending time with my family, playing basketball, and reading books. Even if you're not sure you're ready for a website yet, feel free to connect with me!</p>
        </div>
        <div id="profileImgContainer"> <img id='profilePic' data-aos="fade-right" src="./images/op2.jpg" /> </div>
    </div>

    <div id='myworkSection'>
        <h1 id='projectsTitle'>PROJECTS</h1>
        <div class='container'>
            <div class='row' id='row'>
                <div id='cardsContainer' class="col-sm col-md " data-aos="fade-left"> 
                    <div class="card">
                        <img src="./images/projImg2.jpg" class="card-img-top projImgs">
                        <div class="card-body">
                            <h5 class="card-title">Black Lives Matter</h5>
                            <p class="card-text">I created this site to show support to the families of those killed by police brutality. #BLM</p>
                            <a target="_blank" href="http://recordtherevolution.com/" class="btn oragBtn">Take me here!</a>
                            <a target="_blank" href="https://github.com/ikonCoder/BlackLivesMatter"><button type="button" class="btn btn-dark">GitHub</button></a>
                        </div>
                    </div>
                </div>
                <div id='cardsContainer' class="col-sm  col-md" data-aos="fade-left"> 
                    <div class="card">
                        <img src="./images/projImg1.jpeg" class="card-img-top projImgs" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CodeCreate</h5>
                            <p class="card-text">This is the site I built to showcase my work and give clients a way to learn a bit about what I do!</p>
                            <a href="#" class="btn oragBtn">Take me here!</a>
                            <a target="_blank" href="https://github.com/ikonCoder/CodeCreate.tech"><button type="button" class="btn btn-dark">GitHub</button></a>
                        </div>
                    </div>
                </div> 
                <div id='cardsContainer' class="col-sm" data-aos="fade-left"> 
                    <div class="card">
                        <img src="./images/projImg3.jpg" class="card-img-top projImgs" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Flavor Castle</h5>
                            <p class="card-text">Flavor Castles purpose is to offer a minimal approach to design while still giving the user a range of functionality.</p>
                            <a target="_blank" href="https://ikoncoder.github.io/Flavor-Castle/index.html" class="btn oragBtn">Take me here!</a>
                            <a target="_blank" href="https://github.com/ikonCoder/Flavor-Castle"><button type="button" class="btn btn-dark">GitHub</button></a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div id='pricingSection' >
        <h1 id='pricingTitle'>PRICING</h1>
        <p id='pricingTxt'>I offer packages for both personal and business projects! <br> Feel free to <a href='contact/index.php' style='color: #47525E; text-decoration: underline;'>contact me</a> for more details on either.</p>
        <div class="container-sm" data-aos="fade-bottom">
            <div class="row">
                <div id='personalPriceContainer' class="col">
                    <h2 style='margin-top: 20px; color:#47525E;'>Personal</h2>
                    <p style='color:#47525E; margin-bottom: 0px; margin-top: 20px;'>Starting at</p>
                        <div>
                            <span id='cust1'>$</span>
                            <span id='cust2'>900</span>
                            <span id='cust3'>.00</span>
                        </div>
                    <div>
                        <ul id='includedContainer'>
                            <li>Custom and Modern Design</li>
                            <li>(limited) maintance after completion*</li>
                            <li>Domain included</li>
                            <li>Blogs, Weddings, Landing Pages, etc.</li>
                        </ul>
                        <a  href= "/contact/index.php?inputFillValue=Personal"> <div class="oragBtn startBtn" id="personalStartBtn">Let's get started!</div> </a>
                    </div>
                </div>

                <div id='personalPriceContainer' class="col">
                    <h2 style='margin-top: 20px; color:#47525E;'>Business</h2>
                    <p style='color:#47525E; margin-bottom: 0px; margin-top: 20px;'>Starting at</p>
                        <div>
                            <span id='cust1'>$</span>
                            <span id='cust2'>2500</span>
                            <span id='cust3'>.00</span>
                        </div>
                    <div>
                        <ul id='includedContainer'>
                            <li>Custom and Modern Design</li>
                            <li>Maintaince Package Available</li>
                            <li>Payment services</li>
                            <li>And Much More!</li>
                        </ul>
                        <a  href= "/contact/index.php?inputFillValue=Business"><div class="oragBtn startBtn" id="personalStartBtn">Let's get started!</div> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div id='footerSec2'>
            <div id='footerSec2Contents'> 
            <form action="https://formspree.io/codecreatetech@gmail.com" method="POST">
                <p id='cust4'>Sign-up for my newsletter</p>
                <input class='emailBtn'  name="name" placeholder="Enter your email">
                <input class='subBtn' type="submit" value="Subscribe">
            </form>
            </div>

            <span style='margin-top: 30px; display: block;'>
                <ul style="padding: 0px;">
                    <a target="_blank" href="https://www.instagram.com/m.jo33/"><li style="margin-left: 0px !important;" id='cust6'><img id='icons' src='images/instagram.png'/></li></a>
                    <a target="_blank" href="https://www.linkedin.com/in/matthew-joseph-1456a21a7/"><li id='cust6'><img id='icons' src='images/linkedin.png'/></li></a>
                    <a target="_blank" href="https://github.com/ikonCoder/"><li id='cust6'><img id='icons' src='images/github.png'/></li></a>
                </ul>
            </span>
        </div>
    </footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
  duration: 1200,
})

const scroll = new SmoothScroll('.navbarr a[href*="#"]', {
	speed: 500
});
</script>
</body>
</html> 