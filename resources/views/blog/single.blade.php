@extends('blog.layouts.single')

@section('content')
<div id="main">
<section class="tiles">
    <article class="style3">
			<span class="image">
				<img src="/img/blog/{{ $blog->image }}" alt="" />
			</span>
			<a href="#">
				<h2>{{ $blog->title }}</h2>
				<div class="content">
				<p>{{ $blog->description }}</p>
				</div>
			</a>
		</article>
</section>
</div>
@endsection('content')