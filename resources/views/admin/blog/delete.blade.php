
<form action="{{ route('blogs.destroy',$blog->id)) }}" method="delete" enctype="multipart/form-data">
                                        @csrf

                                        <div class="input-group mb-3">                   
                                            <a class="button btn-sm" data-type="primary" href="{{route('blogs.destroy', $blog->id)}}">Delete</a>
                                        </div>
</form>