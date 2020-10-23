<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
<!--                            <div class="logo text-center">-->
<!--                            </div>-->
                            <p class="lead">Connectez-vous à votre compte</p>
                        </div>
                            <?= $this->Form->create('User', ['class' => 'form-auth-small']) ?>
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Mot de passe">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox">
                                    <span>Se souvenir de moi</span>
                                </label>
                            </div>
                            <?= $this->Form->button(__('S\'IDENTIFIER'), ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                            <div class="bottom">
                                <!--span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Mot de passe oublié?</a></span-->
                            </div>

                        <?= $this->Form->end() ?>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h1 class="heading">Gestion d'événements universitaires</h1>
                        <p>par les developpeurs</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
