$('#delete-modal').on('show.bs.modal', function (event) {

	var button = $(event.relatedTarget);
	var id = button.attr('data-customer');

	var modal = $(this);

	modal.find('.modal-title').text('Excluir Item #' + id);
	modal.find('#confirm').attr('href', 'delete.php?id=' + id);
});