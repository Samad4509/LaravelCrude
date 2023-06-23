@extends('admin.master')
@section('title')
    Update Product
@endsection
@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center text-muted">Update Product Form</h1>
                        <p class="text-center text-success">{{session('message')}}</p>
                        <hr/>
                        <form action="{{route('product-update',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$product->product_name}}" class="form-control" name="product_name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Category</label>
                                <div class="col-md-9">
                                    <input type="text"  value="{{$product->product_category}}" class="form-control" name="product_category"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Brand</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$product->product_brand}}" class="form-control" name="product_brand"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Price</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$product->product_price}}" class="form-control" name="product_price"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="product_description">
                                        {{$product->product_description}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="product_image"/>
                                    <img src="{{asset($product->product_image)}}" alt="" height="100" width="120">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Status</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="status" value="1" checked/>Published</label>
                                    <label><input type="radio" name="status" value="0" checked/>UnPublished</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-primary" value="Update Product"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
