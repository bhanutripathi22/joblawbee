<form>
    @if(isset($q))
    <input type="hidden" name="q" value="{{ $q }}" />
    @endif
    <div class="light-bg">
        <h6>Practice Area</h6>
        {{-- <select class="form-control" name="practice_area" id="practice_area">
            <option selected="" disabled="">select </option>
            @foreach($practice_areas as $area)
            <option value="{{ $area->id }}">{{ $practice_area->name }}</option>
            @endforeach
        </select>
    </div> --}}

    {{-- <label>Practice Area</label> --}}
    <select class="form-control" name="practice_area" id="practice_area">
        @foreach($practice_areas as $area)
        <option value="{{ $area->id }}">{{ $area->name }}</option>
        @endforeach
    </select>
</div>
    <div class="light-bg">
        <h6> Sub Category</h6>
        {{-- <select class="form-control" name="sub_practice_area id="sub_practice_area">
            <option selected="" disabled="">select</option>
            @foreach($practice_area as $area)
            <option>{{ $area->name }}</option>
            @endforeach
        </select>
    </div> --}}


    {{-- <label>sub category</label> --}}
    <select class="form-control" name="practice_area" id="sub_practice_area">
        @foreach($practice_areas as $area)
        <option value="{{ $area->id }}"> {{ $area->name }}</option>
        @endforeach
    </select>

</div>

    <div class="mt-4 light-bg">
        <h6>Experience</h6>
        <select class="form-control " name="minimum_experience">
            <option selected="" disabled="">select minimum_experience</option>
            <option value="fresher">Fresher</option>
            <option value="1 Yr">1 Yr</option>
            <option value="2 Yrs">2 Yrs</option>
            <option value="3 Yrs">3 Yrs</option>
            <option value="4 Yrs">4 Yrs</option>
            <option value="5 Yrs">5 Yrs</option>
            <option value="6-9 Yrs">6-9 Yrs</option>
            <option value="10-15 Yrs">10-15 Yrs</option>
            <option value="15 above">15 above</option>
        </select>
    </div>
    <div class="mt-4 light-bg">
        <h6>Location</h6>
        <select class="form-control" name="location">
            <option selected="" disabled="">select location</option>
            @foreach($states as $state)
            <option>{{ $state->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-4 light-bg">
        <h6>Salary</h6>    
        <select class="form-control " name="salary_range">
            <option selected="" disabled="">select salary_range</option>
            <option selected="" disabled="">Salary</option>
            <option value="10,000">10,000</option>
            <option value="10,000">10,000</option>
            <option value="20,000">20,000</option>
            <option value="15,000">15,000</option>
            <option value="25,000">25,000</option>
            <option value="30,000">30,000</option>
            <option value="35,000">35,000</option>
            <option value="37,000">37,000</option>
            <option value="50,000 above">50,000 above</option>    
        </select>
    </div>
    <div class="mt-4">
        <button type="submit" class="btn btn-danger">Filter Data</button>
    </div>
</form>

@push('scripts')
    <script>
        $(document).ready(function(){

            $('#practice_area').change(function(){
                var value = $(this).val();
                // var _token = '{{ csrf_token() }}';
                var url = '{{ route("api.sub-practice-areas", ":practice_area") }}';

                console.log(value);

                url = url.replace(":practice_area", value);
                $("#sub_practice_area").html('');

                $.ajax({
                    url: url,
                    method: "POST",
                    data: { practice_area: value },
                    success: function(response)
                    {
                        // console.log(response);
                        const sub_practice_areas = response.sub_practice_areas;
                        if(sub_practice_areas.length > 0){
                            for(i = 0; i<sub_practice_areas.length; i++){
                                // console.log(sub_practice_areas[i]);
                                $("#sub_practice_area").append(`<option value="${sub_practice_areas[i].id}">${sub_practice_areas[i].name}</option>`);
                            }
                        } else {
                            $("#sub_practice_area").append('<option>No subcategory under this category</option>');
                        }

                    }
                });
            
            });

        });
</script>
@endpush