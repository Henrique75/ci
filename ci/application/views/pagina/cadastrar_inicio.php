<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Eventos
            <small>Cadastrar novo evento</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Eventos</a></li>
            <li class="active">Novo evento</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">                
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cadastre</h3>
                    </div>
                    <!-- form inicio -->
                    <form role="form" method="POST" action="<?= base_url() ?>evento/salvar_evento" enctype="multipart/form-data" accept-charset="utf-8">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nome_evento" >Nome do evento</label>
                                <input type="text" name="nome_evento" class="form-control" id="nome_evento" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" name="" class="form-control" id="descricao" placeholder="Descrição">
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea name="descricao_evento" class="form-control" id="descricao" placeholder="Descrição"></textarea>
                            </div>
<!--                            <div class="form-group">
                                <label for="upload_image">Imagem</label>
                                <input type="file" name="img_evento" id="upload_image">

                                <p class="help-block">Envie seu arquivo.</p>
                            </div>-->
                            <div class="form-group">
                                <label>Data de inicio:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="data_inicio" class="form-control pull-right" id="datepicker">
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label>Data de término:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="data_termino" class="form-control pull-right" id="datepicker">
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label>Evento será aberto?</label>
                                <select name="evento_aberto" class="form-control">
                                    <option >Selecione</option>
                                    <option value="0">Sim</option>
                                    <option value="1">Não</option>                                    
                                </select>
                            </div>
                        </div>                       
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>                
            </div>            
        </div>        
    </section>    
</div>