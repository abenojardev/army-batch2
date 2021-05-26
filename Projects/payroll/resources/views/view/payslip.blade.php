@php $active = 'payslip' @endphp
@extends('layouts.main')
@section('title', 'View Payslip')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <!-- copy this -->
            <!-- paste below col-12 on your code  -->
            <div class="payslip-card">
                <div class="company-info">
                    <div class="info">
                        <p> <b>Philippine Army - Signal Regiment</b>
                            <br> <small>Taguig City, Metro Manila</small>
                            <br> <small><i>(02) 999 9999</i></small> </p>
                    </div>
                    <div class="logo"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Philippine_Army_Seal.svg/1200px-Philippine_Army_Seal.svg.png"> </div>
                </div>
                <div class="employee-info">
                    <div class="left">
                        <table>
                            <tr>
                                <td class="info head">Employee ID</td>
                                <td class="value">PHASR-2021000001</td>
                            </tr>
                            <tr>
                                <td class="info head">Fullname</td>
                                <td class="value">Cresse Kenneth Batan Abenojar</td>
                            </tr>
                            <tr>
                                <td class="info head">Address</td>
                                <td class="value">Unit B, Cornerstone Residences, Concepcion DOs, Marikina Heights, Marikina City</td>
                            </tr>
                            <tr>
                                <td class="info head">Contact</td>
                                <td class="value">09561839304</td>
                            </tr>
                            <tr>
                                <td class="info head">Department</td>
                                <td class="value">1</td>
                            </tr>
                        </table>
                    </div>
                    <div class="right">
                        <table>
                            <tr>
                                <td class="info head">Designation</td>
                                <td class="value">Senior Software Developer</td>
                            </tr>
                            <tr>
                                <td class="info head">TAX</td>
                                <td class="value">TAX7</td>
                            </tr>
                            <tr>
                                <td class="info head">SSS</td>
                                <td class="value">SSS5</td>
                            </tr>
                            <tr>
                                <td class="info head">PHILHEALTH</td>
                                <td class="value">PH6</td>
                            </tr>
                            <tr>
                                <td class="info head">PAGIBIG</td>
                                <td class="value">PGBG4</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="summary-info">
                    <div class="card"> <span class="title">Mandatory Deductions</span>
                        <div class="data">
                            <div class="meta">SSS</div>
                            <div class="value">P 1,163.00</div>
                        </div>
                        <div class="data">
                            <div class="meta">Philhealth</div>
                            <div class="value">P 337.50</div>
                        </div>
                        <div class="data">
                            <div class="meta">Pagibig</div>
                            <div class="value">P 200.00</div>
                        </div>
                        <div class="data">
                            <div class="meta">Tax</div>
                            <div class="value">P 5.00</div>
                        </div>
                        <div class="data">
                            <div class="meta">-</div>
                            <div class="value">-</div>
                        </div>
                        <div class="total">
                            <div class="meta"><b>Total</b></div>
                            <div class="value">P 1,705.50</div>
                        </div>
                    </div>
                    <div class="card"> <span class="title">Loan Deductions</span>
                        <div class="data">
                            <div class="meta">Loan Type</div>
                            <div class="value">-</div>
                        </div>
                        <div class="data">
                            <div class="meta">Total</div>
                            <div class="value">-</div>
                        </div>
                        <div class="data">
                            <div class="meta">Monthly</div>
                            <div class="value">-</div>
                        </div>
                        <div class="data">
                            <div class="meta">Balance</div>
                            <div class="value">-</div>
                        </div>
                        <div class="data">
                            <div class="meta">Deduction</div>
                            <div class="value">-</div>
                        </div>
                        <div class="total">
                            <div class="meta"><b>Total</b></div>
                            <div class="value">-</div>
                        </div>
                    </div>
                    <div class="card"> <span class="title">Rate</span>
                        <div class="data">
                            <div class="meta">Basic Rate</div>
                            <div class="value">P 6,000.50</div>
                        </div>
                        <div class="data">
                            <div class="meta">Regular Hours</div>
                            <div class="value"> -8 Hrs</div>
                        </div>
                        <div class="data">
                            <div class="meta">OT Hours</div>
                            <div class="value"> 0 Hrs</div>
                        </div>
                        <div class="data">
                            <div class="meta">Night Diff Hours</div>
                            <div class="value"> 0 Hrs</div>
                        </div>
                        <div class="data">
                            <div class="meta">Total Hours</div>
                            <div class="value"><b>-8 Hrs</b></div>
                        </div>
                        <div class="total">
                            <div class="meta"><b>Total</b></div>
                            <div class="value">P -6,000.50</div>
                        </div>
                    </div>
                    <div class="card"> <span class="title">Earnings</span>
                        <div class="data">
                            <div class="meta">Gross Earnings</div>
                            <div class="value">P -6,000.50</div>
                        </div>
                        <div class="data">
                            <div class="meta">Mandatory Deductions</div>
                            <div class="value">P 1,705.50</div>
                        </div>
                        <div class="data">
                            <div class="meta">Loan Deductions</div>
                            <div class="value">P 0.00</div>
                        </div>
                        <div class="data">
                            <div class="meta">-</div>
                            <div class="value">-</div>
                        </div>
                        <div class="total">
                            <div class="meta"><b>Total Profit</b></div>
                            <div class="value overall">P -7,706.00</div>
                        </div>
                    </div>
                </div>
                <div class="payroll-summary">
                    <p> <b>Payroll ID : <small class="val">2021000029</small></b>
                        <p class="right"> <b>Date issued : <small class="val">Feb 12, 2021</small></b> </p>
                    </p>
                    <p> <b>Cut-off : <small class="val">Feb 12, 2021 - Feb 13, 2021</small></b> </p>
                </div>
            </div>

            <!-- up to this-->
        </div> 
    </div>

    <!-- copy this-->
    <style type="text/css"> 
        .payslip-card{width: 100%; float: left; padding: 2%;}
        .payslip-card .company-info{width: 100%; float: left; border-bottom: 1px solid #333; padding-bottom: 2%;}
        .payslip-card .company-info .logo{width: 10%; float: left;}
        .payslip-card .company-info .logo img{width: 70%; float: right;}
        .payslip-card .company-info .info{width: 90%; float: left;}
        .payslip-card .company-info .info p b{font-size: 1.2em !important;}
        .payslip-card .employee-info{width: 100%; float: left; padding: 0%; border-left: 1px solid #333; border-right: 1px solid #333; border-bottom: 1px solid #333;}
        .payslip-card .employee-info .left{width: 50%; float: left; border-right: 1px solid #333;}
        .payslip-card .employee-info .right{width: 50%; float: left;}
        .payslip-card .employee-info .left table{width:100%;}
        .payslip-card .employee-info .right table{width:100%;}
        .payslip-card .employee-info .right table tr .head{font-weight: bolder;}
        .payslip-card .employee-info .left table tr td{font-size: 0.7em;}
        .payslip-card .employee-info .right table tr td{font-size: 0.7em;}
        .payslip-card .employee-info .right table tr .info{width: 40%;}
        .payslip-card .employee-info .right table tr .value{width: 60%;}
        .payslip-card .employee-info .left table tr .info{width: 30%;}
        .payslip-card .employee-info .left table tr .value{width: 70%;}
        .overall{font-size: 1.5em !important;}
        .payslip-card{border-bottom: 1px solid #333;}
        .payslip-card .payroll-summary{width: 100%; float: left;}
        .payslip-card .payroll-summary .right{float:right; font-size: 0.8em;}
        .payslip-card .payroll-summary p{font-size: 0.8em;}
        .payslip-card .payroll-summary p b .val{border-bottom: 1px solid #333; width:}
        .payslip-card .summary-info{width: 100%; float: left; border-right: 1px solid #333;border-left: 1px solid #333;border-bottom: 1px solid #333;}
        .payslip-card .summary-info .card{height:9em; padding:0.2%; width: 25%; float: left; background-color: xred; border-right: 1px solid #333;}
        .payslip-card .summary-info .card .title{font-weight: bolder;}
        .payslip-card .summary-info .card .data{width: 100%; float: left;}
        .payslip-card .summary-info .card .data .meta{width: 50%; float: left; text-align: left; font-size: 0.7em; font-weight: bolder;}
        .payslip-card .summary-info .card .data .value{width: 50%; float: left; text-align: right; font-size: 0.7em;}
        .payslip-card .summary-info .card .total{width: 100%; float: left; border-top: 1px solid #333;}
        .payslip-card .summary-info .card .total .meta{width: 50%; float: left; text-align: left; font-size: 0.7em; font-weight: bolder;}
        .payslip-card .summary-info .card .total .value{width: 50%; float: left; text-align: right; font-size: 0.8em; color: red;}

        @media  print{
            .c-navbar{display: none;}
        }
    </style>
    <!-- up to this-->
@endsection