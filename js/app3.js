
$(document).ready(function(){
	$.ajax({
		url: 'http://localhost/project/followersdata3.php',
		method: "GET",
		success: function(data) {
			console.log(data);
			var MaritalStatus = [];
			var CountUser = [];

			for(var i in data) {
				MaritalStatus.push(data[i].MaritalStatus);
				CountUser.push(data[i].CountUser);
			}

			var chartdata = {
				labels: MaritalStatus,
				datasets : [
					{
						label: 'Count user of MaritalStatus ',
						backgroundColor: 'rgba(195,132, 221, 1)',
						borderColor: 'rgba(255,205,0, 1)',
						hoverBackgroundColor: 'rgba(255,205,0, 1)',
						hoverBorderColor: 'rgba(195,132, 221, 1)',
						data: CountUser
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
	 type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
