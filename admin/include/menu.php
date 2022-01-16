<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-1">
    <a class="navbar-brand" href="dashboard.php">Dashborad</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Category info
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="add_category.php">Add Catogory</a>
                    <a class="dropdown-item" href="#"></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="manage_category.php">Manage Category</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Blog Info
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="add_blog.php">Add Blog</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="manage_blog.php">Manage Blog</a>
                </div>
            </li>
        </ul>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['user_name']; ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Change Password</a>
                <a class="dropdown-item text-warning" href="?logout=true">Logout</a>
            </div>
        </div>
    </div>
</nav>
