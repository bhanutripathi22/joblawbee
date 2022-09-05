@extends('layouts.template-search')

@section('content')

 <section class="my-5">

  
  <div class="container">
  <div class="row">
    
   <div class="col-xs-12 col-md-12 col-lg-12" style="padding-top:23%;">
   
    
    <div class="row profile-div">
      
   <div class="col-xs-12 col-md-8 col-lg-8" >
      <div class="tab-pane" id="press" role="tabpanel">
         <a href="{{ route('company-profile', $pressrelease->company) }}" class="btn-red" style="margin-bottom:5%;">Back to Profile</a>
              <h3  class="mt-0 pb-1">Press Releases</h3>
              
             {{--  @foreach($pressrelase as $press) --}}
              <div class="row">
                  <div class="col-md-6">
                  <p> {!! $pressrelease->tittle !!}</p>
                   </div></div>
                     <div class="row">
              <div class="col-md-6">
              <p> {!! $pressrelease->press_text !!} </p>
              </div></div>
             
            </div>
            {{-- @endforeach --}}
            </div>

    
   </div>
   
 
  </div>
  </div>
  </div>
  </div>

 </section>
@endsection
