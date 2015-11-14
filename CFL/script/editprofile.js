$(document).ready(function(){
	$(document).on('click','#Change1',function(){
		$this = $(this);
		var name = $(this).parent().parent().find("#name1").html();
		
		console.log(name);
		alert(name);
		//header("CFL/editname.php");
		window.location ="/CFL/editname.php";
		
	});

	$(document).on('click','#Change2',function(){
		$this = $(this);
		var name = $(this).parent().parent().find("#name1").html();
		
		console.log(name);
		alert(name);
		//header("CFL/editname.php");
		window.location ="/CFL/editemail.php";
		
	});

	$(document).on('click','#Change3',function(){
		$this = $(this);
		var name = $(this).parent().parent().find(".name").html();
		
		console.log(name);
		alert(name);
		//header("CFL/editname.php");
		window.location ="/CFL/editpassword.php";
		
	});

	$(document).on('click','#Change4',function(){
		$this = $(this);
		var name = $(this).parent().parent().find(".name").html();
		
		console.log(name);
		alert(name);
		//header("CFL/editname.php");
		window.location ="/CFL/editTeamname.php";
		
	});
	
	
	
	$.ajax({
		url: "/CFL/api/editprofile.php",
		dataType: 'json',
		success: function(result) {
		table = "<table border=\"1\" style=\"width:100%\"><tr class=\"header\"><td>Name</td><td></td></tr>"
			
			for (var i=0; i<result['playerList'].length; i++) {
				table += "<tr>";
				table += "<td id=\"name1\">";
				table += result['playerList'][i].USERNAME;
				table += "</td>";
				table += "<td>";
				table += "<button type=\"button\" id=\"Change1\">Change</button>";
				table += "</td>";
				table += "</tr>";
			} 
        	table += "</table>";
			$(document).find(".container").append(table);
			table = "<table border=\"1\" style=\"width:100%\"><tr class=\"header\"><td>EMAIL</td><td></td></tr>"
			
			for (var i=0; i<result['playerList'].length; i++) {
				table += "<td id=\"name1\">";
				table += result['playerList'][i].EMAIL;
				table += "</td>";
				table += "<td>";
				table += "<button type=\"button\" id=\"Change2\">Change</button>";
				table += "</td>";
				
			} 
        	table += "</table>";
			$(document).find(".container").append(table);
			table = "<table border=\"1\" style=\"width:100%\"><tr class=\"header\"><td>PASSWORD</td><td></td></tr>"
			
			for (var i=0; i<result['playerList'].length; i++) {
				table += "<td class=\"name\">";
				table += result['playerList'][i].PASSWORD;
				table += "</td>";
				table += "<td>";
				table += "<button type=\"button\" id=\"Change3\">Change</button>";
				table += "</td>";
				
			} 
        	table += "</table>";
			$(document).find(".container").append(table);
			table = "<table border=\"1\" style=\"width:100%\"><tr class=\"header\"><td>TEAM NAME</td><td></td></tr>"
			
			for (var i=0; i<result['playerList'].length; i++) {
				table += "<td class=\"name\">";
				table += result['playerList'][i].USER_TEAM_NAME;
				table += "</td>";
				table += "<td>";
				table += "<button type=\"button\" id=\"Change4\">Change</button>";
				table += "</td>";
				
			} 
        	table += "</table>";
			$(document).find(".container").append(table);
		},
		error: function() {
			alert("Eeeeerror!");
		}
	});
});
