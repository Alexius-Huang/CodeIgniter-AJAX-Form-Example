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
		<tbody id='append-data'>
			<!-- Posts Information -->
				<?php foreach ($posts as $post): ?>
					<tr>
						<td><?php echo $post['title']; ?></td>
						<td><?php echo $post['content']; ?></td>
						<td><?php echo date("F j, Y, g:i a", strtotime($post['created_at'])); ?></td>
						<td>Perform Actions Here</td>
					</tr>
				<?php endforeach; ?>
		</tbody>
	</table>
</div>

<div id="new-post">
	<!-- New Post Form -->
	<form action="" id="new-post-form" method="POST">
		
		<label for="title">Title</label><br>
		<input type="text" name='title' class="text" id="title"/><br><br>

		<label for="content">Content</label><br>
		<textarea name="content" cols="30" rows="10" id="content"></textarea><br><br>

		<input type="submit" name="submit" class="submit" />

	</form>
</div>


<script>
	$(document).ready(function() {

		$('#new-post-form').on('submit', function(event) {
			event.preventDefault();
			var inputTitle = $('input#title').val();
			var inputContent = $('textarea#content').val();

			jQuery.ajax({
				type: 		'POST',
				url:  		"<?php echo base_url(); ?>" + 'index.php/home/submit',
				dataType: 'json',
				data: 		{ title: inputTitle, content: inputContent },
				success: 	function(response) {
					if (response) {
						var appendHTML = `
							<tr>
								<td>` + response.title + `</td>
								<td>` + response.content + `</td>
								<td>` + response.created_at + `</td>
								<td>Perform Actions Here</td>
							</tr>
						`;

						$('div#new-post form input#title').val('');
						$('div#new-post form textarea').val('');
						$('div#new-post').fadeOut(300, 'easeOutSine');
						$('div#show-post').delay(300).slideDown(400, 'easeOutSine', function() {
							$('tbody#append-data').append(appendHTML);
						});
					}
				}
			});
			
		});

	});
</script>