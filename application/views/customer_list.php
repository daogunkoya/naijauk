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
				<th><strong>Edit Profile</strong></th>
				<th><strong>View</strong></th>
				<th><strong>Send Now</strong></th>
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
					<td><?php echo anchor('Customers/new_receiver/'.$customer->id.'','Create','class="btn btn-info"'); ?></a></td>
					<td><?php echo anchor('Customers/customer_edit/'.$customer->id.'','Modify','class="btn btn-primary"'); ?></a></td>
					<td> View Receiver</td>
					<td>Send Now</td>


				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>