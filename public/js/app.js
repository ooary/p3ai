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
	//upload Image
	Dropzone.options.myDropzoneImage = { maxFilesize:2,
										 acceptedFiles:'image/*',
										 success:function(file,response)
										 {
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
    //upload Materi
     Dropzone.options.myDropzoneMateri = {
    										acceptedFiles:'application/pdf,.psd,.doc,.docx',
    										 autoProcessQueue: true,
    										success:function(file,response){
    											if(file.status=='success'){
    											var filePath = 	"http://localhost/p3ai/public/file/"+ response.nama_materi;
    											var idMateri = response.id;
    											var fileList =("#gallery-images ul");
    											$(fileList).append('<li><h3>'+response.nama_materi+'</h3> <img src="http://localhost/p3ai/public/img/file.png" alt=""><br><a href="http://localhost/p3ai/public/dashboard/workshop/materi/'+response.id+'/download" class="btn btn-primary btn-sm"><span class="fa fa-download"></span> Download</a> <a href="http://localhost/p3ai/public/dashboard/workshop/materi/'+response.id+'/delete" class="btn btn-danger btn-sm" onclick="return confirm("delete?")"><span class="fa fa-trash" > Delete</span></a></li>');				
    											}else{

    											}
    										}
    									}
    //upload Sk
    Dropzone.options.myDropzoneSk = {	acceptedFiles:'application/pdf,.psd,.doc,.docx',
    										 autoProcessQueue: true,
    										success:function(file,response){
    											if(file.status=='success'){
    											var filePath = 	"http://localhost/p3ai/public/file/"+ response.sk;
    											var idMateri = response.id;
    											var fileList =("#gallery-images ul");
    											$(fileList).append('<li><h3>'+response.sk+'</h3> <img src="http://localhost/p3ai/public/img/file.png" alt=""><br><a href="http://localhost/p3ai/public/dashboard/workshop/sk/'+response.id+'/download" class="btn btn-primary btn-sm"><span class="fa fa-download"></span> Download</a> <a href="http://localhost/p3ai/public/dashboard/workshop/sk/'+response.id+'/delete" class="btn btn-danger btn-sm" onclick="return confirm("delete?")"><span class="fa fa-trash" > Delete</span></a></li>');				
    											}else{

    											}
    										}

    								}

});

