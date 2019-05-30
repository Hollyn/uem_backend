
<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="index.html">
            <?= $this->Html->image('logo-dark.png', ['alt' => 'Klorofil Logo', 'class' => 'img-responsive logo']) ?>
        </a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?= $this->Html->image('user.png', ['alt' => 'Avatar', 'class' => 'img-circle']) ?>

                        <span><?= $this->request->session()->read('Auth.User')['firstname'] ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <?= $this->Html->link(
                            " Mon profil",
                            ['controller' => "Users", 'action' => "profile"],
                            ['class' => 'lnr lnr-user']); ?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                            " Déconnexion",
                            ['controller' => 'Users', 'action' => 'logout'],
                            ['class' => 'lnr lnr-exit']); ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->