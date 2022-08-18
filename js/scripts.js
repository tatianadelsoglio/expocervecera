function enviar(){
    var form = $('#contact');
    var url = 'contacto.php';   
	$('#contact').hide();
	$('#form_contacto_error').hide();
	$('#form_contacto_loading').show();
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), 
           success: function(data)
           {			   
			   if(data=='OK'){
				$('#form_contacto_loading').hide();
				$('#form_contacto_ok').show();
			   }
			   else{
				   $('#form_contacto_loading').hide();
				   $('#form_contacto_error').html(data);
				   $('#form_contacto_error').show();
				   $('#contact').show();
			   }
           }
    });    
}