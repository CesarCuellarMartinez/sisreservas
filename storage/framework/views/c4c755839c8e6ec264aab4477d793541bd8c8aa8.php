<?php $__env->startSection('encabezado'); ?>
	Editar Registro: <?php echo e($instituto->nomb_inst); ?>

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

			<?php echo Form::model($instituto,['method'=>'PATCH','route'=>['instituto.update',$instituto->id]]); ?>

			<?php echo e(Form::token()); ?>

				<div class="form-group">
					<label for="nomb_inst">Nombre instituto</label>
					<input type="text" name="nomb_inst" class="form-control" value="<?php echo e($instituto->nomb_inst); ?>" placeholder="Nombre Instituto...">
				</div>
				<div class="form-group">
					<label for="nomb_cont">Nobre Contacto</label>
					<input type="text" name="nomb_cont" class="form-control" value="<?php echo e($instituto->nomb_cont); ?>" placeholder="Nombre Contacto...">
				</div>
				<div class="form-group">
					<label for="tele_inst">Telefono instituto</label>
					<input type="text" name="tele_inst" class="form-control" value="<?php echo e($instituto->tele_inst); ?>" placeholder="Telefono Instituto...">
				</div>
				<div class="form-group">
					<label for="tele_cont">Telefono Contacto</label>
					<input type="text" name="tele_cont" class="form-control" value="<?php echo e($instituto->tele_cont); ?>" placeholder="Telefono Contacto...">
				</div>
				<div class="form-group">
					<label for="corr_inst">Correo instituto</label>
					<input type="text" name="corr_inst" class="form-control" value="<?php echo e($instituto->corr_inst); ?>" placeholder="Correo Instituto...">
				</div>
				<div class="form-group">
					<label for="corr_cont">Correo Contacto</label>
					<input type="text" name="corr_cont" class="form-control" value="<?php echo e($instituto->corr_cont); ?>" placeholder="Correo Contacto...">
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