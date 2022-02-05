<?php



    if (isset($_POST['email'])){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $name = $_POST['name'];
            $mailFrom = $_POST['email'];
            $message = $_POST['message'];
            $subject = "Web Dev Inquiry";
            $mailTo = "wsessions@hotmail.co.uk";
            $headers = "From: ".$mailFrom;
            $txt = "You have recieved an e-mail from ".$name.".\n\n".$message."from".$mailFrom;

            mail($mailTo, $subject, $txt); 
            header('location: index.php');
            

            
        } 
    }

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon shortcut" href="../icon.ico" type="icon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
        <script src="./JS/script.js" defer></script>
        <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
        <title>William Sessions</title>
    </head>

    <body>

        <header>
            <div class="nav-bar  flex">
                <div class="nav-background"></div>
                <div class="logo">WS

                </div>
                <button class="mobile-nav-button" aria-controls="nav-items" aria-expanded="false" data-open="false">
                <span class="sr-only">Menu</span>
            </button>
                <nav>
                    <ul id="nav-items" class="nav-items" data-visible="false">
                        <li>
                            <a id="home" href="#" class="nav-item">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="nav-item">About</a>
                        </li>
                        <li>
                            <a href="#projects" class="nav-item">Projects</a>
                        </li>
                        <li>
                            <a href="#websites" class="nav-item">Websites</a>
                        </li>
                        <li>
                            <a href="#contact-me" class="nav-item">Contact</a>
                        </li>

                    </ul>
                </nav>
            </div>

        </header>
        <main>
            <div class="wrapper">
                <div class="header-images">
                    <img src="../Images/mountain.jpg" class="background" alt="Picture of river and mountains">
                    <!-- <img src="../Images/trees.png" class="foreground" alt="Picture of trees"  -->
                    <div class="heading-container">
                        <div class="heading-text">
                            What can I do for
                        </div>
                        <div class="heading-list-container">
                            <ul class="heading-list">
                                <li class="heading-list-item">you ?</li>
                                <li class="heading-list-item">your website ?</li>
                                <li class="heading-list-item">your business ?</li>
                                <li class="heading-list-item">everybody !</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <section class="about" id="about">
                    <h2>About Me</h2>
                    <div class="about-container flex">
                        <div class="about-image-container"><img src="../Images/me.jpg" alt="Picture of me" class="about-image"></div>
                        <div class="about-me">This is where I write about myself hello gelloh helloo heajskdhasuidjkasnd jans fjkafn q f</div>
                    </div>


                    <div id="projects"></div>
                </section>
                <section class="projects" id="projects">
                    <h2>Projects</h2>
                    <div class="project-grid">
                        <div class="grid-text ">
                            <h3 class="left">Side-scroller Game</h3>
                            <p>My first foray into a JavaScript lead project allowed me to try and create something that I conjured up as a boy.</p>
                        </div>
                        <div>
                            <img src="../Images/project1.png" class="grid-image "></div>


                        <div><img src="../Images/mountain.png" class="grid-image ">
                        </div>
                        <div class="grid-text">
                            <h3 class="right">Javascript Project 2</h3>
                            <p>My Second project
                                <p>
                        </div>
                    </div>


                </section>
                <section class="websites " id="websites">
                    <h2>Websites</h2>
                    <div class="website-container flex">
                        <article class="website-item"><img src="../Images/website1.png">
                            <div class="website-content">
                                <h3>Netflix Account Select Clone
                                </h3>
                                <p class="website-paragraph"></p>
                            </div>
                        </article>
                        <article class="website-item">
                            <div class="website-content">
                                <h3>Website 2
                                </h3>
                                <p class="website-paragraph"></p>
                            </div>
                        </article>
                        <article class="website-item">
                            <div class="website-content">
                                <h3>Website 3
                                </h3>
                                <p class="website-paragraph"></p>
                            </div>
                        </article>
                    </div>

                </section>
                <section class="contact-me" id="contact-me">
                    <h2>Contact me</h2>
                    <div class="contact-container">
                        <h3>Get in Touch</h3>
                        <form class="contact-form" method="post">
                            <input type="text" name="name" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Your Email " required>
                            <textarea name="message" rows="4 " placeholder="How can I help you? " style="resize: none; "></textarea>
                            <button type="submit" name="submit">Send</button>

                        </form>
                    </div>

                </section>
                <div class="footer-spacing "></div>
            </div>
        </main>
        <footer>
        </footer>

    </body>

    </html>