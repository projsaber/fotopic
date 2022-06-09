<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles view content">
            <h3><?= h($article->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($article->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number') ?></th>
                    <td><?= h($article->number) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $article->has('user') ? $this->Html->link($article->user->id, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lid') ?></th>
                    <td><?= $article->has('lid') ? $this->Html->link($article->lid->name, ['controller' => 'Lids', 'action' => 'view', $article->lid->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Package') ?></th>
                    <td><?= $article->has('package') ? $this->Html->link($article->package->name, ['controller' => 'Packages', 'action' => 'view', $article->package->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tag') ?></th>
                    <td><?= $article->has('tag') ? $this->Html->link($article->tag->name, ['controller' => 'Tags', 'action' => 'view', $article->tag->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($article->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($article->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($article->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($article->body)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Fotos') ?></h4>
                <?php if (!empty($article->fotos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Article Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Path') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($article->fotos as $fotos) : ?>
                        <tr>
                            <td><?= h($fotos->id) ?></td>
                            <td><?= h($fotos->article_id) ?></td>
                            <td><?= h($fotos->name) ?></td>
                            <td><?= h($fotos->path) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Fotos', 'action' => 'view', $fotos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Fotos', 'action' => 'edit', $fotos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fotos', 'action' => 'delete', $fotos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fotos->id)]) ?>
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
