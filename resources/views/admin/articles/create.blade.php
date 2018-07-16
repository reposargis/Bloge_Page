@extends('admin.layouts.app_admin')

@section('content')
	
	@component('admin.components.breadcrumb')
	
	  @slot('title') LIst News @endslot
	  @slot('parent') Home         @endslot
	  @slot('active') News   @endslot
	
	@endcomponent
	
	<hr>

	<form class="form-horizontal" action="{{ route('admin.article.store') }}" method="post" >
		{{ csrf_field() }}

		@include('admin.articles.partials.form')
		<input type="hidden" name="created_by" value="{{ Auth::id() }}">
	</form>

@endsection