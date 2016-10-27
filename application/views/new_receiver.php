<h3 cass="page-header">New Receiver</h3>



<?php  echo validation_errors('<p class="alert alert-dismissible alert-danger">');?>
<?php $atts = array('id' => 'new_receiver', 'class' => 'new_receiver', 'role' => 'form'); ?>
<?php echo form_open('Customers/new_receiver/',$atts); ?>


<!--Email-->
	<div class="row">
			<div class="col-md-3 ">
					<div class="input-group">
							<span class="input-group input-group-addon">Title</span>
							<?php 
							$data=array(
								'Mr'=>'Mr',
								'Mrs'=>'Mrs',
								'Miss'=>'Miss'																				
								);
							echo form_dropdown('title',$data,'Mr','class="form-control"');

							?>

					</div>
			</div>
	</div>

	<br/>
	

<div class="panel-border">
	<div class="row">
			<div class="col-md-6">
					<div class="input-group">
							<span class="input-group input-group-addon">First Name</span>
							<?php 
							$data=array(
								'name'=>'first_name',
								'id'=>'first_name',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('first_name'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
			</div>
<!--last name-->
			<div class="col-md-6">
					<div class="input-group">
							<span class="input-group input-group-addon">Last Name</span>
							<?php 
							$data=array(
								'name'=>'last_name',
								'id'=>'last_name',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('last_name'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
			</div>
	</div>
		<br/>
<!--Middle name-->
	<div class="row">
			<div class="col-md-6">
					<div class="input-group">
							<span class="input-group input-group-addon">Middle Name</span>
							<?php 
							$data=array(
								'name'=>'middle_name',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('middle_name'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
			</div>

<!--contact Phone-->
	<div class="row">
			<div class="col-md-5">
					<div class="input-group">
							<span class="input-group input-group-addon">Transfer Type</span>
							<?php 
							$data=array(
								'Pick Up'=>'Pick Up',
								'Bank Account'=>'Bank Account',
																												
								);
							echo form_dropdown('type',$data,'Mr','class="form-control"');

							?>
							

					</div>
			</div>
		
			
	</div>
	<br/>



<!--Submit-->
<div class="row">
		<div class="col-md-5 col-md-offset-5"><div class="col-md-4 col-md-offset-5">
	<br/>
		<?php $data=array(
			'name'=>'submit',
			'type'=>'submit',
			'value'=>'Submit',
			'class'=>"btn btn-primary"
		);
		echo form_input($data);
		
		?>
		<?php echo form_close(); ?>
			
		</div>
</div>

</div>
