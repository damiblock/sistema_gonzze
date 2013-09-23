<div class='index'>
<h2>Nueva Marca</h2>
<?php
	echo $this->Form->create();
	echo $this->Form->input('Branch.family_id');
	echo $this->Form->input('Branch.marca');
	echo $this->form->end('Guardar');
?>
</div>
<div class='actions'>
	<ul>
		<li><?php echo $this->Html->link('Ver Marcas', array('action' => 'index')); ?></li>
	</ul>
</div>