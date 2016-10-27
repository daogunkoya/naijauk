<div class="row">
		<div classs="col-md-12">
				<table class="table table-stripped">
						<tr>
								<thead>
									<th>No</th>
									<th>sender</th>
									<th>Receiver</th>
									<th>Sender Phone</th>
									<th>Amount Naira</th>
								</thead>
						</tr>
						<tbody>
								<?php $x=0;foreach($report as $report):?>
								<tr>
										<td><?php echo $x=$x+1;?></td>
										<td><?php echo $report->s_name; ?></td>
										<td><?php echo $report->r_name; ?></td>
										<td><?php echo $report->s_phone; ?></td>
										<td><?php echo $report->amt_n; ?></td>
										<td><?php echo anchor('receipt','Receipt','class="btn btn-primary"'); ?></td>

								</tr>
								<?php endforeach; ?>
						</tbody>
				</table>
		</div>
</div>