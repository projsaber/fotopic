<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Foto $foto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Foto'), ['action' => 'edit', $foto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Foto'), ['action' => 'delete', $foto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Fotos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Foto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fotos view content">
            <h3><?= h($foto->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $foto->has('article') ? $this->Html->link($foto->article->name, ['controller' => 'Articles', 'action' => 'view', $foto->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($foto->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($foto->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($foto->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
