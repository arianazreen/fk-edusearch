<html>
<nav class="navbar navbar-expand navbar-theme">

    <div class="container-fluid">
        <div class="sidebar-user">
            <img src="../../dist/img/logo/fk-edusearch-border.png" alt="FK-EduSearch Logo" />
        </div>
        <a class="navbar-brand" href=#>FK-EDUSEARCH</a>&nbsp;
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="../Module2/M2-user_homepage.php">Home</a>
                </li>
                <li class="nav-item dropdown ms-lg-2">
                    <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">My Questions</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item"></a>
                        <a class="dropdown-item" href="../Module2/M2-my_questions.php">My Questions</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../Module2/M2-feedback_form.php">System Performances Feedback Form</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../Module2/M2-vulnerability.php">Vulnerability Form</a>
                    </div>
                </li>
                <li class="nav-item dropdown ms-lg-2">
                    <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">Complain</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item"></a>
                        <a class="dropdown-item" href="../Module5/create.php">New Application</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../Module5/main.php">History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../Module5/report.php">Report</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown ms-lg-2">
                <a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                    <i class="align-middle fas fa-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                    <div class="dropdown-menu-header">
                        4 New Notifications
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="ms-1 text-success fas fa-fw fa-bell-slash"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">New connection</div>
                                    <div class="text-muted small mt-1">Anna accepted your request.</div>
                                    <div class="text-muted small mt-1">12h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="#" class="text-muted">Show all notifications</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown ms-lg-2">
                <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
                    <i class="align-middle fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <a class="dropdown-item"></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../Module2/M2-manage-user-profile.php"><i class="align-middle me-1 fas fa-fw fa-user"></i> My Profile</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Account Setting</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../Module1/logout-genUser.php"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

</html>