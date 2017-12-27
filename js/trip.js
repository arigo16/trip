$(document).ready(function(){
	$('.nik').change(function(){
		// alert($('.nik').val());
		var value = $('#formaju').serialize();
		$.ajax({
			type	: 'post',
			url		: 'act/tunj.php',
			data	: value,
			dataType :'json',
			success	: function(data){
				$('#usak').val(data[0]);
				$('#uhot').val(data[1]);
				$('#utra').val(data[2]);
			}
		});
	});
});