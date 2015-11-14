$(document).ready(function(){
	$(document).on('click','#submit',function(){

		$this = $(this);
		var name = $(this).parent().find("input[name='name']").val();
		var pass1 = $(this).parent().find("input[name='pass']").val();
		var pass2 = $(this).parent().find("input[name='confPass']").val();
		var email = $(this).parent().find("input[name='email']").val();
		var teamname =$(this).parent().find("input[name='teamname']").val();
		if(pass1 === pass2) {
			$.post("/CFL/api/addUser.php",{name:name,pass:pass1,email:email,teamname:teamname});
			
			//alert(pass1);
			window.location ="/CFL/login1.php";
		}
		else {
			alert("Password didn't match!");
		}
	});
});