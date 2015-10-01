
@extends('app')

@section('content')

    @if($first =="john")
        <h1>hi john</h1>
    @endif

    @if($last=="last")
        <h1>hi last</h1>
    @else
        <h1>hi I'm not last</h1>
    @endif

    <h1> about me </h1>
{{--    <h1>I'm first {{ $first }}</h1>--}}
    {{--<h1>I'm last {{ $last }}</h1>--}}
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab distinctio id magni perferendis? At, consequuntur fuga itaque placeat quibusdam quidem? Itaque magnam nisi nulla, odio officia repellat sapiente soluta unde. </p>
@stop

