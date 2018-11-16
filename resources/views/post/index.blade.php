@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-2" style="padding: 0 200px;">
			<table class="table table-hover col-12" style="text-align: center; border: 1px solid #ccc;">
				<thead>
					<tr class="table-primary">
						<th>Title</th>
						<th>Content</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>

					@foreach($posts as $post)
						
					<tr>
						<td>{{$post->title}}</td>
						<td>{{$post->content}}</td>
						<td><a href="{{url('post/'.$post->id.'/edit')}}" class="btn btn-success">Edit</a></td>
						<td>
							<form action="{{ route('post.destroy', $post) }}" method="post">
								{{csrf_field()}}
								{{method_field('DELETE')}}
								<button onclick="return confirm('Konfirmasi Hapus')" id="deleteButton" class="btn btn-xs btn-danger" type="submit">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection