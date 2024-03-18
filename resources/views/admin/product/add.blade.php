@extends('layouts.app')

@section('content')
<!-- <form action="">
    <label for="name">Name</label> <input type="text" name="name" id="name"><br>
    <label for="detail">Detail</label><input type="text" name="detail"><br>
    <label for="cost">Cost</label><input type="text" name="cost"><br>
    <label for="Photo">photo</label><input type="text" name="photo"><br>
</form> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Product') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('postAddProduct')}}" method="POST">
                        @csrf()
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Product Name</label>
                                <input class=" form-control" type="text" name="name">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Product Detail</label>
                                <textarea class=" form-control" type="text" name="detail"></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Product Image</label>
                                <input class=" form-control" type="file" name="photo">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Product Status</label>
                                <select id name="status" class="form-control">
                                    <option value="show">Show</option>
                                    <option value="hide">Hide</option>
                                </select>
                            </div>
                            <input type="submit" value="Add" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
