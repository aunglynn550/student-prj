@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="card" class="card">
                    <div class="card-header">
                       <p> Blogs List</p>
                        <a href="{{ route('blogs.create') }}" class="button btn-sm" data-type="primary">Create</a>
                    </div>
                    
                    <div class="card-body">


                        <table class="table user-approve-table">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            @forelse ($blogs as $blog)
                                <tr>
                                    <td>
                                        <div class="product-img">
                                        <img src="/img/blog/{{ $blog->image }}" alt="">
                                        </div>
                                        
                                    </td>
                                    <td>{{ $blog->name }}</td>

                                    <td><a href="{{route('blogs.edit',$blog->id)}}"
                                           class="button btn-sm" data-type="primary">Edit</a>
                                    </td>
                                 
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No users found.</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection