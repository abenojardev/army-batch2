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
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>