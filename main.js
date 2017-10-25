$(function(){
	
	$('#fruits').click(function(){
		var txtFile = "1.txt";
		request(txtFile);
	})
	
	$('#vegetables').click(function(){
		var txtFile = "1.txt";
	    request(txtFile);
	})
	
	function request (data){
		$.ajax({
			url:data,
			sucsess:function(data){
				$('#List'),html(data);
			}
		})
	}
});
