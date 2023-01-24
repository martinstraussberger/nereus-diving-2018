<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Nereus Font -->
    <link rel="stylesheet" href="https://use.typekit.net/qqk2iur.css">
    <!-- CSS import -->
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="./public/css/contactform.css">
    <link rel="stylesheet" href="public/css/theme.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/modal.css">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Dependencies -->
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Nereus Diving - About Site</title>
</head>

<body>

    <nav>
        <div class="navbar">
            <a href="/index.html" class="logo" class="active"><img src="public/images/logo/LogoBlauNoSubline.svg" alt=""></a>
            <ul class="nav">
                <li id="nav-links"><a href="criteria.php">Partner</a></li>
            </ul>
            <div class="book-btn">
                <a href=""><button class="nav-btn" type="button" name="button">Book</button></a>
            </div>
        </div>
    </nav>

    <section class="top_about">
        <div class="col_2">
            <h1>About us.</h1>
            <h3>"We empower unique diving experiences around the world."</h3>
        </div>
        </div>
    </section>
    <!-- header team -->
    <div class="team_header" style="text-align: center;">
        <h1>Get to know the Team.</h1>
    </div>
    <!-- middle - team -->
    <section class="team">
        <div class="team_cards">
            <div class="_card">
                <img id="__profileImg" src="public/images/team/martin.png" alt="">
                <div>
                    <div class="margin-title">
                        <h3>Martin S.</h3>
                        <p>Tech Lead</p>
                    </div>
                </div>
            </div>
            <div class="_card">
                <img id="__profileImg" src="public/images/team/dennis.png" alt="">
                <div class="margin-title">
                    <h3>Dennis S.</h3>
                    <p>Product Lead</p>
                </div>
            </div>

            <div class="_card">
                <img id="__profileImg" src="public/images/team/felix.png" alt="">
                <div class="margin-title">
                    <h3>Felix D.</h3>
                    <p>BD Lead</p>
                </div>
            </div>
        </div>  
    </section>

        <form action="contactabout.php" method="post">
         <div class="item-1">
            <input type="text" name="name" id="name" placeholder="Name" required>
        </div>
           <div class="item-1">
            <input type="text" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="item-1">
            <input type="text" name="mail" id="mail" placeholder="Email" required>
        </div>
        <div class="item-2">
                <textarea name="message" placeholder="Anything to add?" maxlength="500"></textarea>
        </div>
        <div class="_contact-btn">
            <button class="contact-btn" type="submit" name="submit" <?php echo $result; ?>>Send Message</button>
        </div>
        </form>

    <footer class="foo-container">
        <div class="foo-item-1">
            <h2>Services</h2>
            <ul class="ul-footer">
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="foo-item-2">
            <h2>About</h2>
            <ul class="ul-footer">
                <li><a href="/index.html">Nereus Diving</a></li>
            </ul>
        </div>
        <div class="foo-item-3">
            <h2>Nereus Diving UG</h2>
            <p>Factory Berlin<br />Lohmühlenstraße 65<br />12435 Berlin</p>
        </div>
        <div class="foo-item-4">
            <p id="copyright-desktop" class="copyright">Nereus Diving © 2020</p>
        </div>
    </footer>


</body>

</html>