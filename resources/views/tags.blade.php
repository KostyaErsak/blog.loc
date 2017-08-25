@extends('main')

@section ('title')
    <title>{{ ucfirst($tag_name) }}</title>
@endsection

@section ('content')

<h1></h1>

<div id="gtco-maine">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><br>
					<h2 class="related-title animate-box">{{ ucfirst($tag_name) }}</h2><br>
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

					</ul>	
				</div>
			</div>
		</div>
	</div>

@endsection
