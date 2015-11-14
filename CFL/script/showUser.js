$(document).ready(function(){
	$.ajax({
		url: "/CFL/api/getUsers.php",
		dataType: 'json',
		success: function(userList) {
			var table = "<table><tr><td>Name</td><td>Password</td></tr>";
			for (var i=0; i<userList.length; i++) {
				table += "<tr>";
				table += "<td>";
				table += userList[i].USERNAME;
				table += "</td>";
				table += "<td>";
				table += userList[i].PASSWORD;
				table += "</td>";
				table += "<tr>";
			} 
        	table += "</table>";
			$(document).find("#regBox").append(table);
		},
		error: function() {
			alert("Error!");
		}
	});
});
