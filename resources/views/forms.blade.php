<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    
    </header>
    <body>
        <p>Type your student ID</p>
        <form action="" method="get" >
            @csrf
            <input 
            
            type="email" 
            name="Student ID"
            value="{{old('name')}}" //flashesOldStudentID
            autocomplete="text" 
            required 
            minlength="10"
    
            >
            
    
            @error('Student ID')
                <p>{{$message}}</p>
            @enderror
    
            <input type="submit" value="Verify">
        </form>
        <!-- checking for account details using student ID and signup -->
        <a href="/register">Check student ID</a><br>
        <label for="signup">or sign up for an accoount</label><br>
        <a href="/register">Signup</a>
            
    </body>
</body>
</html>