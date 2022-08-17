function enviar(){
    var form = $('#form_contacto');
    var url = 'contacto.php';   
	$('#form_contacto').hide();
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
				   $('#form_contacto').show();
			   }
           }
    });    
}