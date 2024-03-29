
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Procedimientos
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/procedimiento/store" method="POST">
                            <div class="form-group">
                                <label for="id_proc">Id_Procedimiento:</label>
                                <input type="number" min="1" step="1" class="form-control" id="id_proc" name="id_proc" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Descripcion:</label>
                                <input type="text" class="form-control" id="desproc" name="desproc" required>
                            </div>
                            <!--<div class="form-group">
                                <label for="id_tab">Id_Tab:</label>
                                <input type="number" min="1" step="1" class="form-control" id="id_tab" name="id_tab" required>
                            </div>-->

                            <div class="form-group">
                                <label for="cat_tabulador">ID_TAB:</label>
                                <select name="cat_tabulador" id="cat_tabulador" class="form-control">
                                    <?php foreach($cat_tabulador as $cat_tabulador):?>
                                        <option value="<?php echo $cat_tabulador->id_tab?>"><?php echo $cat_tabulador->desctab;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
