<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memon</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="header-top">
            <div class="logo">
                <h1>Memon</h1>
            </div>
            <div class="add-post">
                <a href="add_post.php" class="btn btn-green">Add Post</a>
            </div>
        </div>
    </header>
    
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">Contact-us</a></li>
        </ul>
    </nav>

    <!-- <section class="hero">
        <img src="path/to/hero-image.jpg" alt="Hero Image">
    </section> -->

    <section class="trending-articles">
        <h2>Trending Articles</h2>
        <div class="articles-grid">
            <?php
            // Sample dynamic content using PHP
            $articles = array(
                array(
                    'image' => 'path/to/article-image1.jpg',
                    'title' => 'Article Title 1',
                ),
                array(
                    'image' => 'path/to/article-image2.jpg',
                    'title' => 'Article Title 2',
                ),
                array(
                    'image' => 'path/to/article-image3.jpg',
                    'title' => 'Article Title 3',
                ),
            );

            foreach ($articles as $article) {
                echo '<div class="article">';
                echo '<img src="' . $article['image'] . '" alt="Article Image">';
                echo '<p>' . $article['title'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <section class="editors-pick">
        <h2>Editor's Pick</h2>
        <div class="editors-pick-content">
            <!-- Dynamic content can be added here -->
        </div>
    </section>

    <footer>
        <div class="main-footer">
            <div class="footer-section">
                <h3>Contact the Publisher</h3>
                <p>Email: memonyasin2007@gmail.com</p>
                <p>Phone: [Phone Number]</p>
            </div>
            <div class="footer-section">
                <h3>Explore</h3>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Job Opportunities</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Membership</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Headquarters</h3>
                <p>[Address]</p>
            </div>
            <div class="footer-section">
                <h3>Connections</h3>
                <ul class="social-icons">
                    <li><a href="#"><img src="path/to/facebook-icon.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="path/to/twitter-icon.png" alt="Twitter"></a></li>
                    <li><a href="#"><img src="path/to/youtube-icon.png" alt="YouTube"></a></li>
                    <li><a href="#"><img src="path/to/pinterest-icon.png" alt="Pinterest"></a></li>
                </ul>
            </div>
        </div>
        <div class="sub-footer">
            <div class="left">
                <p>&copy; 2022 || Runo Publisher Studio</p>
            </div>
            <div class="right">
                <a href="#" class="btn btn-green">Subscribe Now</a>
            </div>
        </div>
    </footer>

    <script src="ph.js"></script> <!-- Include your JavaScript file -->
</body>

</html>
