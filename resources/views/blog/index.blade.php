@extends('blog.layouts.app')

@section('content')

				<!-- Main -->
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
							@foreach ($histories as $history)
						
								<article class="style3">
									<span class="image">
										<img src="img/blog/{{ $history->image }}" alt="" />
									</span>
									<a href="{{ route('single', [$history->id]) }}">
										<h2>{{ $history->title }}</h2>
										
									

										<div class="content">
											<p>{{ $history->description }}</p>
										</div>
									</a>
								</article>
							
								@endforeach
								</section>
							

							<p class="text-center"><a href="{{ route('category', ['id' => $hisCate]) }}">View All Posts &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

							<h2 class="h2">Ancient</h2>

							<!-- Fleet -->
							<section class="tiles">
							@foreach ($ancients as $ancient)
								<article class="style2">
									<span class="image">
										<img src="img/blog/{{ $ancient->image }}" alt="" />
									</span>
									<a href="{{ route('single', [$ancient->id]) }}">
										<h2>{{ $ancient->title }}</h2>
										
										<div class="content">
											<p>{{ $ancient->description }}</p>
										</div>

										<p>
											<i class="fa fa-user"></i> 5 &nbsp;&nbsp;
											<i class="fa fa-briefcase"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-sign-out"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-cog"></i> A
										</p>
									</a>
								</article>
								@endforeach
								
							</section>

							<p class="text-center"><a href="{{ route('category', ['id' => $ancCate]) }}">View All Ancients &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

							
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Contact Us</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>

										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>

										<div class="field">
											<input type="text" name="subject" id="subject" placeholder="subject" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section>
								<h2>Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
									<li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
									<li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li>
								</ul>

								<h2>Follow Us</h2>

								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 Company Name </li>
								<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
							</ul>
						</div>
					</footer>

			</div>

		

@endsection('content')