@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form action="{{ route("register_process") }}" method="post">
                                <h3 class="mb-5">Sign up</h3>
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" value="{{ old('name') }}" id="typeEmailX-2" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX-2">Name</label>
                                </div>
                                @error('name')
                                <p>{{ $message }}</p>
                                @enderror

                                <div class="form-outline mb-4">
                                    <input type="email" name="email" value="{{ old('email') }}" id="typeEmailX-2" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                </div>
                                @error('email')
                                    <p>{{ $message }}</p>
                                @enderror
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                </div>
                                @error('password')
                                <p>{{ $message }}</p>
                                @enderror
                                <div class="form-outline mb-4">
                                    <input type="password" name="password_confirmation" id="typePasswordX-2" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX-2">Confirm Password</label>
                                </div>
                                @error('password_confirmation')
                                <p>{{ $message }}</p>
                                @enderror
                                @csrf
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
