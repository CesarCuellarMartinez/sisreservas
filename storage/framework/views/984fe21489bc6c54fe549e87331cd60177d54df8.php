<?php $__env->startSection('encabezado'); ?>
	Nuevo Espacio
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<?php if(count($errors)>0): ?>
				<div class="alert alert-danger">
					<ul>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<li><?php echo e($error); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
					</ul>
				</div>
			<?php endif; ?>
			<!--El url es de las rutas-->
			<?php echo Form::open(array('url'=>'espacio','method'=>'POST','autocomplete'=>'off')); ?>

			<?php echo e(Form::token()); ?>

			<div class="form-group">
				<label for="nomb">Nombre Espacio</label>
				<input type="text" name="nomb" class="form-control" placeholder="Nombre Espacio...">
			</div>
			<div class="form-group">
				<label for="desc">Descripcion</label>
				<input type="text" name="desc" class="form-control" placeholder="Descripcion...">
			</div>
			<div class="form-group">
				<label for="capa">Capacidad</label>
				<input type="number" name="capa" class="form-control" placeholder="Capacidad...">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			<?php echo Form::close(); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>