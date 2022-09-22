<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/styles.css" rel="stylesheet" />
    <title>authentification</title>
</head>
<body>
    <div class="container-connexion">
        <h2>Page de connexion</h2>
       <div class="container-form">
            <form action="{{route('login-user')}}" method="post">
            @if(Session::get('success'))
                <div>{{Session::get('success')}}</div>
                @endif
    
                @if(Session::get('fail'))
                <div>{{Session::get('fail')}}</div>
                @endif
                @csrf
                <div>
                    <label for="" class="col-form-label">Email</label>
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}" class="input">
                <span>@error('email'){{$message}}@enderror</span>
                </div>
    
                <div>
                    <label for="" class="col-form-label">Mots de passe</label>
                    <input type="password" name="password" placeholder="mot de passe" value="{{old('password')}}"class="input"> 
                    <span>@error('password'){{$message}}@enderror</span>
                </div>
    
                <button type="submit" class="btn btn-dark-primary bg-dark text-primary text-white">connexion</button>
               
            </form>
        </div>
    </div>
</body>
</html>