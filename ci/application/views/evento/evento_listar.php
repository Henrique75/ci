<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Eventos cadastrados
            <small>Listar todos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Painel</a></li>
            <li class="active">Listar Eventos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listar</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>                                    
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Evento</th>
                                    <th>Criado em:</th>
                                    <th>Aberto?</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 1;
                                foreach ($eventos as $ev) {
                                    ?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td> <?php echo $ev->eve_id; ?></td>
                                        <td><?php echo $ev->eve_nome; ?></td>                                        
                                        <td><?php echo $ev->eve_datacadastro; ?></td>                                         
                                        <td><?php echo ( $ev->eve_aberto == 0 ? "Sim" : "Não" ); ?></td>
                                        <td><div class="btn-group">
                                                <a href="<?= base_url() ?>evento/" ><button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button></a>
                                                <a href="<?= base_url() ?>evento/evento_editar/<?= $ev->eve_id ?>" ><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button></a>
                                                <a href="<?= base_url() ?>evento/evento_excluir/<?= $ev->eve_id ?>"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                            </div></td>
                                    </tr>
                                <?php }
                                ?>                               
                            </tbody>
                            <tfoot>
                                <tr>                                    
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Evento</th>
                                    <th>Criado em:</th>
                                    <th>Aberto?</th>
                                    <th>Ações</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper-->

