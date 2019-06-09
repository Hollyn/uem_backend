
<div class="row">
    <?= $this->Form->create($user, ['type' => 'file']) ?>
    <div class="col-md-8">
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Ajouter un utilisateur</h3>
                <p class="panel-subtitle"></p>
            </div>


            <div class="panel-body">
                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <?= $this->Form->control('firstname', [
                                "label" => "Prénom",
                                "tabindex" => "1",
                                "class" => "form-control",
                                "data-bv-notempty" => "true",
                                "data-bv-notempty-message" => "Le prénom est requis.",
                                "data-bv-stringLength" => "true",
                                "data-bv-stringLength-min" => "3",
                                "data-bv-stringLength-max" => "40",
                                "data-bv-stringLength-message" => "Le prénom doit comporter plus de 3 caractères et moins de 40 caractères."
                            ]);
                            ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <?= $this->Form->control('lastname', [
                                "label" => "Nom",
                                "tabindex" => "1",
                                "class" => "form-control",
                                "data-bv-notempty" => "true",
                                "data-bv-notempty-message" => "Le prénom est requis.",
                                "data-bv-stringLength" => "true",
                                "data-bv-stringLength-min" => "3",
                                "data-bv-stringLength-max" => "40",
                                "data-bv-stringLength-message" => "Le prénom doit comporter plus de 3 caractères et moins de 40 caractères."
                            ]);
                            ?>
                        </div>
                    </div>

                </div>


                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <?=
                            $this->Form->control(
                                'sex',
                                [
                                    'label' => 'Sexe',
                                    'options' => [

                                        "Féminin",
                                        "Masculin"
                                    ],
                                    'empty' => '--- Sélectionner ---',
                                    "tabindex" => "5",
                                    "class" => "form-control select-basic",
                                    "data-bv-notempty" => "true",
                                    "data-bv-notempty-message" => "Choisissez n'importe quel sexe."

                                ]
                            );
                            ?>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <?=
                            $this->Form->control(
                                'avatar',
                                [
                                    'label' => 'Avatar',
                                    "class" => "form-control"

                                ]
                            );
                            ?>
                        </div>
                    </div>

                </div>


                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <?=

                            $this->Form->control('phone',
                                [
                                    'label' => "Téléphone",
                                    'class' => 'form-control'
                                ]);
                            ?>

                            <span class="help-block">(999) 999-9999</span>
                        </div>
                    </div>

                </div>


                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">

                            <?=
                            $this->Form->control('email',
                                [
                                    "label" => "E-mail",
                                    "tabindex" => "9",
                                    "class" => "form-control",
                                    "data-bv-emailAddress" => "true",
                                    "data-bv-emailAddress-message" => "Invalid Email"
                                ]

                            );

                            ?>




                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">

                            <?=
                            $this->Form->control('address',
                                [
                                    'label' => "Adresse",
                                    "tabindex" => "10",
                                    "class" => "form-control"

                                ]
                            )
                            ?>
                        </div>
                    </div>

                </div>
                <hr />


                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <?=
                            $this->Form->control('password',
                                [
                                    'label' => 'Mot de passe',
                                    "tabindex" => "12",
                                    "class" => "form-control password",
                                    "data-bv-notempty" => "true",
                                    "data-bv-notempty-message" => "Mot de passe requis.",
                                    "data-bv-identical" => "true",
                                    "data-bv-identical-message" => "Le mot de passe et sa confirmation ne sont pas les mêmes"
                                ])

                            ?>


                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <?=
                        $this->Form->control('group_id',
                            [
                                'label' => "Groupe",
                                'options' => $groups,
                                'empty' => true,
                                "tabindex" => "14",
                                "class" => "form-control",
                                "data-bv-notempty" => "true",
                                "data-bv-notempty-message" => "Choisissez n'importe quel groupe d'utilisateur."

                            ]);
                        ?>

                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <?=
                        $this->Form->control('department_id',
                            [
                                'label' => "Département",
                                'options' => $departments,
                                'empty' => true,
                                "tabindex" => "14",
                                "class" => "form-control",
                                "data-bv-notempty" => "true",
                                "data-bv-notempty-message" => "Choisissez n'importe quel groupe d'utilisateur."

                            ]);
                        ?>

                    </div>
                </div>


            </div>
        </div>

    </div>


    <div class="col-md-4">
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Photo</h3>
                <p class="panel-subtitle"></p>
            </div>
            <div class="panel-body">
                <div id="cphBody_updatePnlPhoto">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="divPreviewPhoto" class="text-center">
                                <center style="border: 2px solid #e6e6e6; padding: 10px 10px;">
                                    <?= $this->Html->image('default_avatar.png', ['class' => 'img-responsive', 'style' => "height:180px; width:170px"]) ?>
                                </center>
                                <br />
                                <input type="button" class="btn btn-default btn-sm" value="Change Photo" onclick="UploadPhoto();" />
                                <input type="submit" name="ctl00$cphBody$btnRemovePhoto" value="Remove Photo" id="cphBody_btnRemovePhoto" data-content="Are you sure?" data-placement="bottom" data-btn-cancel-class="btn-danger btn-sm" class="btn btn-danger btn-sm" title="Confirm" data-singleton="true" data-btn-cancel-label="No" data-btn-ok-label="Yes" data-btn-ok-class="btn-success btn-sm" data-toggle="confirmation" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-center">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg']) ?>
            <?= $this->Html->link('Annuler',
                [
                    'controller' => 'Users',
                    'action' => 'index'
                ],
                [
                    'class' => 'btn btn-lg btn-default'
                ]) ?>
        </div>
    </div>

    <?= $this->Form->end() ?>
</div>


