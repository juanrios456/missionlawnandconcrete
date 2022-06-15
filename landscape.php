<!DOCTYPE html>
<html lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mission Landscaping - All of your Topeka Landscaping needs</title>
    <link rel="stylesheet" href="assets/css/landscape.css" type="text/css">
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
        <img src="images/landscaping/landscape-header.jpg" alt="fuck" style=" width:100%; height:100%">
        <h1 class="heading">MISSION Landscaping <br>A Team That Cares</h1>
    </div>

    <div class="dropdown">
        <button class="dropbutton">Choose Service</button>
        <div class="dropdown-content">
            <a href="#beds">Beds</a>
            <a href="#planting">Planting</a>
            <a href="#walls">Retaining Walls</a>
            <a href="#reconstruction">Reconstruction</a>
            <a href="#fire">Fire Pits</a>
            <a href="#trees">Tree Services</a>
            <a href="#fencing">Fencing</a>
        </div>
    </div>
     <div class="g-sections" id="fencing">
        <span class="text">
            <h2 class="subheading">Fencing</h2>
            <p class="main-text">Quality fences that insure security is our priority, along with a a beautiful look.</p>
        </span>
        <span class="example">
            <img src="images/landscaping/fencing.JPG" alt="Planting" style="width: 96%; height:100%;">
        </span>
    </div>
    
    <div class="sections" id="beds">
        <span class="text">
            <h2 class="subheading">Beds</h2>
            <p class="main-text">A garden will give your home a refreshing feeling and with a bed done the right way, it'll be jaw dropping to say the least.</p>
            <h3 class="mini-header">Bed options consist of:</h3>
            <p class="options">Metal Stone Concrete Sod</p>
        </span>
        <span class="example">
            <img name="slides" alt="Beds" style="width: 96%; height:100%;">
        </span>
    </div>

    <div class="g-sections" id="planting">
        <span class="text">
            <h2 class="subheading">Planting</h2>
            <p class="main-text">Looking to build your very own garden? Talk to our Garden specialist to give your garden the best look.</p>
        </span>
        <span class="example">
            <img src="images/landscaping/planting.jpg" alt="Planting" style="width: 96%; height:100%;">
        </span>
    </div>
    <div class="sections" id="walls">
        <span class="text">
            <h2 class="subheading">Retaining Walls</h2>
            <p class="main-text">Whether you need a retaining wall for foundation, or to add that extra spark to your garden, retaining walls let your home stand out.</p>
            <h3 class="mini-header">Retaining walls can be made with:</h3>
            <p class="options">Stone Concrete Sod</p>
        </span>
        <span class="example">
            <img name="slides0" alt="Retaining Walls" style="width: 96%; height:100%;">
        </span>
    </div>
    <div class="g-sections" id="reconstruction">
        <span class="text">
            <h2 class="subheading">Reconstruction</h2>
            <p class="main-text">Overtime we know that everything has its wear and tear, that's where our reconstruction crew does a great job bringing it back to life.</p>
        </span>
        <span class="example">
            <img name="slides1" alt="Reconstruction" style="width: 96%; height:100%;">
        </span>
    </div>
    <div class="sections" id="fire">
        <span class="text">
            <h2 class="subheading">Fire Pits</h2>
            <p class="main-text">A fire pit is a great way to bring people together, telling stories, conversing with others or maybe just to wind down after a long day.</p>
            <h3 class="mini-header">Fire pits can be constructed with:</h3>
            <p class="options">Brick Stone Concrete</p>
        </span>
        <span class="example">
            <img src="filler.jpg" alt="Fire Pits" style="width: 96%; height:100%;">
        </span>
        
    </div>
    <div class="g-sections" id="trees">
        <span class="text">
            <h2 class="subheading">Tree Services</h2>
            <p class="main-text">Tree Branches can become overgrown therefore could be dangerous and cause a heap of mess if not treated.</p>
        </span>
        <span class="example">
            <img name="slides2" alt="Tree Services" style="width: 96%; height:100%;">
        </span>
    </div>

    <?php include($IPATH."footer.php"); ?>

    <script type="text/javascript" src="js/Landscaping.js"></script>
</body>
</html>