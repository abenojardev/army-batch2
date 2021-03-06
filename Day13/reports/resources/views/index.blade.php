<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Reporting</h3>
                <hr>
            </div>
            <div class="col-3 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $total_number_of_customers }}</h5>
                        <small class="card-text">
                            Customers
                        </small> 
                    </div>
                </div>
            </div> 

            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $total_number_of_customers_using_app }}</h5>
                        <small class="card-text">
                            Customers using app
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $total_number_of_customers_using_browser }}</h5>
                        <small class="card-text">
                            Customers using browser
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $female_customers }}</h5>
                        <small class="card-text">
                            Female customers
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $male_customers }}</h5>
                        <small class="card-text">
                            Male customer 
                        </small> 
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['child'] }}</h5>
                        <small class="card-text">
                            Child customer 
                        </small> 
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['adolescence'] }}</h5>
                        <small class="card-text">
                            Adolescence customer 
                        </small> 
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['adult'] }}</h5>
                        <small class="card-text">
                            Adult customer 
                        </small> 
                    </div>
                </div>
            </div>

            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['senioradult'] }}</h5>
                        <small class="card-text">
                            Senior Adult customer 
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['ASIA'] }}</h5>
                        <small class="card-text">
                            Customer  in ASIA
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['EUROPE'] }}</h5>
                        <small class="card-text">
                            Customer  in EUROPE
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['US'] }}</h5>
                        <small class="card-text">
                            Customer  in US
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['AFRICA'] }}</h5>
                        <small class="card-text">
                            Customer  in AFRICA
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['AUSTRALIA'] }}</h5>
                        <small class="card-text">
                            Customer  in AUSTRALIA
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-6"></div>

            <div class="col-3">
                <canvas id="bydevice" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="bygender" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="byage" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="bycountry" width="100px" height="100px"></canvas>
            </div>

        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <script> 
    var myChart = new Chart(document.getElementById('bycountry').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'ASIA',
                'EUROPE',
                'US',
                'AFRICA',
                'AUSTRALIA'
            ],
            datasets: [{ 
                data: [
                    {{ $country['ASIA'] }},
                    {{ $country['EUROPE'] }},
                    {{ $country['US'] }},
                    {{ $country['AFRICA'] }},
                    {{ $country['AUSTRALIA'] }}
                ],
                backgroundColor: [
                    'brown',
                    'royalblue',
                    'gray',
                    'black',
                    'orange'
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
                    text: 'Customers by country'
                }
            }
        }
    });
    var myChart = new Chart(document.getElementById('byage').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Child',
                'Adolescence',
                'Adult',
                'Senior Adult'
            ],
            datasets: [{ 
                data: [
                    {{ $age['child'] }},
                    {{ $age['adolescence'] }},
                    {{ $age['adult'] }},
                    {{ $age['senioradult'] }}
                ],
                backgroundColor: [
                    'peach',
                    'orange',
                    'blue',
                    'grey',
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
                    text: 'Customers by Age group'
                }
            }
        }
    });
    var myChart = new Chart(document.getElementById('bygender').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Male',
                'Female' 
            ],
            datasets: [{ 
                data: [
                    {{ $male_customers }}, 
                    {{ $female_customers }}
                ],
                backgroundColor: [
                    'black',
                    'pink' 
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
                    text: 'Customers by Gender'
                }
            }
        }
    });
    var myChart = new Chart(document.getElementById('bydevice').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'App',
                'Browser' 
            ],
            datasets: [{ 
                data: [
                    {{ $total_number_of_customers_using_app }}, 
                    {{ $total_number_of_customers_using_browser }}
                ],
                backgroundColor: [
                    'darkyellow',
                    'lightblue' 
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
                    text: 'Customers by Device'
                }
            }
        }
    });
    </script>
</body>
</html>