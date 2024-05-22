@extends('layouts.S_plantilla')

@section('content')
    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <i style=" 
                                color: white;
                                padding: 8px 15px;
                                text-decoration: none;
                                font-size: 20px;
                                border: 2px solid white;
                                border-radius: 5px;"
                                class="zmdi zmdi-power"></i>
                        </x-dropdown-link>
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">
                <h1 class="text-titles">System <small>Tiles</small></h1>
            </div>
        </div>
        <div class="full-box text-center" style="padding: 30px 10px;">
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    Admin
                </div>
                <div class="full-box tile-icon text-center">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">7</p>
                    <small>Register</small>
                </div>
            </article>
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    Teacher
                </div>
                <div class="full-box tile-icon text-center">
                    <i class="zmdi zmdi-male-alt"></i>
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">10</p>
                    <small>Register</small>
                </div>
            </article>
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    Student
                </div>
                <div class="full-box tile-icon text-center">
                    <i class="zmdi zmdi-face"></i>
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">70</p>
                    <small>Register</small>
                </div>
            </article>
        </div>
        <div class="container-fluid">
            <div class="page-header">
                <h1 class="text-titles">System <small>TimeLine</small></h1>
            </div>
            <section id="cd-timeline" class="cd-container">
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="{{ asset('S_assets/avatars/StudetMaleAvatar.png') }}" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        <h4 class="text-center text-titles">1 - Name (Admin)</h4>
                        <p class="text-center">
                            <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp;
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                        </p>
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                    </div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="{{ asset('S_assets/avatars/StudetMaleAvatar.png') }}" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        <h4 class="text-center text-titles">2 - Name (Teacher)</h4>
                        <p class="text-center">
                            <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp;
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                        </p>
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                    </div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="{{ asset('S_assets/avatars/StudetMaleAvatar.png') }}" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        <h4 class="text-center text-titles">3 - Name (Student)</h4>
                        <p class="text-center">
                            <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp;
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                        </p>
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                    </div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="{{ asset('S_assets/avatars/StudetMaleAvatar.png') }}" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        <h4 class="text-center text-titles">4 - Name (Personal Ad.)</h4>
                        <p class="text-center">
                            <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp;
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                        </p>
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                    </div>
                </div>
            </section>


        </div>
    </section>
@endsection()
