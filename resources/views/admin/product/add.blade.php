@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Category') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('postAddCategory')}}" method="POST">
                        @csrf()
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Category Name</label>
                                <input class=" form-control" type="text" name="name1">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Category Detail</label>
                                <textarea class=" form-control" type="text" name="detail"></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Category Image</label>
                                <input class=" form-control" type="file" name="photo">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Category Status</label>
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
