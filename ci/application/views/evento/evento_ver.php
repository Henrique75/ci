<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Eventos
            <small>Informações do evento</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Eventos</a></li>
            <li class="active">Ver Evento</li>
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
                        <h3 class="box-title">Informações</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nome" >Nome do evento</label>
                                <input type="text" name="nome_evento" value="<?php echo $eventos->eve_nome; ?>" class="form-control" id="nome"  disabled>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea name="descricao" class="form-control" id="descricao" disabled><? echo $eventos->eve_descricao ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="upload_image">Imagem</label>
                                
                            </div>
                            <div class="form-group">
                                <label>Data de inicio:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" value="<? echo $eventos->eve_data_inicio ?>" class="form-control pull-right" id="datepicker" disabled>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label>Data de término:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" value="<? echo $eventos->eve_data_fim ?>" class="form-control pull-right" id="datepicker" disabled>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label>Evento será aberto?</label>
                                <input type="text" value="<? echo ( $eventos->eve_aberto == 0 ? "Sim" : "Não" ); ?>" class="form-control" disabled>
                            </div>
                            
                        </div>
                        

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" onClick="window.history.back()">Voltar</button>
                        </div>
                   
                </div>
                <!-- /.box -->

            </div>

            <!--espaço-->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>