
<?php
    $sex_m = 0;
    $sex_f = 0;

    foreach ($group->users as $user){
        if ($user->sex)
            $sex_m ++;
        else
            $sex_f ++;

    }
?>


<div class="row">

    <div class="col-md-6">
        <!-- PANEL HEADLINE -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title"><?= h($group->name) ?></h3>
            </div>
            <div class="panel-body">
                <table class="vertical-table">
                    <tr>
                        <th scope="row"><?= __('Name') ?></th>
                        <td> : <?= h($group->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Description') ?></th>
                        <td> : <?= h($group->description) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Crée le') ?></th>
                        <td> : <?= h($group->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modifié le') ?></th>
                        <td> : <?= h($group->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- END PANEL HEADLINE -->
    </div>

    <div class="col-md-6">
        <!-- PANEL HEADLINE -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <p class="panel-subtitle">Informations supplémentaires</p>
            </div>
            <div class="panel-body">
                <table class="vertical-table">
                    <tr>
                        <th scope="row"><?= __('Utilisateurs') ?></th>
                        <td> : <?= h(count($group->users)) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Sexe Masculin') ?></th>
                        <td> : <?= h($sex_m) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Sexe féminin') ?></th>
                        <td> : <?= h($sex_f) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- END PANEL HEADLINE -->
    </div>
</div>


<div class="row">

    <div class="col-md-12">
        <!-- PANEL HEADLINE -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Utilisateurs associés') ?></h3>
            </div>

            <div class="panel-body">


                <?php if (!empty($group->users)): ?>



                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('firstname', 'Prénom') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('lastname', 'Derisse') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('email', 'E-mail') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('address', 'Adresse') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('phone', 'Téléphone') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('avatar', 'Avatar') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('department_id', "Département") ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($group->users as $user): ?>
                            <tr>
                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= h($user->firstname) ?></td>
                                <td><?= h($user->lastname) ?></td>
                                <td><?= h($user->email) ?></td>
                                <td><?= h($user->address) ?></td>
                                <td><?= h((empty($user->phone) ? '-' : $user->phone)) ?></td>
                                <td><?= $this->Html->image(($user->avatar == "" || $user->avatar =="null" || empty($user->avatar)) ? "default_avatar.png" : $user->avatar, ['height' => 50])?></td>
                                <td><?= $user->has('department') ? $this->Html->link($user->department->abbreviation, ['controller' => 'Departments', 'action' => 'view', $user->department->id]) : '' ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('Voir'), ['controller' => 'Users', 'action' => 'view', $user->id]) ?> |
                                    <?= $this->Html->link(__('Modifier'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?> |
                                    <?= $this->Form->postLink(__('Effacer'), ['controller' => 'Users', 'action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                </td>
                            </tr>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>













                <?php endif; ?>


            </div>
        </div>
        <!-- END PANEL HEADLINE -->
    </div>
</div>




