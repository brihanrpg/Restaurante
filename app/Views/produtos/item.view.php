<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card card-primary collapsed-card">
            <div class="card-header cursor-pointer" data-card-widget="collapse">
                <h3 class="card-title">Cadastrar Produtos</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <?php if (isset($nome)): ?>
                    Tela de Produtos <?=$nome?>
                <?php endif; ?>
                <p>
                    <?php if (isset($valor)): ?>
                        Valor: <?=$valor?>
                    <?php endif; ?>
                </p>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>    
</div>
