<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style-categories.css">
    </head>
    <body>
    <div style="border:3px solid white;background-color:rgba(179,120,211,0.2);border-radius:8px;top:0px;height:70px;width:1325px;">  
        logo here
    
    <?php session_start();
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
           // echo $_SESSION['user_id'];
    ?>
    <button id="button6"><a href="C:\xampp\htdocs\photography-web\login.html" style="color:white;"> upload</a>
    </button>
    <button id="button6"><a onclick="location.href='Home.html'"> Logout</a>
    </button>
    <?php }else{?>
    <button id="button6"><a href="C:\xampp\htdocs\photography-web\login.html" style="color:white;"> Login/Sign Up</a>
    </button>
    <?php }?>
	<button id="button6"><a onclick="location.href='Home.html'" > About Us</a>
        
    </button>
    <button id="button6"><a href="C:\xampp\htdocs\photography-web\Home.html" style="color:white;"> Contact US</a>
        
    </button>
    <button id="button3"><a href="C:\xampp\htdocs\photography-web\Home.html" style="color:white;"> shop</a>
        
    </button>
    <button id="button4"><a href="C:\xampp\htdocs\photography-web\categories.html" style="color:white;"> Gallery</a>
        
    </button>
    <button id="button5"><?php echo '<a href="login.php" style="color:white;"> Home</a>';?>
    </button>
    
    </button>
    
    
    <!--javascript-->
    <script type="text/javascript" src="javascript/ripple.js"></script>
    <!--javascript-->
    </div>
        
    <div id="attachment">
    <div style="border:3px solid white;font-size:48px;font-family:Mr De Haviland;margin-left:480px;background-color:rgba(179,120,211,0.2);border-radius:8px;margin-top:290px;width:auto;display:inline-block;">&nbsp;&nbsp;::...&nbsp;&nbsp;Category&nbsp;&nbsp;....::&nbsp;&nbsp;
    </div>
    </div>
    <div id="categories-back">
        <!--repeat this via php-->
        <div id="image-back" style="float: left; margin-left:0px;margin-top:0px;">
        <img src="images/aemi%20pics%20298.jpg" id="image"/>
        <div id="hovered"><br>Categories</div>
        </div>
        <script type="text/javascript" src="javascript/hover.js"></script>
        <div id="image-back" style="margin-left:445px;margin-top:0px;">
        <img src="images/aemi%20pics%20301.jpg" id="image"/>
        <div id="hovered2"><br>Categories</div>
        </div>
        <script type="text/javascript" src="javascript/hover.js"></script>
        <div id="image-back" style="margin-left:900px;margin-top:-390px;">
        <img src="images/aemi%20pics%20325.jpg" id="image"/>
        <div id="hovered"><br>Categories</div>
        </div>
        <br>
        <div id="image-back" style="float: left; margin-left:0px;margin-top:0px;">
        <img src="images/aemi%20pics%20298.jpg" id="image"/>
        <div id="hovered"><br>Categories</div>
        </div>
        <script type="text/javascript" src="javascript/hover.js"></script>
        <div id="image-back" style="margin-left:445px;margin-top:0px;">
        <img src="images/aemi%20pics%20301.jpg" id="image"/>
        <div id="hovered2"><br>Categories</div>
        </div>
        <script type="text/javascript" src="javascript/hover.js"></script>
        <div id="image-back" style="margin-left:900px;margin-top:-390px;">
        <img src="images/aemi%20pics%20325.jpg" id="image"/>
        <div id="hovered"><br>Categories</div>
        </div>
        <br>
        <div id="image-back" style="float: left; margin-left:0px;margin-top:0px;">
        <img src="images/aemi%20pics%20298.jpg" id="image"/>
        <div id="hovered"><br>Categories</div>
        </div>
        <script type="text/javascript" src="javascript/hover.js"></script>
        <div id="image-back" style="margin-left:445px;margin-top:0px;">
        <img src="images/aemi%20pics%20301.jpg" id="image"/>
        <div id="hovered2"><br>Categories</div>
        </div>
        <script type="text/javascript" src="javascript/hover.js"></script>
        <div id="image-back" style="margin-left:900px;margin-top:-390px;">
        <img src="images/aemi%20pics%20325.jpg" id="image"/>
        <div id="hovered"><br>Categories</div>
        </div>
        <br>
    </body>
</html>