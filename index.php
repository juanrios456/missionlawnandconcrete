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

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Mission Lawn and concrete - Topeka Lawn Maintenance, landscaping work, and concrete work.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0"/>

    <link rel="stylesheet" type="text/css" href="assets/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>
<body>
    
    <img id="background-image" src="/images/mission-background.jpg" alt="mission background">
   
    <!--Links the page to the assets folder-->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; 
        include($IPATH."header.php");
    ?>

    


    <span id="top-button">
        <a href="#top">
            <img src="images/icons/arrow-up.png" alt="2-the-top" style="width:40px;height:40px;">
        </a>
    </span>
    <div id="top">
        <img src="images/landscaping/landscape-header.jpg" alt="header-image" style=" width:100%; height:100%">
        <h1 class="heading">Welcome to Mission Lawn and Concrete</h1>
    </div>

<div id="cl-wrapper">
    <a href="contact.php">
    <button id="contact-link">
        <h1 class="head-text">  
        Get In Touch    
        </h1>
    </button>
    </a>
</div>

    <div id="third-box">
        <h1>Our Services For You.</h1>
        <a href="landscape.php" class="services" id="landscaping">
            <img src="images/landscaping/landscape-header.jpg" alt="Landscaping Example" width="100%" height="100%">
            Landscaping
        </a>
        <a href="lawn.php" class="services" id="lawn">
            <img src="images/lawn/lawn-header.jpg" alt="Lawn Work Example" width="100%" height="100%">
            Lawn and Maintenance
        </a>
        <a href="concrete.php" class="services" id="concrete" >
            <img src="images/concrete/concrete-driveway.JPG" alt="Concrete Example" width="100%" height="100%">
            Concrete
        </a>
    </div>

    <div class="examples" id="example-1">
        <h1 class="example-title">Clean Lawn? Always!!</h1>
        <p>Mowing your lawn is like cutting your hair, you must keep it maintained
            well to keep it looking sharp. At Mission Lawn and Concrete we make it a
            priority to keep your yard looking as clean and crisp as possible. </p>
        <h2 class="example-subtitle">Maintenance Services</h2>
        <ul class="left-list">
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Mowing</li>
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Pruning</li>
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Rejuvinating</li>
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Gutter Clean Ups</li>
        </ul>
        <img src="images/lawn/mowing.JPG" alt="Lawn Work Example" class="right-image" width="100%" height="100%">
    </div>
    <div class="examples" id="example-2">
        <h1 class="example-title">New Project? We Can Help!</h1>
        <p>Our Experienced Concrete specialists can take care of any concrete work
            from start to finish. Some of our work consists of:</p>
        <h2 class="example-subtitle">Concrete Work</h2>
        <ul class="right-list">
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Stamped Concrete</li>
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Driveways</li>
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Sidewalks</li>
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Repairs</li>
        </ul>
        <img src="images/concrete/concrete-sidewalk.JPG" alt="Concrete Work Example" class="left-image" width="100%" height="100%">
    </div>
    <div class="examples" id="example-3">
        <h1 class="example-title">Clean Lawn? Always!!</h1>
        <p>Adding that extra pizzaz to your home can be a challenging, that's why 
            we are here to help set up a plan, and execute it to give your home the 
            best possible look!</p>
        <h2 class="example-subtitle">Landscaping</h2>
        <ul class="left-list">
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Beds</li>
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Retaining Walls</li>
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Planting</li>
            <li><img src="images/icons/check-mark.png" alt="check-mark" width="40px" height="40px">Tree Services</li>
        </ul>
        <img src="images/landscaping/stone-wall.JPG" alt="Landscaping Work Example" class="right-image" width="100%" height="100%">
    </div>
    <div id="form-wrapper">
        <div class="container-3" >
            <form onsubmit=" validateForm();" action="" method="post"> 
                <h2 class="heading1">Get a Free Estimate!</h2>
                <label for="phone">Name</label>
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
                <textarea id="message" rows="3" placeholder="Insert Message"  name="text"></textarea>
                

                <input id="submit" type="submit" value="Send Message">
                <p id="success"></p>
            </form>
        </div>
    </div>

    <?php include($IPATH."footer.php"); ?>
    <script type="text/javascript" src="js/contact.js"></script>
</body>
</html>