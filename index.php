<?php
require 'php/config/init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="logo">
                    <h1>My portfolio</h1>
                </div>

                <div class="header-menu">
                    <nav>
                        <ul>
                            <li><a href="#skills">Skills</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li>
                                <a href="#projects">Projects</a>

                                <ul>
                                    <li><a href="#lucid">- Lucid</a></li>
                                    <li><a href="#personal">- Personal</a></li>
                                    <li><a href="#twitee">- Twitee</a></li>
                                </ul>
                            </li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="contact-btn">
                    <div class="hidden-contact">
                        <input type="checkbox" id="click-check"/>
                        <label for="click-check" class="clickable">
                            <p>Contact</p>
                        </label>
                        
                        <section class="contact">
                            <input type="checkbox" id="close-check"/>
                            <label for="click-check" class="clickable">
                                <img src="images/buttons/close.png" alt="close button" class="close-btn">
                            </label>
                            
                            <h1>- Contact -</h1>
                            
                            <div class="contact-content">
                                <a class="phone" href="tel:+380685981358">
                                    <img src="images/contact/phone.png" alt="phone">
                                    <p>0685981358</p>
                                </a>
            
                                <a class="email" href="mailto:tutovmaksum01@gmail.com">
                                    <img src="images/contact/email.png" alt="email">
                                    <p>tutovmaksum01@gmail.com</p>
                                </a>
            
                                <a class="telegram" href="https://t.me/TitovMaxim" target="_blank">
                                    <img src="images/contact/telegram.png" alt="telegram">
                                    <p>@TitovMaxim</p>
                                </a>
            
                                <a class="github" href="https://github.com/Maxim-Titov" target="_blank">
                                    <img src="images/contact/github.png" alt="github">
                                    <p>Maxim-Titov</p>
                                </a>
                            </div>
                        </section>

                        <div class="back-black"></div>
                    </div>
                </div>
            </div>
        </header>

        <div class="main-wrapper">
            <main>
                <section id="hero">
                    <div class="container">
                        <div class="me">
                            <img src="images/my_photos/me.jpg" alt="my photo">

                            <h1>Maxim Titov</h1>
                        </div>
                    </div>
                </section>

                <section id="skills">
                    <div class="container">
                        <h2>- Skills -</h2>
                        
                        <div class="skills">
                            <div class="skill">
                                <img src="images/skills/html.png" alt="HTML">
                                <h3>HTML</h3>
                                <p>Creating semantic structure of web pages.</p>
                            </div>
                
                            <div class="skill">
                                <img src="images/skills/css.png" alt="CSS">
                                <h3>CSS</h3>
                                <p>Styling web pages, including responsive design.</p>
                            </div>
                
                            <div class="skill">
                                <img src="images/skills/js.png" alt="JavaScript">
                                <h3>JavaScript</h3>
                                <p>Developing interactive elements and functionality on web pages.</p>
                            </div>
                
                            <div class="skill">
                                <img src="images/skills/php.png" alt="PHP">
                                <h3>PHP</h3>
                                <p>Server-side development and database integration.</p>
                            </div>
                
                            <div class="skill">
                                <img src="images/skills/drupal.png" alt="Drupal">
                                <h3>Drupal</h3>
                                <p>Developing and configuring websites based on the Drupal CMS.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="projects">
                    <div class="container">
                        <h2>- Projects -</h2>
                        
                        <div class="slider">
                            <div class="slide">
                                <div class="slide-content">
                                    <img src="images/projects/lucid.png" alt="Lucid theme">

                                    <div class="content">
                                        <h3>Lucid</h3>
        
                                        <form action="#lucid">
                                            <button>View more</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="slide">
                                <div class="slide-content">
                                    <img src="images/projects/personal.png" alt="Personal website">

                                    <div class="content">
                                        <h3>Personal</h3>
        
                                        <form action="#personal">
                                            <button>View more</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="slide">
                                <div class="slide-content">
                                    <img src="images/projects/twitee.png" alt="Twitee">

                                    <div class="content">
                                        <h3>Twitee</h3>
        
                                        <form action="#twitee">
                                            <button>View more</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="testimonials">
                    <div class="container">
                        <h2>- Testimonials -</h2>

                        <div class="testimonials-content">
                            <?php require 'php/testimonials/testimonials.php'; ?>
                        </div>

                        <div class="testimonials-form">
                            <form>
                                <button>More</button>
                            </form>

                            <form action="html/add-testimonial.html">
                                <button>Add</button>
                            </form>
                        </div>
                    </div>
                </section>

                <section id="lucid">
                    <div class="container">
                        <div class="content">
                            <h2>- Lucid -</h2>

                            <p>
                                Lucid is a Responsive HTML5 and Bootstrap App landing Template, More Features in a nutshell,  Lucid is a stunningly beautiful theme that has class and sophistication. Designed with visual agencies and creatives in mind, Lucid will showcase your work in breathtaking ways. Packed with smooth visual animations and high quality elements, you can be sure that Lucid will give your site striking aesthetics.
                            </p>

                            <form target="_blank" action="https://maxim-titov.github.io/lucid/">
                                <button>View project</button>
                            </form>
                        </div>

                        <div class="image">
                            <img src="images/projects/lucid.png" alt="Lucid theme">
                        </div>
                    </div>
                </section>

                <section id="personal">
                    <div class="container">
                        <div class="content">
                            <h2>- Personal -</h2>
                            
                            <p>
                                Personal is a modern, minimalist, and responsive web design created to showcase a personal brand and developer skills. The site’s structure is well thought out, allowing easy navigation through the main sections.
                            </p>

                            <form target="_blank" action="https://maxim-titov.github.io/titov-maxim-IPZ-32/">
                                <button>View project</button>
                            </form>
                        </div>

                        <div class="image">
                            <img src="images/projects/personal.png" alt="Personal website">
                        </div>
                    </div>
                </section>

                <section id="twitee">
                    <div class="container">
                        <div class="content">
                            <h2>- Twitee -</h2>
                            
                            <p>
                                Twitee is a simple Twitter clone. It is built with HTML, CSS, PHP and JavaScript. The website has a responsive design and is optimized for performance. It has a clean and user-friendly interface.
                            </p>

                            <form target="_blank" action="http://www.twitee.great-site.net/">
                                <button>View project</button>
                            </form>
                        </div>

                        <div class="image">
                            <img src="images/projects/twitee.png" alt="Twitee">
                        </div>
                    </div>
                </section>

                <section id="contact">
                    <div class="container">
                        <a class="phone" href="tel:+380685981358">
                            <img src="images/contact/phone.png" alt="phone">
                            <p>0685981358</p>
                        </a>

                        <a class="email" href="mailto:tutovmaksum01@gmail.com">
                            <img src="images/contact/email.png" alt="email">
                            <p>tutovmaksum01@gmail.com</p>
                        </a>

                        <a class="telegram" href="https://t.me/TitovMaxim" target="_blank">
                            <img src="images/contact/telegram.png" alt="telegram">
                            <p>@TitovMaxim</p>
                        </a>

                        <a class="github" href="https://github.com/Maxim-Titov" target="_blank">
                            <img src="images/contact/github.png" alt="github">
                            <p>Maxim-Titov</p>
                        </a>
                    </div>
                </section>
            </main>
        </div>

        <footer>
            <div class="container">
                <p>&copy; 2025 Maxim Titov</p>
            </div>
        </footer>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script type="text/javascript" src="dist/bundle.js"></script>
</body>
</html>