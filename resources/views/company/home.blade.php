@extends('company.layouts.template')

@section('content')

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="firmProfile-tab" data-toggle="tab" href="#firmProfile" role="tab" aria-controls="firmProfile" aria-selected="false">Firm Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="jobOpening-tab" data-toggle="tab" href="#jobOpening" role="tab" aria-controls="jobOpening" aria-selected="false">Job Opening</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <br />
            <h2>Profile</h2>
            <form method="POST" action="{{ route('profile.store', auth()->guard('company')->user()) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Address1</label>
                    <input type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" placeholder="Address 1" value="{{ old('address1') }}" />
                    @error('address1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Address2</label>
                    <input type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" placeholder="Address 2" value="{{ old('address2') }}" />
                    @error('address2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="City" value="{{ old('city') }}" />
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" placeholder="State" value="{{ old('state') }}" />
                            @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pincode</label>
                            <input type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" placeholder="Pincode" value="{{ old('pincode') }}" />
                            @error('pincode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" value="{{ old('phone') }}" />
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Website</label>
                            <input type="url" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="Website" value="{{ old('website') }}" />
                            @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" placeholder="Logo" style="height: auto" />
                            @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
        <div class="tab-pane fade" id="firmProfile" role="tabpanel" aria-labelledby="firmProfile-tab">
            2
        </div>
        <div class="tab-pane fade" id="jobOpening" role="tabpanel" aria-labelledby="jobOpening-tab">
            3
        </div>
    </div>
</div>
@endsection
