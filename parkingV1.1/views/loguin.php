<?php 

class loguin{
	public function loguin_in(){
		?>
<section class="container-fluid fondo mt-5 pt-5 mb-5 pb-5" >
	<div class="row" >   
		<div class="col-md-12">
		    <div class="wrap">
		        <p class="form-title  pb-3">Registrarse</p>
		        <form class="login " method="post" action='controllers/login.php'>
			        <input type="text" placeholder="Username" class="form-control" name="username" required />
			        <input type="password" placeholder="Password" class="form-control" name="password" required />
			        <div class="input-group col-sm-12 mt-3 pt-3 mb-1 pb-1">
						<button type="submit" class="btn btn-success  btn-block ">Ingresar</button>
					</div>
		        </form>
		    </div>
		</div>
	</div>
</section>
		<?php
	}
}

 ?>