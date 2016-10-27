<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Nigera To UK Money Transfer</title>

    <!-- Bootstrap core CSS -->
   
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif|Montserrat|PT+Serif|Roboto" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>asset/css/font-awesome.css" rel="stylesheet">
	<script src="../asset/js/jquery-1.9.1.min.js"></script>
	<link href="../asset/css/jquery-ui.min.css" rel="stylesheet">
	



  </head>
  <script>

  </script>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Nigera To UK</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><?php echo anchor('home', 'Home', 'title="Dashboard Home"'); ?></li>  
            
            <li><?php echo anchor('transaction/sendMoney','Send Money','title="Send Money"'); ?></li>
            <li><?php echo anchor('transaction/report', 'Transaction', 'title="View Transaction"'); ?></li> 
            <li><?php echo anchor('customers/setup', 'Setup Customer', 'title="Setup Customer"'); ?></li> 
            <li><?php echo anchor('transaction/bou_sold', 'Sold Bou Rate', 'title="Sold Bou Rate"'); ?></li> 
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><?php echo anchor('transaction/bank', 'Setup Banks', 'title="Setup Banks"'); ?></li>  
            <li><?php echo anchor('transaction/search', 'Search', 'title="Search Transaction"'); ?></li> 
             <li><?php echo anchor('Users/logout', 'LogOut', 'title="log Out"'); ?></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    	<div class="row">
    		<div class="col-md-4">
    			<ul class="list-group">
    				<div class="panel panel-info">	
    					<div class="panel-heading">	
    						<li class="list-group-item"><?php echo anchor('home','Home','title="Home"'); ?></li>
    					</div>

    					<div class="panel-body">

    						<li class="list-group-item"><?php echo anchor('Customers/new_customer', 'New Customer', 'title="Setup Customer"'); ?></li>


    						<li class="list-group-item"><?php echo anchor('Customers/customer_list', 'Customer List', 'title=" Customer List"'); ?></li>

							<li class="list-group-item"><?php echo anchor('transaction/sendMoney','Send Money','title="Send Money"'); ?></li>
							<li class="list-group-item"><?php echo anchor('transaction/report', 'Transaction', 'title="View Transaction"'); ?></li>
							<li class="list-group-item"><?php echo anchor('transaction/bank','Receiver Bank','title="Receiver Bank"');?></li>
							<li class="list-group-item"><?php echo anchor('transaction/turover','Turn Over','tile=""');?></li>
							<li class="list-group-item"><?php echo anchor('transaction/search','Search','tile="Search Transaction"');?></li>
							<li class="list-group-item"><?php echo anchor('transaction/bou_sold','Bou-Sold Rate','tile="Bou-Sold Rate"');?></li>
							<li class="list-group-item"><?php echo anchor('transaction/cancelled','Cancelled Deal','tile="Cancelled Deal"');?></li>
						</div>

					</div>
				</ul>
    		</div>
    		<div class="col-md-8">
    			<!-- Load Main View -->
				<?php $this->load->view($main); ?>
    		</div>
    	</div>
    </div><!-- /.container -->

    <div class="container">
    	<div class="row">
    		<div class="col-md-6 col-md-offset-4">
    			<footer>
    				<strong>Designed And Developed By Computing 24x7 ltd</strong>
    			</footer>
    		</div>
    	</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>  
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-datepicker.js"></script>  
	<script src="../asset/js/script.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  </body>
</html>

