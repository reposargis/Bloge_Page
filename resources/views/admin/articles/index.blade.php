@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
          @slot('title') LIst News @endslot
          @slot('parent') Home         @endslot
          @slot('active') News   @endslot
        @endcomponent
        <hr>

        <a href="{{ route('admin.article.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o">    Create News</i></a>
        <table class="table table-striped">
        	<thead>
        		<th>Name</th>
        		<th>Publication</th>
        		<th class="text-right">Action</th>
        	</thead>
        	<tbody>
        		@forelse($articles as $article)
        			<tr>
        				<td>{{ $article->title }}</td>
        				<td>{{ $article->published }}</td>
        				<td class="text-right"> 
        					<form onsubmit="if(confirm('delete?')){ return true } else {return false}" action="{{ route('admin.article.destroy',$article) }}" method="post">
        						<input type="hidden" name="_method" value="DELETE">
        						{{ csrf_field() }}
        						<a href="{{ route('admin.article.edit',$article) }}" class="btn btn-default">
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
        					{{ $articles->links() }}
        				</ul>
        			</td>
        		</tr>
        	</tfoot>
        </table>
    </div>
@endsection
