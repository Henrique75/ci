       
<!-- AsideBar-->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() . "assets/"; ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?= base_url() ?>painel/index"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Eventos</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url() ?>evento/evento_listar"><i class="fa fa-plus-circle"></i> Listar eventos</a></li>
                    <li><a href="<?= base_url() ?>evento/evento_novo"><i class="fa fa-plus-circle"></i> Novo evento</a></li>                                        
                </ul>
            </li>            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Editar página inicial</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url()?>pagina/cadastrar_inicio"><i class="fa fa-circle-o"></i>Editar Home </a></li>
                    <li><a href="<?php echo base_url() . "assets/"; ?>pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="<?php echo base_url() . "assets/"; ?>pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="<?php echo base_url() . "assets/"; ?>pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                </ul>
            </li>                                    

            <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentação</span></a></li>            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

