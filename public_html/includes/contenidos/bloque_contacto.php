<div class="bloque_contacto">
		<div class="container">
			<?php if($estado_proceso){?>
			<div class="row" style="margin-top:20px;">
				<div class="alert <?php echo $estado_proceso[1]; ?>">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <?php echo $estado_proceso[0]; ?>
				</div>
			</div>
			<?php } ?>
			<div class="col-xs-12 col-md-6">
				<h2>Formulario de contacto</h2>
				<p>Utilice el siguiente formulario para contactarnos.</p>
				<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
					<input type="text" name="nombre" required placeholder="Nombre" <?php if($_SESSION['nombre']){ echo 'value="'.$_SESSION['nombre'].'"'; } ?> />
					<input type="email" name="email" required placeholder="E-mail" <?php if($_SESSION['email']){ echo 'value="'.$_SESSION['email'].'"'; } ?> />
					<input type="email" name="remail" required placeholder="Repita su E-mail" <?php if($_SESSION['remail']){ echo 'value="'.$_SESSION['remail'].'"'; } ?> />
					<input type="text" name="motivo" required placeholder="Motivo de contacto" <?php if($_SESSION['motivo']){ echo 'value="'.$_SESSION['motivo'].'"'; } ?> />
					<textarea name="mensaje" required placeholder="Mensaje"><?php if($_SESSION['mensaje']){ echo $_SESSION['mensaje']; } ?></textarea>
					<input type="submit" name="submit" value="Enviar" />
					<input type="hidden" name="action" value="DoEnviarMensaje" />
				</form>
			</div>
			<div class="col-xs-12 col-md-6">
				<h2>Otras formas de contactarnos</h2>
				<p>Además le ofrecemos...</p>
				<ul>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@desaludhablamos.com</li>
					<!--<li><i class="fa fa-mobile" aria-hidden="true"></i>(11) 4444 4444</li>-->
				</ul>
			</div>
		</div>
	</div>