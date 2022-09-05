@extends('layouts.template-search')

@section('content')

<div class="container pb-5">
		<div class="row" data-aos="fade-up">
			@foreach($practice_areas as $practice)
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3  text-center" style="margin-top:12%;">
				<div class="bg-area border">
					<div class="step-img"><img src="{{ asset('template/images/icon_4.png') }}"></div>
					<h5>{{ $practice->name }}</h5>
					<a class="btn-red overlap-btn" href="{{ route('practicearea.show', $practice) }}">View Detail</a>
				</div>
			</div>
			
			@endforeach
			
			
		</div>
	</div>
@endsection 