<?php
	#Iniciar uma sessão. 
	#Fazer submissão do formulário com sessão enviada desse script. 
	#Verificar se aceita o cadastro do contato.
	
	session_start();
	$token = 'asdasdas';
	$_SESSION['token'][] = $token;
?>
<form method="POST" action="projeto/index.php">
	<input type="hidden" name="token" value="<?php echo $token; ?>">
	
	<input type="text" name="nome" placeholder="nome">
			
	<input type="email" name="email" placeholder="email">
			
	<select name="assunto">
		<option value="1" selected>mensagem</option>
		<option value="2">serviços</option>
		<option value="3">orçamento</option>
	</select>
			
	<textarea name="mensagem" placeholder="mensagem"></textarea>
			
	<input type="submit" value="Enviar" class="button">
</form>