<div class="row">
    <div class="col-12">
        <!-- Default box -->
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

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkDisponivel"name='disponivel'
                    <?=(value($disponivel)==1)?'checked':''?>>
                    <label class="form-check-label" for="checkDisponivel">Disponivel</label>
                  </div>
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
