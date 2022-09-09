<button class="navbar-toggler btn btn-nav btn-yellow" type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
        <?php if(isset($_GET["action"]) && $_GET["action"] === "jobs"): ?>
        <li class="nav-item">
            <a href="?action=jobs" class="nav-link fs-5 fw-bold text-uppercase text-link disabled"><i
                    class="fa-solid fa-briefcase"></i> Jobs</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
            <a href="?action=jobs" class="nav-link fs-5 fw-bold text-uppercase text-link"><i
                    class="fa-solid fa-briefcase"></i> Jobs</a>
        </li>
        <?php endif; ?>
        <?php if(isset($_SESSION["id"])): ?>
        <?php if(isset($_GET["action"]) && $_GET["action"] === "calendar"): ?>
        <li class="nav-item">
            <a href="?action=calendar" class="nav-link fs-5 fw-bold text-uppercase text-link disabled"><i
                    class="fa-solid fa-calendar-days"></i> Agenda</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
            <a href="?action=calendar" class="nav-link fs-5 fw-bold text-uppercase text-link"><i
                    class="fa-solid fa-calendar-days"></i> Agenda</a>
        </li>
        <?php endif; ?>
        <?php if(isset($_GET["action"]) && $_GET["action"] === "myAccount"): ?>
        <li class="nav-item">
            <a href="?action=myAccount" class="nav-link fs-5 fw-bold text-uppercase text-link disabled"><i
                    class="fa-solid fa-gear"></i> Mon compte</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
            <a href="?action=myAccount" class="nav-link fs-5 fw-bold text-uppercase text-link"><i
                    class="fa-solid fa-gear"></i> Mon compte</a>
        </li>
        <?php endif; ?>
        <?php if(isset($_SESSION["privilege"]) && $_SESSION["privilege"] === "admin"): ?>
        <?php if(isset($_GET["action"]) && $_GET["action"] === "management"): ?>
        <li class="nav-item">
            <a href="?action=management" class="nav-link fs-5 fw-bold text-uppercase text-link disabled"><i
                    class="fa-solid fa-sliders"></i> Gestion</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
            <a href="?action=management" class="nav-link fs-5 fw-bold text-uppercase text-link"><i
                    class="fa-solid fa-sliders"></i> Gestion</a>
        </li>
        <?php endif; ?>
        <?php endif; ?>
        <li class="nav-item">
            <a href="?action=logout" class="nav-link fs-5 fw-bold text-uppercase text-link"><i
                    class="fa-solid fa-key"></i> Se déconnecter</a>
        </li>
        <?php else: ?>
        <?php if(isset($_GET["action"]) && $_GET["action"] === "authentification"): ?>
        <li class="nav-item">
            <a href="?action=authentification" class="nav-link fs-5 fw-bold text-uppercase text-link disabled"><i
                    class="fa-solid fa-key"></i>
                S'authentifier</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
            <a href="?action=authentification" class="nav-link fs-5 fw-bold text-uppercase text-link"><i
                    class="fa-solid fa-key"></i>
                S'authentifier</a>
        </li>
        <?php endif; ?>
        <?php endif; ?>
    </ul>
</div>