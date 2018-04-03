@extends('layout')

@section('content')

<main>
                                                    <!-- Current posion on the website -->
        <div class="container">
          <ol class="breadcrumb" class="currentPage">
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/register" class="active">Register</a>
              </li>
          </ol>
         </div>
                                                                <!-- Form / Register -->
    
        <div class="container">
            <div class="row">
                <div class="col-xs-4" >
                    <h2 class="register"> Register </h2>
                </div>
            </div>
       
            <div class="row">
                <div class="col-xs-4">
                        <div class="errors">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }} </li>
                                    @endforeach
                                </ul>
                         </div>
                         <div class="success">
                                <ul>
                                    @if(Session::has('success'))
                                        <li>{{ Session::get('success') }}</li>
                                    @endif
                                </ul>
                         </div>
                </div>
            </div>
        <form class="form-horizontal" id="reg-form" method="post" >
            @csrf
                <div class="form-group">
                    <label for="inputText3" class="col-sm-2 control-label">First name</label>
                    <div class="col-sm-4">
                        <input type="text" name="first-name" class="form-control inputField" id="inputFirstName" placeholder="First name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-sm-2 control-label">Last name</label>
                    <div class="col-sm-4">
                        <input type="text" name="last-name" class="form-control inputField" id="inputLastName" placeholder="Last name">
                    </div>
                </div>
                <div class="form-group">
                  <label for="inputText3" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-4">
                    <input type="text" name="username" class="form-control inputField" id="inputUsername" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-4">
                    <input type="password" name="password" class="form-control inputField" id="inputPassword" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Retype password</label>
                    <div class="col-sm-4">
                        <input type="password" name="password2" class="form-control inputField" id="inputPassword2" placeholder="Retype password">
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-4">
                    <button type="submit" class="btn btn-default button">Sign up</button>
                  </div>
                </div>
            </form>
        </div>
</main>

@endsection