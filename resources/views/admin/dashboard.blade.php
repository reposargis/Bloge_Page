@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Categories {{ $count_categories }}</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Materials {{ $count_articles }}</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Visitors 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Today 0</span></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <a href="{{ route('admin.category.store') }}" class="btn btn-block btn-default">Create category</a>
        @foreach($categories as $category)
          <a href="{{ route('admin.category.edit',$category) }}" class="list-group-item">
            <h4 class="list-group-item-heading">{{ $category->title }}</h4>
            <p class="list-group-item-text">{{ $category->articles()->count() }}</p>
          </a>
        @endforeach
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.article.store') }}" class="btn btn-block btn-default">Create material</a>
        @foreach($articles as $article)
          <a href="{{ route('admin.article.edit',$article) }}" class="list-group-item">
            <h4 class="list-group-item-heading">{{ $article->title }}</h4>
            <p class="list-group-item-text">{{ $article->categories()->pluck('title')->implode(', ') }}</p>
          </a>
        @endforeach
      </div>
    </div>
  </div>
@endsection
