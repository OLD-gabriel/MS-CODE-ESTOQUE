<div class="container py-5 main">
      <div class="mb-4">
        <h1>Novo produto</h1>
      </div>

      
      <div class="w-50 mt-2">
        <form method="POST" action="/produto/salvar" >
          <input type="hidden" name="id" value="<?= $data["produto"]["id"]?>" >
          <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" value="<?= $data["produto"]["nome"]?>" id="nome" name="nome">
          </div>
          <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" style="resize:none;" rows="5"><?= $data["produto"]["descricao"]?></textarea>
          </div>

          <div class="row">

            <div class="mb-3 col-4">
              <label for="categoriaId" class="form-label">Categoria:</label>
              <select name="categoria" class="form-select"  value="<?= $data["produto"]["categoria_id"]?>" id="categoriaId" aria-label="Default select example">
                <?php foreach($data["categorias"] as $key => $value){?>
                  <option <?= $data["produto"]["categoria_id"] == $value["id"] ? "select" : "" ?> value="<?= $value['id']?>"><?= $value['nome']?></option>
                <?php }?>
            </select>
            </div>
            <div class="mb-3 col-4">
              <label for="quantidade" class="form-label">Quantidade:</label>
              <input type="number" class="form-control"  value="<?= $data["produto"]["quantidade_disponivel"]?>" id="quantidade" name="quantidade">
            </div>
            <div class="mb-3 col-4">
              <label for="valor" class="form-label">Valor:</label>
              <input type="text" class="form-control"  value="<?= $data["produto"]["valor"]?>" id="valor" name="valor">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>