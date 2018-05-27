
$(document).ready(function(){
	$.ajax({
		url: 'http://localhost/project/followersdata2.php',
		method: "GET",
		success: function(data) {
			console.log(data);
			var ResidentialStatus = [];
			var CountUser = [];

			for(var i in data) {
				ResidentialStatus.push(data[i].ResidentialStatus);
				CountUser.push(data[i].CountUser);
			}

			var chartdata = {
				labels: ResidentialStatus,
				datasets : [
					{
						label: 'Count user of ResidentialStatus ',
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
