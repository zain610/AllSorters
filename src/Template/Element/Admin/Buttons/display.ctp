<?php
/**
 * @var \App\View\AppView $this
 * @var array $url
 * @var boolean $disabled
 */

echo $this->Form->postLink(
    '<i class="fa fa-folder"></i> display',
    isset($disabled) && $disabled ? [] : $url,
    [
        'class' => 'btn btn-oval btn-warning btn-edit',
        'escape' => false,
        'disabled' => isset($disabled) && $disabled
    ]
);

