


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>visitor form</title>
    
</head>
<body>
          
    <div > 
        <form action="{{ route('updatevisitor',$visitorList->id) }}" method="post">
           
            <input type="hidden" name="visitorId" value="{{ ($visitorList) ? $visitorList->id : '' }}">
            {!! csrf_field() !!}

      <label for="name">Name:</label>
      <input type="text" name="name" value="{{ ($visitorList) ? $visitorList->name : '' }}">
        
      <label for="email">Email:</label>
      <input type="email" name="email" value=" {{ ($visitorList) ? $visitorList->email : '' }}">    

      <label for="message">Message:</label>
      <textarea type="text" name="message" id="" >{{ ($visitorList) ? $visitorList->message : '' }}</textarea>

      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <label for=""></label>
      <input type="submit" name="submit" value="Update">
  </form>
</div>
 

</body>
</html>