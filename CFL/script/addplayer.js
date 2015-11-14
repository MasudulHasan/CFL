$(document).ready(function(){
	$(document).on('click','#submit',function(){

		$this = $(this);
		var name = $(this).parent().find("input[name='name']").val();
		var pass1 = $(this).parent().find("input[name='roll']").val();
		var pass2 = $(this).parent().find("input[name='price']").val();
		var teamname =$(this).parent().find("select[name='team']").val();
		if(pass1) {
			$.post("/CFL/api/addplayer.php",{name:name,roll:pass1,price:pass2,teamname:teamname});
			
			alert("Player added");
			window.location ="/CFL/addplayer.php";
		}
		else {
			alert("Password didn't match!");
		}
		//alert(teamname);
	});
});