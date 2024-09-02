    <div class="container py-5">
      <div class="mb-4 d-flex flex-row justify-content-between">
        <h1>Produtos</h1>
        <div>
          <a href="/produto/novo" class="btn btn-primary"><i class="bi bi-plus"></i>Novo produto</a>
        </div>
      </div>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Categoria Id</th>
            <th scope="col">Valor</th>
            <th scope="col">Qtd. Disponível</th>
            <th scope="col-2 text-align-right">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>nome</td>
            <td>descrição</td>
            <td>categoria id</td>
            <td>R$ 398,00</td>
            <td>2</td>
            <td class="col-2 text-align-right">
              <button class="btn btn-primary btn-sm"><i class="bi bi-plus"></i></button>
              <button class="btn btn-secondary btn-sm"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-danger btn-sm"><i class="bi bi-x"></i></button>
            </td>
          </tr>
        </tbody>

      </table>
    </div>
  </main>

  <?php if(isset($_SESSION["AdicionarProduto"])){ ?>
  <div class="modal fade" id="AdicionarProduto" tabindex="-1" aria-labelledby="AdicionarProdutoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-success" id="AdicionarProdutoLabel">SUCESSO!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>O produto <?= $_SESSION["NomeProduto"]?> foi inserido com sucesso!</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
              </div>
          </div>
      </div>
  </div>
  <script>
  var CategoriaModal = new bootstrap.Modal(document.getElementById('AdicionarProduto'));
      CategoriaModal.show();
  </script>
<?php
    unset($_SESSION["AdicionarProduto"]);
    unset($_SESSION["NomeProduto"]);
} 
?>
