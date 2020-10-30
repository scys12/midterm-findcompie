@extends('layouts.app')

@section('content')
<div class="bg-dark">
    <div class="container ">
        <div class="card bg-dark">
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul >
                    @foreach ($errors->all() as $error)
                        <li style = "list-style-type: none; text-align:right; padding-bottom:5px"><strong>{{$error}}</strong></li>
                    @endforeach
                </ul>
                </div>
            @endif
            <form class="row bg-secondary text-white" method="POST" action=" {{ route('product.put_update', ['id'=> $item->id]) }} ">
                @csrf
                @method('PUT')
                <article class="card-body p-5">
                    <div class=""><label class="labels"><b>Product Name</b> </label><input type="text" class="form-control" placeholder="Product Name" name="name" value="{{ old('name', $item->name) }}" required autofocus autocomplete="name"></div>
                    <div class=""><label class="labels"><b>Price </b> </label><input type="text" class="form-control" placeholder="Price" name="price" value="{{ old('price', $item->price) }}" required autofocus autocomplete="price"></div>
                    <div class="form-group">
                        <b>Description </b>   
                        <textarea class="form-control" id="pertanyaan" name="description" rows="5" required autofocus autocomplete="description" placeholder="Description">{{ old('description', $item->description) }}</textarea>
                    </div>
                        <dl class="param param-inline">
                            <dt>Kategori: </dt>
                            <dd>
                                <select class="form-control form-control-sm" style="width:150px;" name="category_id">
                                    @foreach ($categories as $category)
                                        
                                            <option value="{{ $category->id }}" @if ($category->id == $item->category->id) selected @endif > {{ $category->name }} </option>                                    
                                    @endforeach
                                </select>
                            </dd>
                        </dl>
                        <button type="submit" class="btn btn-lg btn-primary text-uppercase"> Edit Product </button>
                        <a href=" {{route('dashboard')}} " class="btn btn-lg btn-danger text-uppercase">  Cancel </a>
                </article> <!-- card-body.// -->
            </form> <!-- row.// -->
        </div> <!-- card.// -->
    </div>
</div>
<!--container.//-->

@endsection