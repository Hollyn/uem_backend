<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Engagements'), ['controller' => 'Engagements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Engagement'), ['controller' => 'Engagements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Likes'), ['controller' => 'Likes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Like'), ['controller' => 'Likes', 'action' => 'add']) ?></li>
    </ul>
</nav>


<div class="col-md-12">
    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Hover Row</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Titre') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Début') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Fin') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('statut') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Département') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($events as $event): ?>
                    <tr>
                        <td><?= $this->Number->format($event->id) ?></td>
                        <td><?= h($event->title) ?></td>
                        <td><?= h($event->location) ?></td>
                        <td><?= h($event->date) ?></td>
                        <td><?= h($event->startTime) ?></td>
                        <td><?= h($event->endTime) ?></td>
                        <td><?= h($event->status) ? "Active" : "Inactive" ?></td>
                        <td><?= $event->has('user') ? $this->Html->link($event->user->department->abbreviation, ['controller' => 'Departments', 'action' => 'view', $event->user->department_id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END TABLE HOVER -->
</div>
