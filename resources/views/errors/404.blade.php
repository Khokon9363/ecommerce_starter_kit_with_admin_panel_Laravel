@extends('ecommerce.master')
@section('title')
   Page not found
@endsection
@section('content')

<main class="main-container">
	<section class="ui-not-found">
	<div class="ui-not-found-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="primary" class="content-area padding-content white-color">
						<div id="main" class="site-main">
							<section class="error-404 not-found text-center">
								<h1 class="404">404</h1>
								<p class="lead">Sorry, we could not found the page you are looking for!</p>
								<div class="row">
									<div class="col-sm-4 col-sm-offset-4">
										<form role="search" method="get" id="searchform" action="#">
											<div>
												<input type="text" placeholder="Search and hit enter..." name="s" id="s" />
											</div>
										</form>
										<p class="go-back-home"><a href="{{ url('/') }}">
											Back to Home Page</a></p>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</main>

@endsection