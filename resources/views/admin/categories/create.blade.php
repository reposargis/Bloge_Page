@extends('admin.layouts.app_admin')

@section('content')
	
	@component('admin.components.breadcrumb')
	
	  @slot('title') LIst Category @endslot
	  @slot('parent') Home         @endslot
	  @slot('active') Categories   @endslot
	
	@endcomponent
	
	<hr>

	<form class="form-horizontal" action="{{ route('admin.category.store') }}" method="post" >
		{{ csrf_field() }}

		@include('admin.categories.partials.form')
	</form>

@endsection