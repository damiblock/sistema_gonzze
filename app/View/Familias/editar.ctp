<div class='index'>
<?php
	echo $this->Form->create();
	echo $this->Form->input('Family.familia');
	echo $this->Form->input('Family.id');
	echo $this->Form->end('Guardar');
?>
</div>
<div class='actions'>
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link('Ver Familias', array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Agregar Familia', array('action' => 'agregar')); ?></li>
	</ul>
</div>