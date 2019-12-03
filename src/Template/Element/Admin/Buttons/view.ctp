<?php
/**
 * @var \App\View\AppView $this
 * @var array $url
 * @var string|null $target
 */

$attributes = ['class' => 'btn btn-oval btn-secondary btn-view', 'escape' => false];
if (isset($target)) {
    $attributes['target'] = $target;
}

echo $this->Html->link(
    '<i class="fa fa-eye"></i> View',
    $url,
    $attributes
);