@if($errors->any())
				<div class="notification is-danger">
					<!-- <ul>Loop through the errors array and echo if any -->
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif