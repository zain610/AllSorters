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
                            <h4>Address: </h4><?=$footer->Address?>
                            <h4>Facebook: </h4><?=$footer->Facebook?>
                            <h4>LinkedIn: </h4><?=$footer->Linkedin?>
                        </div>
                    </div>
                </div>
                <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $footer->Footer_id]]) ?>

            <?php endforeach; ?>
        </tbody>
    </table>

</div>
