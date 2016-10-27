<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


	
			  <div class="well well-lg">
					<h2> How It Work</h2>
				
				 	<div class="row">
					 	<div class="col-md-4">						
							<strong class="text-center"><a href="sendersReceivers.php" > Create Sender</a></strong>
						</div>
							<div class="col-md-4">					
							<strong class="text-center"><a href="sendersReceivers.php" > Create Receiver</a></strong>
						</div>
						<div class="col-md-4">					
							<strong class="text-center"><a href="sendersReceivers.php" > Send Money</a></strong>
						</div>
					</div>
				
				  <div class="row">
						<div class="col-md-4">
							<a href="newSender.php" >
								<span class="fa-stack fa-4x">		  
								  <i class="fa fa-square-o fa-stack-2x"></i>
								  <i class="fa fa-user fa-stack-1x"></i>
								</span>
							</a>
							<span><i class="fa fa-long-arrow-right fa-4x" aria-hidden="true"></i></span>
						</div>				
							
						
						<div class="col-md-4">
							<a href="sendersReceivers.php" >
								<span class="fa-stack fa-4x">		  
								  <i class="fa fa-square-o fa-stack-2x"></i>
								  <i class="fa fa-users fa-stack-1x"></i>
								</span>
							</a>											
							<span><i class="fa fa-long-arrow-right fa-4x" aria-hidden="true"></i></span>
						</div>
					
						<div class="col-md-4">
							<a href="sendMoney.php" >
								<span class="fa-stack fa-4x">		  
								  <i class="fa fa-square-o fa-stack-2x"></i>
								  <i class="fa fa-money fa-stack-1x"></i>
								</span>
							</a>
						</div>
					</div>
			</div>

<!-recent senders->
<div class="row">
	<h3>Senders List</h3>
	<table class="table table-stripped table-bordered  table-sorter" >
		<thead>
			<tr>
				<th><strong>No</strong></th>
				<th><strong>Sender</strong></th>
				<th><strong>Mobile</strong></th>
				<th><strong>Sender Since</strong></th>
				<th><strong>Cancel</strong></th>
				<th><strong>Create Receipient</strong></th>
				
			</tr>
		</thead>
		<tbody>
			<?php $x=0;foreach($customer as $customer): ?>
				<tr>
					<td><?php echo $x=$x+1; ?></td>
					<td><?php  echo strtoupper($customer->fname." ".$customer->lname); ?></td>
					<td> <?php echo $customer->mnumber; ?></td>
					<td> <?php echo $customer->date_reg; ?></td>
					<td>Cancel</td>
					<td> Create Receiver</td>
					


				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<a class="btn btn-default" href="Customers/customer_list">View More</a>
</div>