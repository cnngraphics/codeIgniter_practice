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
    <!-- <tr>
        <th scope="row">Default</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="table-primary">
        <th scope="row">Primary</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="table-secondary">
        <th scope="row">Secondary</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="table-success">
        <th scope="row">Success</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="table-danger">
        <th scope="row">Danger</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="table-warning">
        <th scope="row">Warning</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="table-info">
        <th scope="row">Info</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="table-light">
        <th scope="row">Light</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="table-dark">
        <th scope="row">Dark</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr> -->
    </tbody>
</table>
