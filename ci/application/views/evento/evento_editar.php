<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            General Form Elements
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Eventos</a></li>
            <li class="active">Editar evento</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="<?= base_url() ?>evento/atualizar_evento">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nome" >Nome do evento</label>
                                <input type="text" name="nome_evento" value="<?php echo $eventos->eve_nome; ?>" class="form-control" id="nome" placeholder="...">
                            </div>
                            <!--
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" value="<?#= $ev->eve_nome ?>"class="form-control" id="descricao" placeholder="Descrição">
                            </div>
                            <div class="form-group">
                                <label for="upload_image">Imagem</label>
                                <input type="file" name="eve_img" value="<?#= $ev->eve_imagem ?>" id="upload_image">

                                <p class="help-block">Envie seu arquivo.</p>
                            </div>
                            <div class="form-group">
                                <label>Data de inicio:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="data_inicio" class="form-control pull-right" id="datepicker">
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label>Data de término:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="data_termino" class="form-control pull-right" id="datepicker">
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label>Evento será aberto?</label>
                                <select name="eve_aberto" class="form-control">
                                    <option >Selecione</option>
                                    <option value="0">Sim</option>
                                    <option value="1">Não</option>                                    
                                </select>
                            </div>-->
                            <input type="hidden" name="ident_id" value="<?php echo $eventos->eve_id; ?>"/>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Alterar</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->

            </div>

            <!--espaço-->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>