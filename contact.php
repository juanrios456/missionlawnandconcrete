<!--contact form handler -->
<?php 
    if(isset($_POST ['name']) && isset($_POST ['email']) && isset($_POST ['phone'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $project = $_POST['project'];
        $text = $_POST['text'];
        $to ='juarezivan1994@gmail.com';
        $subject = 'Contact Form Submission';
        $body = '
            <html>
                <body>
                    <h2>Contact Form Submission</h2>
                    <br>
                    <p>Name: '.$name.'</p>
                    <p>Email: '.$email.'</p>
                    <p>Phone: '.$phone.'</p>
                    <p>City: '.$city.'</p>
                    <p>Project Type: '.$project.'</p>
                    <p>Message: '.$text.'</p>
                </body>
            </html>';
        //headers
        $headers = "From: ".$name." <".$email.">\r\n";
        $headers = "Reply-To: ".$email."\r\n";
        $headers = "Mime-Version: 1.0\r\n";
        $headers = "Content-Type: text/html; charset=utf-8";
        
        //send
        $send = mail ($to, $subject, $body, $headers);
        if ($send){
            echo '<script type="text/javascript">';
            echo ' alert("Thanks for your Submisison we will get back to you soon!")'; 
            echo '</script>';
        }
        else{
            echo '<script type="text/javascript">';
            echo ' alert("Error, please try again")'; 
            echo '</script>';
    }
    }
?>
<!doctype html>
<html>
<head>
    <title>Contact Mission Lawn and Concrete today to get a free estimate, and follow us on social media.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0"/>

    <link rel="stylesheet" type="text/css" href="assets/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
</head>
<body>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; 
        include($IPATH."header.php"); ?>
    <div id="form-wrapper">
        <h1 class="head-text">Get In Touch</h1>
        <div class="container-3" >
            <form onsubmit="validateForm();" action="" method="post"> 
                <h2 class="heading">Get a Free Estimate!</h2>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" placeholder="Your Name" required="required" />
                <small class="error"></small>

                <label for="phone">Phone Number</label>
                <input id="phone" type="text" name="phone" placeholder="Phone Number" required="required" />
                <small class="error"></small>

                <label for="city">City</label>
                <input id="city" type="text" name="city" placeholder="Enter City" required="required" />
                <small class="error"></small>

                <label for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Your Email" required="required" />
                <small class="error"></small>
                
                <label for="dropdown">Project</label>
                <select id="f-drop" name="project" >
                    <option class="option" value="Lawn and Maintenance">Lawn and Maintenance</option>
                    <option class="option" value="Landscaping">Landscaping</option>
                    <option class="option" value="Concrete">Concrete</option>
                </select>

                <label for="message">Message</label>
                <textarea id="message" name="text" rows="3" placeholder="Insert Message" ></textarea>
                

                <input id="submit" type="submit" value="Send Message">
                <p id="success"></p>
            </form>
        </div>
    </div>
<script type="text/javascript" src="js/contact.js"></script>

<!--Mobile and Tablet Version -->
    <div id="info-2">
    <h2 class="heading">Contact Us, We don't bite!</h1>
    <div id="info">
        <span class="containers">
            <h3 class="subheading">Founder - Ivan Juarez</h2>
            <span class="container-1">
                <a href="tel:(785)817-7977"><button class="phone">
                    <img src="images/icons/phone-icon.png" alt="phone" style="margin:0 5px;width:40px;height:40px;vertical-align: middle;border:solid black 2px;">
                    Phone Number - (785) 817-7977</button></a>
                <br>
                <a href="mailto:juarezivan1994@gmail.com"><button class="email">
                    <img src="images/icons/email-icon.png" alt="Email_icon" style="margin:0 5px;width:50px;height:33px;vertical-align: middle;"> 
                    Email - juarezivan1994@gmail.com</button></a>
            </span>
        </span>
            <span class="containers">
                <h3 class="subheading">Follow Us on Social!</h2>
                <span class="container-2">
                    <a href="https://www.facebook.com/missionlawncaretopeka"><button class="socials">
                        <img src="images/icons/facebook-icon.png" alt="facebook_icon" style="margin:0 5px;width:40px;height:40px;vertical-align: middle;">
                        Facebook - Misison Lawn and Concrete</a></button>
                    <a href="https://www.instagram.com/mission_lc/"><button class="socials">
                        <img src="images/icons/instagram_icon.png" alt="instagram_icon" style="margin:0 5px;width:40px;height:40px;vertical-align: middle;">
                        Instagram - Misison Lawn and Concrete</a></button>
                </span>
            </span>
    </div>
</div>
    
    <?php include($IPATH."footer.php"); ?>

</body>
</html>