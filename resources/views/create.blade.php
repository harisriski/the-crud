@extends('template.container')

@section('style')
<link rel="stylesheet" href="{{asset('style/style.css')}}">
@endsection

@section('content')
<form class="mb-4" action="/store" method="POST">
  @csrf
  <h1 class="text-center mb-4">Create Product</h1>
  <div class="form-group">
      <label for="">Product Name</label>
      <input type="text" class="form-control" name="product_name">
  </div>
  <div class="form-group">
      <label for="">Product Category</label>
      <select name="category_id" class="form-control">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{$category->name}}</option>
        @endforeach
      </select>
  </div>
  <div class="form-group">
      <label for="">Price</label>
      <input type="number" class="form-control" name="price">
  </div>
  <div class="form-group">
      <label for="">Stock</label>
      <input type="number" class="form-control" name="stock">
  </div>
  <button id="btn-submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection