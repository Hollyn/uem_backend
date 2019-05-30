<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Like $like
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Like'), ['action' => 'edit', $like->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Like'), ['action' => 'delete', $like->id], ['confirm' => __('Are you sure you want to delete # {0}?', $like->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Likes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Like'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="likes view large-9 medium-8 columns content">
    <h3><?= h($like->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $like->has('event') ? $this->Html->link($like->event->title, ['controller' => 'Events', 'action' => 'view', $like->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $like->has('user') ? $this->Html->link($like->user->id, ['controller' => 'Users', 'action' => 'view', $like->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($like->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($like->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($like->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IsLike') ?></th>
            <td><?= $like->isLike ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
