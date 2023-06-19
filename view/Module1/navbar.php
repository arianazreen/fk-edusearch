<html>
    <nav id="sidebar" class="sidebar">
        <div class="sidebar-content">
            <div class="sidebar-user">
                <img src="../../dist/img/logo/fk-edusearch-border.png" alt="FK-EduSearch Logo" />
                <div class="fw-bold">FK-EDUSEARCH</div>
            </div>
        
            <ul class="sidebar-nav">
                <div class="dropdown-divider" style="background-color: #4b5c96;"></div>
                <!-- REPORT -->
                <li class="sidebar-item">
                    <a data-bs-target="#report" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle me-2 fas fa-fw fa-file-contract"></i> <span class="align-middle">Report</span>
                    </a>
                    <ul id="report" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="../Module4/user-activity.php">User Activity</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="../Module1/system-performance.php">System Performance</a></li>
                    </ul>
                </li>
                <!-- MANAGE USER PROFILE -->
                <li class="sidebar-item">
                    <a data-bs-target="#manageuser" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle me-2 fas fa-fw fa-users-cog"></i> <span class="align-middle">Manage User Profile</span>
                    </a>
                    <ul id="manageuser" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="../Module1/manage-genUser.php">General User</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="../Module1/manage-expert.php">Expert</a></li>
                    </ul>
                </li>
                <!-- MANAGE COMPLAINT -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../Module4/manage-complaint.php">
                        <i class="align-middle me-1 fas fa-fw fa-comments"></i> <span class="align-middle">Manage Complaint</span>
                    </a>
                </li>
                <!-- VALIDATE USER -->
                <li class="sidebar-item">
                    <a data-bs-target="#validate" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle me-2 fas fa-fw fa-bell"></i> <span class="align-middle">Validate</span>
                    </a>
                    <ul id="validate" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="../Module1/validate-posts.php">General User Posts</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="../Module1/validate-genUserProfile.php">General User Profile</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="../Module1/validate-expertProfile.php">Expert Profile</a></li>
                    </ul>
                </li>
                <!-- <div class="dropdown-divider" style="background-color: #4b5c96;"></div> -->
                <!-- LOG OUT -->
                <li class="sidebar-item" style="position: absolute; bottom: 10px;">
                    <a class="sidebar-link" href="../Module1/logout-admin.php">
                        <i class="align-middle me-2 fas fa-fw fa-sign-out-alt"></i> <span class="align-middle">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</html>