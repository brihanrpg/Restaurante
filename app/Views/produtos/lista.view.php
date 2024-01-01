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
    <div class="col-12">
        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Lista de Produtos Cadastrados</h3>
            </div>
            <div class="card-body">
                <table class="table table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th title="disponivel">Disp.</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produtos as $produto): ?>
                            <tr>
                                <td><?=$produto->nome?></td>
                                <td>R$<?=number_format($produto->valor_un, 2, ',', '.')?></td>
                                <td>
                                    <form action="<?=action(\Controllers\Produtos::class, 'disponivel', 'POST')?>" method="POST">
                                        <button type="submit" class="btn">
                                            <i class="fas fa-<?=($produto->disponivel) ? 'check-circle text-success' : 'times-circle text-danger'?>"></i>
                                        </button>
                                        <input type="hidden" value="<?=$produto->id?>" name="id">
                                    </form>
                                </td>
                                <td>
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
