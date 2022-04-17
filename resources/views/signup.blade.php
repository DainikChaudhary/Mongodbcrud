<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<div class="container">

	<form action="/insert" method="POST" class="form-group" id="formid">
		  @if(Session::get('success'))
    <div class="alert alert-success">
    {{Session::get('success')}}
    @endif
    </div>
		@csrf

		Name:<input type="text" name="xname" class="form-group" required=""><br>
		Address<input type="text" name="xaddress" required=""><br><br>
		Age:<input type="text" name="xage" required=""><br>

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
                
                url:"/insert",
                type:"POST",
                data:$('#formid').serialize(),
                success:function(html){
                    console.log(html);

                    return redirect('/fetch')->with('success','Data created successfully.');

                     

                }
            });

            });
        });
</script>