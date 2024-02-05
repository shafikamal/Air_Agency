<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-info text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('index') }}">DASHBOARD</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

            @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->status == 'active')

                 <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                 </li>
                <li class="nav-item dropdown no-arrow" >
                    <a class="nav-link " role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">invoice</a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{route('ticketShow')}}">New ticket</a>
                        <a class="dropdown-item" href="">Money Receipt </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('statementShow')}}">Statement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post.html">flight date</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">transaction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark"  href="{{url('logout')}}">({{ Auth::user()->username }}) Logout</a>
                </li>

                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('loginShow')}}">login</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('registerShow')}}">register</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

