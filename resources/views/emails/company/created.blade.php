

{{-- @component('mail::message')

Hello,

Thank you for applying for position {{ $job->title }}, your application is under process. We will contact you on your provided details.


Thanks,<br>
{{ config('app.name') }}  
@endcomponent --}}

@extends('emails.layouts.mail')

@section('content')
<tr>
    <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
            <tr>
                <td bgcolor="#ffffff">
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="font-size: 14px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                    Greetings!!
                                </p>
                                <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                    Thank you for signing up for Jobs Lawbee. Your Username &amp; Password are as follows:
                                </p>
                                <p>
                                    <ul>
                                        <li>User name: {{ $company->email }}</li>
                                        <li>Password: chosen by you</li>
                                    </ul>
                                </p>
                                <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                    Here&#39;s what to do next:
                                </p>
                                <p>
                                    <ul>
                                        <li>Complete your profile</li>
                                        <li>Add Job posting</li>
                                    </ul>
                                </p>
                                <p>Sign in to <a href="{{ route('company.login') }}">Jobs Lawbee</a></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td bgcolor="#ffffff">
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="font-size: 14px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                    Stay connected
                                </p>
                                <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                    Jobs Lawbee
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>

@endsection
