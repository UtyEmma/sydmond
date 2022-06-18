@extends('components.email.index')

@section('content')
    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
        <tbody>
            <tr>
                <td style="padding: 30px 30px 20px;" >

                    <p style="margin-bottom: 10px;">
                        @if (isset($details['greeting']))
                            {!! $details['greeting'] !!}
                        @else
                            Hi, {{$user->name ?? ''}}
                        @endif
                    </p>

                    @foreach ($details as $item)
                        @if(isset($item['type']) && $item['type'] === 'text')
                            <div style="margin-bottom: 10px;">{!! $item['value'] !!}</div>
                        @elseif (isset($item['type']) && $item['type'] === 'image')
                            <img style="width:90px; margin-bottom:24px;" src="{{$item['value']}}" alt="img">
                        @elseif (isset($item['type']) && $item['type'] === 'action')
                            <a href="{{$item['value']['link']}}" style="background-color: #309255;border-radius:4px;color:#ffffff;display:inline-block;font-size:13px;font-weight:600;line-height:44px; margin-bottom: 25px; text-align:center;text-decoration:none;text-transform: uppercase; padding: 0 25px">{{$item['value']['action']}}</a>
                        @elseif (isset($item['type']) && $item['type'] === 'code')
                            <h1 style="padding: 10px 40px; border-radius: 6px; margin-bottom: 20px; text-align: center; background: #f05a23;"><b>{{$item['value']}}</b></h1>
                        @endif
                    @endforeach

                    @if(isset($details['goodbye']))
                        <p style="margin-top: 25px; margin-bottom: 15px;">{{$details['goodbye']}}</p>
                    @else
                        <p style="margin-top: 25px; margin-bottom: 15px;">---- <br> Regards<br>{{env('APP_NAME')}} Team</p>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
@endsection
