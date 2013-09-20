<div class='index'>
<h2>Nueva Familia</h2>
<?php
	echo $this->Form->create();
	echo $this->Form->input('Family.familia');
	echo $this->form->end('Guardar');
?>
</div>
<div class='actions'>
	<ul>
		<li><?php echo $this->Html->link('Ver Familias', array('action' => 'index')); ?></li>
	</ul>
</div>