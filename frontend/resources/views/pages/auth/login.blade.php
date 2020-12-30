@extends('layouts.auth')
@push('style')
<style>
    body {
    margin: 0;
    padding: 0;
    /* background-color: #17a2b8; */
    height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
    margin-top: 120px;
    max-width: 600px;
    height: 320px;
    border: 1px solid #9C9C9C;
    background-color: #EAEAEA;
    }
    #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #login-link {
    margin-top: -70px;
    }
</style>
    
@endpush


@section('content')
<div id="login">
    <h3 class="text-center text-white pt-5">Login form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="password" class="text-info">Phone:</label><br>
                            <input type="text" name="phone" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                        <div id="login-link" class="text-right">
                            <a href="{{url('register')}}" class="text-info">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@push('script')
    
@endpush