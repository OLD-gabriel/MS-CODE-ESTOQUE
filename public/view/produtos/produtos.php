    <div class="container py-5">
      <div class="mb-4 d-flex flex-row justify-content-between">
        <h1>Produtos</h1>
        <div>
          <a href="novo_produto.html" class="btn btn-primary"><i class="bi bi-plus"></i>Novo produto</a>
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
