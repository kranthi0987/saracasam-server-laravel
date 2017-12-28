@extends('layout.master')
{{--public/img--}}

@section('content')
    <table style="border:1px solid black; width:100%">
        {{--@foreach ($fetches as $num)--}}
            <tr>
                <td><img width="30%" class="img-circle" src="{{ URL::asset($sar->imagepath) }}"></td>
            </tr>
        {{--@endforeach--}}
    </table>
    @stop