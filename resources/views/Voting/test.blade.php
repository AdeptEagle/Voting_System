<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  

</head>
<body>
  <form method="post" action="{{route('amongus')}}">
  @csrf 
  <input type="text" value="" name="FirstName">
  <input type="text" value="" name="LastName">
  <input type="text" value="" name="Position">
  <button>Submit</button>
  </form>
</body>
</html>