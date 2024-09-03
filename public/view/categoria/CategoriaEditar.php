<div class="container py-5">
      <div class="mb-4">
      <h1>Editar categoria</h1>
      </div>

      <div class="w-50 mt-2">
      <form action='/categorias/salvar' method="POST">
          <div class="mb-3">
            <label for="id" class="form-label">Id: </label>
            <input type="number" class="form-control" id="id" name="id" readonly value="<?= $data['categoria']['id']; ?>">
          </div>

          <input type="hidden" name="NomeProdutoAntes" value="<?=$data['categoria']['nome']?>">
        
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?=$data['categoria']['nome']?>">
          </div>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>