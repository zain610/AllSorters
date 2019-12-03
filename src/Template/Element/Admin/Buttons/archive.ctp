<?php
/**
 * @var \App\View\AppView $this
 * @var array $url
 * @var boolean $disabled
 */

echo $this->Form->postLink(
    '<i class="fa fa-folder"></i> Archive',
    isset($disabled) && $disabled ? [] : $url,
    [
        'class' => 'btn btn-oval btn-warning btn-edit',
        'escape' => false,
        'confirm' => isset($disabled) && $disabled ? false : 'Are you sure?',
        'disabled' => isset($disabled) && $disabled
    ]
);

