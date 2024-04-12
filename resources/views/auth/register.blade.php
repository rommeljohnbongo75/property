@extends('site.base')
<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
#register{
  padding-top:130px;
  padding-bottom:40px;
}
:root{
   --font-family: "DM Sans", sans-serif;
  }
  body{
   h1,h2,h3,h4,h5,h6,span,p label{
      font-family:var(--font-family);
   }
  
  }
label{
  font-family:var(--font-family) !important;
}
#register  lable{
  margin-bottom:unset !important;
}
#register input[type="email"] {
    width: 100%;
    padding: 10px;
   margin-top:unset !important;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}
.register-form{
  background-color: white;
    padding: 20px 0;
    box-shadow: 0px 15px 30px rgba(0,0,0,0.10);
}
</style>
@section('content')
<section id="register" class="bg-light">
    <div class="container">
      <div class="row align-items-center register-form">
        <div class="col-md-6">
          <img src="{{ asset('assets/img/user-registration.png' ) }}">
        </div>
        <div class="col-md-6 mx-auto form-reg-inner">
          <div class="card">
            <div class="card-header title">
              <h4>
                <i class="fas fa-user-plus"></i> Register</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('store') }}" method="POST">
                @csrf
                  <div class="form-group">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" name="last_name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="email">Phone</label>
                  <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password2">Password</label>
                  <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <input type="submit" value="Register" class="btn btn-secondary btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
