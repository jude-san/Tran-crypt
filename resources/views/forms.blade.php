<!DOCTYPE html>
<header>
    
</header>
<body>
    <p>Type your student ID</p>
    <form action="" method="get" >
        @csrf
        <input 
        
        type="text" 
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
    <a href="/">Check student ID</a>
        
</body>