<?php require 'header.php'; ?>
<?php
	//Insere dados
	if(isset($_POST['Cadastrar_Ati']) && $_POST['Cadastrar_Ati'] == 'Cadastrar_Atividade')
	{
 	 	$data = str_replace('/', '-', $_POST['dataDaAtividade']);
 
 		if(
			$_POST['nomeCliente'] == '' || 
			$_POST['emailCliente'] == '' || 
			$_POST['telCliente'] == '' ||
			$_POST['dataDaAtividade'] == '' || 
			$_POST['horaDaAtividade'] == '' || 
			$_POST['descricao'] == ''
 		  )
 		{
 			echo 'Preencha todos os campos';
 		}
 		else
 		{	
			$inseri = $agenda->inserir( 
						$_POST['nomeCliente'], 
						$_POST['emailCliente'], 
						$_POST['telCliente'],
						date('Y-m-d', strtotime($data)), 
						date('H:i:s', strtotime($_POST['horaDaAtividade'])), 
						$_POST['descricao']
						  );
			echo $inseri;
 		}	 	
	}
?>
		<article class="data">
			<h1>Cadastre Sua Atividade</h1>
			<form method="post" name="atividades" action="">
				<p>
					Nome Cliente: <br />
					<input type="text" name="nomeCliente" />
				</p>
				<p>
					Email Cliente: <br />
					<input type="text" name="emailCliente" />
				</p>
				<p>
					Telefone Cliente: <br />
					<input type="text" name="telCliente" id="tel" />
				</p>
				<p>
					Data: <br />
					<input type="text" name="dataDaAtividade" id="data" />
				</p>
				<p>
					Hora: <br />
					<input type="text" name="horaDaAtividade" id="hora" />
				</p>
				<p>
					Descrição: <br />
					<textarea name="descricao"></textarea>
				</p>
				<input type="submit" name="Cadastrar" value="Cadastrar Atividade"/>
				<input type="hidden" name="Cadastrar_Ati" value="Cadastrar_Atividade"/>
			</form>
		</article>
<?php require 'footer.php'; ?>