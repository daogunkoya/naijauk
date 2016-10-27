<h3 cass="page-header">Set Bou /Sold Rate</h3>



<?php  echo validation_errors('<p class="alert alert-dismissible alert-danger">');?>
<?php echo form_open('Customers/new_customer'); ?>


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
<!--Date Of Birth-->
			<div class="col-md-6">
					<div class="input-group">
							<span class="input-group input-group-addon">Date of Birth</span>
							<?php 
							$data=array(
								'name'=>'date1',
								'id'=>'date1',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('date1'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>


					</div>
			</div>
	</div>

	<br/>
<!--contact Phone-->
	<div class="row">
			<div class="col-md-6">
					<div class="input-group">
							<span class="input-group input-group-addon">Contct Phone</span>
							<?php 
							$data=array(
								'name'=>'contact',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('contact'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
			</div>
			<div class="col-md-6">
					<div class="input-group">
							<span class="input-group input-group-addon">Mobile Phone</span>
							<?php 
							$data=array(
								'name'=>'mobile',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('mobile'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
			</div>
			
	</div>
	<br/>


<!--Email-->
	<div class="row">
			<div class="col-md-8 col-md-offset-2">
					<div class="input-group">
							<span class="input-group input-group-addon">Email</span>
							<?php 
							$data=array(
								'name'=>'email',
								'type'=>'email',
								'class'=>'form-control',
								'value'=>set_value('email'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
			</div>
	</div>

	<br/>
<!--address-->
	<div class="row">
	<div class="col-md-8 col-md-offset-2">
					<div class="input-group">
							<span class="input-group input-group-addon">PostCode</span>
							<?php 
							$data=array(
								'name'=>'postcode',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('postcode'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
					<div class="input-group">
							<span class="input-group input-group-addon">Address Line 1</span>
							<?php 
							$data=array(
								'name'=>'line1',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('line1'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
					<div class="input-group">
							<span class="input-group input-group-addon">Address line 2</span>
							<?php 
							$data=array(
								'name'=>'line2',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('line2'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
					<div class="input-group">
							<span class="input-group input-group-addon">Town</span>
							<?php 
							$data=array(
								'name'=>'town',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('town'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
					<div class="input-group">
							<span class="input-group input-group-addon">County</span>
							<?php 
							$data=array(
								'name'=>'county',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('county'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

							?>

					</div>
					<div class="input-group">
							<span class="input-group input-group-addon">Country</span>
							<?php 
							$data=array(
								'name'=>'country',
								'type'=>'text',
								'class'=>'form-control',
								'value'=>set_value('country'),
								'maxlength'=>'100'														
								);
							echo form_input($data);

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
