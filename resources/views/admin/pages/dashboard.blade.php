@extends('admin.layouts.app')
@section('content')
    <form action="{{ route('azsSendData') }}" method="POST">
        @csrf
        <button type="submit">senddata</button>
    </form>
@endsection
