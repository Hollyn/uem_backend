<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Engagement[]|\Cake\Collection\CollectionInterface $engagements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Engagement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="engagements index large-9 medium-8 columns content">
    <h3><?= __('Engagements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('engagement') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($engagements as $engagement): ?>
            <tr>
                <td><?= $this->Number->format($engagement->id) ?></td>
                <td><?= h($engagement->engagement) ?></td>
                <td><?= $engagement->has('user') ? $this->Html->link($engagement->user->id, ['controller' => 'Users', 'action' => 'view', $engagement->user->id]) : '' ?></td>
                <td><?= $engagement->has('event') ? $this->Html->link($engagement->event->title, ['controller' => 'Events', 'action' => 'view', $engagement->event->id]) : '' ?></td>
                <td><?= h($engagement->created) ?></td>
                <td><?= h($engagement->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $engagement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $engagement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $engagement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $engagement->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
