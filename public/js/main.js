var url="http://localhost/eclipse-workspace/DHT11_laravel/public/thermo";
	$.getJSON(url, function(response){
		var temp=[];
		var date=[];
		var humi=[];
		
		for	(var i =0; i<response.length; i++){
			date.push(response[i].date);
			temp.push(response[i].temperature);
			humi.push(response[i].humidite);
			
		}
		
		var ctx = document.getElementById("measureChart").getContext('2d');
		var gradientFill = ctx.createLinearGradient(0, 0, 0, 290);
		var gradientFillbis = ctx.createLinearGradient(0, 0, 0, 100);
		gradientFill.addColorStop(0, "rgba(173, 53, 186, 1)");
		gradientFill.addColorStop(1, "rgba(173, 53, 186, 0.1)");
		gradientFillbis.addColorStop(0, "rgba(73, 221, 221, 1)");
		gradientFillbis.addColorStop(1, "rgba(73, 221, 221, 0.1)");
			var myMeasureChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: date,
					datasets: [{
						label: 'Température',
						data: temp,
				        backgroundColor: gradientFill,
				        borderColor: [
				          '#AD35BA',
				        ],
				        borderWidth: 2,
				        pointBorderColor: "#fff",
				        pointBackgroundColor: "rgba(173, 53, 186, 0.1)",
					},
					{
						label: 'Humidité',
						data: humi,
				        backgroundColor: gradientFillbis,
				        borderColor: [
				          '#1f5d5d',
				        ],
				        borderWidth: 2,
				        pointBorderColor: "#3db9b9",
				        pointBackgroundColor: "rgba(73, 221, 221, 0.1)",
					},
					]
				},
				options: {
					responsive: true
				}
			})
	})