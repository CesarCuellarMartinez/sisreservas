<?php $__env->startSection('encabezado'); ?>
	Nuevo Instituto
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
			<?php echo Form::open(array('url'=>'instituto','method'=>'POST','autocomplete'=>'off')); ?>

			<?php echo e(Form::token()); ?>

			<div class="form-group">
				<label for="nomb_inst">Nombre instituto</label>
				<input type="text" name="nomb_inst" class="form-control" placeholder="Nombre Instituto...">
			</div>
			<div class="form-group">
				<label for="nomb_cont">Nobre Contacto</label>
				<input type="text" name="nomb_cont" class="form-control" placeholder="Nombre Contacto...">
			</div>
			<div class="form-group">
				<label for="tele_inst">Telefono instituto</label>
				<input type="text" name="tele_inst" class="form-control" placeholder="Telefono Instituto...">
			</div>
			<div class="form-group">
				<label for="tele_cont">Telefono Contacto</label>
				<input type="text" name="tele_cont" class="form-control" placeholder="Telefono Contacto...">
			</div>
			<div class="form-group">
				<label for="corr_inst">Correo instituto</label>
				<input type="text" name="corr_inst" class="form-control" placeholder="Correo Instituto...">
			</div>
			<div class="form-group">
				<label for="corr_cont">Correo Contacto</label>
				<input type="text" name="corr_cont" class="form-control" placeholder="Correo Contacto...">
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