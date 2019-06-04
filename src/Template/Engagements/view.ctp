<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Engagement $engagement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Engagement'), ['action' => 'edit', $engagement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Engagement'), ['action' => 'delete', $engagement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $engagement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Engagements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Engagement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="engagements view large-9 medium-8 columns content">
    <h3><?= h($engagement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $engagement->has('user') ? $this->Html->link($engagement->user->id, ['controller' => 'Users', 'action' => 'view', $engagement->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $engagement->has('event') ? $this->Html->link($engagement->event->title, ['controller' => 'Events', 'action' => 'view', $engagement->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($engagement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($engagement->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($engagement->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Engagement') ?></th>
            <td><?= $engagement->engagement ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
