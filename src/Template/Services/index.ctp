<!DOCTYPE HTML>
<html>
<head>
    <title>Services</title>
</head>
<body>
<!-- header -->

<div class="services">
    <div class="container">
        <div class="camp">
            <h3>Services Overview</h3>
            <?php foreach ($service as $service):?>
            <div class="col-md-4 minist-right">
                <img src="img/bg.jpg" class="img-responsive" alt="">


                <h4><?php echo $service->Service_Title?></h4>
                <p><?php echo $service->Service_Description?></p>
                <a><?= $this->element('Client/Buttons/view', ['url' => ['action' => 'view', $service->Service_id]]) ?></a>
            <br />
                    </div>
            <?php endforeach;?>
            <div class="clearfix"> </div>
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
