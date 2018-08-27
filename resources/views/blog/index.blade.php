@extends('layouts.blog')

@section('sidebar')
    <!-- blog-left-sidebar start -->
    <div class="col-lg-3 col-md-3">
		<!-- widget-search start -->
            @include('partials.sidebar')
        <!-- widget-tags end -->
	</div>
	<!-- blog-left-sidebar end -->
@endsection

@section('content')
    <div class="col-lg-9 col-md-9">
		<!-- single-blog start -->
		<article class="blog-post-wrapper">
			<div class="post-thumbnail">
				<div class="post-slider">
					<a href="#"><img src="img/blog/post-slider/1.jpg" alt="" /></a>
					<a href="#"><img src="img/blog/post-slider/2.jpg" alt="" /></a>
					<a href="#"><img src="img/blog/post-slider/3.jpg" alt="" /></a>
					<a href="#"><img src="img/blog/post-slider/4.jpg" alt="" /></a>
					<a href="#"><img src="img/blog/post-slider/5.jpg" alt="" /></a>
				</div>
			</div>
			<div class="post-information">
				<h2><a href="#">Single post in Gallery format</a></h2>
				<div class="small-meta">
					<span><i class="fa fa-calendar"></i> February 5, 2015</span>
					<a href="#"><i class="fa fa-comments-o"></i> 0 comments</a>
				</div>
				<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
				<a class="readmore" href="#">read more</a>
			</div>
		</article>
		<!-- single-blog end -->
		<!-- single-blog start -->
		<article class="blog-post-wrapper">
			<div class="post-thumbnail">
				<div class="post-video embed-responsive embed-responsive-16by9">
					<iframe src="https://www.youtube.com/embed/-CmadmM5cOk"></iframe>
				</div>
			</div>
			<div class="post-information">
				<h2><a href="#">Post in Video format</a></h2>
				<div class="small-meta">
					<span><i class="fa fa-calendar"></i> November 30, 2014</span>
					<a href="#"><i class="fa fa-comments-o"></i> 0 comments</a>
				</div>
				<p>Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut</p>
				<a class="readmore" href="#">read more</a>
			</div>
		</article>
		<!-- single-blog end -->
		<!-- single-blog start -->
		<article class="blog-post-wrapper">
			<div class="post-thumbnail">
				<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
			</div>
			<div class="post-information">
				<h2><a href="#">Blog image post layout</a></h2>
				<div class="small-meta">
					<span><i class="fa fa-calendar"></i> February 28, 2015</span>
					<a href="#"><i class="fa fa-comments-o"></i> 0 comments</a>
				</div>
				<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
				<a class="readmore" href="#">read more</a>
			</div>
		</article>
		<!-- single-blog end -->
		<!-- single-blog start -->
		<article class="blog-post-wrapper">
			<div class="player">
				<audio controls class="audio-format">
					<source src="audio/Nana-Dreams.mp3" type="audio/mpeg">
				</audio>						
			</div>
			<div class="clear"></div>
				<div class="post-thumbnail">
					<a href="#"><img src="img/blog/2.jpg" alt="" /></a>
				</div>
			<div class="post-information">
				<h2><a href="#">Single post in Audio format</a></h2>
				<div class="small-meta">
					<span><i class="fa fa-calendar"></i> November 8, 2014</span>
					<a href="#"><i class="fa fa-comments-o"></i> 0 comments</a>
				</div>
				<p>Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut</p>
				<a class="readmore" href="#">read more</a>
			</div>
		</article>
		<!-- single-blog end -->
		<!-- pagination start -->
		<div class="pagination">
			<ul>
				<li class="active">1</li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
			</ul>
		</div>
		<!-- pagination end -->
	</div>
@endsection