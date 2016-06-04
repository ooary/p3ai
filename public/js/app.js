$(document).ready(function(){

	$('#dataTables').DataTable({
		responsive: true
	});
	$('.datePicker').datepicker({
		dateFormat:'dd-mm-yy',
    	changeYear:true,
    	changeMonth:true,
    	yearRange:'1945:now',

    	});
	$('.js-selectize').selectize({
		 plugins: ['remove_button'],
		 
		 sortField:'text'
	});
	
	console.log("ready");
});