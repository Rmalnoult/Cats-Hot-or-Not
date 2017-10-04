@extends('layouts.app')

@section('content')
<div class="container">
	@forelse($cats as $cat)
		<div class="row cat">
			<div class="col-xs-4">
				<div class="cover avatar" style="background-image:url({{ $cat->image }});"></div>
			</div>
			<div class="col-xs-8">
				Score
			</div>
		</div>
	@empty
		<tr>
			<td colspan="5">Aucun chat. :(</td>
		</tr>
	@endforelse
	<div class="text-center">{{$cats->render()}}</div>
</div>
@endsection