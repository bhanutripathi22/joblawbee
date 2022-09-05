

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
                                    Your application to the below mentioned job through Jobs Lawbee on {{ \Carbon\Carbon::now()->format('M d, Y') }} has been sent to the employer
                                </p>
                                <p style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                    Wish you good luck in your job search.
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td align='left' bgcolor='#ffffff'>
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <th align="left">Practice Area</th>
                            <td align="left">{{ $job->practiceArea->name }}</td>
                        </tr>
                        <tr>
                            <th align="left">Location</th>
                            <td align="left">{{ $job->location }}</td>
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
                                    Thanks
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
