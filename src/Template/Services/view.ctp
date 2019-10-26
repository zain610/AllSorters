<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<html>
<head>
    <title>Services</title>
</head>
<body>
<!-- header -->
<!-- banner -->
<div class="banner-1">
    <div class="container">

    </div>
</div>
<!-- banner -->
<div class="services">
    <div class="container">
        <div class="camp">
        <h3>Our Services</h3>
            <div class="related">
                <?php if (!empty($service->image)): ?>
                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                        <?php foreach ($service->image as $image): ?>
                            <tr>
                                <td class="card" width="50%">
                                    <?php echo $this->Html->image($image->path, ['alt' => 'CakePHP']); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        <div class="well">
            <h4><?php echo $service->Service_Title?></h4>
            <h4><?php echo $service->Service_Description?></h4>
            <p><?php echo $service->Service_Detail?></p>
        </div>
        <div class="clearfix"> </div>

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

