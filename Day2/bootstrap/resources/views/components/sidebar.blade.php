<div class="sidebar bg-dxark d-flex flex-column flex-shrink-0 p-3 bg-light">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a class="nav-link @if($active == 'department') active @endif"  href="/departments"aria-current="page"> 
                <i class="fa fa-building"></i>
                Department
            </a>
        </li>  
        <li class="nav-item">
            <a href="/employees" class="nav-link @if($active == 'employees') active @endif" aria-current="page"> 
                <i class="fa fa-users"></i>
                Employees
            </a>
        </li>  
        <li class="nav-item">
            <a href="/leaves" class="nav-link @if($active == 'leaves') active @endif" aria-current="page"> 
                <i class="fa fa-user"></i>
                Leaves
            </a>
        </li>  
        <li class="nav-item">
            <a href="/loans" class="nav-link @if($active == 'loans') active @endif" aria-current="page"> 
                <i class="fa fa-money"></i>
                Loans
            </a>
        </li>  
        <li class="nav-item">
            <a href="/mandatory-deductions" class="nav-link @if($active == 'mandatorydeductions') active @endif" aria-current="page"> 
                <i class="fa fa-calculator"></i>
                Mandatory Deductions
            </a>
        </li>  
        <li class="nav-item">
            <a href="/payslips" class="nav-link @if($active == 'payslip') active @endif" aria-current="page"> 
                <i class="fa fa-file"></i>
                Payslip
            </a>
        </li>  
        <li class="nav-item">
            <a href="/timekeeping" class="nav-link @if($active == 'timekeeping') active @endif" aria-current="page"> 
                <i class="fa fa-calendar"></i>
                Timekeeping
            </a>
        </li>  
    </ul>
</div>