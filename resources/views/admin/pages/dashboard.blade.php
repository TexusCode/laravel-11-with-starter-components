@extends('admin.layouts.app')
@section('content')
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
