<!-- Buttons -->
<div id="home-button">
	<a href="#" id="show-post-link">Browse Posts</a>
	<a href="#" id="new-post-link">New Post</a>
</div>

<br>

<div id="show-post">
	<!-- Post Table -->
	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>Content</th>
				<th>Create Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<!-- Posts Information -->
		</tbody>
	</table>
</div>

<div id="new-post">
	<!-- New Post Form -->
	<form action="" id="new-post-form" method="POST">
		
		<label for="title">Title</label><br>
		<input type="text" name='title' class="text" /><br><br>

		<label for="content">Content</label><br>
		<textarea name="content" cols="30" rows="10"></textarea><br><br>

		<input type="submit" name="submit" class="submit" />

	</form>
</div>