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
                <div class="col-md-3 minist-right">
                <img src="https://images.unsplash.com/photo-1503541517233-120571491cf3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=633&q=80" class="img-responsive" alt="">
                <h4><?= $service['Service_Title'] ?></h4>
                <span><?= $service['Service_Detail']?></span>
                    <?= $this->Html->link('More', ['controller' => 'Services', 'action'=> 'displayServices', 'id'=>$service['Service_id']], ['class' => 'hvr-shutter-in-horizontal']) ?>

            </div>
            <?php }?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<hr>
<div class="offer">
    <div class="container">
        <div class="card col-md-4" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1551985954-a317e5a04547?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1053&q=80" class="card-img-top img-responsive" alt="...">
            <div class="card-body">
                <h4 style="margin-top: 1rem" class="card-title">We Offer Free Fall Prevention Home Safety</h4>
                <p class="card-text">web page publishing packages and web page editors now use Lorem Ipsum as their default model text, and a editors now use Lorem Ipsum as their default model text</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="clearfix"></div>
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
        <div class="list-group col-md-4">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small>Donec id elit non mi porta.</small>
            </a>
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


