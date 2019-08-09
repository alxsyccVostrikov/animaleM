  let campos=["nome","sobrenome","conta"];
  let NomeBotaoSubmit=["Cadastrar","Consultar","deletar","Atualizar"];








       $(function(){
          
					//funรctions by alexsei
					function CadastrarNoBanco(){
						valores=$("form").serializeArray();
						$.ajax({url:"./classes/functions/processamento.php",data:{nome:valores[0].value,sobrenome:valores[1].value,conta:valores[2].value,btn:btn},success:function(res){
							alert("Cadastrado");
							$("form")[0].reset();
						}});
					}//fim function
			
			
					
					//cod de seleção ao banco..
					
					function SelectBanco(){
						valores=$("form").serializeArray();
						$.ajax({url:"./classes/functions/processamento.php",data:{nome:valores[0].value,btn:btn},success:function(res){
							//$("<?php echo "#Div".$NomeBotaoSubmit[1] ?>").html(res);  
              let users=res.split(",");
              $("li").each(function(i){
                $(this).text(users[i]);	
							});
							$("form")[0].reset();
						}});
					}//fim functon
    
    
					
					//cod de atualização ao banco..
					
					function UptBanco(){
            NomeMudar=$("li").eq(0).text();
            valores=$("form").serializeArray();
						$.ajax({url:"./classes/functions/processamento.php",data:{nome:valores[0].value,btn:btn,NomeMudar:NomeMudar},success:function(res){
							alert("Atualização Completa");
              $("form")[0].reset();
						}});
					}//fim functon
    
    
					
					//criar jason p/ enviar pro php..
					
         
					function CriandoJson(){
  
					let i=0;
					let string="{";
					let ValoresForm=$("form").serializeArray();
						for(j=0;j<campos.length;j++)
							if(j==2)
								string+="\""+campos[j]+"\""+":"+"\""+ValoresForm[j].value+"\"}";
							else
								string+="\""+campos[j]+"\""+":"+"\""+ValoresForm[j].value+"\""+",";
							
						alert("string:"+string);
					//	obj = JSON.parse(string);
					//	for(w in obj)
					//	alert(w+":"+obj[w]);
					}
					//end functions
    
	

					//Eventos dos botões
				
				
					//click bot?o Cadastrar
					$("#"+NomeBotaoSubmit[0]).click(function(){
						btn=$(this).val();
						CadastrarNoBanco();
					});
    
    
  
					//click bot?o Consultar
					$("#"+NomeBotaoSubmit[1]).click(function(){
						btn=$(this).val();
						SelectBanco();
					});
			
			
    
					//click btn atualizar
					$("#"+NomeBotaoSubmit[3]).click(function(){
						btn=$(this).val();
						//alert("btn:"+btn);
            //alert("nome de consulta: "+NomeMudar);
            
            UptBanco();
					});
  
    
	       
	
					//event press input text
					$("text").keypress(function(event){
						var keycode = (event.keyCode ? event.keyCode : event.which);
						if(keycode == '13'){
							CadastrarNoBanco();
						}
					}); 
    
    
    
					//evnt bot?o test
					$("#test").click(function(){
						CriandoJson();
					});
		
		
		
				});//fim do DocumentReady

