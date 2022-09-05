
{{-- @component('mail::message')

Hello,
 
Dear,
 
New job {{ $job->title }},

Minimum experience {{ $job->minimum_experience }},

Salary {{ $job->salary }},

location{{ $job->location }},

Yours sincerely, 
 
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
                                    Thank you for subscribing Jobs Lawbee. Wish you good luck in your job search.
                                </p>
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
