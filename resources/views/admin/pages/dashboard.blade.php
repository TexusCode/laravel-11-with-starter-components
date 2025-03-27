@extends('admin.layouts.app')
@section('content')
    pos
    <form action="{{ route('posSendData') }}" method="POST">
        @csrf
        <button type="submit">senddata</button>
    </form>
    azs
    <form action="{{ route('azsSendData') }}" method="POST">
        @csrf
        <button type="submit">senddata</button>
    </form>
@endsection
