<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maaz Khan | Front-End Developer</title>
    <style>
        /* --- Base Styles --- */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        a {
            color: #D62828;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }

        /* --- Header & Navbar --- */
        header {
            background-color: #1f1f1f;
            color: #fff;
            padding: 50px 20px 20px 20px;
            text-align: center;
            position: relative;
        }
        header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid #D62828;
            margin-bottom: 15px;
        }
        header h1 {
            margin: 10px 0 5px 0;
        }
        header p {
            font-size: 1.1em;
            color: #ccc;
        }

        nav {
            background-color: #222;
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }
        nav a {
            margin: 0 20px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.9em;
        }
        nav a:hover {
            color: #D62828;
        }

        /* --- Section Styles --- */
        section {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }
        h2 {
            color: #D62828;
            border-bottom: 2px solid #D62828;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        ul {
            list-style-type: square;
            padding-left: 20px;
        }

        /* --- Portfolio Images --- */
        .portfolio-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .portfolio img {
            width: 100%;
            max-width: 280px;
            margin: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        /* --- Footer --- */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #1f1f1f;
            color: #fff;
        }

        /* --- Responsive --- */
        @media(max-width: 600px){
            nav {
                flex-direction: column;
            }
            nav a {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<header>
    <img src="images/maaz.jpg" alt="Maaz Khan Profile Picture">
    <h1>Maaz Khan</h1>
    <p>Front-End Web Developer | HTML, CSS, JavaScript | Responsive Websites & Landing Pages</p>
</header>

<nav>
    <a href="#skills">Skills</a>
    <a href="#certificates">Certificates</a>
    <a href="#work">Work Experience</a>
    <a href="#portfolio">Portfolio</a>
    <a href="#contact">Contact</a>
</nav>

<section id="skills" class="skills">
    <h2>Skills</h2>
    <ul>
        <li>HTML (Primary Skill)</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>Responsive Design</li>
        <li>Web Design</li>
        <li>Bug Fixing / Troubleshooting</li>
        <li>Bootstrap / Tailwind CSS</li>
        <li>Cross-Browser Compatibility</li>
        <li>Landing Pages</li>
        <li>Digital Logic Design</li>
    </ul>
</section>

<section id="certificates" class="certificates">
    <h2>Certificates</h2>
    <ul>
        <li>Web Development – University of Spoken English (2025)</li>
        <li>Web Development – Computer Science Institute (2025)</li>
        <li>Digital Logic Design – Skill Certificate</li>
    </ul>
</section>

<section id="work" class="work">
    <h2>Work Experience</h2>
    <ul>
        <li>
            <strong>Front-End Web Developer – Personal Projects</strong><br>
            Built multiple responsive landing pages and website templates using HTML, CSS, and JavaScript. Focused on clean coding, responsive design, and cross-browser compatibility. Projects are being prepared for live deployment. Freelance / Internship – Work Independently
        </li>
    </ul>
</section>

<section id="portfolio" class="portfolio">
    <h2>Portfolio</h2>
    <div class="portfolio-items">
        <img src="images/dashboard1.png" alt="Landing Page Screenshot">
        <img src="images/dashboard2.png" alt="Responsive Website Screenshot">
        <img src="images/dashboard3.png" alt="Website Bug Fix Screenshot">
        <img src="images/digital-logic.png" alt="Digital Logic Design">
    </div>
    <p>Note: Screenshots are currently offline; live versions coming soon.</p>
</section>

<section id="contact">
    <h2>Contact</h2>
    <p>Email: <a href="mailto:maazkhan8588@gmail.com">maazkhan8588@gmail.com</a></p>
    <p>Fiverr: <a href="https://www.fiverr.com/mkwebLab">MKWebLab</a></p>
</section>

<footer>
    &copy; 2026 Maaz Khan | All rights reserved
</footer>

</body>
</html>