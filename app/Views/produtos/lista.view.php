<div class="row">
    <div class="col-12 py-2">
        <!-- Default box -->
        <a href="<?= action(\Controllers\Produtos::class, 'novo') ?>" class="btn btn-primary float-right">Novo</a>
    </div>
    <div class="col-12">
        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Lista de Produtos Cadastrados</h3>
            </div>
            <div class="card-body">
                <table class="table w-100 table-striped">
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
                                <td><?= $produto->nome ?></td>
                                <td>R$<?= number_format($produto->valor_un, 2, ',', '.') ?></td>
                                <td>
                                    <form action="<?= action(\Controllers\Produtos::class, 'disponivel', 'POST') ?>" method="POST">
                                        <button type="submit" class="btn">
                                            <i class="fas fa-<?= ($produto->disponivel) ? 'check-circle text-success' : 'times-circle text-danger' ?>"></i>
                                        </button>
                                        <input type="hidden" value="<?= $produto->id ?>" name="id">
                                    </form>
                                </td>
                                <td>
                                <a href="<?= action(\Controllers\Produtos::class, 'edit', 'GET',['id'=>$produto->id]) ?>" class="btn text-primary"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn text-danger" data-toggle="modal" data-target="#Comfirma-exclusao<?=$produto->id?>">
                                <i class="fas fa-trash"></i>
                                    </button>  
                                    <div class="modal fade" id="Comfirma-exclusao<?=$produto->id?>">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header bg-danger">
              <h4 class="modal-title">Comfirmar Exclusao</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Confirma a exclusao do produto <b><?=$produto->nome?>"?</b></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
              <form action="<?=action(\Controllers\Produtos::class,'delete','POST')?>"method="post">
              <input type="hidden" value="<?= $produto->id?>" name="id">
              <button type="submit" class="btn  btn-outline-danger">Excluir</button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>   
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p>
                    <?php if (isset($valor)): ?>
                        Valor: <?= $valor ?>
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
< i class="fas fa-undo-alt"></i>
< i class="fas fa-eraser"></i>