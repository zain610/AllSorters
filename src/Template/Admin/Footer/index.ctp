<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Footer[]|\Cake\Collection\CollectionInterface $footer
 */
?>

<div class="table table-hover table-striped">
    <h3><?= __('Footer') ?></h3>
    <table class="articles-table table">

        <tbody>
            <?php foreach ($footer as $footer): ?>
                <div class="content table-responsive table-full-width">
                    <div class="row">
                        <div class="leftcolumn">
                            <h4>Phone: </h4><?= $footer->Phone?>
                            <h4>Email: </h4><?=$footer->Email?>
                            <h4>Address: </h4><?=$footer->Address?>
                            <h4>Twitter: </h4><?=$footer->Twitter?>
                            <h4>Facebook: </h4><?=$footer->Facebook?>
                            <h4>Google: </h4><?=$footer->Google?>
                            <h4>Tumblr: </h4><?=$footer->Tumblr?>
                        </div>
                    </div>
                </div>
                <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $footer->Footer_id]]) ?>

            <?php endforeach; ?>
        </tbody>
    </table>

</div>