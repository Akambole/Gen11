<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                Bank Accounts 
            </title>
            <link href="{{ asset('dist/css/main.css') }}" rel="stylesheet">
                <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
                </link>
            </link>
            <link rel="stylesheet" type="text/css" href="css/showAccounts.css">
        </meta>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-dark bg-primary">
                <button aria-controls="navbar-header" class="navbar-toggler hidden-sm-up" data-target="#navbar-header" data-toggle="collapse" type="button">
                    ☰
                </button>
                <div class="collapse navbar-toggleable-xs" id="navbar-header">
                    <a class="navbar-brand" href="{{route('accounts.show')}}">
                        Bank Accounts App
                    </a>
                </div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </nav>
            <!-- /navbar -->
            <!--main content-->
              @yield('main')
            <!-- /container -->
            <script src="{{ asset('dist/js/jquery3.min.js') }}">
            </script>
            <script src="{{ asset('dist/js/bootstrap.js') }}">
            </script>
        </div>
    </body>
</html>
