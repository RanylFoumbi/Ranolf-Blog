
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>visitor form</title>
    
</head>
<body>
    <div style="display:flex; justify-content:space-around"> 
        <form action="store" method="post">
      <label for="name">Name:</label>
      <input type="text" name="name" value="">

      <label for="email">Email:</label>
      <input type="email" name="email" value="">

      <label for="message">Message:</label>
      <textarea name="message" id="" cols="20" rows="10"></textarea>

      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <label for=""></label>
      <input type="submit" name="submit" value="submit">
  </form>
</div>
 

</body>
</html>