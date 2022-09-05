@section('styles')
    <style>
        #common-nav .nav-item > .nav-link.active{
            background:#e84824;
            color: #fff;
            border-radius: 20px;
            padding: 10px 20px;
        }

        #common-nav .nav-item > .nav-link{
            background: #ccc;
            color: #000;
            border-radius: 20px;
            padding: 10px 20px;
        }
    </style>
@endsection

<ul id="common-nav" class="nav justify-content-center mb-5">
    <li class="nav-item">
        <a class="nav-link @if($active == 'employer') active @endif" href="{{ route('home') }}">Employer Tracker</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'application') active @endif" href="{{ route('application.tracker') }}">Application Tracker</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'subscription') active @endif" href="{{ route('subscription.tracker') }}">Subscription Tracker</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'job_posting') active @endif" href="{{ route('job.posting.tracker') }}">Job posting Tracker</a>
    </li>
</ul>