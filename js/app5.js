
$(document).ready(function(){
	$.ajax({
		url: 'http://localhost/project/followersdata5.php',
		method: "GET",
		success: function(data) {
			console.log(data);
			var transactioncode = [];
			var transactionperMonth = [];

			for(var i in data) {
				transactioncode.push(data[i].transactioncode);
				transactionperMonth.push(data[i].transactionperMonth);
			}

			var chartdata = {
				labels: transactioncode,
				datasets : [
					{
						label: 'Count user of transactioncode ',
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
