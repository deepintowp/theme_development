jQuery(document).ready(function($){
	var ourSubmit = document.getElementById('summit_con');
	
	var ourFormdataProcess = function(formdata, action){
		
		$.ajax({
			url:data_container.ajaxurl,
			type:'POST',
			data:{
				action: action,
				data: formdata,
				security:data_container.security,
				honeypot:document.getElementById('honeypot').value
			},
			success:function(response){
				
					$(".mdgggg").html(response);
					
				
			},
			error:function(){
				alert('Form was not submitted successfully');
			}
			
			
		});
		
	};
	
	ourSubmit.addEventListener('click', function(event){
		event.preventDefault();
			var formdata = {
				'name':document.getElementById('theone_name').value,
				'email':document.getElementById('theone_email').value,
				'phone':document.getElementById('theone_phone').value,
				'message':document.getElementById('theone_message').value,
				
				
			};
			
		ourFormdataProcess(formdata, 'our_action_function');
	});
	
	
	
	
	
	
});