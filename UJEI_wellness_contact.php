<!Doctype html>
<html lang = "en">
    <head>
        <title>UJEI Wellness Contact</title>
        <link rel="stylesheet" type="text/css" href="UJEI_wellness_contact.css" />
        <div></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"
            type="text/javascript"></script>
        <script src="UJEI_wellness_contact.js"></script>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navigation-bar" id = "about">
            <img class="logo" src="logo.png">
            <nobr class="logoname">UJei Wellness</nobr>
            <a href="#contact">CONTACT</a>
            <a href="index.html#pricing">PRICING</a>
            <a href="index.html#gallery">GALLERY</a>
            <a href="UJEI_wellness_about.html">ABOUT</a>
            <a href="index.html">HOME</a>
        </nav>

        <iframe class = "calendar" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3015.848113624844!2d-73.97335718490288!3d40.897146534205376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f110a7e469c1%3A0x8fc7720408c28c22!2s128%20Engle%20St%20b%2C%20Englewood%2C%20NJ%2007631!5e0!3m2!1sen!2sus!4v1643899868511!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <h1 class = "title">Contact Us!</h1>
            <div class = "Email">
                <form id="EmailUs" method="post" action="">
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" pattern="[A-Za-z]{5,10}" title="5 to 10 upper or lowercase letters" required></input><br><br>
                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email" required></input><br><br>
                    <label for="subject">Subject:</label><br>
                    <textarea type="text" id="subject" name="subject"></textarea> <br>
                    <label for="comment">How can we help?:</label><br>
                    <textarea type="text" id="comment" name="comment"></textarea><br><br>
                    <input type="button" value="send" class = "send">
                </form>
            </div>

            <?php
            $to = "ujeiwellness@gmail.com";
            $subject = $_REQUEST["subject"];
            
            $message = "Email from: ".$_REQUEST["name"]. "\r\n\r\n\r\n";
            $message .= "\n\n". $_REQUEST["comment"];
            
            $header = "From: ".$_REQUEST["email"]. "\r\n";

            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            
            $retval = mail($to,$subject,$message,$header);
        ?>

            <footer> 
                <div class="footer_row">
                    <div class="footer_column left">
                        <img class="logof" src="logo.png">
                        <nobr class="logoname2">UJEI WELLNESS</nobr>
                        <br>
                        <!-- <label for="email">Email Address</label> -->
                        <div class = "subscribe">
                            <input class = "email" type="email" id="email" name="email" placeholder="Email Address">
                        <input class = "subscribeButtn" type="Submit" value="Subscribe">
                        </div>
                        <br>
                        <a href="https://www.instagram.com/ujeiwellness/"><img class="insta" src="instagram.png"></a>
                    <a href="https://www.instagram.com/ujeiwellness/"><nobr class="instafollow">Follow us on @UJeiWellness</nobr></a>
                    </div>
                    <div class="footer_column middle">
                      <p><a href="index.html#home">HOME</a></p>
                      <p><a href="UJEI_wellness_about.html">ABOUT</a></p>
                      <P><a href="index.html#gallery">GALLERY</a></P>
                      <P><a href="index.html#pricing">PRICING</a></P>
                      <P><a href="UJEI_wellness_contact.html">CONTACT</a></P>
                    </div>
                    <div class="footer_column right">
                      <p>+1 293 374 9374</p>
                      <p>UJEIWELLNESS@GMAIL.COM</p> <br>
                      <p>UJEI WELLNESS</p>
                      <p>128 ENGLE ST UNIT B,</p>
                      <p>ENGLEWOOD, NJ 07631</p> <br>
                        <p>@UJEIWELLNESS</p>
                    </div>
                </div>
            </footer>

    </body>
</html>
