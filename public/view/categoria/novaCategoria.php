<div class="container py-5">
    <div class="mb-4">
        <h1>Nova categoria</h1>
    </div>

    <div class="w-50 mt-2">
        <form method="POST" action="/categoria/adicionar" >
            <div class="mb-3">
                <label for="id" class="form-label">Id: </label>
                <input type="email" class="form-control" id="id" disabled value="0">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome-categoria" class="form-control" id="nome">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>