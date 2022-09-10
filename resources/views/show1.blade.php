
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title> show data</title>
</head>
<body>

<table id="" border="2px;">
      	<thead>
      	<tr>
      		<th>ID</th>
      		<th>NAME</th>
      		<th>ADDRESS</th>
      		<th>EMAIL</th>
      		<th>NUMBER</th>
      		<th>TEACHERSUBJECT</th>
      		<th>UPDATE</th>
      		<th>DELETE</th>
      		<a href="{{route('inc.create')}}"><button type="button" class="btn btn-primary btn-sm">ADD DATA</button></a>
</tr>
</thead>
         
        @if(!empty($value)) 
	     @foreach ($value as $row)
	     
		  	<tr>
		  		<td>{{$row->id}}</td>
		  		<td>@if(!empty($row->teacher)){{$row->teacher->name}}@endif</td>
		  		<td>@if(!empty($row->teacher)){{$row->teacher->address}}@endif</td>
		  		<td>@if(!empty($row->teacher)){{$row->teacher->email}}@endif</td>
		  		<td>@if(!empty($row->teacher)){{$row->teacher->number}}@endif</td>
                <td>{{$row->teachersubject}}</td>
		  		
		  	
		  		
		  		
		  		<td>
		    
		    	
                <a href="{{ url('inc/'.$row->id.'/edit') }}"><button type="submit" class="btn btn-outline-success">EDIT</button></a>
                   <!-- <button type="submit" class="btn btn-outline-success" onclick="return confirm('are you want to delete')">UPDATE</button> -->
                    
		   
		    </td>
		  		 <td>
		    	<form action="{{ route('inc.destroy',$row->id)}}" method="POST">
		    	@csrf
                @method('DELETE')
                   <button type="submit" class="btn btn-outline-danger" onclick="return confirm('are you want to delete')">DELETE</button>
                    
		    </form>
		    </td>

		    </tr>
		    
		   
            
	@endforeach
@endif
</table>

</body>
</html>