		<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
			
			<div class="col-md-1"></div>

			<div class="col-md-10">
			<h2>Data Invoice</h2>
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Address</th>
							<th>Quantity</th>
							<th>Product Name</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach($products as $product) : ?>
						<tr>
							<td><?=$no?></td>
							<td><?=$product->name?></td>
							<td><?=$product->alamat?></td>
							<td><?=$product->jumlah?></td>
							<td><?=$product->product_name?></td>
						</tr>
						<?php $no++; endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-1"></div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>