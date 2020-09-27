            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="{{asset('images/profile.jpg')}}" alt="" class="rounded-circle" />
                        <p><strong>Abdullah</strong></p>
                        <span class="text-primary small"><strong>Designer/Programmer</strong></span>
                    </div>
                    <!--Image Avatar-->
                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="/admin/dashboard"  class=""><i class="fa fa-th-large mr-3"> </i>
                                    <span class="none">Dashboard </span>
                                </a>
                            </li>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('editors'); return false" class=""><i class="fas fa-user-secret mr-3"></i>
                                    <span class="none">Cleints <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="editors">
                                    <li class="child"><a href="/clients/Create" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Add Client</a></li>
                                    <li class="child"><a href="/Clients/Clients" class="ml-4"><i class="fa fa-angle-right mr-2"></i> View Clients</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ul_element'); return false" class=""><i class="fas fa-credit-card mr-3"></i>
                                    <span class="none">Savings <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ul_element">
                                    <li class="child"><a href="/savings" class="ml-4"><i class="fa fa-angle-right mr-2"></i> View Savings Accounts</a></li>
                                    <li class="child"><a href="/savings/create" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Add Savings Account</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fa fa-angle-right mr-2"></i> View Savings Transactions</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Transfer Savings</a></li>
                                    <li class="child"><a href="/category" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Manage Savings Category</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('form_element'); return false" class=""><i class="fas fa-users mr-3"></i>
                                    <span class="none">Users <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="form_element">
                                    <li class="child"><a href="/role/create" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Add Role</a></li>
                                    <li class="child"><a href="/roles" class="ml-4"><i class="fa fa-angle-right mr-2"></i> View & Manage roles</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->