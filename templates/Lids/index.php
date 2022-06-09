<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lid[]|\Cake\Collection\CollectionInterface $lids
 */
?>
<div class="lids index content">
    <?= $this->Html->link(__('New Lid'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lids') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lids as $lid): ?>
                <tr>
                    <td><?= $this->Number->format($lid->id) ?></td>
                    <td><?= h($lid->name) ?></td>
                    <td><?= h($lid->created) ?></td>
                    <td><?= h($lid->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lid->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lid->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lid->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lid->id)]) ?>
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
