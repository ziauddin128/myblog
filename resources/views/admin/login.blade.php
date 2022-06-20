<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My BLOG</title>
    <link href="{{asset('admin_asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{url('admin/login_submit')}}" method="post">
               @csrf 
              <h1>Login Form</h1>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email"  />
                <p class="error_msg">
                  @error('email')
                    {{$message}}
                  @enderror
                </p>
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" />
                <p class="error_msg">
                  @error('password')
                    {{$message}}
                  @enderror
                </p>
              </div>
              <div>
                <input type="submit" class="btn btn-default submit login_sub_btn" name="submit">
              </div>

            </form>
              <p class="error_msg">
                 {{@session('error')}}
              </p>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
