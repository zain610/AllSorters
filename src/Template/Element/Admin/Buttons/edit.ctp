<?php
/**
 * @var \App\View\AppView $this
 * @var array $url
 */

echo $this->Html->link(
    '<i class="fa fa-edit"></i> Edit',
    $url,
    ['class' => 'btn btn-oval btn-primary btn-edit', 'escape' => false]
);