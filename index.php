<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="/assets/icons/favicon-32x32.png" />
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css" />

        <title>Alexander Tipaldo - Web Developer</title>
    </head>

    <body>
        <!-- Navbar -->
        <nav>
            <h1>Alexander Tipaldo</h1>
            <ul class="navigation">
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <button class="mobile-button" id="mobile-button">
                <ion-icon class="bars" name="menu-outline"></ion-icon>
            </button>
        </nav>

        <!-- Hero Section -->
        <section class="hero" id="hero">
            <div class="hero-img-container">
                <img src="/assets/media/images/fsc-logo-hq.png" alt="fsc-logo" loading="lazy" class="hero-img" />
            </div>
        </section>

        <!-- About -->
        <section class="about" id="about">
            <h2>About Me</h2>
            <p>Hello! My name is Alexander Tipaldo. I am a full-stack web developer located in central Florida.</p>
            <p>I graduated from Florida Southern College in 2019. Through professional work and internships, I have experience creating new websites from scratch, as well as maintaining and updating existing company websites.</p>
            <p>My skills in the web space include front- and back-end development, database design and management, and responsive web design. I also have experience with many other tools and languages in order to be prepared for any services a company already has in place.</p>
            <div class="resume-btn-container">
                <button class="resume-btn" id="resume-btn">View Resume</button>
            </div>
            <div id="adobe-dc-view"></div>
        </section>

        <!-- Skills -->
        <section class="skills" id="skills">
        <h2 class="skills-header">Skills</h2>
        <div class="container skills-container">
            <div class="card">
                <img src="/assets/media/icons/w3_html5-ar21.svg" class="card-img" alt="html-logo" loading="lazy" />
                <h3 class="card-title">Front-end</h3>
                <p class="card-details">HTML, CSS, JavaScript, jQuery</p>
            </div>
            <div class="card">
                <img src="/assets/media/icons/php-ar21.svg" class="card-img" alt="php logo" loading="lazy" />
                <h3 class="card-title">Back-end</h3>
                <p class="card-details">PHP, Python, Java, and tools such as Apache and Django</p>
            </div>
            <div class="card">
                <img src="/assets/media/icons/mysql-ar21.svg" class="card-img" alt="mysql-logo" loading="lazy" />
                <h3 class="card-title">Database</h3>
                <p class="card-details">Primarily MySQL, as well as Mongo, SQLite, and Access</p>
            </div>
            <div class="card">
                <img src="/assets/media/icons/linux-ar21.svg" class="card-img" alt="linux-logo" loading="lazy"/>
                <h3 class="card-title">Maintenance</h3>
                <p class="card-details">Maintained systems in both Windows and Linux</p>
            </div>
        </div>
        </section>

        <!-- Projects -->
        <section class="projects" id="projects">
            <h2 class="projects-header">Projects</h2>
            <div class="container">
                <div class="card project-card">
                    <div>
                        <img src="/assets/media/images/fscwebsite.png" class="card-img project-img" alt="fsc-website" loading="lazy" />
                    </div>
                    <h3 class="card-title">Florida Southern College</h3>
                    <p class="card-details">Official Florida Southern website I worked on as work-study while I was enrolled. Focused on responsive, mobile-first design.</p>
                    <div class="card-link-container">
                        <a href="https://www.flsouthern.edu" target="_blank" class="card-link">Visit Page</a>
                    </div>
                </div>
                <div class="card project-card">
                    <div>
                        <img src="/assets/media/images/emdeewebsite.png" class="card-img project-img" alt="emdee-website" loading="lazy" />
                    </div>
                    <h3 class="card-title">eMDee Technology, Inc.</h3>
                    <p class="card-details">External eMDee website that I overhauled during my time working at the company.</p>
                    <div class="card-link-container">
                        <a href="https://www.emdee.com" target="_blank" class="card-link">Visit Page</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="contact" id="contact">
            <h2>Contact</h2>
            <div class="container">
                <a href="https://www.linkedin.com/in/alexander-tipaldo/" class="contact-item">
                    <img src="/assets/media/icons/linkedin-icon-72x72.png" alt="linkedin-logo" loading="lazy" class="icon" />
                </a>
                <a href="mailto:contact.atipaldo@gmail.com" class="contact-item">
                    <img src="/assets/media/icons/mail-icon-72x72.png" alt="mail-icon" loading="lazy" class="icon" />
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <small class="copy">&copy; Copyright 2022</small>
        </footer>

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
        <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module" ></script>
        <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" nomodule></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
