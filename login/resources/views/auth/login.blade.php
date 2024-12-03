@extends("layouts.app")

@section("content")
    <div class="card shadow-sm" style="width: 350px; border-radius: 15px;">
        <div class="card-img-top">
            <img src="https://www.oecd.org/adobe/dynamicmedia/deliver/dm-aid--7d8b260a-479a-4772-83db-6677a343072f/ocean-shutterstock-2285024411.jpg?preferwebp=true&quality=80"
                alt="Top Image" class="w-100 rounded-top" style="height: 150px; object-fit: cover;">
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title mb-0 d-flex align-items-center">
                    Sign In
                </h5>
                <div class="d-flex">
                    <a href="#" class="icon-wrapper me-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="icon-wrapper">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            <form method="POST" action="{{ route("login") }}">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    @error("username")
                        <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    @error("password")
                        <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn custom-btn w-100 mb-3">Sign In</button>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <input type="checkbox" id="remember">
                        <label for="remember" class="form-check-label remember">Remember Me</label>
                    </div>
                    <a href="#" class="text-decoration-none forgot">Forgot Password</a>
                </div>
            </form>
            <div class="text-center mt-3">
                <p class="mb-1">Not a member? <a href="#" class="text-decoration-none sign-text">
                        Sign Up
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
