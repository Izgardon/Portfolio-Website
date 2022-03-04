<?php



    if (isset($_POST['email'])){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $name = $_POST['name'];
            $mailFrom = $_POST['email'];
            $message = $_POST['message'];
            $subject = "Web Dev Inquiry";
            $mailTo = "wsessions@hotmail.co.uk";
            $headers = "From: ".$mailFrom;
            $txt = "You have recieved an e-mail from  ".$name.".\n\n ".$message." from ".$mailFrom;

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
                    <div class="heading-fade">
                        <div class="heading-container">
                            <div class="heading-text">
                                What can I do for
                            </div>
                            <div class="heading-list-container">
                                <ul class="heading-list">
                                    <li class="heading-list-item">you ?</li>
                                    <li class="heading-list-item">your website ?</li>
                                    <li class="heading-list-item">your business ?</li>
                                    <li class="heading-list-item">your clients ?</li>
                                </ul>
                            </div>
                        </div>
                        <div class="heading-about">My name is William Sessions and I am a Front-End Developer</div>
                    </div>
                </div>

                <section class="about" id="about">
                    <h2>About Me</h2>
                    <div class="about-container flex">
                        <div class="about-image-container"><img src="../Images/me.jpg" alt="Picture of me" class="about-image"></div>
                        <div class="about-me">I am a self-taught Web Developer with a Physics degree from Warwick University and a penchant for finding the best solution to a problem. My background had me on course to becoming a data scientist, a life of modelling functions
                            and long lines of maths. However, during my journey I discovered I greatly enjoyed the tangible nature of Front End development which utilises both my ability to solve problems and my creativity simultaneously.


                            <br><br> SCSS is my preferred preprocessor and I have a lot of experience using JavaScript although I am now in the process of learning React. I also have some knowledge of Bootstrap, PHP and Python and can pick them up quickly.
                            Additionally, I am comfortable using Git version control. All the code for my projects including this website can be found on my <a href="https://github.com/Izgardon">GitHub.</a>

                            <br><br>While not working I enjoy camping, hiking and, although I lack any innate ability, I also love to snowboard. If I'm not in proximity to a mountain, I like to play video games, D&D and padel tennis.

                            <br><br>I am now looking to use and expand my skillset in Front End frameworks in an engineer/developer role. Please see my attached <a href="William Sessions CV.pdf">CV</a> to read more.


                        </div>



                </section>
                <section class="projects " id="projects">
                    <h2>Projects</h2>
                    <div class="project-grid ">
                        <div class="grid-text ">
                            <h3 class="left ">Side-scroller Game</h3>
                            <p>My first foray into a JavaScript based project allowed me to try and create something that I conjured up as a kid. <br><br>It's a simple side-scroller game created entirely from scratch, but it taught me a lot about de-bugging
                                and creating novel solutions. It also allowed me to have some fun with SCSS. You can click on this <a href="./Projects/Game/index.html">link</a> to try it yourself. Code can be found on my GitHub</p>
                        </div>
                        <div>
                            <a href="./Projects/Game/index.html">
                                <img src="../Images/project1.png " class="grid-image "></a>
                        </div>


                        <div>
                            <a href="./Projects/Recipe Website/index.html"><img src="../Images/forkify.jpg " class="grid-image "></a>
                        </div>
                        <div class="grid-text ">
                            <h3 class="right ">Recipe Finder Website</h3>
                            <p>This project was created through a course I undertook and taught me an incredible amount.<br> I used an MVC design pattern for the architecture which showed me a very concise method of controlling data flow and user interaction.
                                I learned how to implement APIs, then parse and then display data from them. I also used local storage to save bookmarks. Click this <a href="./Projects/Recipe Website/index.html">link </a>here to try it out!
                                <p>
                        </div>
                    </div>


                </section>
                <section class="websites " id="websites">
                    <h2>Websites</h2>
                    <div class="website-container flex ">
                        <article class="website-item"><img src="../Images/website1.png" onclick="location.href='./Websites/Netflix First Page/index.html'">
                            <div class="website-content ">
                                <h3>Netflix Account Select Clone
                                </h3>
                                <p class="website-paragraph ">This was my first project and I decided to create something simple while focusing on making it mobile friendly as well.</p>
                            </div>
                        </article>
                        <article class="website-item"><img src="../Images/website2.png" onclick="location.href='./Websites/Nicola/index.html'">
                            <div class="website-content ">
                                <h3>TTT Copywriting
                                </h3>
                                <p class="website-paragraph">This project was for a client who needed a website shell made. I designed and created it using HTML, SCSS and some JavaScritpt. It has 4 pages which taught me a lot about using helper classes and designs that are used throughout
                                    the site.</p>
                            </div>
                        </article>
                        <!-- <article class="website-item ">
                            <div class="website-content ">
                                <h3>Website 3
                                </h3>
                                <p class="website-paragraph "></p>
                            </div>
                        </article> -->
                    </div>

                </section>
                <section class="contact-me " id="contact-me">
                    <h2>Contact me</h2>
                    <div class="contact-container ">
                        <h3>Get in Touch</h3>
                        <form class="contact-form " method="post ">
                            <input type="text " name="name " placeholder="Your Name " required>
                            <input type="email " name="email " placeholder="Your Email " required>
                            <textarea name="message " rows="4 " placeholder="How can I help you? " style="resize: none; "></textarea>
                            <button type="submit " name="submit ">Send</button>

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