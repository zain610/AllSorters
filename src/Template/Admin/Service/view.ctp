<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */

?>

<div class="content table-responsive table-full-width">

    <div class="row">
        <div class="leftcolumn">
            <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $service->Service_id]]) ?>

            <h3>Title: <?php echo $service->Service_Title?></h3>

            <h5>Description: <?php echo $service->Service_Description?></h5>
            <p>Details: <?php echo $service->Service_Detail?></p>

            <h4><?= __('Related Image') ?></h4>
            <?php if (!empty($service->image)): ?>

                <table cellpadding="0" cellspacing="0">
                    <tbody>
                    <?php foreach ($service->image as $image): ?>
                        <tr>
                            <td class="card" width="50%">
                                <?php echo $this->Html->image($image->path, ['alt' => 'CakePHP']); ?>
                            </td>
                            <td class="card-body">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>

                </table>
            <?php endif; ?>


        </div>
    </div>
</div>



