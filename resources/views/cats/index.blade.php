@extends('layouts.app')

@section('content')
<div class="container">
	@forelse($cats as $cat)
		<div class="row cat">
			<div class="col-xs-5">
				<div class="cover avatar pull-right" style="background-image:url({{ $cat->image }});"></div>
			</div>
			<div class="col-xs-7 text-white">
				<h2>{{ $cat->score() }}%</h2>
				<p>Positive votes: {{ $cat->positiveVotes() }}</p>
				<p>Negative votes: {{ $cat->negativeVotes() }}</p>
			</div>
		</div>
	@empty
		<tr>
			<td colspan="5">No cat. :(</td>
		</tr>
	@endforelse
</div>
@endsection