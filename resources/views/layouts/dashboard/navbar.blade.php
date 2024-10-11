<div class="admin-panel-sidebar">
    <div class="text-center">
        <img src="{{asset('assets/images/carnival-logo.png')}}" alt="logo" class="carnival-logo">
    </div>
    

    <div class="h-500 custom-scroll ">
        <ul class="btn-sidebar-list d-flex justify-content-center flex-column">
        <li>
            <a href="{{ route('dashboard.index') }}" class="btn btn-navbar text-start">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('industries.index') }}" class="btn btn-navbar text-start active">Industries</a>
        </li>
        <li>
            <a  href="{{ route('broadcasting.index') }}" class="btn btn-navbar text-start">Broadcasting</a>
        </li>
        <li>
            <a href="{{ route(name: 'terminal.index') }}" class="btn btn-navbar text-start">Terminal</a>
        </li>
        <li>
            <a href="{{ route('customer-care.index') }}" class="btn btn-navbar text-start">Customer Care</a>
        </li>
        <li>
            <a href="{{ route('clients.index') }}" class="btn btn-navbar text-start">Clients</a>
        </li>
        <li>
            <a href="{{ route('job-tracking.index') }}" class="btn btn-navbar text-start">Job Tracking</a>
        </li>
        <li>
            <a href="{{ route('customer-service.index') }}" class="btn btn-navbar text-start">Customer Service</a>
        </li>
        <li>
            <a href="{{ route('geo-tracking.index') }}" class="btn btn-navbar text-start">Geo Tracking</a>
        </li>
        <li>
            <a href="{{ route('job-seeker.index') }}" class="btn btn-navbar text-start">Job Seeker</a>
        </li>
        <li>
            <a href="{{ route('sent-contracts.index') }}" class="btn btn-navbar text-start">Sent Contracts</a>
        </li>
        <li>
            <a href="{{ route('sound-manager.index') }}" class="btn btn-navbar text-start">Sound Manager</a>
        </li>
        <li>
            <a href="{{ route('support.index') }}" class="btn btn-navbar text-start">Support</a>
        </li>
        <li>
            <a href="{{ route(name: 'terms-conditions.index') }}" class="btn btn-navbar text-start">Terms & Conditions</a>
        </li>
    </ul>
    </div>
    
</div>

