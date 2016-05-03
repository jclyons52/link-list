@extends('app')

@section('title')
    Home
    | @parent
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h2>Type a url </h2><p>(it will take a few seconds for preview to show up)</p>
            </div>

        </div>
    </div>
    <link-preview></link-preview>
@stop