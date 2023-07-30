<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
@php
    $booking=App\Models\Booking::query()->where('booking_id',$booking_id)->first();
    $website=App\Models\website::query()->first();

@endphp
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Booking Invoice | {{$booking->property->name}}</title>

        <!-- Start Common CSS -->
        <style type="text/css">
            #outlook a {padding:0;}
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; font-family: Helvetica, arial, sans-serif;}
            .ExternalClass {width:100%;}
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
            .backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            .main-temp table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; font-family: Helvetica, arial, sans-serif;}
            .main-temp table td {border-collapse: collapse;}
        </style>
        <!-- End Common CSS -->
    </head>
    <body>
        <table width="100%" cellpadding="0" cellspacing="0" border="0" class="backgroundTable main-temp" style="background-color: #d5d5d5;">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellpadding="15" cellspacing="0" border="0" class="devicewidth" style="background-color: #ffffff;">
                            <tbody>
                                <!-- Start header Section -->
                                <tr>
                                    <td style="padding-top: 30px;">
                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" style="border-bottom: 1px solid #eeeeee; text-align: center;">
                                            <tbody>
                                                <tr>
                                                    <td style="padding-bottom: 10px;">
                                                        <a href="{{route('/')}}"><img src="{{getImage($website->logo)}}" alt="{{$website->meta_title}}" width="100"/></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666;">
                                                        Phone: {{$website->phone1}} | Email: {{$website->email1}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 25px;">
                                                        <strong>Booking ID:</strong> {{$booking->booking_id}} | <strong>Booking Date:</strong> {{$booking->created_at}}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- End header Section -->

                                <!-- Start address Section -->
                                <tr>
                                    <td style="padding-top: 0;">
                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" style="border-bottom: 1px solid #bbbbbb;">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 55%; font-size: 16px; font-weight: bold; color: #666666; padding-bottom: 5px;">
                                                        Customer Detail
                                                    </td>
                                                    <td style="width: 45%; font-size: 16px; font-weight: bold; color: #666666; padding-bottom: 5px;">
                                                        Booked BY
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 55%; font-size: 14px; line-height: 18px; color: #666666;">
                                                        {{$booking->name}}
                                                    </td>
                                                    <td style="width: 45%; font-size: 14px; line-height: 18px; color: #666666;">
                                                        {{$booking->user->name}}

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 55%; font-size: 14px; line-height: 18px; color: #666666;">
                                                        {{$booking->phone}}
                                                    </td>
                                                    <td style="width: 45%; font-size: 14px; line-height: 18px; color: #666666;">
                                                        {{$booking->user->phone}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 55%; font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 10px;">
                                                        {{$booking->email}}
                                                    </td>
                                                    <td style="width: 45%; font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 10px;">
                                                        {{$booking->user->email}}

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- End address Section -->

                                <!-- Start product Section -->
                                <tr>
                                    <td style="padding-top: 0;">
                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" style="border-bottom: 1px solid #eeeeee;">
                                            <tbody>

                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; width: 440px;">
                                                      <strong>{{$booking->property->name}}</strong>
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right; padding-bottom: 10px;">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; width: 440px;">
                                                        {{$booking->property->address}}

                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right; padding-bottom: 10px;">

                                                    </td>
                                                </tr><tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; width: 440px;">
                                                       No. of Room
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right; padding-bottom: 10px;">
                                                        <b style="color: #666666;">
                                                            {{$booking->no_of_room}}
                                                        </b>
                                                    </td>
                                                </tr><tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; width: 440px;">
                                                       No. of Adult
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right; padding-bottom: 10px;">
                                                        <b style="color: #666666;">
                                                            {{$booking->no_of_adult}}
                                                        </b>
                                                    </td>
                                                </tr><tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; width: 440px;">
                                                       No. of Children
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right; padding-bottom: 10px;">
                                                        <b style="color: #666666;">
                                                            {{$booking->no_of_child}}
                                                        </b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; width: 440px;">
                                                       CheckIn
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right; padding-bottom: 10px;">
                                                        <b style="color: #666666;">
                                                            {{Carbon\Carbon::parse($booking->check_in)->format('d/m/Y')}} ({{Carbon\Carbon::parse($booking->booked_hour_from)->format('G:i:A')}})
                                                        </b>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; width: 440px;">
                                                       CheckOut
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right; padding-bottom: 10px;">
                                                        <b style="color: #666666;">
                                                            {{Carbon\Carbon::parse($booking->check_out)->format('d/m/Y')}} ({{Carbon\Carbon::parse($booking->booked_hour_to)->format('G:i:A')}})
                                                        </b>
                                                    </td>
                                                </tr>
                                                @if ($booking->is_hourly_booked==1)
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; width: 440px;">
                                                       Hourly Booked
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right; padding-bottom: 10px;">
                                                        <b style="color: #666666;">
                                                            {{Carbon\Carbon::parse($booking->booked_hour_from)->format('d/m/Y')}} -{{Carbon\Carbon::parse($booking->booked_hour_to)->format('G:i:A')}}
                                                        </b>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; width: 440px;">
                                                       No. of Night
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right; padding-bottom: 10px;">
                                                        <b style="color: #666666;">
                                                            {{$booking->no_of_night}}
                                                        </b>
                                                    </td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- End product Section -->

                                <!-- Start calculation Section -->
                                <tr>
                                    <td style="padding-top: 0;">
                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" style="border-bottom: 1px solid #bbbbbb; margin-top: -5px;">
                                            <tbody>
                                                <tr>
                                                    <td rowspan="5" style="width: 55%;"></td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666;">
                                                        Sub-Total:
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666; width: 130px; text-align: right;">
                                                        {{$booking->sub_total}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 10px; border-bottom: 1px solid #eeeeee;">
                                                        Discount:
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 10px; border-bottom: 1px solid #eeeeee; text-align: right;">
                                                        {{$booking->discount}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; font-weight: bold; line-height: 18px; color: #666666; padding-top: 10px;">
                                                        Total
                                                    </td>
                                                    <td style="font-size: 14px; font-weight: bold; line-height: 18px; color: #666666; padding-top: 10px; text-align: right;">
                                                        {{$booking->total_price}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; font-weight: bold; line-height: 18px; color: #666666;">
                                                        Payment Mode:
                                                    </td>
                                                    <td style="font-size: 14px; font-weight: bold; line-height: 18px; color: #666666; text-align: right;">
                                                       {{$booking->payment_mode}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; font-weight: bold; line-height: 18px; color: #666666; padding-bottom: 10px;">
                                                        Status
                                                    </td>
                                                    <td style="font-size: 14px; font-weight: bold; line-height: 18px; color: #666666; text-align: right; padding-bottom: 10px;">
                                                        @if ($booking->status == 0)
                                                        <span class="badge bg-danger text-white">Pending</span>
                                                    @endif
                                                    @if ($booking->status == 1)
                                                        <span class="badge bg-success text-white">Approved</span>
                                                    @endif

                                                    @if ($booking->status == 2)
                                                        <span class="badge bg-info text-white">Checkin</span>
                                                        @endif @if ($booking->status == 3)
                                                            <span class="badge bg-warning text-white">Checkout</span>
                                                            @endif @if ($booking->status == 4)
                                                                <span class="badge bg-danger text-white">Cancelled</span>
                                                            @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- End calculation Section -->

                                <!-- Start payment method Section -->
                                <tr>
                                    <td style="padding: 0 10px;">
                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                            <tbody>

                                                <tr>
                                                    <td colspan="2" style="width: 100%; text-align: center; font-style: italic; font-size: 13px; font-weight: 600; color: #666666; padding: 15px 0;">
                                                        <b style="font-size: 14px;">Note:</b> All Price are including Tax
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- End payment method Section -->
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
