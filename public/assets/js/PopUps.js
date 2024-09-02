document.addEventListener('DOMContentLoaded', function() {
    // var myModal = new bootstrap.Modal(document.getElementById('SenhaIncorreta'));
    // myModal.show();

    // var myModal2 = new bootstrap.Modal(document.getElementById('AddCategoria'));
    // myModal2.show();
});

function PopUpExcluirCategoria(id,nome){

    document.getElementById('nomeCategoria').innerHTML = nome
    document.getElementById('AncoraExcluirCategoria').href = "/categoria/excluir?id=" + id + "&nome=" + nome;

    var CategoriaModal = new bootstrap.Modal(document.getElementById('ExcluirCategoriaPP'));
    CategoriaModal.show();

}