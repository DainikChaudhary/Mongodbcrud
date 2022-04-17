<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<div class="container">

	<form action="/update" method="POST" class="form-group" id="formid">
		  @if(Session::get('success'))
    <div class="alert alert-success">
    {{Session::get('success')}}
    @endif
    </div>
		@csrf
		<input type="hidden" name="id" value="{{$data->id}}"  >
		Name:<input type="text" name="xname" class="form-group" required="" value="{{$data->name}}"><br>
		Address<input type="text" name="xaddress" required="" value="{{$data->address}}"><br><br>
		Age:<input type="text" name="xage" required="" value="{{$data->age}}" ><br>

		<button class="btn btn-success">Submit</button>
		
	</form>
	
</div>
</body>
</html>


<script type="text/javascript">
     $(document).ready(function(){
            $('#formid').on('submit',function(e){
                e.preventDefault();
               
            $.ajax({
                
                url:"/update",
                type:"POST",
                data:$('#formid').serialize(),
                success:function(html){
                    console.log(html);
                  

                    return redirect('/fetch')->with('success','Data update successfully');

                }
            });

            });
        });
</script>