<!DOCTYPE html>
<html lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mission Lawn and Maintenance For Anywhere in the surrounding Topeka area.</title>
    <link rel="stylesheet" href="assets/css/lawn.css" type="text/css">
    <link rel="stylesheet" href="assets/css/all.css" type="text/css">

</head>
<body>

<img id="background-image" src="/images/mission-background.jpg" alt="mission background">


    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; 
        include($IPATH."header.php"); ?>
    <span id="top-button">
        <a href="#top"><img src="images/icons/arrow-up.png" alt="2-the-top" style="width:40px;height:40px;"></a>
    </span>
    <div id="top">
        <img src="images/lawn/lawn-header.jpg" alt="fuck" style=" width:100%; height:100%">
        <h1 class="heading">Lawn Care/ Maintenance <br>The MISSION way</h1>
    </div>

    <div class="dropdown">
        <button class="dropbutton">Choose Service</button>
        <div class="dropdown-content">
            <a href="#Mowing">Mowing</a>
            <a href="#Maintenance">Maintenance</a>
            <a href="#Power-Washing">Power Washing</a>
            <a href="#Gutter">Gutter Clean Up</a>
            <a href="#Spring">Spring Clean Up</a>
            <a href="#Fall">Fall Clean Up</a>
        </div>
    </div>
 
    <div class="sections" id="Mowing">
        <span class="text">
            <h2 class="subheading">Mowing</h2>
            <p class="main-text">Mowing your lawn is like getting a haircut, it must be treated with the best care and precision. </p>
        </span>
        <span class="example">
            <img src="images/lawn/mowing.JPG" alt="Lawn Mowing" style="width: 96%; height:100%;">
        </span>
        
    </div>
    <div class="g-sections" id="Maintenance">
       <span class="text">
            <h2 class="subheading">Maintenance</h2>
            <p class="main-text">Rejuvenate your home with proper maintenance done the MISSION way with the hand of our landscape professionals with services that include but are not limited to: Pruning, Trimming, Gutter clean ups, etc. </p>
        </span>
        <span class="example">
            <img src="images/lawn/maintenance.JPG" alt="Lawn Maintenance" style="width: 96%; height:100%;">
        </span>
    </div>
    <div class="sections" id="Power-Washing">
        <span class="text">
            <h2 class="subheading">Power Washing</h2>
            <p class="main-text">Spills? Stains? No problem, our power Washing crew will take it all on and leave you with unrecognizable results.</p>
        </span>
        <span class="example">
            <img src="filler.jpg" alt="Power-Washing" style="width: 96%; height:100%;">
        </span>
        
    </div>
    <div class="g-sections" id="Gutter">
        <span class="text">
            <h2 class="subheading">Gutter Clean Ups</h2>
            <p class="main-text">Keeping a clean gutter keeps a clean conscience, it is a small detail that will make a huge difference and give your home that sharp look you have been looking for.</p>
        </span>
        <span class="example">
            <img name="slides" alt="Gutter Clean Ups" style="width: 96%; height:100%;">
        </span>
        
    </div>
    <div class="sections" id="Spring">
        <span class="text">
            <h2 class="subheading">Spring Clean Ups</h2>
            <p class="main-text">Thinking of a spring cleaning? Look no further our spring cleaning crew will make sure there is no weed in sight, and not a branch out of place!</p>
        </span>
        <span class="example">
            <img name="slides0" alt="Spring Clean Ups" style="width: 96%; height:100%;">
        </span>
        
    </div>
    <div class="g-sections" id="Fall">
        <span class="text">
            <h2 class="subheading">Fall Clean Ups</h2>
            <p class="main-text">During the fall there are a number of elements that contribute to the necessity of a clean up. Overgrown branches, fallen leaves, or witting gardens due to change in weather. </p>
        </span>
        <span class="example">
            <img name="slides1" alt="Fall Clean Ups" style="width: 96%; height:100%;">
        </span>
    </div>

    <?php include($IPATH."footer.php"); ?>

    <script type="text/javascript" src="js/lawn.js"></script>
</body>
</html>