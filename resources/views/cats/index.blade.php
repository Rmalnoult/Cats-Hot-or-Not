@extends('layouts.app')

@section('content')
<div class="container">
	@forelse($cats as $cat)
		<div class="row cat">
			<div class="col-xs-5">
				<div class="cover avatar" style="background-image:url({{ $cat->image }});"></div>
			</div>
			<div class="col-sm-8 col-xs-7 text-white">
				<h2>{{ $cat->score() }}%</h2>
				<p><big>Positive votes: {{ $cat->positiveVotes() }}</big></p>
				<p><big>Negative votes: {{ $cat->negativeVotes() }}</big></p>
			</div>
		</div>
	@empty
		<tr>
			<td colspan="5">Aucun chat. :(</td>
		</tr>
	@endforelse
</div>
@endsection