
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <?= $this->Html->link(
                        '<i class="lnr lnr-home"></i> Tableau de bord',
                        ['controller' => 'Home', 'action' => 'index'],
                        ['class' => ($this->request->params['controller'] == 'Home') ? 'active' : '', 'escape' => false,]
                    )?>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<i class="fa fa-calendar"></i> Événements',
                        ['controller' => 'Events', 'action' => 'index'],
                        ['class' => ($this->request->params['controller'] == 'Events') ? 'active' : '', 'escape' => false,]
                    )?>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<i class="lnr lnr-users"></i> Utilisateurs <i class="icon-submenu lnr lnr-chevron-left"></i>',
                        "#subUser",
                        [
                            'class' => ($this->request->params['controller'] == 'Users') ? 'active' : '',
                            'escape' => false,
                            'data-toggle' => 'collapse'
                        ]
                    )?>
                    <div id="subUser" class="collapse ">
                        <ul class="nav">
                            <li>
                                <?= $this->Html->link(
                                    'Nouvel utiisateurs',
                                    ['controller' => "Users", "action" => "add"],
                                    [
                                        'class' => ($this->request->params['controller'] == 'Users') ? 'active' : '',
                                        'escape' => false
                                    ]
                                )?>
                            </li>
                            <li>
                                <?= $this->Html->link(
                                    'Liste des utiisateurs',
                                    ['controller' => "Users", "action" => "index"],
                                    [
                                        'class' => ($this->request->params['controller'] == 'Users') ? 'active' : '',
                                        'escape' => false
                                    ]
                                )?>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<i class="lnr lnr-users"></i> Groupes <i class="icon-submenu lnr lnr-chevron-left"></i>',
                        "#subGroup",
                        [
                            'class' => ($this->request->params['controller'] == 'Groups') ? 'active' : '',
                            'escape' => false,
                            'data-toggle' => 'collapse'
                        ]
                    )?>
                    <div id="subGroup" class="collapse ">
                        <ul class="nav">
                            <li>
                                <?= $this->Html->link(
                                    'Nouveau groupe',
                                    ['controller' => "Groups", "action" => "add"],
                                    [
                                        'escape' => false
                                    ]
                                )?>
                            </li>
                            <li>
                                <?= $this->Html->link(
                                    'Liste des groupes',
                                    ['controller' => "Groups", "action" => "index"],
                                    [
                                        'escape' => false
                                    ]
                                )?>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<i class="lnr lnr-users"></i> Départements <i class="icon-submenu lnr lnr-chevron-left"></i>',
                        "#subDept",
                        [
                            'class' => ($this->request->params['controller'] == 'Departments') ? 'active' : '',
                            'escape' => false,
                            'data-toggle' => 'collapse'
                        ]
                    )?>
                    <div id="subDept" class="collapse ">
                        <ul class="nav">
                            <li>
                                <?= $this->Html->link(
                                    'Nouveau départements',
                                    ['controller' => "Departments", "action" => "add"],
                                    [
                                        'escape' => false
                                    ]
                                )?>
                            </li>
                            <li>
                                <?= $this->Html->link(
                                    'Liste des départements',
                                    ['controller' => "Departments", "action" => "index"],
                                    [
                                        'escape' => false
                                    ]
                                )?>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">Profile</a></li>
                        </ul>
                    </div>
                </li> -->
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->