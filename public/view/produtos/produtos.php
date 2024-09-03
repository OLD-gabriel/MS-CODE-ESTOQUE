    <div class="container py-5 main">
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
          <?php foreach($data as $produto){?>
            <tr>
              <th scope="row"><?=$produto["id"]?></th>
              <td><?=$produto["nome"]?></td>
              <td><?=$produto["descricao"]?></td>
              <td><?=$produto["categoria_id"]?></td>
              <td><?=$produto["valor"]?></td>
              <td><?=$produto["quantidade_disponivel"]?></td>
              <td class="col-2 text-align-right">
                <a href="/produto/estoque?id=<?=$produto["id"]?>&quantidade=<?=$produto["quantidade_disponivel"]?>&nome=<?=$produto["nome"]?>&acao=aumentar" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i></a>
                <a href="/produto/editar?id=<?=$produto["id"]?>" class="btn btn-secondary btn-sm"><i class="bi bi-pencil"></i></a>
                <button onclick="ExcluirProdutoPP('<?= $produto['nome']?>','<?= $produto['id']?>')" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></button>
                <a href="/produto/estoque?id=<?=$produto["id"]?>&quantidade=<?=$produto["quantidade_disponivel"]?>&nome=<?=$produto["nome"]?>&acao=diminuir" class="btn btn-primary btn-sm">Vender</a>
              </td>
            </tr>
            <?php }?>
          <tr>
            
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

<div class="modal fade" id="ExcluirProdutoPP" tabindex="-1" aria-labelledby="ExcluirProdutoPPLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-danger" id="ExcluirProdutoPPLabel">EXCLUIR!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p> Tem certeza que deseja excluir a categoria <span id="NomeProduto"></span> ? </p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                  <!-- <button type="button" class="btn btn-danger">Excluir</button> -->
                  <a href="" id="AncoraExcluirProduto" class="btn btn-danger">Excluir</a>
              </div>
          </div>
      </div>
  </div>


  <?php if(isset($_SESSION["ExcluirProduto"])){ ?>
  <div class="modal fade" id="ProdutoExcluido" tabindex="-1" aria-labelledby="ProdutoExcluidoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-success" id="ProdutoExcluidoLabel">SUCESSO!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>O produto <?= $_SESSION["NomeProdutoExcluida"]?> foi Excluido com sucesso!</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
              </div>
          </div>
      </div>
  </div>
  <script>
  var CategoriaModal = new bootstrap.Modal(document.getElementById('ProdutoExcluido'));
      CategoriaModal.show();
  </script>
<?php
    unset($_SESSION["ExcluirProduto"]);
    unset($_SESSION["NomeProdutoExcluida"]);
} 
?>

<?php if(isset($_SESSION["EditarProduto"])){ ?>
  <div class="modal fade" id="EditarProduto" tabindex="-1" aria-labelledby="EditarProdutoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-success" id="EditarProdutoLabel">SUCESSO!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>O produto <?= $_SESSION["NomeProdutoEditado"]?> foi Editado com sucesso!</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
              </div>
          </div>
      </div>
  </div>
  <script>
  var CategoriaModal = new bootstrap.Modal(document.getElementById('EditarProduto'));
      CategoriaModal.show();
  </script>
<?php
    unset($_SESSION["EditarProduto"]);
    unset($_SESSION["NomeProdutoEditado"]);
} 
?>

<?php if(isset($_SESSION["Estoque"])){ ?>
  <div class="modal fade" id="Estoque" tabindex="-1" aria-labelledby="EstoqueLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-success" id="EstoqueLabel">SUCESSO!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>O produto <?= $_SESSION["NomeProduto"]?> foi <?= $_SESSION["Estoque"]?> 1 ao estoque.</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
              </div>
          </div>
      </div>
  </div>
  <script>
  var CategoriaModal = new bootstrap.Modal(document.getElementById('Estoque'));
      CategoriaModal.show();
  </script>
<?php
    unset($_SESSION["Estoque"]);
    unset($_SESSION["NomeProduto"]);
} 
?>