<?php
    $inputFillValue = $_GET['inputFillValue'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comtact Me</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/aos.css" />

    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/contact.css" />

</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="logo" href="http://codecreate.tech/">CodeCreate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav" id='navListContainer'>
                <a href="http://codecreate.tech/"><li>Home</li></a>
                <a href="../#aboutSection"><li>About</li></a>
                <a href="../#pricingSection"><li>Pricing</li></a>
                <a href="#"><li>Contact Me</li></a>
                <a href="../#myworkSection"><li>My Work</li></a>
            </ul>
        </div>
    </nav>

    <div id='mainContainer'>
        <div id='left'>
            <p id='chat'>Don't be a stranger <br> <span style='color:#f58066'>just say <span id='hello'>hello</span>.</span></p>
            <p id='connectTxt'>Feel free to to get in touch with me. I am always open to discussing new projects, creative ideas or oppoutinties to be apart of your vision!</p>

            <span style='margin-top: 80px; display: block;'>
                <p style='color: lightgray; margin: 0px; font-size: 12px;'>Need help?</p>
                <p style='color:white;'>codecreatetech@gmail.com</p>
            </span>

            <span style='margin-top: 30px; display: block;'>
                <ul style='padding: 0px;'>
                    <a target="_blank" href="https://www.instagram.com/m.jo33/"><li style="margin-left: 0px !important;" id='cust6'><img src='../images/instagram.png'/></li></a>
                    <a target="_blank" href="https://www.linkedin.com/in/matthew-joseph-1456a21a7/"><li id='cust6'><img src='../images/linkedin.png'/></li></a>
                    <a target="_blank" href="https://github.com/ikonCoder/"><li id='cust6'><img src='../images/github.png'/></li></a>
                </ul>
            </span>
        </div>

        <div id='right' data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1000">
            <form action="https://formspree.io/codecreatetech@gmail.com" method="POST" id="form">
                <input class="name" type="text" name="name" placeholder="Name"><br>
                <br>
        
                <input class="email" type="text" name="email" placeholder="Email"><br>
                <br>
        
                <input class="subject" id="subjectInput" type="text" name="subject" placeholder="Subject"></input><br>
                <br>
        
                <textarea class="message" type="text" name="message" placeholder="Message" ></textarea><br>
                <br>
                <div class="status"></div>
                <button type="submit" id='submit' class="button submit btn">Submit</button> 
            </form>
        </div>
        
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>

AOS.init()

var inputFillValue = "<?php echo $inputFillValue ?>";

if(inputFillValue == "Personal" || inputFillValue == "Business"){
    document.getElementById("subjectInput").value = inputFillValue;
}

</script>
</body>
</html>