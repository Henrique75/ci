<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            General Form Elements
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><i class="fa fa-files-o"></i> Eventos</li>
            <li class="active">Listar eventos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php
            foreach ($eventos as $ev) {
                echo "<h4>".$ev->eve_id."</h4>";
                echo "<h4>".$ev->eve_nome."</h4>";
            }
            ?>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>