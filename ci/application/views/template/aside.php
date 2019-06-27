       
<!-- AsideBar-->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() . "assets/"; ?>dist/img/diogo-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Diogo Pimenta</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU PRINCIPAL</li>
            <li><a href="<?= base_url() ?>painel/index"><i class="fa fa-th"></i> <span>Painel</span></a></li>
            <li><a href="<?= base_url() ?>painel/index"><i class="fa fa-user"></i> <span>Dados Pessoais</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Eventos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url() ?>evento/evento_listar"><i class="fa fa-circle-o"></i> Listar eventos</a></li>
                    <li><a href="<?= base_url() ?>evento/evento_novo"><i class="fa fa-plus-circle"></i> Novo evento</a></li>                                        
                </ul>
            </li>            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Estatísticas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url()?>pagina/cadastrar_inicio"><i class="fa fa-circle-o"></i>Eventos </a></li>
                    <li><a href="<?php echo base_url() . "assets/"; ?>pages/charts/morris.html"><i class="fa fa-circle-o"></i> Participantes</a></li>
                    <li><a href="<?php echo base_url() . "assets/"; ?>pages/charts/flot.html"><i class="fa fa-circle-o"></i> Instituições</a></li>
                    <li><a href="<?php echo base_url() . "assets/"; ?>pages/charts/inline.html"><i class="fa fa-circle-o"></i> Organizações</a></li>
                </ul>
            </li>                                    

            <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentação</span></a></li>            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

