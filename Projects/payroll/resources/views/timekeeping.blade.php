@php $active = 'timekeeping' @endphp
@extends('layouts.main')
@section('title', 'Layout test')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 
                <div class="payslip-card">
	<div class="company-info">
		<div class="info">
			<p> <b>CYAN Management Corporation</b>
				<br> <small>8th Floor, DPC Place Building, 2322, Chino Roces Avenue, Makati, 1200 Metro Manila</small>
				<br> <small><i>(02) 889 8862</i></small> </p>
		</div>
		<div class="logo"> <img src="https://xsodia.space/payroll/assets/icon.png"> </div>
	</div>
	<div class="employee-info">
		<div class="left">
			<table>
				<tr>
					<td class="info head">Employee ID</td>
					<td class="value">CYAN2018000001</td>
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
                </div>
            </div>
        </div> 
    </div>
@endsection