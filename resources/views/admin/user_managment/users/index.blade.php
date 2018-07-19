@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
          @slot('title') LIst Of Users @endslot
          @slot('parent') Home         @endslot
          @slot('active') Users   @endslot
        @endcomponent
        <hr>

        <a href="{{ route('admin.user_managment.user.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o">    Create Users</i></a>
        <table class="table table-striped">
        	<thead>
        		<th>Name</th>
        		<th>Email</th>
        		<th class="text-right">Action</th>
        	</thead>
        	<tbody>
        		@forelse($users as $user)
        			<tr>
        				<td>{{ $user->name }}</td>
        				<td>{{ $user->email }}</td>
        				<td class="text-right"> 
        					<form onsubmit="if(confirm('delete?')){ return true } else {return false}" action="{{ route('admin.user_managment.user.destroy',$user) }}" method="post">
        						{{ method_field('DELETE') }}
        						{{ csrf_field() }}
        						<a href="{{ route('admin.user_managment.user.edit',$user) }}" class="btn btn-default">
        							<i class="fa fa-edit"></i>
        						</a>
        						<button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
        					</form>
        					
        				</td>
        			</tr>
        		@empty
        		<tr>
        			<td colspan="3" class="text-center">
        				<h2>Data not available</h2>
        			</td>
        		</tr>
        		@endforelse
        	</tbody>
            
        	<tfoot>
        		<tr>
        			<td colspan="3">
        				<ul class="pagination pull-right">
        					{{ $users->links() }}
        				</ul>
        			</td>
        		</tr>
        	</tfoot>
        </table>
    </div>
@endsection
