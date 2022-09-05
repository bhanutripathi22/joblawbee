<div class="modal fade" id="myModal" role="dialog" style="padding-top:7%;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#171715;">
             <h4 class="modal-title">Subscribe For Job Alert</h4>
          {{-- <button type="button" class="fa fa-window-close" data-dismiss="modal">&times;</button> --}}
          <button type="button" class="close coloredClose closeCustomModal" data-dismiss="modal"  aria-label="Close">
							<i class="fa fa-window-close" style="background-color:#fff"  aria-hidden="true"></i>
						</button>
         
        </div>
        <div class="modal-body">
        <form id="subscription-form" method="POST" action="{{route('subscribe')}}">
            @csrf
           <div class="row">
            <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control @error('state') is-invalid @enderror" name="fname" placeholder="First Name" value="{{ $company->profile->email ?? old('email') }}"  required />
                            @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control @error('state') is-invalid @enderror" name="lname" placeholder="Last Name" value="{{ $company->profile->email ?? old('email') }}" required/>
                            @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                  
                  </div>


            <div class="row">
         <div class="col-md-6">
                        <div class="form-group">
                            <label>Email ID <span style="color: red;">*</span></label>
                            <input type="email" class="form-control @error('state') is-invalid @enderror" name="email" placeholder="Email" value="{{ $company->profile->email ?? old('email') }}" required/>
                            @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                     

                       <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact No. <span style="color: red;">*</span></label>
                            <input type="text" class="form-control @error('state') is-invalid @enderror" name="contact_no" placeholder="Mobile No." value="{{ $company->profile->email ?? old('email') }}" required/>
                            @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

        </div>



                  <div class="row">
                         <div class="col-md-6">
                        <div class="form-group">
                            <label>Total Experience <span style="color: red;">*</span></label>
                           <select  class="form-control num-only @error('minimum_experience') is-invalid @enderror" name="minimum_experience"  value="{{ old('minimum_experience') }}" required>
                             <option disabled selected>Experience</option>
                                      <option>1</option>
                                       <option>2</option>
                                        <option>3</option>
                                          <option>4</option>
                                           <option>5</option>
                                            <option>6</option>
                                             <option>7</option>
                                              <option>8</option>
                                               <option>9</option>
                                                <option>10</option>
                                                  <option>11</option>
                                                  <option>12</option>
                                        <option>13</option>
                                          <option>14</option>
                                           <option>15</option>
                                            <option>16</option>
                                             <option>17</option>
                                              <option>18</option>
                                               <option>19</option>
                                                <option>20</option>

                                             <option>21</option>
                                          <option>22</option>
                                           <option>23</option>
                                            <option>24</option>
                                             <option>25</option>
                                              <option>26</option>
                                               <option>27</option>
                                                <option>28</option>
                                                   <option>29</option>
                                          <option>30</option>
                                           <option>31</option>
                                            <option>32</option>
                                             <option>33</option>
                                              <option>34</option>
                                               <option>35</option>
                                                <option>36</option>
                                                 <option>37</option>
                                                  <option>38</option>
                                                   <option>39</option>
                                                    <option>40</option>
                        </select>
                        </div>
                    </div>
                     

                       <div class="col-md-6">
                        <div class="form-group">
                            <label>Location <span style="color: red;">*</span></label>
                            <select class="form-control num-only @error('minimum_experience') is-invalid @enderror" id="" name="location" placeholder="City" required>
                                  @foreach($location as $city)
                            <option>{{$city->name}}</option>
                              @endforeach

                            </select>
                        </div>
                    </div>

        </div>


                  <div class="row">
         <div class="col-md-12">
                        <div class="form-group">
                            <label>Practice Area <span style="color: red;">*</span></label>
                             <select class="form-control num-only @error('practice_area') is-invalid @enderror" id="multiple_practice_area" name="practice_area[]" multiple="multiple">
                                  @foreach($practice_areas as $practice)
                            <option>{{$practice->name}}</option>
                              @endforeach

                            </select>
                        </div>
                    </div>
                   

        </div>

        <div class="col-md-12" style="padding-left: 1%;
    padding-bottom: 3%;" >
          <button type="submit" class="btn btn-success" >Submit</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('#multiple_practice_area').select2({
       width: '100%',
       placeholder: 'Select Practice Areas (max 3)',
       maximumSelectionLength: 3
     });

     $("#subscription-form").on("submit", function() {
      $('button[type="submit"]').attr("disabled", true);
     });

   });
</script>
@endpush