<div class='index'>
<h2>Familias</h2>
<?php 
	echo $this->Form->create('familias', array('action' => 'buscar', 'type' => 'get'));
	echo $this->Form->input('Family.familia');
	echo $this->Form->end('Buscar');
?>
<table>
	<tr>
		<th>Id</th>
		<th>Familia</th>
		<th>Acciones</th>
	</tr>
	<?php foreach($families as $family): ?>
	<tr>
		<td><?php echo $family['Family']['id']; ?></td>
		<td><?php echo $this->Html->link($family['Family']['familia'], array('action' => 'detalles', $family['Family']['id'])); ?></td>
		<td>
			<?php echo $this->Html->link('Editar', array('action' => 'editar', $family['Family']['id'])); ?>
			<?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'eliminar', $family['Family']['id']),
                array('confirm' => 'Seguro de Eliminar?'));
            ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php echo $this->Paginator->numbers(); ?>
</div>
<div class='actions'>
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link('Agregar Familia', array('action' => 'agregar')); ?></li>
	</ul>
</div>