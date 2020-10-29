@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Add New Post</h2>
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

                    <form action="{{ route('post.store') }}" method="POst" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Titel</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Post Title"
                                name="title">
                        </div>

                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="category_id" id="" class="form-control form-control-lg">

                                @foreach ($categorise as $category)
                                <option value="{{ $category->id}}">{{ $category->name }}</option> 
                                @endforeach
                            
                                
                            </select>  
                        </div>

                        <div class="form-group">
                            <label for="">Content</label>
                            <textarea name="content" id="" class="form-control form-control-lg"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block w-50 mx-auto">Add
                                Post</button>
                        </div>

                    </form>
            </div><!-- card-body -->
        </div> <!-- card -->
    </div><!-- col-md-8 -->
</div> <!-- row -->
</div><!-- container -->

@endsection