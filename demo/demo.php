<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCW - Framework</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- reset -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- framework -->
    <link rel="stylesheet" href="../framework/style.css">
    <!-- js - header -->
    <script src="assets/js/header.js" defer></script>
    <!-- css - highlight -->
    <link rel="stylesheet" href="assets/css/snaazy_theme.css">
</head>
<body>
    <div class="header">
        <header>
            <nav>
                <ul class="ncw-list-lst-none">
                    <li><a href="#colors" class="link-js" data-content-toshow="content-colors">Colors</a></li>
                    <li><a href="#font" class="link-js" data-content-toshow="content-font">Font</a></li>
                    <li><a href="#border" class="link-js" data-content-toshow="content-border">Border</a></li>
                    <li><a href="#list" class="link-js" data-content-toshow="content-list">List</a></li>
                    <!-- TODO -->
                    <li><a href="#position" class="link-js" data-content-toshow="content-position">Position</a></li>
                    <li><a href="#size" class="link-js" data-content-toshow="content-size">Size</a></li>
                    <li><a href="#underwork" class="link-js" data-content-toshow="content-underwork">Columns</a></li>
                    <li><a href="#underwork" class="link-js" data-content-toshow="content-underwork">Margin</a></li>
                    <li><a href="#underwork" class="link-js" data-content-toshow="content-underwork">Padding</a></li>
                    <li><a href="#transition" class="link-js" data-content-toshow="content-transition">Transition</a></li>
                    <li><a href="#cursor" class="link-js" data-content-toshow="content-cursor">Cursor</a></li>
                    <li><a href="#underwork" class="link-js" data-content-toshow="content-underwork">Links</a></li>
                    <li><a href="#underwork" class="link-js" data-content-toshow="content-underwork">Headers</a></li>
                    <li><a href="#underwork" class="link-js" data-content-toshow="content-underwork">Slider</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="content">
        <?php include 'assets/php_includes/colors-include.html';?>
        <?php include 'assets/php_includes/font-include.html';?>
        <?php include 'assets/php_includes/border-include.html';?>
        <?php include 'assets/php_includes/list-include.html';?>
        <?php include 'assets/php_includes/position-include.html';?>
        <?php include 'assets/php_includes/size-include.html';?>
        <?php include 'assets/php_includes/cursor-include.html';?>
        <?php include 'assets/php_includes/underwork-include.html';?>
    </div>
</body>
<script src="../framework/framework.js"></script>
<script>
    addColor("rgba(1,1,1,0.1)", "name");
</script>
<!-- js - highlight.js -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
</html>