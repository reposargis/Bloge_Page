<label for=""> Status </label>
<select class="form-control" name='published'>
	@if(isset($category->id))
		<option value="0" @if($category->published == 0) selected="" @endif>Not published</option>
		<option value="1" @if($category->published == 1) selected="" @endif>Published</option>
	@else
		<option value="0">Not published</option>
		<option value="1">Published</option>
	@endif
</select>

<label for=""> Name </label>
<input type="text" name="title" class="form-control" placeholder="Caption Category" value="{{ $category->title or '' }}" required>

<label for=""> Slug </label>
<input type="text" name="slug" class="form-control" placeholder="Automatic Generation" value="{{ $category->slug or '' }}" readonly="">

<label for="">Parent Category</label>
<select class="form-control" name="parent_id">
	<option value="0">-----Without Parent Category-----</option>
	@include('admin.categories.partials.categories',['categories'=>$categories])
</select>

<hr />
<input type="submit" value="Save" class="btn btn-primary">


