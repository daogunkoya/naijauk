
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset//css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/login.css" type="text/css" />
  
<title> Login Form|</title>
  
</head>
<body>

<div id="container">

<header>
<h1><?php if (isset($name1)){ echo $name1;} ?></h1>
</header>

<div class="row">
<div class="col-md-12 text-center">



</div>
</div>
<

  <section>
    <div class="login">
      <div class="row">
	<div class="col-md-6 col-md-offset-3">
		<!--<h3><a class="btn btn-primary" href="APP/agent_login.php" style="color:#fffff ;">Login To System 2</a></h3>-->
			
		</div>
	</div>
  <?php  $attr=array('id'=>'login_form','class'=>'signin_form','role'=>'form');?>
    <?php echo form_open('login/index',$attr); ?>
     
        <?php echo validation_errors('<p class="alert alert-danger">'); ?>
        <?php if($this->session->flashdata('success')) : ?>
      <?php echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('error')) : ?>
      <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; ?>
    <?php endif; ?>
      <p> 
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
       
        
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="Login" value="Login"></p>
      </form>
      <?php echo form_close(); ?>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="agent_forgot_password.php">Click here to reset it</a>.</p>
    </div>
  </section>

  <section class="about">
    <p class="about-links">
     
      <a href="/../../index.php" >Home</a>
	  <a href="../users/APP/new_agent_reg.php" >Register</a>
    </p>
    <p class="about-author">
      &copy; 2010&ndash;2015<a href="http://www.ictprofessionals.co.uk" target="_blank">Ictprofessionals</a> -
      <a href="http://www.ictprofessionals.co.uk" target="_blank">Ictprofessionals World Limited</a><br>
      </a>
  </section>
  </div>>
</body>
</html>