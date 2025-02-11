@extends('layouts.master')

@section('page-title', 'Create Product')


@section('content')
<ul>
    @foreach($errors->all() as $message)
    <li><strong>{{ $message }}</strong></li>
    @endforeach
</ul>

<form action="{{ route('products.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label for="">Stocks</label>
        <input type="number" class="form-control"  name="stocks" required>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Save</button>
</form>
    
@endsection
