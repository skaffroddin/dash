<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
Name: <input type="text" id="name"><br>
Email: <input type="text" id="email"><br>
Password: <input type="text" id="password"><br>
Phone: <input type="text" id="phone"><br>
Gender: <input type="radio" value="Male" id="gender" name="gender">Male
			  <input type="radio" value="Female" id="gender" name="gender">Female
			  <input type="radio" value="Others" id="gender" name="gender">Others<br>
Degree:<select id="degree">
					<option value="">Select</option>
					<option value="B.tech">B.tech</option>
					<option value="M.Tech">M.tech</option>
					<option value="B.Sc">B.Sc</option>
					<option value="BCA">Bca</option>
			   	   </select><br>
Language: <input type="checkbox" name="language[]" id="language" value="Bengali">Bengali
	      <input type="checkbox" name="language[]" id="language" value="Hindi">Hindi 
	      <input type="checkbox" name="language[]" id="language" value="English">English<br>
<button type="submit" id="b1">Submit</button>
<div id="div"></div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#b1").click(function(){
			var nm= $("#name").val();
			var em= $("#email").val();
			var ps= $("#password").val();
			var ph= $("#phone").val();
			var ge= $("input[name='gender']:checked").val();
			var de= $("#degree").val();
			var lan= [];
			$.each($("input[name='language[]']:checked"),function(){
				lan.push($(this).val());
			});
			var lan=lan.join(",");  //', default'
			console.log(nm,em,ps,ph);
			$.ajax({
				type: "post",
				url: "formaction.php",
				data: {nme:nm,eml:em,psw:ps,phn:ph,gen:ge,deg:de,lang:lan}
			}).done(function(data){
				$('#div').html(data);
			});
		});
	});
</script>
</body>
</html>