<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <form action="<?= action(\Controllers\Produtos::class, 'update', 'POST') ?>" method="post">
        <div class="card card-primary ">
            <div class="card-header cursor-pointer" data-card-widget="collapse">
                <h3 class="card-title">Formulario de cadastrar Produtos</h3>
               
            </div>
            <div class="card-body">
                  <div class="form-group">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control"name='nome' id="inputNome" 
                    placeholder="Nome do produto"value="<?=value($nome)?>"required>
                  </div>
                  <div class="form-group">
                    <label for="textDescricao">Descricao</label>
                    <textarea  class="form-control" id="textDescricao" 
                    placeholder="Descriçâo do produto" name = "Descricao" required><?=value($descricao)?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="inputValor">Valor</label>
                    <input type="number" step="0.01" min="0" class="form-control"name='Valor_un' id="inputValor" 
                    placeholder="Valor do produto"value="<?=value($valor_un)?>"required>
                  </div>
                  
                  <div class="form-grupo">
                    <label for="selectUnidade">Unidade de Medida</label>
                    <?php component(\Components\Select::class)
                      ->addAttr('class','form-control')
                      ->addAttr('required','')
                      ->addAttr('id','selectUnidade')
                      ->addAttr('name','unidade_medida')
                      ->setPlaceholder('Selecione uma unidade para o produto')
                      ->addOption('Unidade','Unidade')
                      ->addOption('Kilo', 'Kilo')
                      ->addOption('Grama', 'Grama')
                      ->show();?>
                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkDisponivel"name='disponivel'
                    <?=(value($disponivel)==0)?'checked':''?>>
                    <label class="form-check-label" for="checkDisponivel">Disponivel</label>
                  </div>
                </div>
                <input type="hidden" name="id" value="<?= value($id) ?>">
            <!-- /.card-body -->
            <div class="card-footer">
               <a href="<?=action(\Controllers\Produtos::class)?>" class="btn btn-info"><i class="fas fa-undo-alt"></i>Voltar</a>
               <button type="reset" class="btn btn-warning"><i class="fas fa-eraser"></i>Limpar</button>
               <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>Salvar</button>
            </div>
            <!-- /.card-footer-->
        </div>
        </form>
        <!-- /.card -->
    </div>    
</div>
