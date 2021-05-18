<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="">
    
    <header class="p-3 mb-3 border-bottom bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <img width="5%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Philippine_Army_Seal.svg/1200px-Philippine_Army_Seal.svg.png" alt="">
                 

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"> 
                <li><a href="#" class="text-white nav-link px-2 link-secondary">Records</a></li>
                <li><a href="#" class="text-white nav-link px-2 link-dark">Inventory</a></li>
                <li><a href="#" class="text-white nav-link px-2 link-dark">Customers</a></li>
                <li><a href="#" class="text-white nav-link px-2 link-dark">Products</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
                </div>
            </div>
        </div>
    </header> 
    
    <div class="main-content">
        <div style="margin-top: -1.5%;" class="row">
            <div class="col-3">
                <div style="height:88vh;" class="bg-dark d-flex flex-column flex-shrink-0 p-3 bg-light">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4 text-white">Sidebar</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class=" text-white nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                        Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class=" text-white nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                        Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class=" text-white nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                        Orders
                        </a>
                    </li>
                    <li>
                        <a href="#" class=" text-white nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                        Products
                        </a>
                    </li>
                    <li>
                        <a href="#" class=" text-white nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                        Customers
                        </a>
                    </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                    <a href="#" class=" text-white d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>mdo</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-9 b-light">
                <div class="row align-items-center"> 
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body row p-5"> 

                                <div class="col-10">
                                    <h4>
                                        All Records 
                                    </h4>
                                </div>
                                <div class="col-2 text-end"> 
                                    <button class="btn btn-dark pull-right">Create</button>
                                </div> 
                                <div class="col-12">
                                    <hr>    
                                </div>

                                <div class="col-8"></div>
                                <div class="col-4 text-end"> 
                                    <input type="text" class="form-control" placeholder="Search">
                                </div> 

                                <div class="col-12">
                                    <table class="table mt-3">
                                        <thead>
                                            <tr>
                                                <th class="text-muted" scope="col">#</th>
                                                <th class="text-muted" scope="col">First</th>
                                                <th class="text-muted" scope="col">Last</th>
                                                <th class="text-muted" scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>