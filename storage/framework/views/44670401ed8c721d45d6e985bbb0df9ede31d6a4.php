<?php $__env->startSection('encabezado'); ?>
	Lista de institutos <a href="instituto/create"><button class="btn btn-success">Nuevo</button></a>
<?php $__env->stopSection(); ?>
<?php echo e(Session::get('message')); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<?php echo $__env->make('adminlte::reserva.instituto.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>	
	</div>
	<div class="row">
		<div class="=col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Instituto</th>
						<th>Contacto</th>
						<th>Tel. Contacto</th>
						<th>Tel. Instituto</th>
						<th>Correo Instituto</th>
						<th>Correo Contacto</th>
						<th>Opciones</th>
					</thead>
					<?php $__currentLoopData = $institutos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inst): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td><?php echo e($inst->id); ?></td>
						<td><?php echo e($inst->nomb_inst); ?></td>
						<td><?php echo e($inst->nomb_cont); ?></td>
						<td><?php echo e($inst->tele_cont); ?></td>
						<td><?php echo e($inst->tele_inst); ?></td>
						<td><?php echo e($inst->corr_inst); ?></td>
						<td><?php echo e($inst->corr_cont); ?></td>
						<td><a href="<?php echo e(URL::action('InstitutoController@edit',$inst->id)); ?>"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-<?php echo e($inst->id); ?>" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a></td>
						
					</tr>
					<?php echo $__env->make('adminlte::reserva.instituto.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</table>
			</div>
			<?php echo e($institutos->render()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>