
<?= $this->Html->script('comments', ['block' => true]) ?>
<?= $this->Html->script('engagement', ['block' => true]) ?>

<?php $group_id = $this->request->session()->read('Auth.User')['group_id'] ?>
<?php if ($group_id == 1 or $group_id == 3): ?>
<div class="col-md-12">
    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Liste de événements</h3>
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
                            <?= $this->Html->link(__('Voir'), ['action' => 'view', $event->id]) ?> |
                            <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $event->id]) ?> |
                            <?= $this->Form->postLink(__('Effacer'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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
</div>
<?php elseif ($group_id = 2): ?>
    <div class="wrapper">
        <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">

                <!-- main right col -->
                <div class="column col-sm-12 col-xs-12" id="main">

                    <div class="padding">
                        <div class="full col-sm-10 col-md-offset-2">

                            <!-- content -->
                            <div class="row">


                                <!-- main col right -->
                                <div class="col-sm-10">

                                    <?php foreach ($events as $event): ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
<!--                                            <a href="#" class="pull-right">View all</a> -->
                                            <h4 style="display: inline-block"><?= h($event->title) ?></h4>
                                            <?php $icon = (in_array($event->id, $array_engagement_event_id)) ? '<i style="font-size: 35px;" class="glyphicon glyphicon-star"></i>' : '<i style="font-size: 35px;" class="glyphicon glyphicon-star-empty"></i>' ?>



                                            <span onclick="engaged(this)"
                                                  event_id="<?= $event->id ?>"
                                                  user_id="<?=  $this->request->session()->read('Auth.User.id') ?>"
                                                  style=" margin-top: 0px;" class="pull-right align-middle">
                                                <?php if (in_array($event->id, $array_engagement_event_id)): ?>
                                                <i style="font-size: 35px;" class="glyphicon glyphicon-star"></i>
                                                <?php else: ?>
                                                    <i style="font-size: 35px;" class="glyphicon glyphicon-star-empty"></i>
                                                <?php endif; ?>

                                            </span>
                                        </div>
                                        <div class="panel-body">
                                            <img style="width: 100%;" src="<?= 'img/'. $event->photo_path ?>" class="text-center" />
                                            <div class="clearfix"></div>
                                            <hr>

                                            <p><?= h($event->description) ?></p>

                                            <hr>
                                            <form>
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <span class="btn btn-default">+1</span>
                                                        <!--<span class="btn btn-default">
                                                            <i class="glyphicon glyphicon-share"></i>
                                                        </span>-->
                                                    </div>
                                                    <input type="text" class="form-control " placeholder="Add a comment ...">
                                                    <div class="input-group-btn">
                                                        <span event_id="<?= $event->user_id ?>" onclick="afficher(this)" user_id="<?=  $this->request->session()->read('Auth.User.id') ?>" class="btn btn-default btn_comment"><i class="glyphicon glyphicon-send"></i></span>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <?php endforeach; ?>



                                </div>
                            </div><!--/row-->



                        </div><!-- /col-9 -->
                    </div><!-- /padding -->
                </div>
                <!-- /main -->

            </div>
        </div>
    </div>


<?php endif; ?>

