$(document).ready(function(){
			$("#FormLogin").submit(function(){
				 var email = $("#emailusuario").val();
				 if(email != "")
				 {
    				var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    				if(filtro.test(email))
					{
						return true;
					} else {
      					alert("Este endereço de email não é válido!");
    					return false;
					}
				} 
			});
		});
		
		
		$(document).ready(function(){
			$("#FormCadastrar").submit(function(){
				 var email = $("#emailusuario").val();
				 if(email != "")
				 {
    				var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    				if(filtro.test(email))
					{
						return true;
					} else {
      					alert("Este endereço de email não é válido!");
    					return false;
					}
				} 
			});
		});