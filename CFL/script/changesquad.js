$(document).ready(function(){
	$(document).on('click','.add',function(){
		$this = $(this);
		var name = $(this).parent().parent().find(".name").html();
		
		console.log(name);
		$.ajax({
			method: "POST",
			url: "/CFL/api/checksquad.php",
			data: {name: name},
			dataType: 'json',
			success: function(result) {
				//console.log(result['message']);
				alert(result['message']);
				window.location ="/CFL/changesquad.php";
				
			},
			error: function(xhr, status, error) {
				//alert(result['message']);
				//window.location ="/CFL/changesquad.php";
			  var err = eval("(" + xhr.responseText + ")");
			  console.log(err.Message);
			}
		});
	});

	$(document).on('click','.remove',function(){
		$this = $(this);
		var name = $(this).parent().parent().find(".name").html();
		
		console.log(name);
		$.ajax({
			method: "POST",
			url: "/CFL/api/removeplayer.php",
			data: {name: name},
			dataType: 'json',
			success: function(result) {
				//console.log(result['message']);
				alert('REMOVED');
				window.location ="/CFL/changesquad.php";
				
			},
			error: function(xhr, status, error) {
			  alert('Player Removed');
			  window.location ="/CFL/changesquad.php";
			  var err = eval("(" + xhr.responseText + ")");
			  console.log(err.Message);

			}
		});
	});
	
	$.ajax({
		url: "/CFL/api/changesquad.php",
		dataType: 'json',
		success: function(result) {
		table = "<table border=\"1\" style=\"width:100%\"><tr class=\"header\"><td>Name</td><td>Team</td><td>Role</td><td>Price</td><td></td></tr>"

			for (var i=0; i<result['playerList'].length; i++) {
				table += "<tr>";
				table += "<td class=\"name\">";
				table += result['playerList'][i].NAME;
				table += "</td>";
				table += "<td>";
				table += "Bangladesh";
				table += "</td>";
				table += "<td>";
				table += result['playerList'][i].TYPE;
				table += "</td>";
				table += "<td>";
				table += result['playerList'][i].PRICE;
				table += "</td>";
				table += "<td>";
				table += "<button class=\"add\">Add</button>";
				table += "</td>";
				table += "</tr>";
			} 
        	table += "</table>";
			$(document).find(".container").append(table);

			table = "<table border=\"1\" style=\"width:100%\"><tr class=\"header\"><td>Name</td><td></td></tr>"

			for (var i=0; i<result['uplayerList'].length; i++) {
				table += "<tr>";
				table += "<td class=\"name\">";
				table += result['uplayerList'][i].NAME;
				table += "</td>";
				table += "<td>";
				table += "<button class=\"remove\">REMOVE</button>";
				table += "</td>";
				table += "</tr>";
			} 
        	table += "</table>";
			$(document).find(".left1").append(table);
		},
		error: function() {
			alert("Eeeeerror!");
		}
	});
});
