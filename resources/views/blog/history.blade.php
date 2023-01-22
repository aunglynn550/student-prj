@extends('blog.layouts.single')

@section('content')


<div id="main">
						

						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1>Welcome to Our Museum!</h1>
								<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
							</header>

							<br>

							<h2 class="h2">History</h2>
							<!-- Offers -->
							<section class="tiles">
							@foreach ($blogs as $history)

								<article class="style3">
									<span class="image">
										<img src="/img/blog/{{ $history->image }}" alt="" />
									</span>
									<a href="offers.html">
										<h2>{{ $history->title }}</h2>
										
									

										<div class="content">
											<p>{{ $history->description }}</p>
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
	