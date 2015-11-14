$(document).ready(function(){
	$.ajax({
		url: "/CFL/api/checklogin.php",
		dataType: 'json',
		success: function($result) {
			var table = "<table><tr><td>Name</td><td>Password</td></tr>";
			for (var i=0; i<userList.length; i++) {
				table += "<tr>";
				table += "<td>";
				table += result[i].message;
				table += "</td>";
				table += "<td>";
				table += result[i].success;
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
