<x-guest-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
        <ul >
            @foreach ($errors->all() as $error)
                <li style = "list-style-type: none; text-align:right; padding-bottom:5px"><strong>{{$error}}</strong></li>
            @endforeach
        </ul>
        </div>                  
    @endif
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form id="login" class="input-group" method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" class="input-field" placeholder="Email" name="email" :value="old('email')" required autofocus>
                <input type="password" class="input-field" placeholder="Password" type="password" name="password" required autocomplete="current-password">
                <button type="submit" class="submit-btn mt-3">Log In</button>
            </form>
            <form id="register" class="input-group" method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" class="input-field" placeholder="Name" name="name" value="old('name')" required autofocus autocomplete="name">
                <input type="text" class="input-field" placeholder="Create Username" name="username" value="old('username')" required autofocus autocomplete="username">
                <input type="email" class="input-field" placeholder="Email" name="email" value="old('email')" required>
                <input type="password" class="input-field" placeholder="New Password" name="password" required autocomplete="new-password">
                <input type="password" class="input-field" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                <input type="text" class="input-field" placeholder="Location" name="location" value="old('location')" required autofocus autocomplete="location">
                <input type="text" class="input-field" placeholder="Phone Number" name="phone_number" value="old('phone_number')" required autofocus autocomplete="phone_number">
                <button type="submit" class="submit-btn mt-3">Register</button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const type = window.location.pathname
            if (type === '/login') login();
            else register();
        });
        const x = document.getElementById("login");
        const y = document.getElementById("register");
        const z = document.getElementById("btn");
        const formBox = document.querySelector('.form-box');
    
        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
            formBox.style.height = '580px'
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
            formBox.style.height = '480px'
        }
    </script>
</x-guest-layout>