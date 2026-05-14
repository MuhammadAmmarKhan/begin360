<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>New Begin360 Inquiry</title>
</head>
<body
    style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
        <td align="center" style="padding: 40px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                   style="max-width: 600px; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">

                <tr>
                    <td style="background-color: #56D964; height: 6px;"></td>
                </tr>

                <tr>
                    <td style="padding: 40px 40px 20px 40px; text-align: left;">
                        <h1 style="margin: 0; color: #111111; font-size: 24px; font-weight: 700; line-height: 1.2;">New
                            Inquiry Received</h1>
                        <p style="margin: 20px 0 0 0; color: #555555; font-size: 16px; line-height: 1.5;">
                            Hello, you have received a new business inquiry from your website. Here are the details of
                            the request:
                        </p>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 0 40px 30px 40px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                               style="background-color: #fafafa; border-radius: 12px; padding: 25px;">
                            <tr>
                                <td style="padding-bottom: 15px;">
                                    <div
                                        style="color: #999999; font-size: 11px; text-transform: uppercase; font-weight: 700; letter-spacing: 1px;">
                                        Client Name
                                    </div>
                                    <div
                                        style="color: #111111; font-size: 16px; font-weight: 500;">{{ $inquiry->first_name ?? '' }} {{ $inquiry->last_name ?? '' }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 15px;">
                                    <div
                                        style="color: #999999; font-size: 11px; text-transform: uppercase; font-weight: 700; letter-spacing: 1px;">
                                        Company
                                    </div>
                                    <div
                                        style="color: #111111; font-size: 16px; font-weight: 500;">{{ $inquiry->company ?? '' }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 15px;">
                                    <div
                                        style="color: #999999; font-size: 11px; text-transform: uppercase; font-weight: 700; letter-spacing: 1px;">
                                        Email Address
                                    </div>
                                    <div
                                        style="color: #56D964; font-size: 16px; font-weight: 500;">{{ $inquiry->email ?? '' }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 15px;">
                                    <div
                                        style="color: #999999; font-size: 11px; text-transform: uppercase; font-weight: 700; letter-spacing: 1px;">
                                        Service Interest
                                    </div>
                                    <div
                                        style="color: #111111; font-size: 16px; font-weight: 500;">{{ $inquiry->service ?? 'General Inquiry' }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div
                                        style="color: #999999; font-size: 11px; text-transform: uppercase; font-weight: 700; letter-spacing: 1px;">
                                        Message
                                    </div>
                                    <div
                                        style="color: #555555; font-size: 15px; line-height: 1.5; margin-top: 5px;">{{ $inquiry->notes ?? 'No additional notes provided.' }}</div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 0 40px 40px 40px;">
                        <h3 style="margin: 0 0 15px 0; color: #111111; font-size: 18px; font-weight: 700;">Recommended
                            Next Steps</h3>
                        <ul style="margin: 0; padding: 0 0 0 20px; color: #555555; font-size: 14px; line-height: 1.8;">
                            <li>Review the client's company website and LinkedIn profile.</li>
                            <li>Verify the email domain for authenticity.</li>
                            <li>Prepare an initial project scope or meeting invite.</li>
                            <li>Reply to the client within 24 hours to maintain momentum.</li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td style="background-color: #111111; padding: 40px; text-align: center; border-radius: 0 0 16px 16px;">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="Logo"
                             style="width: 140px; height: auto; margin-bottom: 20px;">
                        <p style="margin: 0; color: #666666; font-size: 12px; line-height: 1.6;">
                            &copy; {{ date('Y') }} All Rights Reserved.<br>
                            This is an automated notification. Replies to this email address are not monitored.<br>
                            <span style="color: #444444;">ID: {{ uniqid('trb_', true) }}</span>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
