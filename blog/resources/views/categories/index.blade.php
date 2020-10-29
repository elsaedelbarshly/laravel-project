@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2></h2>
                </div> <!-- card-header -->
                <h2>Display All Categories</h2>

                <div class="card-body">

                  @if ($categories->count()>0)
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
@foreach ($categories as $category)
<tr>
<th scope="row">{{ $category->id }}</th>
<td>{{ $category->name }}</td>
<td><a href="{{ route('category.edit',$category->id) }}"><i class="fa fa-edit"></i></a></td>
<td><a href="{{ route('category.delete',$category->id ) }}"><i class="fa fa-trash"></i></a></td>
</tr>
@endforeach
                     
                     
                      </tr>
                    </tbody>
                  </table>

                  @else
                      <h1 class="alert alert-danger">No Categories</h1>
                  @endif

                </div><!-- card-body -->
            </div> <!-- card -->
        </div><!-- col-md-8 -->
    </div>
</div><!-- container -->

@endsection




