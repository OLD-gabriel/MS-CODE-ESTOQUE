
<div class="container py-5 main">
    <div class="mb-4 d-flex flex-row justify-content-between">
        <h1>Categorias</h1>
        <div>
            <a href="/categoria/nova" class="btn btn-primary"><i class="bi bi-plus"></i>Nova categoria</a>
        </div>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col-1 text-align-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $key => $value){ ?>
                <tr>
                <th scope="row"><?= $value["id"]?></th>
                <td><?= $value["nome"]?></td>
                <td class="col-1 text-align-right">
                    <a href="/categoria/editar?id=<?= $value["id"]?>" class="btn btn-secondary btn-sm"><i class="bi bi-pencil"></i></a>
                    <button class="btn btn-danger btn-sm" onclick="PopUpExcluirCategoria('<?= $value['id']?>','<?= $value['nome']?>')" ><i class="bi bi-x"></i></button>
                </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</div>

<?php if(isset($_SESSION["AddCategoria"])){ ?>
  <div class="modal fade" id="AddCategoria" tabindex="-1" aria-labelledby="AddCategoriaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-success" id="AddCategoriaLabel">SUCESSO!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>A categoria <?= $_SESSION["NomeCategoria"]?> foi inserida com sucesso!</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
              </div>
          </div>
      </div>
  </div>
  <script>
  var CategoriaModal = new bootstrap.Modal(document.getElementById('AddCategoria'));
      CategoriaModal.show();
  </script>
<?php
    unset($_SESSION["AddCategoria"]);
    unset($_SESSION["NomeCategoria"]);
} 
?>

<?php if(isset($_SESSION["ExcluirCategoria"])){ ?>
  <div class="modal fade" id="ExcluirCategoria" tabindex="-1" aria-labelledby="ExcluirCategoriaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-success" id="ExcluirCategoriaLabel">SUCESSO!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>A categoria <?= $_SESSION["NomeCategoriaExcluida"]?> foi Excluida com sucesso!</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
              </div>
          </div>
      </div>
  </div>
  <script>
  var CategoriaModal = new bootstrap.Modal(document.getElementById('ExcluirCategoria'));
      CategoriaModal.show();
  </script>
<?php
    unset($_SESSION["ExcluirCategoria"]);
    unset($_SESSION["NomeCategoriaExcluida"]);
} 
?>

<div class="modal fade" id="ExcluirCategoriaPP" tabindex="-1" aria-labelledby="ExcluirCategoriaPPLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-danger" id="ExcluirCategoriaPPLabel">EXCLUIR!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p> Tem certeza que deseja excluir o produto <span id="nomeCategoria"></span> ? </p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                  <!-- <button type="button" class="btn btn-danger">Excluir</button> -->
                  <a href="" id="AncoraExcluirCategoria" class="btn btn-danger">Excluir</a>
              </div>
          </div>
      </div>
  </div>



  <?php if(isset($_SESSION["EditarProduto"])){ ?>
  <div class="modal fade" id="EditarProduto" tabindex="-1" aria-labelledby="EditarProdutoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-success" id="EditarProdutoLabel">SUCESSO!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>O nome da categoria <?= $_SESSION["NomeProdutoEditadoAntes"]?> foi alterada para <?= $_SESSION["NomeProdutoEditadoDepois"]?> com sucesso!</p>
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
    unset($_SESSION["NomeProdutoEditadoAntes"]);
    unset($_SESSION["NomeProdutoEditadoDepois"]);
} 
?>