<label for=""> Status </label>
<select class="form-control" name='published'>
	@if(isset($article->id))
		<option value="0" @if($article->published == 0) selected="" @endif>Not published</option>
		<option value="1" @if($article->published == 1) selected="" @endif>Published</option>
	@else
		<option value="0">Not published</option>
		<option value="1">Published</option>
	@endif
</select>

<label for=""> Caption </label>
<input type="text" name="title" class="form-control" placeholder="Caption news" value="{{ $article->title or '' }}" required>

<label for=""> Slug (Unique Value)</label>
<input type="text" name="slug" class="form-control" placeholder="Automatic Generation" value="{{ $article->slug or '' }}" readonly="">

<label for="">Parent Article</label>
<select class="form-control" name="categories[]" multiple="">
	<option value="0">-----Without Parent article-----</option>
	@include('admin.articles.partials.categories',['categories'=>$categories])
</select>


<label for="">Short Description</label>
<textarea class="form-control" id="description_short" name="description_short">{{ $article->description_short  or ""}}</textarea>

<label for="">Full Description</label>
<textarea class="form-control" id="description" name="description">{{ $article->description or ""}}</textarea>

<hr />

<label for="">Meta Caption</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta Caption" value="{{ $article->meta_title  or ''}}" >

<label for="">Meta Description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta Description" value="{{ $article->meta_description  or ''}}" >

<label for="">Key Words</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Kew words,separated by commas" value="{{ $article->meta_keyword  or ''}}" >

<hr />
<input type="submit" value="Save" class="btn btn-primary">


