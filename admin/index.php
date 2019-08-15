<!DOCTYPE html> 

<html lang="en" >
  
  <?php require("comunes/head.php"); ?>

  <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
    <!-- begin:: Page -->    
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url(../img//bg/bg-2.jpg);">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img src="../img//logos/logo-1.png">
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
                <?php include("comunes/nombre.php"); ?>
								</h3>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input"   type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Contraseña" name="password">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--light">
											<input type="checkbox" name="remember">
											Recuerdame
											<span></span>
										</label>
									</div>
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">
											¿Olvidaste tu contraseña?
										</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
										Registrarse
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Sign Up
								</h3>
								<div class="m-login__desc">
									Enter your details to create your account:
								</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Nombre completo" name="fullname">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Correo electrónico" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" name="password">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
								</div>
								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--light">
											<input type="checkbox" name="agree">
											Acepto los
											<a href="#" class="m-link m-link--focus">
												Tér
											</a>
											.
											<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
										Sign Up
									</button>
									&nbsp;&nbsp;
									<button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
										Cancel
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Forgotten Password ?
								</h3>
								<div class="m-login__desc">
									Enter your email to reset your password:
								</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Request
									</button>
									&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">
										Cancel
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>
							&nbsp;&nbsp;
							<a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">
								Sign Up
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
  <!--begin::Base Scripts -->
  <script src="../js/vendors.bundle.js" type="text/javascript"></script>
  <script src="../js/scripts.bundle.js" type="text/javascript"></script>
  <!--end::Base Scripts -->   
  <!--begin::Page Snippets -->
  <script src="../js/login.js" type="text/javascript"></script>
  <!--end::Page Snippets -->
	</body>
	<!-- end::Body -->

</html>


<!DOCTYPE html>
<html lang="es">
<?php require("comunes/head.php"); ?>

<body>
 

<?php   require("comunes/nav.php"); ?>

    <!-- Header -->
    <header>
       
         <br><br>     <br> 
    <form class="form-signin" action="login.php" method="POST">
		<div style="text-align:center;color:red;font-weight:900"> 
 <img   src="img/profile.png" alt="" width="128px">
		<?php
                        if(isset($_GET["error"]))
                        {
                            ?>
                            <div class="alert alert-danger">
                             <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo "Usuario no existe"; ?> !
                         </div>
                         <?php
                     }
                     ?>

<?php
                        if(isset($_GET["iniciar"]))
                        {
                            ?>
                            <div class="alert alert-danger">
                             <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo "Debe iniciar sesión"; ?> !
                         </div>
                         <?php
                     }
                     ?>



                     
      <h2 class="form-signin-heading" style="color:black">AUTENTICACIÓN</h2>
      <input type="text" class="form-control" name="nombre_usuario" placeholder="Nombre de usuario" required="" autofocus="" />
      <input type="password" class="form-control" name="clave" placeholder="Clave" required=""/>      
       
      <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button> 
        
    </form>

  </div>
           
    </header>

 <?php   require("comunes/footer.php"); ?>

  <?php   require("comunes/scripts.php"); ?>
   

</body>

</html>
