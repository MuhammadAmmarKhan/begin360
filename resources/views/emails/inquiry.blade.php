<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>New Begin360 Inquiry</title>
</head>
<body style="margin:0; padding:0; background:#eef2f0; font-family:Arial, Helvetica, sans-serif; color:#17201b;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="width:100%; background:#eef2f0; margin:0; padding:0;">
        <tr>
            <td align="center" style="padding:28px 12px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="width:100%; max-width:680px; background:#ffffff; border-radius:18px; overflow:hidden; border:1px solid #dde7e1;">
                    <tr>
                        <td style="background:#17201b; padding:28px 32px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="vertical-align:middle;">
                                        <div style="font-size:22px; line-height:1; font-weight:800; color:#53dc63; letter-spacing:.02em;">Begin360</div>
                                        <div style="font-size:12px; line-height:1.5; color:#aebbb4; margin-top:8px; text-transform:uppercase; letter-spacing:.14em;">Website inquiry</div>
                                    </td>
                                    <td align="right" style="vertical-align:middle;">
                                        <span style="display:inline-block; background:#53dc63; color:#0d140f; font-size:12px; font-weight:700; padding:8px 12px; border-radius:999px;">New lead</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:32px 32px 18px;">
                            <h1 style="margin:0; color:#17201b; font-size:26px; line-height:1.25; font-weight:800;">{{ $inquiry->full_name }} wants to talk.</h1>
                            <p style="margin:14px 0 0; color:#5d6a62; font-size:16px; line-height:1.6;">
                                A new contact form submission was received from the Begin360 website.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:0 32px 28px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f7faf8; border:1px solid #e2ebe5; border-radius:14px;">
                                <tr>
                                    <td style="padding:22px 22px 10px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="50%" style="padding:0 10px 18px 0; vertical-align:top;">
                                                    <div style="font-size:11px; line-height:1.4; color:#7b887f; font-weight:700; text-transform:uppercase; letter-spacing:.12em;">Name</div>
                                                    <div style="font-size:16px; line-height:1.5; color:#17201b; font-weight:700;">{{ $inquiry->full_name }}</div>
                                                </td>
                                                <td width="50%" style="padding:0 0 18px 10px; vertical-align:top;">
                                                    <div style="font-size:11px; line-height:1.4; color:#7b887f; font-weight:700; text-transform:uppercase; letter-spacing:.12em;">Company</div>
                                                    <div style="font-size:16px; line-height:1.5; color:#17201b; font-weight:700;">{{ $inquiry->company }}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="padding:0 10px 18px 0; vertical-align:top;">
                                                    <div style="font-size:11px; line-height:1.4; color:#7b887f; font-weight:700; text-transform:uppercase; letter-spacing:.12em;">Email</div>
                                                    <a href="mailto:{{ $inquiry->email }}" style="font-size:16px; line-height:1.5; color:#1a9f39; font-weight:700; text-decoration:none;">{{ $inquiry->email }}</a>
                                                </td>
                                                <td width="50%" style="padding:0 0 18px 10px; vertical-align:top;">
                                                    <div style="font-size:11px; line-height:1.4; color:#7b887f; font-weight:700; text-transform:uppercase; letter-spacing:.12em;">Service</div>
                                                    <div style="font-size:16px; line-height:1.5; color:#17201b; font-weight:700;">{{ $inquiry->service ?: 'General inquiry' }}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="padding:0 0 8px; vertical-align:top;">
                                                    <div style="font-size:11px; line-height:1.4; color:#7b887f; font-weight:700; text-transform:uppercase; letter-spacing:.12em;">Message</div>
                                                    <div style="font-size:15px; line-height:1.7; color:#3c4841; margin-top:6px; white-space:pre-line;">{{ $inquiry->notes ?: 'No additional notes provided.' }}</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:0 32px 32px;">
                            <table role="presentation" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background:#53dc63; border-radius:999px;">
                                        <a href="mailto:{{ $inquiry->email }}" style="display:inline-block; padding:13px 22px; color:#0d140f; font-size:14px; line-height:1; font-weight:800; text-decoration:none;">Reply to {{ $inquiry->first_name }}</a>
                                    </td>
                                </tr>
                            </table>
                            <p style="margin:18px 0 0; color:#7b887f; font-size:13px; line-height:1.6;">
                                Submitted {{ $inquiry->created_at?->format('d M Y, H:i') }}. IP: {{ $inquiry->ip_address ?: 'Unavailable' }}.
                                This inquiry has also been stored in the website database.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="background:#17201b; padding:22px 32px; color:#9daba3; font-size:12px; line-height:1.6;">
                            Sent automatically by Begin360. Replying to this email will reply to {{ $inquiry->email }}.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
