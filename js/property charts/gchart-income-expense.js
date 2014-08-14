
      google.load("visualization", "1", {packages:["corechart"]});
      
      function drawIncome() {
        var data = google.visualization.arrayToDataTable([
          ['Source', 'Amount'],
          ['Rental',     123456],
          ['Reimbursments',      23456],
          ['Other',  3456]
        ]);

        var options = {
          title: 'Income',
		  colors: ['#163038', '#a3c1c9', '#8f061e'],
		  legend: 'none',
		  backgroundColor: { fill:'transparent' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('incomeChart'));
        chart.draw(data, options);
      }
	function drawExpenses(){
		var data = google.visualization.arrayToDataTable([
			['source',	'Amount'],
			['Fixed', 34243],
			['Adjustable',	23545],
			['Capital',	42313]
			
		]);
		
		var options = {
			title: 'Expenses',
			colors:['#163038', '#a3c1c9', '#8f061e'],
			legend: 'none',
			backgroundColor: { fill: 'transparent'}
			};
		
		var chart = new google.visualization.PieChart(document.getElementById('expenseChart'));
		chart.draw(data, options)
		}