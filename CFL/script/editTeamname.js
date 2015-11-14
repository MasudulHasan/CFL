$(document).ready(function(){
	$(document).on('click','#login',function(){

		$this = $(this);
		var name = $(this).parent().find("input[name='name']").val();
		var pass1 = $(this).parent().find("input[name='pass']").val();
		$.ajax({
			method: "POST",
			url: "/CFL/api/changeTeamname.php",
			data: {name: name, pass: pass1},
			dataType: 'json',
			success: function(result) {
				alert(result['message']);
				window.location ="/CFL/userprofile.php";
			},
			error: function() {
				alert("error!");
			}
		});	
	});
});