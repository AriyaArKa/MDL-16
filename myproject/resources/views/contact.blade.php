@extends('layouts.app')

@section('title', '- Contact')

@section('content')
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>

            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input name="name" class="form-control @error('name') is-invalid @enderror" id="name" type="text" value="{{ old('name') }}" placeholder="Enter your name..." required>
                            <label for="name">Full name</label>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input name="email" class="form-control @error('email') is-invalid @enderror" id="email" type="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                            <label for="email">Email address</label>
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" type="tel" value="{{ old('phone') }}" placeholder="(123) 456-7890" required>
                            <label for="phone">Phone number</label>
                            @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating mb-3">
                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" placeholder="Enter your message here..." style="height: 10rem" required>{{ old('message') }}</textarea>
                            <label for="message">Message</label>
                            @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
