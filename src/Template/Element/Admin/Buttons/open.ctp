<?php
/**
 * @var \App\View\AppView $this
 * @var array $url
 * @var boolean $disabled
 */

echo $this->Form->postLink(
    '<i class="fa fa-arrow-left"></i> Re-open',
    isset($disabled) && $disabled ? [] : $url,
    [
        'class' => 'btn btn-oval btn-info btn-edit',
        'escape' => false,
        'confirm' => isset($disabled) && $disabled ? false : 'Are you sure?',
        'disabled' => isset($disabled) && $disabled
    ]
);

