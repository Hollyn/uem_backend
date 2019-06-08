
    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Lise des utilisateurs</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('firstname', 'Prénom') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('lastname','Nom') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('sex', 'Sexe') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email', 'E-mail') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('address', 'Adresse') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('phone', 'Teléphone') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('avatar', 'Avatar') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('group_id', "Groupe") ?></th>
                    <th scope="col"><?= $this->Paginator->sort('department_id', "Département") ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->firstname) ?></td>
                        <td><?= h($user->lastname) ?></td>
                        <td><?= h(($user->sex) ? "M": "F") ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->address) ?></td>
                        <td><?= h((empty($user->phone) ? '-' : $user->phone)) ?></td>
                        <td><?= $this->Html->image(($user->avatar == "" || $user->avatar =="null" || empty($user->avatar)) ? "default_avatar.png" : $user->avatar, ['height' => 50])?></td>
                        <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
                        <td><?= $user->has('department') ? $this->Html->link($user->department->abbreviation, ['controller' => 'Departments', 'action' => 'view', $user->department->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Voir'), ['action' => 'view', $user->id]) ?> |
                            <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $user->id]) ?> |
                            <?= $this->Form->postLink(__('Effacer'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, montrant {{current}} entrées(s) sur {{count}} au total')]) ?></p>
            </div>
        </div>
    </div>
    <!-- END TABLE HOVER -->
