<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lid $lid
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Lids'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lids form content">
            <?= $this->Form->create($lid) ?>
            <fieldset>
                <legend><?= __('Add Lid') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('body');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
