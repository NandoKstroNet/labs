<?php require 'header.php'; ?>
		<article class="data">
			<h1>Atividades de Hoje: <strong><?=date('d / m / Y');?></strong></h1>
			<ul>
				<?php if($resultado):?>
				<?php foreach($resultado as $res):?>
				<li>
					<span class="acoes">
						<a href="http://agendatrabalhonk.com.br/?acao=atualizar&amp;id=<?=$res->ativi_id;?>"><img src="img/ok.png" alt="Concluída" title="Concluída" width="16" height="16"></a>
					</span>
					<h2><?=$res->ativi_nomecliente;?></h2>
					<p>Contatos: <?=$res->ativi_telefonecliente;?> || <?=$res->ativi_emailcliente;?>  </p>
					<p>Dia: <?=date("d/m/Y", strtotime($res->ativi_datadaatividade));?> || Hora: <?=$res->ativi_horadaatividade;?></p>
					<p>
						<?=$res->ativi_descricao;?>
					</p>
				</li>
			<?php endforeach; ?>
		<?php else:?>
			<h2>Nada cadastrado para hoje! :-)</h2>
			<?php endif; ?>
			</ul>
		</article>
<?php require 'footer.php'; ?>