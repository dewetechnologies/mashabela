<?php
// Include your database configuration/connection file if you have one.
// For this example, we'll define connection details here.
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mashebela');

$posts = [];
$db_error = '';

// Create connection
@$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    $db_error = "Connection failed: " . $conn->connect_error;
} else {
    $sql = "SELECT id, title, content, image_url, created_at FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
    } else {
        $db_error = "No posts found.";
    }
    $conn->close();
}

function get_excerpt($content, $length = 150) {
    $excerpt = strip_tags($content);
    if (strlen($excerpt) > $length) {
        $excerpt = substr($excerpt, 0, $length);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = $excerpt . '...';
    }
    return $excerpt;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Mashabela Investments</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="https://themazine.com/mr/conalz-html/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://themazine.com/mr/conalz-html/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://themazine.com/mr/conalz-html/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="https://themazine.com/mr/conalz-html/assets/images/favicons/site.webmanifest">
    <meta name="description" content="Latest news and insights from Mashabela Investments.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css">
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css">
    <link rel="stylesheet" href="assets/vendors/conalz-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css">
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css">
    <link rel="stylesheet" href="assets/vendors/polyglot-language-switcher/polyglot-language-switcher.css">
    
    <link rel="stylesheet" href="assets/css/conalz.css">
    <link rel="stylesheet" href="assets/css/conalz-responsive.css">

    <style>
        /* Theme variables and base align with index.php */
        :root { --conalz-primary:#001f3f; --conalz-secondary:#001737; --conalz-dark-blue:#00122a; --conalz-light-blue-bg:#f3f6fa; }
        .thm-btn { background-color: var(--conalz-primary); }
        .thm-btn:hover { background-color: var(--conalz-secondary); }
        .main-menu__list > li.current > a, .main-menu__list > li:hover > a { color: var(--conalz-primary); }
        .main-header__top-address-list .icon span, .main-menu__call-icon span { color: var(--conalz-primary); }
        .section-title__tagline { color: var(--conalz-primary); }
        .section-title__title { color: var(--conalz-dark-blue); }

        /* Hero */
        .page-header { padding: 200px 0 160px; }
        .page-header__inner h2 { font-size: 64px; color: #fff; font-weight: 800; line-height: 1.1; }
        .page-header__subtitle { color: #e6ecf5; font-size: 22px; margin-top: 10px; }

        /* Sections */
        .section-pad { padding: 120px 0; }
        .bg-subtle { background: var(--conalz-light-blue-bg); }

        /* Blog Post Card */
        .blog-card-dynamic { background: #fff; border-radius: 8px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); margin-bottom: 30px; overflow: hidden; transition: all .3s ease; }
        .blog-card-dynamic:hover { transform: translateY(-8px); box-shadow: 0 15px 45px rgba(0,0,0,0.12); }
        .blog-card-dynamic__image { height: 250px; background-size: cover; background-position: center; }
        .blog-card-dynamic__content { padding: 30px; }
        .blog-card-dynamic__date { font-size: 14px; color: #777; margin-bottom: 10px; }
        .blog-card-dynamic__title { font-size: 22px; font-weight: 700; color: var(--conalz-dark-blue); margin-bottom: 15px; line-height: 1.3; }
        .blog-card-dynamic__title a { color: inherit; text-decoration: none; }
        .blog-card-dynamic__title a:hover { color: var(--conalz-primary); }
        .blog-card-dynamic__excerpt { color: #555; margin-bottom: 25px; }
        .blog-card-dynamic .thm-btn { padding: 10px 25px; font-size: 14px; }

        /* Sidebar */
        .sidebar { padding-left: 20px; }
        .sidebar__widget { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 5px 25px rgba(0,0,0,0.07); margin-bottom: 30px; }
        .sidebar__title { font-size: 20px; font-weight: 700; color: var(--conalz-dark-blue); margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid #f0f0f0; }
        .sidebar__search form { position: relative; }
        .sidebar__search input { width: 100%; height: 50px; border: 1px solid #e0e0e0; border-radius: 4px; padding: 0 50px 0 20px; }
        .sidebar__search button { position: absolute; top: 0; right: 0; bottom: 0; width: 50px; background: var(--conalz-primary); color: #fff; border: none; border-radius: 0 4px 4px 0; }
        .sidebar__category-list, .sidebar__post-list { list-style: none; padding: 0; margin: 0; }
        .sidebar__category-list li a, .sidebar__post-list li a { display: block; padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #555; text-decoration: none; transition: all .3s ease; }
        .sidebar__category-list li:last-child a, .sidebar__post-list li:last-child a { border-bottom: none; }
        .sidebar__category-list li a:hover, .sidebar__post-list li a:hover { color: var(--conalz-primary); padding-left: 5px; }
        .sidebar__post-list li a .title { font-weight: 600; color: var(--conalz-dark-blue); display: block; }
        .sidebar__post-list li a .date { font-size: 13px; color: #888; }

        /* Footer colors */
        .footer-widget__about-content p, .footer-widget__post-content p, .site-footer__bottom-text p { color:#ffffff !important; }
        .footer-widget__title { color:#ffffff !important; }
        .footer-widget__links-list li a, .footer-widget__contact-list .text p a, .footer-widget__post-content h5 a, .site-footer__bottom-text-two li a { color:#ffffff !important; }
        .footer-widget__links-list li a:hover, .footer-widget__contact-list .text p a:hover, .footer-widget__post-content h5 a:hover, .site-footer__bottom-text-two li a:hover { color:var(--conalz-primary) !important; }

        /* Mobile hero fit */
        @media (max-width: 991.98px) {
            .page-header { padding:160px 0 120px; }
            .page-header__inner h2 { font-size:48px; }
            .sidebar { padding-left: 0; margin-top: 50px; }
        }
        @media (max-width: 575.98px) {
            .page-header { padding:120px 0 80px; }
            .page-header__inner h2 { font-size:36px; line-height:1.15; }
        }
    </style>
</head>
<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="preloader" style="display: none;">
        <div class="preloader__image"></div>
    </div>
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="main-header__top-inner clearfix">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__top-address-list">
                            <li>
                                <div class="icon"><span class="icon-email-1"></span></div>
                                <div class="text"><p><a href="mailto:mashabelainvestment13@gmail.com">mashabelainvestment13@gmail.com</a></p></div>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-clock"></span></div>
                                <div class="text"><p>Mon - Fri 8:00 - 6:30</p></div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__btn-box">
                            <a href="contact.php" class="thm-btn main-header__btn">Request a Quote</a>
                        </div>
                        <div class="main-header__top-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="main-menu__wrapper-inner clearfix">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="index.php"><img src="assets/logo.png" alt="Mashabela Investments Logo"></a>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li class="dropdown">
                                        <a href="index.php#services">Services</a>
                                        <ul>
                                            <li><a href="index.php#services-mining">Mining-Centric Services</a></li>
                                            <li><a href="index.php#services-logistics">Integrated Logistics</a></li>
                                            <li><a href="index.php#services-value">Value-Added Services</a></li>
                                            <li><a href="index.php#services-support">Support Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="current"><a href="blog.php">Blog</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                                </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call-search">
                                <div class="main-menu__call">
                                    <div class="main-menu__call-icon"><span class="icon-phone"></span></div>
                                    <div class="main-menu__call-content">
                                        <span>Phone Number</span>
                                        <p><a href="tel:+27613370359">+27 61 337 0359</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('https://images.unsplash.com/photo-1457369804613-52c61a468e7d?q=80&w=1920&auto=format&fit=crop');"></div>
            <div class="container">
                <div class="page-header__inner text-left">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li>Blog</li>
                    </ul>
                    <h2>Our Insights</h2>
                    <p class="page-header__subtitle">News, articles, and industry analysis</p>
                </div>
            </div>
        </section>

        <section class="section-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-posts">
                            <?php if (!empty($posts)): ?>
                                <?php foreach ($posts as $post): ?>
                                    <div class="blog-card-dynamic">
                                        <div class="blog-card-dynamic__image" style="background-image: url('<?php echo htmlspecialchars($post['image_url']); ?>');"></div>
                                        <div class="blog-card-dynamic__content">
                                            <p class="blog-card-dynamic__date"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></p>
                                            <h3 class="blog-card-dynamic__title">
                                                <a href="blog-post.php?id=<?php echo $post['id']; ?>"><?php echo htmlspecialchars($post['title']); ?></a>
                                            </h3>
                                            <p class="blog-card-dynamic__excerpt"><?php echo get_excerpt($post['content']); ?></p>
                                            <a href="blog-post.php?id=<?php echo $post['id']; ?>" class="thm-btn">Read More</a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="alert alert-info">
                                    <?php if ($db_error): ?>
                                        <p>Could not load posts. <?php echo $db_error; ?></p>
                                        <p>This may be because the database is not set up or the 'posts' table is empty. Please check your configuration.</p>
                                    <?php else: ?>
                                        <p>No blog posts have been published yet. Check back soon!</p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- Pagination (optional) -->
                        <div class="text-center mt-5">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <div class="sidebar__widget sidebar__search">
                                <h3 class="sidebar__title">Search</h3>
                                <form action="#">
                                    <input type="text" placeholder="Search posts...">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__widget sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list">
                                    <li><a href="#">Mining Industry</a></li>
                                    <li><a href="#">Logistics & Supply Chain</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Sustainability</a></li>
                                    <li><a href="#">Company News</a></li>
                                </ul>
                            </div>
                            <div class="sidebar__widget sidebar__post">
                                <h3 class="sidebar__title">Recent Posts</h3>
                                <ul class="sidebar__post-list">
                                    <?php if (!empty($posts)): ?>
                                        <?php foreach (array_slice($posts, 0, 3) as $post): ?>
                                            <li>
                                                <a href="blog-post.php?id=<?php echo $post['id']; ?>">
                                                    <span class="title"><?php echo htmlspecialchars($post['title']); ?></span>
                                                    <span class="date"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <li>No recent posts.</li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>

        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(https://themazine.com/mr/conalz-html/assets/images/backgrounds/site-footer-bg.jpg);"></div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo-box">
                                    <div class="footer-widget__about-logo">
                                        <a href="index.php"><img src="assets/logo.png" alt="Mashabela Investments Footer Logo"></a>
                                    </div>
                                </div>
                                <div class="footer-widget__about-content">
                                    <p>Your trusted partner in integrated <br> mining and logistics solutions, <br> from source to destination.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Explore</h3>
                                </div>
                                <ul class="footer-widget__links-list list-unstyled">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="index.php#services">Services</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Contact</h3>
                                </div>
                                <ul class="footer-widget__contact-list list-unstyled">
                                    <li>
                                        <div class="icon"><span class="icon-email-1"></span></div>
                                        <div class="text"><p><a href="mailto:mashabelainvestment13@gmail.com">mashabelainvestment13@gmail.com</a></p></div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="icon-phone"></span></div>
                                        <div class="text"><p><a href="tel:+27613370359">+27 61 337 0359</a></p></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__post">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Recent Post</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__bottom-text">
                                    <p>Copyright © 2025 Mashabela Investments. All Rights Reserved.</p>
                                </div>
                                <ul class="site-footer__bottom-text-two list-unstyled">
                                    <li><a href="about.php">Terms of Use</a></li>
                                    <li><a href="about.php">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/logo.png" width="143" alt="Mashabela Investments Logo"></a>
            </div>
            <div class="mobile-nav__container"></div> 
        </div>
    </div>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/polyglot-language-switcher/jquery.polyglot.language.switcher.js"></script>
    
    <script src="assets/js/conalz.js"></script>
    <script src="script.js"></script>
</body>
</html>