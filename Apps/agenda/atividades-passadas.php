<?php require 'header.php'; ?>
		<article class="data">
			<h1>Todas as atividades cadastradas: <strong><?=date('d / m / Y');?></strong></h1>
			<ul>
				<?php if($resultadoAll):?>
				<?php foreach($resultadoAll as $res):?>
				<li>
					<span class="acoes">
						<?php if($res->ativi_status == '1'): ?>
						<a href="http://agendatrabalhonk.com.br/atividades-passadas.php?acao=atualizar&amp;id=<?=$res->ativi_id;?>"><img src="img/ok.png" alt="Concluída" title="Concluída" width="16" height="16"></a>
						<?php endif; ?> 
						<a href="http://agendatrabalhonk.com.br/atividades-passadas.php?acao=excluir&amp;id=<?=$res->ativi_id;?>"><img src="img/excluir.png" alt="Excluir" title="Excluir" width="16" height="16"></a>
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
			<h2>Nada cadastrado! :-)</h2>
			<?php endif; ?>
			</ul>
		</article>
<?php require 'footer.php'; ?>