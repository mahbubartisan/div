@extends("layouts.app")

@section("content")
    <div class="form-container">
        <div class="form-header">
            <h3>Add New User</h3>
        </div>
        <form>
            <div class="mb-3">
                <label for="userName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="userName" placeholder="Enter full name" required>
            </div>
            <div class="mb-3">
                <label for="userPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="userPassword" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
