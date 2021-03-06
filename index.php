<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>4chan</title>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/jquery.bxslider.css"/>
        <link rel="stylesheet" href="css/index.css"/>
        <script src="js/jquery-2.1.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/mustache.js"></script>
        <script src="js/index.js"></script>

    </head>
    <body>
        <?php
        $excludeURI = trim(trim($_SERVER['PHP_SELF'], "index.php"), "/");
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode("?", $uri);
        $params = explode("/", trim(preg_replace("/\/" . $excludeURI . "/", "", $uri[0], 1), "/"));
        $requested_file = isset($params[1]) ? $params[1] : "home";
        require_once "helper.php";
        $helper = new Helper();
        ?>
        <script>
            var pagename = "<?= $requested_file; ?>";
        </script>
        <div class="wrapper">
            <div class="search-box">
                <a href="home"><img src="img/logo.png" class="logo"/></a>
                <input type="text" placeholder="Search post or category..." value="<?= isset($_GET['term']) ? $_GET['term'] : "" ?>"><input type="button" value="Search" class="search-submit" id="search"/>
            </div>
            <div class="top-menu">
                <ul>
                    <li><a href="home">HOME</a></li>
                    <li><a href="http://blog.4chan.org/">BLOG</a></li>
                    <li><a href="faq">FAQ</a></li>
                    <li><a href="rules">RULES</a></li>
                </ul>
            </div>
            <div class="content">
                <div class="row">
                    <div class="main-content col-lg-9">
                        <div class="slideshow-wrapper">
                            <?php
                            $helper->element("view/" . $requested_file);
                            ?>
                        </div>
                    </div>
                    <div class="left-menu col-lg-3">
                        <div>
                            <div class="category-group">
                                <div class="group-title">
                                    Category
                                </div>
                                <ul class="hoverable parent-menu">
                                    <li data-pagename="japanese-anime-wallpaper">Japanese Culture
                                        <ul>
                                            <li>Anime & Manga</li>
                                            <li><a href="japanese-anime-wallpaper">Anime/Wallpaper</a></li>
                                            <li>Cosplay</li>
                                            <li>Pokemon</li>
                                            <li>Mecha</li>
                                            <li>Oytaku Culture</li>
                                        </ul>
                                    </li>
                                    <li>Interests</li>
                                    <li>Creative</li>
                                    <li>Other</li>
                                    <li>Miscellaneous</li>
                                </ul>
                            </div>
                            <div class="popular-group">
                                <div class="group-title">
                                    Popular Thread
                                </div>
                                <ul class="hoverable">
                                    <li>Auto</li>
                                    <li>Advice</li>
                                    <li>Television & Film</li>
                                    <li>Sport</li>
                                    <li>Video Games</li>
                                    <li>International</li>
                                    <li>Airport</li>
                                    <li>Art</li>
                                    <li>Film</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer">
                <ul>

                    <li><a href="#">SUPPORT 4CHAN</a></li>
                    <li><a href="#">ADVERTISE</a></li>
                    <li><a href="#">PRESS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
