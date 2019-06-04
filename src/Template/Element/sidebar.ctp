
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <?= $this->Html->link(
                            '<i class="lnr lnr-home"></i> Tableau de bord',
                            "#",
                            ['class' => ($this->request->params['controller'] == 'Home') ? 'active' : '', 'escape' => false,]
                    )?>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<i class="fa fa-calendar"></i> Événements',
                        ['controller' => 'Groups', 'action' => 'index'],
                        ['class' => ($this->request->params['controller'] == 'Events') ? 'active' : '', 'escape' => false,]
                    )?>
                </li>
                <li>
                    <?= $this->Html->link(
                            '<i class="lnr lnr-users"></i> Utilisateurs',
                            ['controller' => 'Users', 'action' => 'index'],
                            ['class' => ($this->request->params['controller'] == 'Users') ? 'active' : '', 'escape' => false,]
                    )?>
                </li>
                <li>
                    <?= $this->Html->link(
                            '<i class="fa fa-group"></i> Groupes',
                        ['controller' => 'Groups', 'action' => 'index'],
                            ['class' => ($this->request->params['controller'] == 'Groups') ? 'active' : '', 'escape' => false,]
                    )?>
                </li>
                <li>
                    <?= $this->Html->link(
                            '<i class="fa fa-building"></i> Départements',
                        ['controller' => 'Departments', 'action' => 'index'],
                            ['class' => ($this->request->params['controller'] == 'Departments') ? 'active' : '', 'escape' => false,]
                    )?>
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