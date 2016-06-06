




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
	//http://stackoverflow.com/questions/21232444/dropzone-js-onclick-submit-file-upload

	//http://stackoverflow.com/questions/27870237/dropzone-js-is-giving-error-invalid-dropzone-element-on-page-without-a-dropzon

	Dropzone.options.myDropzone = { maxFilesize:2,
								acceptedFiles:'image/*',
								success:function(file,response){
											if(file.status == 'success'){
												HandleFileUpload.HandleSuccess(response);
											}else{
												HandleFileUpload.HandleError(response);
											}

								}
							}
    var HandleFileUpload = {

    	HandleError :function(response){
    			console.log(response);
    	},
    	HandleSuccess : function(response){
    			var imageList = ("#gallery-images ul");
    		    var imgPath = "http://localhost/p3ai/public/img/"+ response.image;
    		    var idImg = response.id;

 $(imageList).append('<li><a href="'+ imgPath +'" data-lightbox="mygallery"><img src="'+ imgPath +'" ><br><a href="http://localhost/p3ai/public/dashboard/gallery/'+ idImg +'/delete" class="fa fa-trash" onclick="return confirm("delete?")"></a></li>');
    	}
    }


});

