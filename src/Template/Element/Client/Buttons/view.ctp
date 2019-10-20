<?php
/**
 * @var \App\View\AppView $this
 * @var array $url
 * @var string|null $target
 */

$attributes = ['class' => 'hvr-shutter-in-horizontal', 'escape' => false];
if (isset($target)) {
    $attributes['target'] = $target;
}

echo $this->Html->link(
    '<i class="fa fa-eye"></i> More',
    $url,
    $attributes
);
