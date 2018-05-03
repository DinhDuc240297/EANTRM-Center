<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" type="text/css" href="style_login.css"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('local/public/dist/css/styles_log.css')}}">
	
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="flex-wrap">
            <fieldset>
                <form name="" role="form" action="{{url('login')}}" method="POST">
                    <legend>Login</legend>
                    @if($errors->has('errorlogin'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{$errors->first('errorlogin')}}
                        </div>
                    @endif
                    <input type="radio" name="rg" id="sign-in" checked/>
                    <input type="radio" name="rg" id="sign-up" />
                    <input type="radio" name="rg" id="reset" />        

                    <label class="login" for="sign-in">Sign in</label>
                    <label class="logout" for="sign-up">Sign up</label>
                    <label class="forgot" for="reset">Reset</label>  

                    <input class="sign-up sign-in reset" type="email" name="email" placeholder="Email" />
                    @if($errors->has('email'))
                        <p style="color: red;font-size: 14px;">{{$errors->first('email')}}</p>
                    @endif
                    <input class="sign-up sign-in" type="password" name="password" placeholder ="Password" value="{{old('email')}}" />
                    @if($errors->has('password'))
                        <p style="color: red;font-size: 14px;">{{$errors->first('password')}}</p>
                    @endif
                    <input class="sign-up" type="password" name="repeatpass" placeholder ="Repeat Password" />
                    @if($errors->has('repeatpass'))
                        <p style="color: red;font-size: 14px;">{{$errors->first('repeatpass')}}</p>
                    @endif
                    
                    {!! csrf_field() !!}
                    <button class="sub-mit">Submit</button>
                </form>
            </fieldset>
            </div>
        </div>
    </div>
	
</body>
</html>