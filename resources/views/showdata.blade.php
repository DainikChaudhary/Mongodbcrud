<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
	<div class="pull-right">
                <a class="btn btn-success" href="/show" style="margin-right: 150px"> Create New </a>
            </div>
	 @if(Session::get('success'))
    <div class="alert alert-success">
    {{Session::get('success')}}
    @endif
  <table class="table table-bordered" id="hit">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Age</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($data as $book)
        <tr id="sid{{$book->id}}">
             
            <td>{{ ++$i }}</td>
            <td>{{ $book->name }}</td>
            <td>{{ $book->address }}</td>
            <td>{{ $book->age }}</td>
            <td>
                    <a class="btn btn-primary" href="/edit/{{$book->id}}" data-id=''>Edit</a>
                <a href="/fetch/{{$book->id}}"><button type="submit" class="btn btn-danger ton" data-id='{{$book->id}}' id="delete-btn">Delete</button></a></td>
            
                
            </td>
        </tr>
        @endforeach
    </table>



</body>
</html>


<script type="text/javascript">
	

$(document).on("click","#delete-btn",function(){
   
    var Userid=$(this).data("id");
    var element=this;
   
    
    $.ajax({
        url:"/show"+Userid,
        type:"get",
        data:{id:Userid},
        success: function(data){
            $(element).closest("tr").fadeOut();
            
            
        }
    });
    
});
</script>