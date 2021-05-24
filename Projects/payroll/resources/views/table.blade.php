<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="bg-light">
 
    <div class="container pt-5">
        <h3>Teacher</h3>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>