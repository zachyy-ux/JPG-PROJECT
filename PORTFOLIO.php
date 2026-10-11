<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="STYLE.css">
</head>
<body>

    <div class="main" id="home">
        <div class="navbar">
            <img src="NDDU LOGO.png" class="logo" alt="Logo">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#skills">SKILLS</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>

        <div class="info">
            <h3>Hello, I am Zach</h3>
            <h1>INFORMATION TECHNOLOGY STUDENT</h1>
            <h3>Practice coding HTML, IT student from General Santos City.<br>
            I created <br> this website as practice for my <br> skills</h3>
            <a href="#skills">PORTFOLIO</a>
        </div>

        <div class="image">
            <img src="spidy.png" class="boy" alt="Spidy">
        </div>
    </div>

    <section class="information" id="about">
        <p class="subtitle">DESCRIPTION</p>
        <h2 class="title">ABOUT ME</h2>

        <div class="aboutme-box">
            <p>Email: zachsagoso1@gmail.com</p>
            <p>Number: 09700777043</p>
            <p>Location: General Santos City</p>
        </div>
    </section>

    <section class="skills-section" id="skills">
        <p class="subtitle">MY EXPERTISE</p>
        <h2 class="title">My Skills</h2>

        <div class="skills-grid">
            <div class="skill-box">
                <img src="C++-removebg-preview.png" class="icon" alt="C++">
                <h3>C++</h3>
                <p>Learning fundamental programming concepts, looping, arrays, command logic, and basic syntax.</p>
            </div>

            <div class="skill-box">
                <img src="HTML-removebg-preview.png" class="icon" alt="HTML">
                <h3>HTML</h3>
                <p>Learning to build simple web page layouts and basic text structures like div, ul, section.</p>
            </div>

            <div class="skill-box">
                <img src="CSS-removebg-preview.png" class="icon" alt="CSS">
                <h3>CSS</h3>
                <p>Learning how to style web pages with simple colors, fonts, padding, margin, side and layout.</p>
            </div>

            <div class="skill-box">
                <img src="PHYTON-removebg-preview.png" class="icon" alt="Python">
                <h3>PYTHON</h3>
                <p>Learning basic coding logic, simple scripts, lyrics text animations and problem-solving fundamentals.</p>
            </div>

            <div class="skill-box">
                <img src="JAVAS-removebg-preview.png" class="icon" alt="JavaScript">
                <h3>JAVASCRIPT</h3>
                <p>Learning DOM manipulation, interactive page elements, and client-side logic execution.</p>
            </div>

            <div class="skill-box">
                <img src="FIGMA.png" class="icon" alt="Figma">
                <h3>FIGMA</h3>
                <p>Learning basic UI design tools to create simple website wireframes and layouts.</p>
            </div>

            <div class="skill-box">
                <img src="GITHUB-removebg-preview.png" class="icon" alt="GitHub">
                <h3>GITHUB</h3>
                <p>Learning basic control like storing files in repository to save and manage beginner code projects.</p>
            </div>

            <div class="skill-box">
                <img src="vercel_logo-removebg-preview.png" class="icon" alt="Vercel">
                <h3>VERCEL</h3>
                <p>Learning cloud platform deployment to host and showcase web development projects online.</p>
            </div>

            <div class="skill-box">
                <img src="PHP-removebg-preview.png" class="icon" alt="PHP">
                <h3>PHP</h3>
                <p>Learning server-side scripting, basic database connectivity, and backend form processing.</p>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <p class="subtitle">FOR MORE INFORMATION</p>
        <h2 class="title">Contact Me</h2>

        <div class="contact-box">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $visitor_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $user_message  = htmlspecialchars($_POST['message']);

                $log_entry = "Date: " . date("Y-m-d H:i:s") . "\nEmail: $visitor_email\nMessage: $user_message\n-----------------------\n";
                
                if (file_put_contents("messages.txt", $log_entry, FILE_APPEND)) {
                    echo '<p class="status-msg success">Message sent successfully!</p>';
                } else {
                    echo '<p class="status-msg error">Failed to send message.</p>';
                }
            }
            ?>

            <form action="PORTFOLIO.php" method="POST" class="contact-form">
                <div class="input-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="input-group">
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>

</body>
</html>