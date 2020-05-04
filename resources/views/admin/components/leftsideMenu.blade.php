<!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Navigation</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="{{request()->is('/')? 'active-item':''}}"><a href="{{route('dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                                <!--Home-->
                                <li class="has-child-item {{request()->is('home/*') ? 'open-item active-item':''}} close-item">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Home</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('home/index','home/index/*') ? 'active-item':''}}"><a href="{{route('home.home')}}">Home</a></li>
                                        <li class="{{request()->is('home/create','home/create/*') ? 'active-item':''}}"><a href="{{route('home.create')}}">Create</a></li>
                                    </ul>
                                </li>
                                <!--Experience-->
                                <li class="has-child-item {{request()->is('experience/*') ? 'open-item active-item':''}} close-item">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Experience</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('experience/manage','experience/manage/*') ? 'active-item':''}}"><a href="{{route('experience.manage')}}">Manage</a></li>
                                        <li class="{{request()->is('experience/create','experience/create/*') ? 'active-item':''}}"><a href="{{route('experience.create')}}">Add Experience</a></li>
                                    </ul>
                                </li>
                                <!--Service-->
                                <li class="has-child-item {{request()->is('service/*') ? 'open-item active-item':''}} close-item">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Service</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('service/manage','service/manage/*') ? 'active-item':''}}"><a href="{{route('service.manage')}}">Manage</a></li>
                                        <li class="{{request()->is('service/create','service/create/*') ? 'active-item':''}}"><a href="{{route('service.create')}}">Add</a></li>
                                    </ul>
                                </li>
                                 <!--Service-->
                                 <li class="has-child-item {{request()->is('skill/*') ? 'open-item active-item':''}} close-item">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Skill</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('skill/manage','skill/manage/*') ? 'active-item':''}}"><a href="{{route('skill.manage')}}">Manage</a></li>
                                        <li class="{{request()->is('skill/create','skill/create/*') ? 'active-item':''}}"><a href="{{route('skill.create')}}">Add</a></li>
                                    </ul>
                                </li>
                                 <!--Project Category-->
                                 <li class="has-child-item {{request()->is('projectcategory/*') ? 'open-item active-item':''}} close-item">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Project Category</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('projectcategory/manage','projectcategory/manage/*') ? 'active-item':''}}"><a href="{{route('projectcategory.manage')}}">Manage</a></li>
                                        <li class="{{request()->is('projectcategory/create','projectcategory/create/*') ? 'active-item':''}}"><a href="{{route('projectcategory.create')}}">Add</a></li>
                                    </ul>
                                </li>
                                 <!--PortFolio-->
                                 <li class="has-child-item {{request()->is('portfolio/*') ? 'open-item active-item':''}} close-item">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Portfolio</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('portfolio/manage','portfolio/manage/*') ? 'active-item':''}}"><a href="{{route('portfolio.manage')}}">Manage</a></li>
                                        <li class="{{request()->is('portfolio/create','portfolio/create/*') ? 'active-item':''}}"><a href="{{route('portfolio.create')}}">Add</a></li>
                                    </ul>
                                </li>

                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>