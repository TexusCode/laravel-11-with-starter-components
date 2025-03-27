@extends('admin.layouts.app')
@section('content')
    <form action="{{ route('posSendData') }}" method="POST">
        @csrf
        <button type="submit">senddata</button>
    </form>
@endsection
