<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($event->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($event->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= $event->has('photo') ? $this->Html->link($event->photo->id, ['controller' => 'Photos', 'action' => 'view', $event->photo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $event->has('user') ? $this->Html->link($event->user->id, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($event->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('StartTime') ?></th>
            <td><?= h($event->startTime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EndTime') ?></th>
            <td><?= h($event->endTime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $event->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($event->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($event->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->comments as $comments): ?>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->comment) ?></td>
                <td><?= h($comments->event_id) ?></td>
                <td><?= h($comments->user_id) ?></td>
                <td><?= h($comments->created) ?></td>
                <td><?= h($comments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Engagements') ?></h4>
        <?php if (!empty($event->engagements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Engagement') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->engagements as $engagements): ?>
            <tr>
                <td><?= h($engagements->id) ?></td>
                <td><?= h($engagements->engagement) ?></td>
                <td><?= h($engagements->user_id) ?></td>
                <td><?= h($engagements->event_id) ?></td>
                <td><?= h($engagements->created) ?></td>
                <td><?= h($engagements->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Engagements', 'action' => 'view', $engagements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Engagements', 'action' => 'edit', $engagements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Engagements', 'action' => 'delete', $engagements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $engagements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Likes') ?></h4>
        <?php if (!empty($event->likes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('IsLiked') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->likes as $likes): ?>
            <tr>
                <td><?= h($likes->id) ?></td>
                <td><?= h($likes->isLiked) ?></td>
                <td><?= h($likes->event_id) ?></td>
                <td><?= h($likes->user_id) ?></td>
                <td><?= h($likes->created) ?></td>
                <td><?= h($likes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Likes', 'action' => 'view', $likes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Likes', 'action' => 'edit', $likes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Likes', 'action' => 'delete', $likes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
