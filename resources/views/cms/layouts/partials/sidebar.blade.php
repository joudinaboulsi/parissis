 <?php $url = Request::path(); ?>

 <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img style="width:100%;" alt="image" src="images/logo-dark.png" />
                         </span><br><br>
                    <a data-toggle="dropdown" class="dropdown-toggle">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Parissis Admin</strong>
                         </span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <!-- <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li> -->
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    PP
                </div>   
            </li>
            <li class="{{ ( ($url == 'projects-management')  ) ? 'active' : '' }} ">
                <a href="{{ route('cms_projects') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Projects</span></a>
            </li> 
            <li class="{{ ( ($url == 'news-management')  ) ? 'active' : '' }} ">
                <a href="{{ route('cms_news') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">News</span></a>
            </li> 
            <li class="{{ ( ($url == 'cms/partner')  ) ? 'active' : '' }} ">
                <a href="{{ route('partner_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Partner</span></a>
            </li> 

       

            <li>
                <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Home Page</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">

                    <li class="{{ ( ($url == 'cms/home-page')  ) ? 'active' : '' }} ">
                        <a href="{{ route('home_page_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Content Home Page </span></a>
                    </li>
                    <li class="{{ ( ($url == 'cms/sliders')  ) ? 'active' : '' }} ">
                        <a href="{{ route('sliders_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Sliders</span></a>
                    </li>
                    <li class="{{ ( ($url == 'cms/clients')  ) ? 'active' : '' }} ">
                        <a href="{{ route('clients_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Clients</span></a>
                    </li>
                   
                </ul>
            </li> 

            <li>
                <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Company Page</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">

                    <li class="{{ ( ($url == 'cms/company-page')  ) ? 'active' : '' }} ">
                        <a href="{{ route('company_page_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Content Company Page </span></a>
                    </li>
                    <li class="{{ ( ($url == 'cms/company-section')  ) ? 'active' : '' }} ">
                        <a href="{{ route('company_section_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Company Section</span></a>
                    </li>
              
                   
                </ul>
            </li> 


            <li>
                <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Service Page</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ ( ($url == 'cms/service-page')  ) ? 'active' : '' }} ">
                        <a href="{{ route('service_page_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Service Content</span></a>
                    </li>

                    <li class="{{ ( ($url == 'cms/services')  ) ? 'active' : '' }} ">
                        <a href="{{ route('services_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Services</span></a>
                    </li>
                   
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Team Page</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ ( ($url == 'cms/team')  ) ? 'active' : '' }} ">
                        <a href="{{ route('team_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Team</span></a>
                    </li>
                    <li class="{{ ( ($url == 'cms/our-values')  ) ? 'active' : '' }} ">
                        <a href="{{ route('our_values_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Our Values Section</span></a>
                    </li>
                </ul>
            </li>    

            <li class="{{ ( ($url == 'cms/contact-page')  ) ? 'active' : '' }} ">
                <a href="{{ route('contact_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Contact</span></a>
            </li>
            <li class="{{ ( ($url == 'cms/career')  ) ? 'active' : '' }} ">
                <a href="{{ route('careers_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Careers</span></a>
            </li> 

            <li class="{{ ( ($url == 'cms/seo')  ) ? 'active' : '' }} ">
                <a href="{{ route('seoCms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Seo</span></a>
            </li> 
            <li class="{{ ( ($url == 'cms/settings')  ) ? 'active' : '' }} ">
                <a href="{{ route('settings_cms') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Settings</span></a>
            </li> 
        </ul>

    </div>
</nav>
