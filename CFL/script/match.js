$(document).ready(function(){
	$.ajax({
		url: "/CFL/api/match.php",
		dataType: 'json',
		success: function(playerList) {
			var table = "<table border=\"1\" style=\"width:100%\"><tr class=\"header\"><td>Team Name</td><td>Player Name</td><td>Tottal Point</td></tr>"

			for (var i=0; i<playerList.length; i++) {
				table += "<tr>";
				table += "<td>";
				table += playerList[i].TEAM;
				table += "</td>";
				table += "<td>";
				table += playerList[i].NAME;
				table += "</td>";
				table += "<td>";
				table += playerList[i].TOTALL_POINT;
				table += "</td>";
				table += "<tr>";
			} 
        	table += "</table>";
			$(document).find(".playerStats").append(table);
		},
		error: function() {
			alert("EEEEEEEEError!");
		}
	});
});
