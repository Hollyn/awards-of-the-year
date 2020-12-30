@extends('layouts.auth')
@push('style')
<style>
    body {
    margin: 0;
    padding: 0;
    /* background-color: #17a2b8; */
    height: 100vh;
    }
    #register .container #register-row #register-column #register-box {
    margin-top: 120px;
    max-width: 600px;
    height: 320px;
    border: 1px solid #9C9C9C;
    background-color: #EAEAEA;
    }
    #register .container #register-row #register-column #register-box #register-form {
    padding: 20px;
    }
    #register .container #register-row #register-column #register-box #register-form #register-link {
    margin-top: -70px;
    }
</style>
@endpush


@section('content')
<div id="register">
    <h3 class="text-center text-white pt-5">Register form</h3>
    <div class="container">
        <div id="register-row" class="row justify-content-center align-items-center">
            <div id="register-column" class="col-md-6">
                <div id="register-box" class="col-md-12">
                    <form id="register-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Register</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Phone:</label><br>
                            <input type="text" name="phone" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="{{url('login')}}" class="text-info">Login here</a>
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