<html>
<body>
    <form method="POST" action="here.php" enctype="multipart/form-data">
    <button name="b">
      <a href="./categories.php">categories</a>
    </button>
    </form>
    <?php if(isset($_POST['b'])){
    	header("Location: categories.php");
    	}?>
    <a href="./categories.php">categories</a>
</body>
</html>