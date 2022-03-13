
<?= $this->Html->script('comments', ['block' => true]) ?>

<?php $group_id = $this->request->session()->read('Auth.User')['group_id'] ?>

<?php if ($group_id = 2): ?>
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
                                                <h4><?= h($event['title']) ?></h4>
                                            </div>
                                            <div class="panel-body">
<!--                                                <img style="width: 100%;" src="--><?//= 'img/'. $event['photo_path'] ?><!--" class="text-center" />-->
                                                <div class="clearfix"></div>
                                                <hr>

                                                <p><?= h($event['description']) ?></p>

                                                <hr>
                                                <form>
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <span class="btn btn-default">+1</span>
                                                            <span class="btn btn-default"><i class="glyphicon glyphicon-share"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control " placeholder="Add a comment ...">
                                                        <div class="input-group-btn">
                                                            <span event_id="<?= $event['user_id'] ?>" onclick="afficher(this)" user_id="<?=  $this->request->session()->read('Auth.User.id') ?>" class="btn btn-default btn_comment"><i class="glyphicon glyphicon-send"></i></span>
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

