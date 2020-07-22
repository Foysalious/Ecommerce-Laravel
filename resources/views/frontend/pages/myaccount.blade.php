@extends('frontend.template.layout')

@section('body')
	<section class="myAccount"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!--login form-->
					<div class="login-form">
						<h2>Welcome, {{ Auth('visitor')->user()->name }}</h2>
						
	                    
					</div><!--/login form-->
				</div>

			</div>
		</div>
	</section><!--/form-->
@endsection