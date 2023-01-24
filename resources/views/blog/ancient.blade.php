@extends('blog.layouts.single')

@section('content')


				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h2 class="h2">Ancient</h2>


							<!-- Offers -->
							<section class="tiles">
							@foreach ($blogs as $ancient)

								<article class="style3">
									<span class="image">
										<img src="/img/blog/{{ $ancient->image }}" alt="" />
									</span>
									<a href="{{ route('single', [$blog->id]) }}">
										<h2>{{ $ancient->title }}</h2>
										
									

										<div class="content">
											<p>{{ $ancient->description }}</p>
										</div>
									</a>
								</article>

								@endforeach
								</section>


					

						<br>
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>

								&nbsp;
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 Company Name </li>
								
							</ul>
						</div>
					</footer>

			</div>
@endsection('content')
	