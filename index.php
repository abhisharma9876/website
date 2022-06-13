<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dyamics website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="main">
     
    <nav>
        <a href="#" class="logo">
            <img src="image/logo1.png" alt="">
        </a>
        
    <ul class="menu">
    <li><a href="#" class="active">Home</a></li>
    <li><a href="#">Feature</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>

    </ul>
    </nav>
<div class="main-heading">
    <h1>Create Prespective With Virtual Reality</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur sequi quidem! Provident, similique!</p>
    <a href="#" class="main-btn">Contact</a>
</div>


    </section>

<section class="features"> 
    <div class="feature-container">
        <div class="feature-box">
            <div class="f-img">
                <img src="image/info-icon1.png" >
            </div>
            <div class="f-text">
                <h4>Web Development</h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="main-btn">Check</a>
            </div>
        </div>

        <div class="feature-box">
            <div class="f-img">
                <img src="image/info-icon2.png" >
            </div>
            <div class="f-text">
                <h4>Software Development</h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="main-btn">Check</a>
            </div>
        </div>

        <div class="feature-box">
            <div class="f-img">
                <img src="image/info-icon3.png" >
            </div>
            <div class="f-text">
                <h4>App Development</h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="main-btn">Check</a>
            </div>
        </div>

    </div>
</section>

<section class="about">
    <div class="about-img">
        <img src="image/about.png" >

    </div>
    <div class="about-text">
        <h2>Start Tracking Your Statistics </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio maxime voluptate perspiciatis assumenda mollitia</p>
        <button class="main-btn">Read More</button>

    </div>
</section>

<footer class="contact">

<div class="contact-heading">
    <h1>Contact Us</h1>
    <p>lorem ipsum dollor sit amit consectetur adipiscing elit</p>

</div>
<form action="userinformation.php" method="post">
    <input type="text" name="user" placeholder="Your Full Name">
    <input type="email" name="email" placeholder="Your E-Mail">
    <input type="text" name="user" placeholder=" Type Your Message Here....">
    <button class="main-btn contact-btn" type="submit">Continue</button>
</form>

</footer>

</body>
</html>