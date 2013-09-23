<div class='index'>
<h2>Marcas</h2>
<table>
	<tr>
		<td>Id</td>
		<td>Familia</td>
		<td>Marca</td>
		<td>Acciones</td>
	</tr>
	<?php foreach($branches as $branch): ?>
	<tr>
		<td><?php echo $branch['Branch']['id']; ?></td>
		<td><?php echo $branch['Family']['familia']; ?></td>
		<td><?php echo $branch['Branch']['marca']; ?></td>
		<td>
			<?php echo $this->Html->link('Editar', array('action' => 'editar', $branch['Branch']['id'])); ?>
			<?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'eliminar', $branch['Branch']['id']),
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
		<li><?php echo $this->Html->link('Agregar Marca', array('action' => 'agregar')); ?></li>
	</ul>
</div>