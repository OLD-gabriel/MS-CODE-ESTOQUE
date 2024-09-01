<div class="container py-5">
      <div class="mb-4">
        <h1>Novo produto</h1>
      </div>

      
      <div class="w-50 mt-2">
        <form>
          <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">
          </div>
          <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" style="resize:none;" rows="5"></textarea>
          </div>


          <div class="row">

            <div class="mb-3 col-4">
              <label for="categoriaId" class="form-label">Categoria:</label>
              <select name="categoria" class="form-select" id="categoriaId" aria-label="Default select example">
                <?php foreach($data["categorias"] as $key => $value){?>
                  <option value="<?= $value['id']?>"><?= $value['nome']?></option>
                <?php }?>
            </select>
            </div>
            <div class="mb-3 col-4">
              <label for="quantidade" class="form-label">Quantidade:</label>
              <input type="number" class="form-control" id="quantidade" name="quantidade">
            </div>
            <div class="mb-3 col-4">
              <label for="valor" class="form-label">Valor:</label>
              <input type="text" class="form-control" id="valor" name="valor">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>