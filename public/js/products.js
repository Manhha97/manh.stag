$(function(){
	$('.btn-success').click(function(){
		$('#show').modal('show');
		var id=$(this).data('id');
		$.ajax({
			type: 'get',
			url: app_url+'products/'+id,
			success: function(response){
				$('#name').text(response.name);
				$('#price').text(response.price);
				$('#created_at').text(response.created_at);
				$('#updated_at').text(response.updated_at);
			}
		})

	})
})