<header>
    
    @auth
        <h1>
            {{Auth::user() -> name}}
        </h1>
        <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>    
        <a class="btn btn-primary"href="{{route('create')}}">Create</a>
    @endauth
    @guest
        
        Login: 
        <form action="{{route('login')}}" method="POST">

            @method("POST")
            @csrf

            <label for="email">Username</label><br>
            <input type="email" name="email"><br>

            <label for="password">password</label><br>
            <input type="password" name="password"><br>

            <input class="btn btn-primary my-3" type="submit" value="Login">

        </form>

        Register: 
        <form action="{{route('register')}}" method="POST">

            @method("POST")
            @csrf

            <label for="name">Username</label><br>
            <input type="text" name="name"><br>

            <label for="email">email</label><br>
            <input type="email" name="email"><br>

            <label for="password">password</label><br>
            <input type="password" name="password"><br>
            <label for="password_confirmation">password confirmation</label><br>
            <input type="password" name="password_confirmation"><br>

            <input class="btn btn-primary my-3" type="submit" value="Register">

        </form>
    @endguest
</header>