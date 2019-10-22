<html>
<head>
    <title>Blog</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- BOOTSTRAP CORE STYLE -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICON STYLE -->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body>
<div class="container">

    <div class="row">
            <div class="col-md-8 ">
                <?php foreach ($blogPost as $blogPost): ?>
                <div class="blog-post">
                    <h2><?php echo $blogPost->title?></h2>
                    <h4>Posted by <a href="#">admin</a> on 24th January 2015 </h4>
                    <p><?php echo $blogPost->Description?></p>

                    <a href="#" class="btn btn-default btn-lg ">Read More <i class="fa fa-angle-right"></i></a>

                </div>
                <?php endforeach; ?>
            <br />
            <nav>
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>
<script src="js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="js/bootstrap.js"></script>

    </div>
</div>
<!-- banner -->
<div class="services">
    <div class="container">
        <div class="camp">
            <h3>Recent Blog</h3>
            <?php foreach ($blogPost as $blogPost)?>
            <div class="col-md-4 minist-right">
<!--                <img src="images/4.jpg" class="img-responsive" alt="">-->
                <h4><?php echo $blogPost->title?></h4>
                <p><?php echo $blogPost->Description?></p>
                <a><?= $this->element('Client/Buttons/view', ['url' => ['action' => 'view', $blogPost->blog_post_id]]) ?></a>
            </div>
        </div>
    </div>
</div>

</div>

<!-- footer -->
<div class="footer" id="contact">
    <div class="container">
        <div class="col-md-4 contact-left">
            <h3>Address</h3>
            <address>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">P :</abbr> (123) 456-7890
            </address>
        </div>
        <div class="col-md-4 ftr-gd">
            <h3>Follow Us</h3>
            <ul class="social">
                <li><a href="#"><i></i></a> </li>
                <li><a href="#"><i class="facebook"></i></a></li>
                <li><a href="#"><i class="goog"></i> </a></li>
                <li><a href="#"><i class="lin"></i> </a></li>
            </ul>
        </div>
        <div class="col-md-4 contact-left">
            <h3>Phone/Fax</h3>
            <p>Phone : +1234567890 </p>
            <p>Fax : +1234567890 </p>
            <p>Email : <a href="mailto:info@example.com">info@mycompany.com</a> </p>
        </div>
        <div class="clearfix"></div>
        <div class="copyright">
            <p>Copyright &copy; 2015.Company name All rights reserved.</p>
        </div>
    </div>
</div>

<!-- footer -->
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
</body>
</html>
