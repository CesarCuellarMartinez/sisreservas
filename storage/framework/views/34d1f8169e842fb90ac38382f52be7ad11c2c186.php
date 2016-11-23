<?php $__env->startSection('encabezado'); ?>
	Editar Registro: <?php echo e($espacio->nomb); ?>

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
			<!--El url es de las rutas
			el route es el nombre del enrutamiento + . + metodo a llamar
			-->

			<?php echo Form::model($espacio,['method'=>'PATCH','route'=>['espacio.update',$espacio->id]]); ?>

			<?php echo e(Form::token()); ?>

				<div class="form-group">
					<label for="nomb">Nombre Espacio</label>
					<input type="text" name="nomb" class="form-control" value="<?php echo e($espacio->nomb); ?>" placeholder="Nombre Espacio...">
				</div>
				<div class="form-group">
					<label for="desc">Descripcion</label>
					<input type="text" name="desc" class="form-control" value="<?php echo e($espacio->desc); ?>" placeholder="Descripcion...">
				</div>
				<div class="form-group">
					<label for="capa">Capacidad</label>
					<input type="number" name="capa" class="form-control" value="<?php echo e($espacio->capa); ?>" placeholder="Capacidad...">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
			<?php echo Form::close(); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>