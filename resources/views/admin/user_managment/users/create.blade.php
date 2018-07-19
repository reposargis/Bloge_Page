@extends('admin.layouts.app_admin')

@section('content')
	
	@component('admin.components.breadcrumb')
	
	  @slot('title') LIst Users @endslot
	  @slot('parent') Home         @endslot
	  @slot('active') Users   @endslot
	
	@endcomponent
	
	<hr>

	<form class="form-horizontal" action="{{ route('admin.user_managment.user.store') }}" method="post" >
		{{ csrf_field() }}

		@include('admin.user_managment.users.partials.form')
	</form>

@endsection