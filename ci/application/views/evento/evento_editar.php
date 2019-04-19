<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Eventos
            <small>Editar um evento</small>
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
                        <h3 class="box-title">Edite seu evento</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="<?= base_url() ?>evento/atualizar_evento">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nome" >Nome do evento</label>
                                <input type="text" name="nome_evento" value="<?php echo $eventos->eve_nome; ?>" class="form-control" id="nome">
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea name="descricao" class="form-control" id="descricao"><? echo $eventos->eve_descricao ?></textarea>
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
                                    <input type="date" value="<? echo $eventos->eve_data_inicio ?>" name="data_inicio" class="form-control pull-right" id="datepicker">
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label>Data de término:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" value="<? echo $eventos->eve_data_fim ?>" name="data_termino" class="form-control pull-right" id="datepicker">
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label>Evento será aberto?</label>
                                <select name="eve_aberto" class="form-control">
                                    <? if ( $eventos->eve_aberto == 0 ):?>
                                        <option value="0">Sim</option>
                                        <option value="1">Não</option>
                                    <? else:?>
                                        <option value="1">Não</option>
                                        <option value="0">Sim</option>
                                    <? endif ?>
                                </select>
                            </div>
                            <input type="hidden" name="ident_id" value="<?php echo $eventos->eve_id; ?>"/>
                        </div>
                        

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