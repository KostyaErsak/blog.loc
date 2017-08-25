@extends('main')

@section ('title')
    <title>{{ $category_name }}</title>
@endsection

@section ('content')

<h1></h1>

<div id="gtco-maine">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><br>
					<h2 class="related-title animate-box">{{ $category_name }}</h2>
				</div>
			</div>

			<div class="row row-pb-md">
				<div class="col-md-12">
					<ul id="gtco-post-list">

						@foreach ($posts as $post)
						<li class="one-third animate-box entry" data-animate-effect="fadeIn">
							<a href="/post/{{ $post->id }}">
								<div class="entry-img" style="background-image: url(/images/{{ $post->image }}"></div>
								<div class="entry-desc">
									<h3>{{ $post->title }}</h3>
									<p>{{ $post->excerpt }}</p>
								</div>
							</a>
							<a href="/post/{{ $post->id }}" class="post-meta">{{ $post->category->name }}  <span class="date-posted">{{ $post->created_at }}</span></a>
						</li>
						@endforeach

						<!-- <li class="one-half entry animate-box" data-animate-effect="fadeIn">
							<a href="single.html">
								<div class="entry-img" style="background-image: url(images/img_7.jpg"></div>
								<div class="entry-desc">
									<h3>How Web Hosting Can Impact Page Load Speed</h3>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains.</p>
								</div>
							</a>
							<a href="single.html" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
						</li>

						<li class="one-third animate-box entry" data-animate-effect="fadeIn">
							<a href="#">
								<div class="entry-img" style="background-image: url(images/img_4.jpg"></div>
								<div class="entry-desc">
									<h3>How Web Hosting Can Impact Page Load Speed</h3>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
							</a>
							<a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
						</li> -->
						<!-- <li class="one-third animate-box entry" data-animate-effect="fadeIn">
							<a href="#">
								<div class="entry-img" style="background-image: url(images/img_5.jpg"></div>
								<div class="entry-desc">
									<h3>How Web Hosting Can Impact Page Load Speed</h3>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
							</a>
							<a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
						</li>
 -->
					</ul>	
				</div>
			</div>
		</div>
	</div>

@endsection

