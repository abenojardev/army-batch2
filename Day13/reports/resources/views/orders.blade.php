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
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">
                            $ {{ number_format($data['total_earned'], 2, '.', ',') }}
                        </h5>
                        <small class="card-text">
                            Total Earned
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ number_format($data['avg_order_total'], 2, '.', ',') }}
                        </h5>
                        <small class="card-text">
                            Average Order
                        </small> 
                    </div>
                </div>
            </div>
            
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['category']['Toys'] }}
                        </h5>
                        <small class="card-text">
                            Toys category orders
                        </small> 
                    </div>
                </div>
            </div>  
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['category']['Books'] }}
                        </h5>
                        <small class="card-text">
                            Books category orders
                        </small> 
                    </div>
                </div>
            </div> 
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['category']['Home_Supplies'] }}
                        </h5>
                        <small class="card-text">
                            Home Supplies category orders
                        </small> 
                    </div>
                </div>
            </div> 
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['category']['Accessories'] }}
                        </h5>
                        <small class="card-text">
                            Accessories category orders
                        </small> 
                    </div>
                </div>
            </div> 
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['category']['Gadgets'] }}
                        </h5>
                        <small class="card-text">
                            Gadgets category orders
                        </small> 
                    </div>
                </div>
            </div> 
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['category']['Food'] }}
                        </h5>
                        <small class="card-text">
                            Food category orders
                        </small> 
                    </div>
                </div>
            </div> 
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['category']['Appliances'] }}
                        </h5>
                        <small class="card-text">
                            Appliances category orders
                        </small> 
                    </div>
                </div>
            </div>
            
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['status']['processing'] }}
                        </h5>
                        <small class="card-text">
                            Processing orders
                        </small> 
                    </div>
                </div>
            </div>  
            
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['status']['shipped'] }}
                        </h5>
                        <small class="card-text">
                            Shipped orders
                        </small> 
                    </div>
                </div>
            </div>  
            
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['status']['delivered'] }}
                        </h5>
                        <small class="card-text">
                            Delivered orders
                        </small> 
                    </div>
                </div>
            </div>  
            
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['status']['canceled'] }}
                        </h5>
                        <small class="card-text">
                            Canceled orders
                        </small> 
                    </div>
                </div>
            </div> 
            
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['promotion']['used'] }}
                        </h5>
                        <small class="card-text">
                            Orders with promotion
                        </small> 
                    </div>
                </div>
            </div> 
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title"> 
                            {{ $data['promotion']['not_used'] }}
                        </h5>
                        <small class="card-text">
                            Orders with no promotion
                        </small> 
                    </div>
                </div>
            </div> 

            <div class="col-3"></div>
            <div class="col-4">
                <canvas id="bycategory" width="100px" height="100px"></canvas>
            </div> 
            <div class="col-4">
                <canvas id="bystatus" width="100px" height="100px"></canvas>
            </div> 
            <div class="col-4">
                <canvas id="bypromo" width="100px" height="100px"></canvas>
            </div> 

            <div class="col-12">
                <canvas id="byyear" width="100%" height="50px"></canvas>
            </div> 
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        var myChart = new Chart(document.getElementById('bycategory').getContext('2d'), {
            type: 'pie',
            data: {
                labels: [
                    'Toys',
                    'Books',
                    'Home Supplies',
                    'Accessories',
                    'Gadgets',
                    'Food',
                    'Appliances'
                ],
                datasets: [{ 
                    data: [
                        {{ $data['category']['Toys'] }},
                        {{ $data['category']['Books'] }},
                        {{ $data['category']['Home_Supplies'] }},
                        {{ $data['category']['Accessories'] }},
                        {{ $data['category']['Gadgets'] }},
                        {{ $data['category']['Food'] }},
                        {{ $data['category']['Appliances'] }}
                    ],
                    backgroundColor: [
                        'blue',
                        'brown',
                        'silver',
                        'black',
                        'pink',
                        'yellow',
                        'green'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Orders per Category'
                    }
                }
            }
        });

var myChart = new Chart(document.getElementById('bystatus').getContext('2d'), {
    type: 'pie',
    data: {
        labels: [
            'processing',
            'shipped',
            'delivered',
            'canceled',
        ],
        datasets: [{ 
            data: [
                {{ $data['status']['processing'] }},
                {{ $data['status']['shipped'] }},
                {{ $data['status']['delivered'] }},
                {{ $data['status']['canceled'] }} 
            ],
            backgroundColor: [
                'orange',
                'blue',
                'green',
                'red'
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Orders per status'
            }
        }
    }
});


var myChart = new Chart(document.getElementById('bypromo').getContext('2d'), {
            type: 'pie',
            data: {
                labels: [
                    'With Promotions',
                    'Without Promotions' 
                ],
                datasets: [{ 
                    data: [
                        {{ $data['promotion']['used'] }},
                        {{ $data['promotion']['not_used'] }} 
                    ],
                    backgroundColor: [
                        'green',
                        'red' 
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Orders per promotion'
                    }
                }
            }
        });


        // Line chart 
        var myChart = new Chart(document.getElementById('byyear').getContext('2d'), {
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
                    label: 'Yearly Sales',
                    data: [
                        {{ $data['year']['10'] }},
                        {{ $data['year']['9'] }},
                        {{ $data['year']['8'] }},
                        {{ $data['year']['7'] }},
                        {{ $data['year']['6'] }},
                        {{ $data['year']['5'] }},
                        {{ $data['year']['4'] }},
                        {{ $data['year']['3'] }},
                        {{ $data['year']['2'] }},
                        {{ $data['year']['1'] }},
                        {{ $data['year']['0'] }}
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