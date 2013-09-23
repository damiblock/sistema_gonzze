<div class='index'>
<?php
	echo $this->Form->create();
	echo $this->Form->input('Branch.family_id');
	echo $this->Form->input('Branch.marca');
	echo $this->Form->input('Branch.id');
	echo $this->Form->end('Guardar');
?>
</div>
<div class='actions'>
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link('Ver Marcas', array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Agregar Marca', array('action' => 'agregar')); ?></li>
	</ul>
</div>