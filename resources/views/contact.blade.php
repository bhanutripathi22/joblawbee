@extends('layouts.template-search')

@section('content')
<section>
	<div class="container">
       
   <section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                             <label for="name" class="">First Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Last Name</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>



                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                             <label for="name" class="">Email</label>
                            <input type="text" id="name" name="name" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Contact</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div><br><br>
                

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" type="submit">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        

    </div>

</section>

    </div>
</section>
@endsection