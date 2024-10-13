<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div>
     <canvas id="myChart"></canvas>
</div>




<script>
    const topCountries = @json($topCountries);

    const labels = topCountries.map(country => country.country);
    const dataValues = topCountries.map(country => country.screenPageViews);

    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Screen Page Views',
                data: dataValues,
                backgroundColor: labels.map((country,index)=>{
                    return index % 2 === 0 ? 'rgba(255, 99, 132, 0.2)' : 'rgba(54, 162, 235, 0.2)';
                }),
                borderColor: labels.map((country,index)=>{
                    return index % 2 === 0 ? 'rgba(255, 99, 132, 1)' : 'rgba(54, 162, 235, 1)';
                }),
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


</script>

</body>
</html>
