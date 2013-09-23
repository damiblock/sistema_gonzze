<div class='index'>
	<h2><?php echo $families['Family']['familia'] ?></h2>
	<table>
		<tr>
			<th>Id</th>
			<th>Marca</th>
			<th>Acciones</th>
		</tr>
		<?php foreach($families['Branch'] as $branch): ?>
		<tr>
			<td><?php echo $branch['id'] ?></td>
			<td><?php echo $branch['marca'] ?></td>
			<td>
				<?php echo $this->Html->link('Editar', array('controller' => 'marcas', 'action' => 'editar', $branch['id'])); ?>
				<?php echo $this->Form->postLink(
        	        'Eliminar',
        	        array('controller' => 'marcas', 'action' => 'eliminar', $branch['id']),
        	        array('confirm' => 'Seguro de Eliminar?'));
        	    ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<div class='actions'>
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link('Ver Familias', array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Agregar Familia', array('action' => 'agregar')); ?></li>
	</ul>
</div>