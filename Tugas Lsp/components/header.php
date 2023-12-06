<?php 
require_once "./functions.php";

if (isset($_POST["logout"])) {
    logout();
}
?>

<nav class="navbar">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="">Pandu | XII PPLG B</a>
                    </li>
                    <li class="nav-item">
                        <a href="">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <form method="post">
                            <button id="logout" name="logout">Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>