@extends('post.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example - websolutionstuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('posts/create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->detail }}</td>
            <td>
                <form action="{{ url('posts/delete',$post->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ url('posts',$post->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ url('posts/edit',$post->id) }}">Edit</a>
   
                    @csrf
                    @method('POST')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $posts->links() !!}
      
@endsection