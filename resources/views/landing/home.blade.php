@extends('landing.template')

@section('content')

	@include('landing.sections.home.top-brand')
	@include('landing.sections.home.about')
	@include('landing.sections.home.features')
	@include('landing.sections.home.mobile')
	@include('landing.sections.home.apps-summary')
	@include('landing.sections.home.clients')

@endsection