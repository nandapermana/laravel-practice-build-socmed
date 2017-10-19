@extends('layouts.master')

@section('content')
@include('includes.message-block')

		<section class="row new-post">
			<div class="col-md-6 col-md-offset-3">
					<header>
						<h3>what do you have to say </h3>
					</header>
					<form action="{{ route('post.create')}}" method="post">
						<div class="form-group">
							<textarea name="body" id="new-post" rows="5" placeholder="your post" class="form-control">	
							</textarea>
						</div>
						<hr>
						<button type="submit" class="btn btn-primary">Create Post</button>
						<input type="hidden" value="{{ Session::token() }}" name="_token">
					</form>
			</div>
		</section>
		<section class="row posts">
			<div class="col-md-6 col-md-offset-3">
				<header>
					<h3>
						what other ppl say...
					</h3>
				</header>
				<article class="post">
					<p> Loorefsd ipusm ekksk djksjds</p>
					<div class="info">
						Posted by  memek 122 feb 2010
					</div>
					<div class="interaction">
						<a href="#">Like</a>
						<a href="#">Dsilike</a>
						<a href="#">Edit </a>
						<a href="#">Delete</a>
					</div>
				</article>

				<article class="post">
					<p> Loorefsd ipusm ekksk djksjds</p>
					<div class="info">
						Posted by  memek 122 feb 2010
					</div>
					<div class="interaction">
						<a href="#">Like</a>
						<a href="#">Dsilike</a>
						<a href="#">Edit </a>
						<a href="#">Delete</a>
					</div>
				</article>
			</div>
		</section>
@endsection