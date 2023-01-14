@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div id="card" class="card">
                    <div class="card-header">
                       <p> Kings List</p>
                        <a href="{{ route('blogs.create') }}" class="button btn-sm" data-type="primary">Create</a>
                    </div>
                    
                    <div class="card-body">

                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <table class="table user-approve-table">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Votes</th>
                                <th></th>
                            </tr>
                        
                                <tr>
                                    <td>
                                        <div class="product-img">
                                        <img src="/img/blog/{{ $blog->image }}" alt="">
                                        </div>
                                        
                                    </td>
                                    <td>{{ $blog->name }}</td>
                                 
                                    <td>   
                                        <form id="update-form-{{$blog->id}}" action="{{ route('blogs.update',$blog->id) }}"method="post">
                                        @csrf @method('PATCH')
                                       
                                    </form>
                                    </td>
                                    <td>
                                    <a href="{{ route('blogs.index') }}" onclick="event.preventDefault();
                                     document.getElementById('update-form-{{$blog->id}}').submit();">
                                    Update
                                    </a>
                                    </td>
                                    <td>
                                    <a href="{{ route('blogs.index') }}" onclick="event.preventDefault();
                                     document.getElementById('delete-form-{{$blog->id}}').submit();">
                                    Delete
                                    </a>
                                    </td>
                                    <form id="delete-form-{{$blog->id}}" action="{{ route('blogs.destroy',$blog->id) }}"method="post">
                                        @csrf @method('DELETE')
                                    </form>
                                 
                                 
                                </tr>
                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection