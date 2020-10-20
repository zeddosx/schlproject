<?php 
if ( isset( $_POST[ 'submit' ] ) ){
$email = $_POST[ 'ml' ];
$fname = $_POST[ 'fn' ];
$lname = $_POST[ 'ln' ];
$name = $fname.' '.$lname;
include 'mailer.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Invest your money now with Finance OSP. Use code xmas to get 2 stocks for free.">
    <meta name="author" content="Marek Langer">
    <link rel="icon" href="resources/img/favicon.ico">
    <title>Finance OSP | Invest now!</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="resources/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header id="home">
        <button class="ham"></button>
        <nav class="navbar">
            <ul>
                <li><a class="menuLink" href="#home">Home</a></li>
                <li><a class="menuLink" href="#about">About</a></li>
                <li><a class="menuLink" href="#invest">Investing</a></li>
                <li><a class="menuLink" href="#customers">Customers</a></li>
                <li><a class="menuLink" href="#cont">Contacts</a></li>
            </ul>
        </nav>

        <div class="hero-text-box">
            <h1>Investing should be more like watching paint dry or watching grass grow.<br>If you want excitement, take $800 and go to Las Vegas.</h1>
            <a class="btn btn-full" href="#invest">Investment options</a>
            <a class="btn btn-ghost" href="#cont">Contact me</a>
        </div>
    </header>

    <section id="about">
        <h2>About</h2>
        <div class="row">
            <div class="col col-2 text-center mt-2">
                <h4>You can be young without money, but you can’t be old without it.</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam id dolor. Fusce aliquam vestibulum ipsum. Suspendisse sagittis ultrices augue. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                </p>
            </div>
            <div class="col col-2 mt-2">
                <img src="resources/img/about.jpg" class="about-img" alt="about us">
            </div>
        </div>
    </section>

    <section class="s2" id="invest">
        <h2>Investing</h2>
        <div class="row">
            <div class="col col-3 specialc text-center">
                <div class="row">
                    <ion-icon class="icon-big" name="analytics-outline"></ion-icon>
                </div>
                <h3>Stock</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam id dolor. Fusce aliquam vestibulum ipsum. Suspendisse sagittis ultrices augue. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.

                </p>
            </div>
            <div class="col col-3 specialc text-center">
                <div class="row">
                    <ion-icon class="icon-big" name="home-outline"></ion-icon>
                </div>
                <h3>Real estate</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam bibendum elit eget erat. Vestibulum fermentum tortor id mi. Phasellus et lorem id felis nonummy placerat. Quisque tincidunt scelerisque libero. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
            <div class="col col-3 specialc text-center">
                <div class="row">
                    <ion-icon class="icon-big" name="people-outline"></ion-icon>
                </div>
                <h3>Investment fund</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce suscipit libero eget elit. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Aliquam erat volutpat. Vivamus luctus egestas leo. Aenean vel massa quis mauris vehicula lacinia. Integer in sapien. Nullam sit amet magna in magna gravida vehicula. Maecenas sollicitudin.</p>
            </div>

        </div>
    </section>

    <section id="customers">
        <h2>Customers</h2>
        <h4 class="text-center">Some of our customers</h4>
        <div class="row">
            <div class="col col-4 text-center">
                <div class="row">
                    <img src="resources/img/eugene.jpg" class="people" alt="">
                </div>
                <h3>Eugene Rose</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam id dolor.

                </p>
            </div>
            <div class="col col-4 text-center">
                <div class="row">
                    <img src="resources/img/mitchell.png" class="people" alt="">
                </div>
                <h3>Mitchell Manley</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam bibendum elit eget erat. Vestibulum fermentum tortor id mi.</p>
            </div>
            <div class="col col-4 text-center">
                <div class="row">
                    <img src="resources/img/ruby.jpg" class="people" alt="">
                </div>
                <h3>Ruby Adams</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
            </div>
            <div class="col col-4 text-center">
                <div class="row">
                    <img src="resources/img/eliza.jpg" class="people" alt="">
                </div>
                <h3>Eliza Kelly</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce suscipit libero eget elit. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis.</p>
            </div>

        </div>
    </section>

    <section class="banner">
        <div class="row mb-25">
            <div class="col col-ban text-right">
                <h5>Join us NOW for FREE.</h5>
            </div>
            <div class="col col-ban text-left banner">
                <a class="btn_b btn-banner" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">JOIN NOW!</a>
            </div>
        </div>
    </section>

    <section class="s2 text-center cont" id="cont">
        <h2>Contacts</h2>
        <div class="row">
            <div class="col col-con text-center mt-2">
                <h3 style="font-size: 150%;">COME <span style="color: #F77F00; ">TALK.</span></h3>
                <div class="under"></div>
                <div class="col col-3 text-center">
                    <h3>Address</h3>
                    <p>Na ujezde 5 Prague 5 <br>CR 14300</p>
                </div>
                <div class="col col-3 text-center">
                    <h3>Phone</h3>
                    <p>Tel: 777 970 154</p>
                    <p>Fax: 454-7541-12</p>
                </div>
                <div class="col col-3 text-center">
                    <h3>E-mail</h3>
                    <a rel="nofollow" class="mail" href="malito:info@financeosp.com">info@financeosp.com</a>
                </div>
                <div class="col col-3 text-center">
                    <h3>Social Media</h3>
                    <a href="#" class="soc">
                        <ion-icon class="ion-social-facebook" name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#" class="soc">
                        <ion-icon class="ion-social-twitter" name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#" class="soc">
                        <ion-icon class="ion-social-instagram" name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#" class="soc">
                        <ion-icon class="ion-social-linkedin" name="logo-linkedin"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="col col-con text-center mt-2">
                <h3 style="font-size: 150%;">LEAVE YOUR <span style="color: #F77F00; ">INFO.</span></h3>
                <form method="post" class="mt-3">
                    <input type="text" name="ml" placeholder="Email" autocomplete="ml" required> <br>
                    <input type="text" name="fn" placeholder="First name" autocomplete="fn" required> <br>
                    <input type="text" name="ln" placeholder="Last name" autocomplete="ln" required> <br>
                    <button name="submit" class="btn-form mt-2">Send!</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="row text-center">
            <p>&copy; 2020 by Finance OSP</p>
        </div>
    </footer>

    <script src="resources/js/scripts.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>


</body>

</html>
