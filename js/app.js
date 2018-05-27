
$(document).ready(function(){
	$.ajax({
		url: 'http://localhost/project/followersdata.php',
		method: "GET",
		success: function(data) {
			console.log(data);
			var Department = [];
			var COUNTstaff = [];

			for(var i in data) {
				Department.push(data[i].departmentName);
				COUNTstaff.push(data[i].COUNTstaff);
			}

			var chartdata = {
				labels: Department,
				datasets : [
					{
						label: 'Employees Count of each Department',
						backgroundColor: 'rgba(195,132, 221, 1)',
						borderColor: 'rgba(255,205,0, 1)',
						hoverBackgroundColor: 'rgba(255,205,0, 1)',
						hoverBorderColor: 'rgba(195,132, 221, 1)',
						data: COUNTstaff
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
