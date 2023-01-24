@extends('blog.layouts.app')

@section('content')

@if($blogs->isNotEmpty())
<section class="tiles">
    @foreach ($blogs as $blog)
    <article class="style3">
			<span class="image">
				<img src="/img/blog/{{ $blog->image }}" alt="" />
			</span>
			<a href="{{ route('single', [$blog->id]) }}">
				<h2>{{ $blog->title }}</h2>
				<div class="content">
				<p>{{ $blog->description }}</p>
				</div>
			</a>
		</article>
    @endforeach
</section>
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif

@endsection('content')