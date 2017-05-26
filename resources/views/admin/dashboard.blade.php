@extends('layouts.admin')

@section('content')
<table class="table table-bordered table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>
				Mail
			</th>
			<th>
				Subject
			</th>
			<th>
				Message
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach($messages as $message)
		<tr>
			<td>
				{{$message->mail}}
			</td>
			<td>
				{{$message->subject}}
			</td>
			<td>
				{{$message->message}}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>




@endsection