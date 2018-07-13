@extends('admin.layouts.app_admin')

@section('content')
	
	@component('admin.components.breadcrumb')
	
	  @slot('title') Edit Category @endslot
	  @slot('parent') Home         @endslot
	  @slot('active') Categories   @endslot
	
	@endcomponent
	
	<hr>

	<form class="form-horizontal" action="{{ route('admin.category.update',$category) }}" method="post" >
		<input type="hidden" name="_method" value="put">
		{{ csrf_field() }}

		@include('admin.categories.partials.form')
	</form>

@endsection