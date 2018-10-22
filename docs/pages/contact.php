<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="icon" href="../css/images/favicon.png">

    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
</head>

<body>
    <header class="header">
        <h1>tylainejeffrey.com</h1>
        <div class="nav-bar">
            <nav class="head-titles"><a href="../index.html">Home</a></nav>
            <nav class="head-titles" id="contact-border"><a href="./contact.php">Contact</a></nav>
            <nav class="head-titles" id="project-border"><a href="./projects.html">Projects</a></nav>
        </div>
    </header>

    <div class="form-section">
        <aside class="aside">
            <div class="me_pic_contact">
            </div>
            <div id="social-links">
                <div class="links-aside">
                    <a href="https://www.linkedin.com/in/tylainejeffrey/">
                        <img height="20vh" width="20vw" src="../css/images/linkedin.png">

                    </a>
                </div>

                <div class="links-aside">
                    <a href="https://github.com/tylainej">
                        <img height="20vh" width="20vw" src="../css/images/github.png">
                    </a>
                </div>

                <div class="links-aside">
                    <a href="../pages/resume/tylainej _ Resume2018.pdf" download>
                        <img height="20vh" width="20vw" src="../css/images/resume-icon.png">
                    </a>
                </div>

                <div class="links-aside">
                    <a href="mailto:tylainej@gmail.com">
                        <img height="20vh" width="20vw" src="../css/images/email.png">
                    </a>
                </div>
            </div>
        </aside>

        <form class="contactForm" action="contactForm.php" method="post">
            <div class="text-field-container">

                <div>
                    <input class="textField" type="text" name="user_name" placeholder="Name:">
                </div>
                <div>
                    <input placeholder="Email:" class="textField" type="email" name="user_email"></div>

                <div>
                    <input class="textField" type="phone-number" name="user_number" placeholder="Number:"></div>

            </div>
            <div><textarea type="text" class="message" name="user_message" placeholder="Message:" rows="10" column="1"></textarea>
            </div>

            <div>
                <button class="submit" type="submit" width="30" value="Send">Send</button></div>
        </form>

    </div>
    <footer class="footer-div">
        <div class="foot-container">
            <div class="foot">
                <p>Created By Tylaine Jeffrey</p>
            </div>
        </div>

        <div class="links-container">
            <div class="links-footer">
                <a href="https://www.linkedin.com/in/tylainejeffrey/">
                    <img src="../css/images/linkedin.png">

                </a>
            </div>

            <div class="links-footer">
                <a href="https://github.com/tylainej">
                    <img src="../css/images/github.png">
                </a>
            </div>

            <div class="links-footer">
                <a href="../pages/resume/tylainej _ Resume2018.pdf" download>
                    <img src="../css/images/resume-icon.png">
                </a>
            </div>

            <div class="links-footer">
                <a href="mailto:tylainej@gmail.com">
                    <img src="../css/images/email.png">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>