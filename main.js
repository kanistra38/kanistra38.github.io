$(function(){
	
	$('#fruits').click(function(){
		var txtFile = "1.txt";
		request(txtFile);
	})
	
	$('#vegetables').click(function(){
		var txtFile = "2.txt";
	    request(txtFile);
	})
	
	function request (data){
		$.ajax({
			url:data,
			success:function(data){
				$('#List').text(data);
			}
		})
	}
});
