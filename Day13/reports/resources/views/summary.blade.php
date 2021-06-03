<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Reporting</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Orders Reporting</h3>
                <hr>
            </div> 
            <div class="col-12">
                <canvas id="one" width="100%" height="50px"></canvas>
            </div> 
            <div class="col-12">
                <canvas id="two" width="100%" height="50px"></canvas>
            </div> 
            <div class="col-12">
                <canvas id="three" width="100%" height="50px"></canvas>
            </div> 
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        // Line chart 
        var myChart = new Chart(document.getElementById('one').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [
                    '2010',
                    '2011',
                    '2012',
                    '2013',
                    '2014',
                    '2015',
                    '2016',
                    '2017',
                    '2018',
                    '2019',
                    '2020',
                    '2021'   
                ],
                datasets: [{
                    label: 'Total Orders',
                    data: [
                        {{ $data['total_order']['10'] }},
                        {{ $data['total_order']['9'] }},
                        {{ $data['total_order']['8'] }},
                        {{ $data['total_order']['7'] }},
                        {{ $data['total_order']['6'] }},
                        {{ $data['total_order']['5'] }},
                        {{ $data['total_order']['4'] }},
                        {{ $data['total_order']['3'] }},
                        {{ $data['total_order']['2'] }},
                        {{ $data['total_order']['1'] }},
                        {{ $data['total_order']['0'] }}
                    ],
                    backgroundColor: [
                        'red',
                        'orange',
                        'yellow',
                        'green',
                        'blue',
                        'indigo',
                        'violet',
                        'black',
                        'pink',
                        'dandelion',
                        'purple',
                    ],
                    borderColor: [
                        'red',
                        'orange',
                        'yellow',
                        'green',
                        'blue',
                        'indigo',
                        'violet',
                        'black',
                        'pink',
                        'dandelion',
                        'purple',
                    ],
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

        // Line chart 
        var myChart = new Chart(document.getElementById('two').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [
                    '2010',
                    '2011',
                    '2012',
                    '2013',
                    '2014',
                    '2015',
                    '2016',
                    '2017',
                    '2018',
                    '2019',
                    '2020',
                    '2021'   
                ],
                datasets: [{
                    label: 'Canceled Orders',
                    data: [
                        {{ $data['cancelled_orders']['10'] }},
                        {{ $data['cancelled_orders']['9'] }},
                        {{ $data['cancelled_orders']['8'] }},
                        {{ $data['cancelled_orders']['7'] }},
                        {{ $data['cancelled_orders']['6'] }},
                        {{ $data['cancelled_orders']['5'] }},
                        {{ $data['cancelled_orders']['4'] }},
                        {{ $data['cancelled_orders']['3'] }},
                        {{ $data['cancelled_orders']['2'] }},
                        {{ $data['cancelled_orders']['1'] }},
                        {{ $data['cancelled_orders']['0'] }}
                    ],
                    backgroundColor: [
                        'red',
                        'orange',
                        'yellow',
                        'green',
                        'blue',
                        'indigo',
                        'violet',
                        'black',
                        'pink',
                        'dandelion',
                        'purple',
                    ],
                    borderColor: [
                        'red',
                        'orange',
                        'yellow',
                        'green',
                        'blue',
                        'indigo',
                        'violet',
                        'black',
                        'pink',
                        'dandelion',
                        'purple',
                    ],
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

        // Line chart 
        var myChart = new Chart(document.getElementById('three').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [
                    '2010',
                    '2011',
                    '2012',
                    '2013',
                    '2014',
                    '2015',
                    '2016',
                    '2017',
                    '2018',
                    '2019',
                    '2020',
                    '2021'   
                ],
                datasets: [{
                    label: 'Delivered Orders',
                    data: [
                        {{ $data['delivered_orders']['10'] }},
                        {{ $data['delivered_orders']['9'] }},
                        {{ $data['delivered_orders']['8'] }},
                        {{ $data['delivered_orders']['7'] }},
                        {{ $data['delivered_orders']['6'] }},
                        {{ $data['delivered_orders']['5'] }},
                        {{ $data['delivered_orders']['4'] }},
                        {{ $data['delivered_orders']['3'] }},
                        {{ $data['delivered_orders']['2'] }},
                        {{ $data['delivered_orders']['1'] }},
                        {{ $data['delivered_orders']['0'] }}
                    ],
                    backgroundColor: [
                        'red',
                        'orange',
                        'yellow',
                        'green',
                        'blue',
                        'indigo',
                        'violet',
                        'black',
                        'pink',
                        'dandelion',
                        'purple',
                    ],
                    borderColor: [
                        'red',
                        'orange',
                        'yellow',
                        'green',
                        'blue',
                        'indigo',
                        'violet',
                        'black',
                        'pink',
                        'dandelion',
                        'purple',
                    ],
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