<html>
<nav class="navbar navbar-expand navbar-theme">
          <div class="container-fluid">
            <!--Nav - Logo-->
            <img src="./imageM3/fk-edusearch-logo.png" alt="imageM3" style="width: 35px; height: 35px;" >
            <!--Nav - Home (name) -->
            <a class="navbar-brand" href="#">FK-EDUSEARCH</a>&nbsp;
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!--Nav - Home -->
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="../Module2/M2-user_homepage.php">Home</a>
                </li>
              </ul>
            </div>
            
          <!--Nav - Notification -->
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav ms-auto mt-2">
              <li class="nav-item dropdown ms-lg-2">
                <a
                  class="nav-link dropdown-toggle position-relative"
                  href="#"
                  id="alertsDropdown"
                  data-bs-toggle="dropdown"
                >
                  <i class="align-middle fas fa-bell"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                  aria-labelledby="alertsDropdown"
                >
                  <div class="dropdown-menu-header">1 New Notifications</div>
                  <div class="list-group">
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i
                            class="ms-1 text-success fas fa-fw fa-bell-slash"
                          ></i>
                        </div>
                        <div class="col-10">
                          <div class="text-dark">New Notifications</div>
                          <div class="text-muted small mt-1">
                          <h2 class="card-title mb-0"> Developing an equivalent parallel computing system for comparison of optimization algorithms.</h2>
                          <p>I am working on a research project in which we are doing a comparative analysis of reinforcement learning (RL) with evolutionary algorithms in solving a nonconvex and nondifferentiable optimization problem with respect....</p>
                          </div>
                          <div class="text-muted small mt-1">4h ago</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-menu-footer">
                    <a href="./Inbox.php" class="text-muted">Show all notifications</a>
                  </div>
                </div>
              </li>
              <div class="row mt-3 mx-2">
                <div class="col-sm-4">
                <img src="./imageM3/profilecirclenew.png" alt="imageM3" style="width: 35px; height: 35px;" >
                </div>
                <div class="col-sm-8">
                      <h6 class="mb-0" style="color: #fff;">Dr.Muaz bin Rizal</h6>
                      <p style="color: #BBE3E5;">Expert</p>
                </div>
              </div>

              <!--Nav - Dropdown Setting -->
              <li class="nav-item dropdown ms-lg-2">
                <a
                  class="nav-link dropdown-toggle position-relative"
                  href="#"
                  id="userDropdown"
                  data-bs-toggle="dropdown"
                >
                  <i class="align-middle fas fa-cog"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item"></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="./ExpProfile.php"
                    ><i class="align-middle me-1 fas fa-fw fa-user"></i>
                    Profile</a
                  >
                  <a class="dropdown-item" href="./Report.php"
                    ><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Report </a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../Module1/logout-expert.php"
                    ><i
                      class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"
                    ></i>
                    Sign out</a
                  >
                </div>
              </li>
            </ul>
          </div>
          </div>

        </nav>
</html>