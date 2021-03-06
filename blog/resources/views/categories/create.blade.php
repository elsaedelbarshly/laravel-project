@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Add New Category</h2>
                </div> <!-- card-header -->
                <div class=" card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                    <form action="{{ route('category.store') }}" method="POst">
                        @csrf
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter category name"
                                name="name">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block w-50 mx-auto">Add
                                Category</button>
                        </div>

                    </form>

                </div><!-- card-body -->
            </div> <!-- card -->
        </div><!-- col-md-8 -->
    </div>
</div><!-- container -->

@endsection