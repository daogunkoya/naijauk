<h3 cass="page-header">Set Bou /Sold Rate</h3>
<?php  echo validation_errors('<p class="alert alert-dismissible alert-danger">');?>

 <?php if($this->session->flashdata('success')) : ?>
      <?php echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('error')) : ?>
      <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; ?>
    <?php endif; ?>

	 
<div class="alert alert-success">'
<?php echo form_open('transaction/bou_sold'); ?>


<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="input-group">
			<span class="input-group input-group-addon">Bou Rate</span>
				<?php 
				$data=array(
			'id'=>'bou_rate',
			'class'=>"form-control",
			'name'=>'bou_rate',
			'type'=>'text',
			'value'=>set_value('bou_rate'),
			'maxlength'=>'50',
					);

				echo form_input($data);
				?>
			</div>
		</div>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<br/>
		<div class="input-group">
			<span class="input-group input-group-addon">Sold Rate</span>
			<?php $data=array(
				'id'=>'sold_rate',
				'name'=>'sold_rate',
				'value'=>set_value('sold_rate'),
				'maxlength'=>'50',
				'class'=>"form-control"

				);
			echo form_input($data);
		?>
		</div>
	</div>
</div>

<div class"row">
	<div class="col-md-4 col-md-offset-5">
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




