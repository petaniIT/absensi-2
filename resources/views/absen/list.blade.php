@extends('layouts.app')

@section('content')
    <div>
        @foreach ($data as $item)
            {{$item->nama}}
        @endforeach
        <b>hello</b>
    </div>
@endsection