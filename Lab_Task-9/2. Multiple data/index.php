<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div style="margin: auto;width: 60%;">
<form id="form1" name="form1" method="post">
<div class="form-group">
<label for="email"><b style="color: red;"> Student Name:</label>
<input type="text" name="sname" class="form-control" id="name">
</div>
<div class="form-group">
<label for="pwd">Student email:</label>
<input type="text" name="email" class="form-control" id="email">
</div>
<input type="button" name="send" class="btn btn-primary" value="add data" id="butsend">

</form>
<table id="table1" name="table1" class="table table-bordered">
<tbody>
<tr>
<th><b style="color: green;"> ID</th>
<th><b style="color: green;"> Name</th>
<th><b style="color: green;"> email</th>
<th><b style="color: green;"> Action</th>
<tr>
</tbody>
</table>
</div>
<script>
$(document).ready(function() {
var id = 1; 
$("#butsend").click(function() {
var newid = id++; 
$("#table1").append('<tr valign="top" id="'+newid+'">\n\
<td width="100px" >' + newid + '</td>\n\
<td width="100px" class="name'+newid+'">' + $("#name").val() + '</td>\n\
<td width="100px" class="email'+newid+'">' + $("#email").val() + '</td>\n\
<td width="100px"><a href="javascript:void(0);" class="remCF">Remove</a></td>\n\ </tr>');
});
$("#table1").on('click', '.remCF', function() {
$(this).parent().parent().remove();
});
$("#butsave").click(function() {
var lastRowId = $('#table1 tr:last').attr("id"); 
var name = new Array(); 
var email = new Array();
for ( var i = 1; i <= lastRowId; i++) {
name.push($("#"+i+" .name"+i).html()); 
email.push($("#"+i+" .email"+i).html()); 
}
var sendName = JSON.stringify(name); 
var sendEmail = JSON.stringify(email);
$.ajax({
url: "save.php",
type: "post",
data: {name : sendName , email : sendEmail},
success : function(data){
alert(data);
}
});
});
});
</script>
</body>
</html>