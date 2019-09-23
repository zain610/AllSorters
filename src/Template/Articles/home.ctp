<div class="banner" id="home">
    <div class="container">
        <section class="slider">
            <div>
                <ul class="slides">
                    <li>
                        <div class="banner-info">
                            <h2>GET HELP CARING FOR YOUR LOVED ONE</h2>
                            <p>Nasagni dolorequaone voluptase keroas emsequi nesas ciuneque pobasera .</p>
                            <a class="hvr-shutter-in-horizontal" href="#">Learn More</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

    </div>
</div>
<hr>
<div class="services">
    <div class="container">
        <div class="camp">
            <h3>Services Overview</h3>
            <?php foreach($services as $service) { ?>
                <div class="col-lg-2 minist-right">
                    <img src="https://images.unsplash.com/photo-1503541517233-120571491cf3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=633&q=80" class="img-responsive" alt="">
                    <h4><?= $service['Service_Title'] ?></h4>
                    <span><?= $this->Text->truncate(h($service['Service_Description']), 20, ['ellipsis' => '...',
                            'exact' => false]) ?></span>
                    <?= $this->Html->link('More', ['controller' => 'Services', 'action'=> 'displayServices', 'id'=>$service['Service_id']], ['class' => 'hvr-shutter-in-horizontal']) ?>

                </div>
            <?php }?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<hr>
<div class="services container">
    <h3>Blogs</h3>
    <div class="list-group pre-scrollable">
        <?php foreach ($blogs as $blog) { ?>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h4><?= $blog['title'] ?></h4>
                    <button class="btn btn-primary"> Read More </button>
                    <p><?= $blog['Body'] ?></p>
                    <small>Date Published: <?= $blog['created'] ?></small>

                </div>


            </a>
        <?php } ?>
    </div>
</div>
<hr>
<div class="about">
    <div class="container">
        <div class="col-md-8 about-right">
            <h4>Contact us for the Appropriate level of Care</h4>
            <div class="offer offer-right">
                <img src="images/4.jpg" class="img-responsive" alt="">
                <form>
                    <input type="text" value="Enter Your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>


        <!--        <div class="col-md-4 about-left">-->
        <!--            <h4>Elders Care</h4>-->
        <!--            <ul>-->
        <!--                <li><a href="#"><span></span> Lorem Ipsum has been </a></li>-->
        <!--                <li><a href="#"><span></span> unknown printer took a galley </a></li>-->
        <!--                <li><a href="#"><span></span>containing Lorem Ipsum passages,</a></li>-->
        <!--                <li><a href="#"><span></span>publishing software like Aldus</a></li>-->
        <!--                <li><a href="#"><span></span>PageMaker including versions</a></li>-->
        <!--            </ul>-->
        <!---->
        <!--        </div>-->
        <div class="clearfix"></div>
    </div>
</div>


