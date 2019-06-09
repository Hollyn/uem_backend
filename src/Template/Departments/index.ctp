
<div class="panel">
    <div class="panel-heading">
        <h1 class="panel-title"><b>Lise des départements</b></h1>
    </div>
    <div class="panel-body">
    <table cellpadding="0" cellspacing="0" class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name', "Nom") ?></th>
                <th scope="col"><?= $this->Paginator->sort('abbreviation', "Abréviation") ?></th>
                <th scope="col"><?= $this->Paginator->sort('description', "Description") ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departments as $department): ?>
            <tr>
                <td><?= $this->Number->format($department->id) ?></td>
                <td><?= h($department->name) ?></td>
                <td><?= h($department->abbreviation) ?></td>
                <td><?= h($department->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $department->id]) ?> |
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $department->id]) ?> |
                    <?= $this->Form->postLink(__('Effacer'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id)]) ?>
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
            <?= $this->Paginator->next(__('Suivant') . ' >') ?>
            <?= $this->Paginator->last(__('Dernier') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, montrant {{current}} rentrée(s) sur {{count}} total')]) ?></p>
    </div>
</div>
</div>