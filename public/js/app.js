$(document).ready(function(){

	$('#dataTables').dataTable();
	$('.datePicker').datepicker({
		dateFormat:'dd-mm-yy'
	});
	$('.js-selectize').selectize({
		 plugins: ['remove_button'],
		 
		 sortField:'text'
	});
	console.log("ready");
});