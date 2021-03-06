<section class="payment-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="payment-div">
					<div class="payment-top-sec payment-failed">
						<span class="red-icon">
							<i class="fa fa-exclamation"></i>
						</span>
						<h2>Payment Failed</h2>
					</div>
					<div class="payment-detail">
						<table>
							<tbody>
								<tr>
									<td class="left-td">ORDERID</td>
									<td class="right-td">#<?php echo $result['ORDERID']; ?></td>
								</tr>
								<tr>
									<td class="left-td">TXN AMOUNT</td>
									<td class="right-td"><?php echo $result['TXNAMOUNT']; ?></td>
								</tr>
								<tr>
									<td class="left-td">STATUS</td>
									<td class="right-td"><?php echo $result['TXNSTATUS']; ?></td>
								</tr>
								<tr>
									<td class="left-td">TXN DATE</td>
									<td class="right-td"><?php echo date('M d,Y',strtotime($result['TXNDATE'])); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="payment-btn failed">
						<a href="" class="try-again">Please Try Again</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>