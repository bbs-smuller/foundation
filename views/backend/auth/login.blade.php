@extends('foundation::backend.layouts.auth')

@section('main')
	<login-form action="{{ url('auth/attempt') }}" redirect="/"></login-form>
@stop