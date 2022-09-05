
@extends('company.layouts.template')

@section('styles')
<style>
.optionGroup {
    font-weight: bold;
    font-style: italic;
}


.optionChild {
    padding-left: 15px;
}
</style>
@endsection

@section('content')
    <div class="container my-5">
  
 
       
       

        <div class="tab-pane fade show active" id="" role="tabpanel" aria-labelledby="pressRelease-tab">
            <br/>
            <h2>Press Release</h2>
            <form id="press-release" method="POST" action="{{ route('company.PressRelease.edit', $pressrelease) }}">
                @csrf
                @method('PUT')
                 <div class="form-group">
                     <label>Tittle</label>
                    <input type="text" class="form-control" name="tittle" value="{{$pressrelease->tittle ?? old('tittle') }}">
                </div>

                <div class="form-group">
                    <textarea class="form-control tinymce" name="press_text" rows="15">{{$pressrelease->press_text ?? old('press_text') }}</textarea>
                </div>

                
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

        
    
</div>
@endsection

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#multipleselect').select2({
    width: '100%',
    placeholder: 'Select options'
  });
   // multiple: true,

});
</script>



<script type="text/javascript">
$(document).ready(function() {
  $('#multiple_location').select2({
       maximumSelectionLength: 5,
    width: '100%', 
    placeholder: 'Select options' 
  });
   // multiple: true,

});
</script>

    <script>
        $(document).ready(function() {

            $('#company-profile').submit(function(e) {
                // e.preventDefault();
                // commonSubmit($(this), 'multipart/form-data');
                submitBtn = $('button[type=submit]', $(this));
                submitBtn.prop('disabled', 'disabled');
            });

            $('#firm-profile').submit(function(e) {
                e.preventDefault();
                commonSubmit($(this));
            });

            $('#press-release').submit(function(e) {
                e.preventDefault();
                commonSubmit($(this));
            });

            $('#lawyer-profile').submit(function(e) {
                e.preventDefault();
                commonSubmit($(this));

            });

            $('#job-opening').submit(function(e) {
                e.preventDefault();
                commonSubmit($(this), true);
            });

            $("#btn-add-more-lawyer-profiles").on("click", function(e) {
                $("#add-more-lawyer-profiles").append(`<div class="form-group">
                    <textarea class="form-control tinymce" name="profile_text[]" rows="15"></textarea>
                </div>`);
            });

            function commonSubmit(currentForm, clearForm=false, enctype = 'application/x-www-form-urlencoded') {
                var formFP = currentForm;
                var submitButton = $('button[type=submit]', formFP);
                // console.log(enctype);
                $.ajax({
                type: 'POST',
                enctype: enctype,
                url: formFP.prop('action'),
                processData: false,
                data: formFP.serialize(),
                success: function(response){

                    console.log(response);

                    const message = `<span style="color: green"><i class="fa fa-check" aria-hidden="true"></i> ${response.message}</span>`;
                    show_custom_alert(message);
                    if (clearForm){
                        formFP.trigger("reset");
                    }
                },
                error: function(data){
                    var errors = data.responseJSON;
                    var showErrors = [];

                   // console.log(errors);



                     if(errors.errors !== undefined){
                        for (let key in errors.errors) {

                            // console.log("Key: " + key);
                            // console.log("Value: " + errors.errors[key]);

                            for(let i=0; i<errors.errors[key].length; i++){
                                let dynamicKey = key+"_"+i;
                                showErrors[i] = errors.errors[key][i];
                            }

                            // console.log(showErrors);
                        }
                     } else {
                        //showErrors = 'Some error occured.Please try again ';
                        showErrors=errors.message;
                     }

                    const message = `<span style="color: red"> ${showErrors}</span>`;
                    show_custom_alert(message);
                    submitButton.prop('disabled', false);
                },
                beforeSend: function() {
                    submitButton.prop('disabled', 'disabled');
                }
                }).done(function(data) {
                    submitButton.prop('disabled', false);
                });
            }




            $('#practice_area').change(function(){
                var value = $(this).val();
                // var _token = '{{ csrf_token() }}';
                var url = '{{ route("api.sub-practice-areas", ":practice_area") }}';

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
                            $("#sub_practice_area").append('<option value="0">No subcategory under this category</option>');
                        }

                    }
                });

            });

            $("#as-per-industry-standards").on("change", function() {
                // if($(this).is(":checked")){
                //     console.log("checked");
                //     $(this).attr('disabled', false);
                //     $("#non-industry-stardards-block").hide();
                //     $("#ms-text-field").attr('disabled', true);
                // } else {
                //     console.log("unchecked");
                //     $("#non-industry-stardards-block").css('display', 'flex');
                //     $("#as-per-industry-standards").attr('disabled', true);
                //     $("#ms-text-field").attr('disabled', false);
                // }

                if($(this).is(":checked")){
                    console.log("checked");
                    $("#industry-standards-block").show();
                    $("#non-industry-stardards-block").hide();
                    $("#ms-hidden-field").attr('disabled', false);
                    $("#ms-text-field").attr('disabled', true);
                } else {
                    console.log("unchecked");
                    $("#non-industry-stardards-block").css('display', 'flex');
                    $("#industry-stardards-block").hide();
                    $("#ms-hidden-field").attr('disabled', true);
                    $("#ms-text-field").attr('disabled', false);
                }
            });



              $("#hidesalaryfield").on("change", function() {
                // if($(this).is(":checked")){
                //     console.log("checked");
                //     $(this).attr('disabled', false);
                //     $("#non-industry-stardards-block").hide();
                //     $("#ms-text-field").attr('disabled', true);
                // } else {
                //     console.log("unchecked");
                //     $("#non-industry-stardards-block").css('display', 'flex');
                //     $("#as-per-industry-standards").attr('disabled', true);
                //     $("#ms-text-field").attr('disabled', false);
                // }

                if($(this).is(":checked")){
                    console.log("checked");
                    $("#industry-standards-block").show();
                    $("#non-industry-stardards-block").hide();
                    $("#ms-hidden-field").attr('disabled', false);
                    $("#ms-text-field").attr('disabled', true);
                } else {
                    console.log("unchecked");
                    $("#non-industry-stardards-block").css('display', 'flex');
                    $("#industry-stardards-block").hide();
                    $("#ms-hidden-field").attr('disabled', true);
                    $("#ms-text-field").attr('disabled', false);
                }
            });

        });
</script>


@endpush
