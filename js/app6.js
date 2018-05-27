
$(document).ready(function(){
	$.ajax({
		url: 'http://localhost/project/followersdata6.php',
		method: "GET",
		success: function(data) {
			console.log(data);
			var a = [];
			var transactionperMonth = [];

			for(var i in data) {
				a.push(data[i].a);
				transactionperMonth.push(data[i].transactionperMonth);
			}

			var chartdata = {
				labels: a,
				datasets : [
					{
						label: 'Count user of a ',
						backgroundColor: 'rgba(195,132, 221, 1)',
						borderColor: 'rgba(255,205,0, 1)',
						hoverBackgroundColor: 'rgba(255,205,0, 1)',
						hoverBorderColor: 'rgba(195,132, 221, 1)',
						data: transactionperMonth
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
