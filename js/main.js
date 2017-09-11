$('#delete-modal').on('show.bs.modal', function (event) {

  

  var button = $(event.relatedTarget);

  var id = button.data('fornecedor');

  

  var modal = $(this);

  modal.find('.modal-title').text('Desativar Fornecedor #' + id);

  modal.find('#confirm').attr('href', 'delete.php?id=' + id);

})

$('#recover-modal').on('show.bs.modal', function (event) {

  

  var button = $(event.relatedTarget);

  var id = button.data('fornecedor');

  

  var modal = $(this);

  modal.find('.modal-title').text('Reativar Fornecedor #' + id);

  modal.find('#confirm').attr('href', 'recover.php?id=' + id);

})