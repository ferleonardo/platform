<ul class="breadcrumb">
	<li>
		<a href="<?= action('Admin\HomeController@dashboard') ?>">Dashboard</a> <span class="divider">/</span>
	</li>
	
	<li class="active">Pages</li>
</ul>

<div>
	<a class="btn btn-primary" href="<?= action('Admin\PagesController@create') ?>">
		<i class="icon-plus"></i>
		Create New Page
	</a>
</div><hr>

<?php if(count($pages) == 0): ?>
	<p>No pages.</p>
<?php else: ?>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Title</th>
				<th>Created At</th>
				<th>Updated At</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($pages as $page): ?>
				<tr>
					<td><?= $page->title ?></td>
					<td><?= $page->created_at ?></td>
					<td><?= $page->updated_at ?></td>
					<td>
						<a href="<?= action('PagesController@show', [$page->id]) ?>" class="btn" target="_blank">
							<i class="icon-search"></i>
							View
						</a>
						
						<a href="<?= action('Admin\PagesController@edit', [$page->id]) ?>" class="btn">
							<i class="icon-edit"></i>
							Edit
						</a>
						
						<a href="<?= action('Admin\PagesController@destroy', [$page->id]) ?>" class="btn btn-danger" data-method="delete">
							<i class="icon-remove"></i>
							Delete
						</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	
	<?= $pages->links() ?>
<?php endif ?>