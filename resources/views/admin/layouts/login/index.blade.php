<!-- Login 2 - Bootstrap Brain Component -->
<head>
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
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
    .row.justify-content-md-center {
        margin-top: 20%;
    }
    .py-md-5{
        padding-bottom: 17rem !important;
    }
    .Login-admin {
    background-image: url('/assets/img/login-data.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height:100%;
    display:flex;
    justify-content:center;
    align-items:center;
  }
  .login-admin-inner{
    box-shadow: #00000024 2px 7px 20px 0px !important;
    border-radius: 20px;
    background-image: linear-gradient(180deg, white 60%, #ffffff00);
}
.login-admin-inner h3{
  font-size:30px;
  font-weight:bold;
}
.login-admin-inner span{

  font-size:30px;
  font-weight:bold;
}
.login-admin-btn{
  border-radius:50px;
  background-color:#FFA920;
  border:none;
}
    .error {
        color: red;
    }
   
@media only screen and (max-width:768px) {
  .Login-admin {
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
}
.login-admin-inner h3 {
    font-size: 20px !important;
}
.login-admin-inner span {
    font-size: 20px !important;
}
}
</style>
</head>
<body>
<section class="Login-admin">
<div class=" py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-7 col-lg-6 col-xl-7 col-xxl-6">
        <div class=" p-4 p-md-5 rounded login-admin-inner">
          <div class="row">
            <div class="col-12">
              <div class="text-center mb-5">
                <h3>Welcome To Dashboard </h3>
                <span>Login</span>
              </div>
            </div>
          </div>
          <form action="{{route('admin.login.post')}}" method="post">
            @csrf
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" required>
                @if($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                @endif
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" value="" required>
                @if($errors->has('password'))
                    <div class="error">{{ $errors->first('password') }}</div>
                @endif
              </div>
              <div class="col-12">
                <!-- <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                  <label class="form-check-label text-secondary" for="remember_me">
                    Keep me logged in
                  </label>
                </div> -->
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="login-admin-btn btn btn-lg btn-primary" type="submit">Log in now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</body>