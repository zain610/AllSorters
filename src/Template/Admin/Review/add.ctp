<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<div class="col-md-8">
    <div class="content table-responsive table-full-width">
        <div class="card">
            <?= $this->Form->create($review) ?>
            <fieldset>
                <legend><?= __('Add Review') ?></legend>
                <?php
                echo $this->Form->control('Client_Name');
                echo $this->Form->control('Month_Year', ['minYear' => 2019,'empty' => true, 'hour' => false, 'minute'=> false, 'second'=> false, 'meridian' => false]);
                echo $this->Form->control('Suburb');
                echo $this->Form->control('Review_Details');
                ?>
            </fieldset>

            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->button('Preview', ['type' => 'button', 'onclick' => 'handlePreviewClick(this)'] ) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-user">
        <div class="image">
            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
        </div>
        <div class="content">
            <p class="description text-center"> "Lamborghini Mercy <br>
            </p>
        </div>
        <hr>
        <div class="text-center">
            <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
            <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
            <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

        </div>
    </div>
</div>