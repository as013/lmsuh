<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">Bootstrap Admin Template </a>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> 
                            <?php 
                                if($profile){
                                    echo ucwords(strtolower($profile->nm_dosen));
                                }
                            ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php
                                    echo anchor(
                                        'dosen/profile', 
                                        'Profile'
                                    );
                                ?>
                            </li>
                            <li>
                                <?php
                                    echo anchor(
                                        'logout', 
                                        'Logout'
                                    );
                                ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        <!--/.nav-collapse --> 
        </div>
    <!-- /container --> 
    </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->