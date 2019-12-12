<div class="container services inner-blogs" style="width: 30%; background-color: #f7d2e3; height: fit-content; margin-right: 0.75rem; border-radius: 15px;">
    <h3>Mary's Recent Blogs</h3>
    <div class="blogs-carousel ">
        <?php foreach ($blogs as $blog) { ?>
            <div class="card ">
                <div class="card-body">
                    <h5 style="" class="card-title"><?= $blog['title'] ?></h5>
                    <div id="blog-card-content">
                        <p class="card-text"><?= $blog['Body'] ?></p>
                    </div>
                    <?= $this->Html->link('Read More', ['controller' => 'BlogPost', 'action'=> 'view'.'/'."$blog[blog_post_id]"],['class'=>'btn btn-primary']);?>
                </div>
            </div>
        <?php } ?>
    </div>
    <hr style="border: 2px solid #343a40; margin: 1rem">

</div>
