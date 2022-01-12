@extends('layout.mainlayout')


@section('contentkp')

<div class="container custom-register">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST" >
                <div class="form-group">
                    @csrf
                <label for="emailregisterInput">Email address</label>
                <input type="email" name="email" class="form-control" id="emailregisterInput" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="passwordregisterInput">Password</label>
                    <input type="password" name="password" class="form-control" id="passwordregisterInput" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirmpassregisterInput">Confirm Password</label>
                    <input type="cpassword" name="cpassword" class="form-control" id="confirmpassregisterInput" placeholder="ConfirmPassword">
                </div>
                <div class="form-group">
                    <label for="Gender">Gender</label>
                    <input type="gender" name="gender" class="form-control" id="Gender" placeholder="gender">
                </div>
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="username" name="username" class="form-control" id="Username" placeholder="Password">
                </div>
                
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="address" name="address" class="form-control" id="Address" placeholder="address">
                </div>
                <div class="form-group">
                    <label for="Dateofbirth">Date of Birth</label>
                    <input type="dateofbirth" name="dateofbirth" class="form-control" id="Dateofbirth" placeholder="dateofbirth">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
