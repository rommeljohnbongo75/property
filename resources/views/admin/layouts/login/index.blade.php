<!-- Login 2 - Bootstrap Brain Component -->
<head>
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<style>
    .row.justify-content-md-center {
        margin-top: 20%;
    }
    .py-md-5{
        padding-bottom: 17rem !important;
    }
    .error {
        color: red;
    }
</style>
</head>
<div class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h3 style="text-align: center;">Admin Login</h3>
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
                  <button class="btn btn-lg btn-primary" type="submit">Log in now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>