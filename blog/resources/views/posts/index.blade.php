@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="text-center"> Dispaly All Posts</h1>
            @if ($posts->count()>0)
                
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                 @foreach ($posts as $post)
    
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>

                    <td>
                        {{ $post->category->name}}
                    </td>
                    
                    <td><img src="{{ $post->image  }}" height="50" alt=""></td>
                    <td><a href="#"><i class="fa fa-edit fa-2x text-info"></i></a></td>
                    <td><a href="{{ route('post.delete', $post->id) }}"><i class="fa fa-trash fa-2x text-danger"></i></a></td>
                  </tr>
                  @endforeach 
                </tbody>
              </table>

              @else
                <div class="alert alert-danger"><h1>No poost</h1></div>
              @endif 

        </div><!-- col-md-8 -->
    </div> <!-- row -->
    </div><!-- container -->
 @endsection