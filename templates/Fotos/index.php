<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Foto[]|\Cake\Collection\CollectionInterface $fotos
 */
?>
<div class="fotos index content">
    <?= $this->Html->link(__('New Foto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Fotos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fotos as $foto): ?>
                <tr>
                    <td><?= $this->Number->format($foto->id) ?></td>
                    <td><?= $foto->has('article') ? $this->Html->link($foto->article->name, ['controller' => 'Articles', 'action' => 'view', $foto->article->id]) : '' ?></td>
                    <td><?= h($foto->name) ?></td>
                    <td><?= h($foto->path) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $foto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $foto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $foto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foto->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
