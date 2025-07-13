@extends('layouts.app')

@section('title', '- Confirmation')

@section('content')
<div class="container py-5">
    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    <h3>Submitted Data</h3>
    <ul>
        <li><strong>Name:</strong> {{ $formData['name'] }}</li>
        <li><strong>Email:</strong> {{ $formData['email'] }}</li>
        <li><strong>Phone:</strong> {{ $formData['phone'] }}</li>
        <li><strong>Message:</strong> {{ $formData['message'] }}</li>
    </ul>
</div>
@endsection
