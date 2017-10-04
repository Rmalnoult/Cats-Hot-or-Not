@extends('layouts.app')

@section('content')
<div id="vote"></div>
@endsection

@section('scripts')
<script>
	var cats = {!! $cats !!};
</script>
<script src="{{ mix('js/vote.js') }}"></script>
@endsection