<!DOCTYPE html>
<html>
<head>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

table ,th{

  border: 1px solid black;
}
</style>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</head>
<body>


<table id="table">
  <tr>
    <th>Name of student</th>
    <th>Parent name</th>
    <th>Opted course</th>
    <th>Enable or disable</th>

  </tr>
  
  @foreach ($soc as $key)
  <tbody>
  <tr>
  <td>{{$key->student_name}}</td> 
  <td>{{$key->parent_name}}</td> 
  <td>{{$key->course_name}}</td> 

 
   <td>
   
    @if($key->is_active==0)
  <input type="checkbox" id="toggle-two" class="toggle-class" data-id="{{$key->id}}" data-toggle="toggle" data-style="slow"
   data-off="disable" value="{{$key->is_active==0?'1':'0'}}">
  @endif
  @if($key->is_active==1)
  <input type="checkbox" id="toggle-two" class="toggle-class" data-id="{{$key->id}}" data-toggle="toggle" data-style="slow"
  data-on="enable"  value="{{$key->is_active==1?'0':'1'}}">
  @endif
  

 
 

</td> 

</tr>
  </tbody>
  @endforeach
  
 
  
  </table>
  <script>
  
$('.toggle-class').on('change',function(){
    var status= document.getElementById("toggle-two").value;
    console.log(is_active,"status=");
    var status=$(this).prop('checked')==true?1:0;
     
    var id=$(this).data('id');
    console.log(id,"id");
    
});
$.ajax({
    type:'GET',
    dataType:'JSON',
    url:'{{url('status')}}',
    data:{
         'status':is_active,'id': id 
    },
    success:function(data){
        $('#notifDiv').fadeIn();
        $('#notifDiv').css('background','green');
        $('#notifDiv').text('status is updated');
        setTimeout(()=>{
            $('#notifDiv').fadeOut();
        });
    }
});
    </script>
  <script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>


</body>
</html>


