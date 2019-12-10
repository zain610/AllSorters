<?php
use Cake\ORM\TableRegistry;

$footer = TableRegistry::getTableLocator()->get('Footer');
$query = $footer->find();
?>

<body>
<!-- footer -->
<div class="footer" id="contact">
    <div class="container">
        <div class="col-md-4 contact-left">
            <h3>Address</h3>
                <?php foreach ($query as $footer): ?>
            <address>
                    <?php echo $footer->Address; ?>
                <br>
            </address>




        </div>
        <div class="col-md-4 ftr-gd">
            <h3>Follow Us</h3>
            <ul class="social">
                <li><a href="https://twitter.com/"><i></i></a> </li>
                <li><a href="https://www.facebook.com/"><i class="facebook"></i></a></li>
                <li><a href="https://google.com/"><i class="goog"></i> </a></li>
                <li><a href="https://au.linkedin.com/"><i class="lin"></i> </a></li>
            </ul>
        </div>
        <div class="col-md-4 contact-left">
            <h3>Contact</h3>
            <p>Phone: <?php echo $footer->Phone; ?></p>
            <p>Email : <a href="mailto:<?php echo $footer->Email; ?>"><?php echo $footer->Email; ?></a> </p>
        </div>
        <div class="clearfix"></div>
        <div class="copyright">
            <p>Copyright &copy; 2019.Allsorters All rights reserved.</p>
        </div>
    </div>
</div>
<?php endforeach; ?>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
</body>
