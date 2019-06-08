<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group[]|\Cake\Collection\CollectionInterface $groups
 */
?>
    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h1 class="panel-title"><b>Lise des groupes</b></h1>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name', 'Nom') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('description', 'Description') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($groups as $group): ?>
                    <tr>
                        <td><?= $this->Number->format($group->id) ?></td>
                        <td><?= h($group->name) ?></td>
                        <td><?= h($group->description) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Voir'), ['action' => 'view', $group->id]) ?> |
                            <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $group->id]) ?> |
                            <?= $this->Form->postLink(__('Effacer'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('Premier')) ?>
                    <?= $this->Paginator->prev('< ' . __('Précédent')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('suivant') . ' >') ?>
                    <?= $this->Paginator->last(__('dernier') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, montrant {{current}} entrées(s) sur {{count}} au total')]) ?></p>
            </div>
        </div>
    </div>
    <!-- END TABLE HOVER -->