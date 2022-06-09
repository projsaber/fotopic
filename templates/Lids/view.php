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
            <?= $this->Html->link(__('Edit Lid'), ['action' => 'edit', $lid->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lid'), ['action' => 'delete', $lid->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lid->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lids'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lid'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lids view content">
            <h3><?= h($lid->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($lid->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lid->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($lid->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($lid->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($lid->body)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Articles') ?></h4>
                <?php if (!empty($lid->articles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Number') ?></th>
                            <th><?= __('Body') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Lid Id') ?></th>
                            <th><?= __('Package Id') ?></th>
                            <th><?= __('Tag Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($lid->articles as $articles) : ?>
                        <tr>
                            <td><?= h($articles->id) ?></td>
                            <td><?= h($articles->name) ?></td>
                            <td><?= h($articles->number) ?></td>
                            <td><?= h($articles->body) ?></td>
                            <td><?= h($articles->user_id) ?></td>
                            <td><?= h($articles->lid_id) ?></td>
                            <td><?= h($articles->package_id) ?></td>
                            <td><?= h($articles->tag_id) ?></td>
                            <td><?= h($articles->created) ?></td>
                            <td><?= h($articles->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
