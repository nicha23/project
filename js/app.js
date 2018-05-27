
$(document).ready(function(){
	$.ajax({
		url: 'http://localhost/project/followersdata.php',
		method: "GET",
		success: function(data) {
			console.log(data);
			var District = [];
			var CountUser = [];

			for(var i in data) {
				District.push(data[i].District);
				CountUser.push(data[i].CountUser);
			}

			var chartdata = {
				labels: District,
				datasets : [
					{
						label: 'Count user of District ',
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
	 type: 'horizontalBar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
