<!DOCTYPE html>
<html>
    <head>
        <title>MobilePhone</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
       <center>
       <table style="width:100%;border:5px red solid">
      @foreach($data as $value)
      <tr>
      <td>{{ $value->srno }} </td>
      <td>{{ $value->Brand }} </td>
      <td>{{ $value->Price }}</td>
      <td><img src={{ $value->imageurl }} style="height:100px;width:100px;"></img></td>
      </tr>
        @endforeach
    </table>
       </center>
    </body>
</html>