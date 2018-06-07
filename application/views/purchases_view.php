<h1>Purchases</h1>

<table class="table table-hover table-bordered table-striped">
    <thead>
    <tr class="table-primary">
        <th scope="col">ID</th>
        <th scope="col">Date Purchased</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
    </tr>
    </thead>
    <tbody>
		<?php foreach($purchases as $purchase):?>
			<tr>
				<th scope="row"><?=$purchase['id']?></th>
				<td><?=$purchase['date']?></td>
				<td><?=$purchase['description']?></td>
				<td><?=$purchase['price']?></td>
			</tr>
		<?php endforeach; ?>
    </tbody>
</table>
