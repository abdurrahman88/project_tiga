<?php
	$url = pathinfo(basename($_SERVER['SCRIPT_NAME']), PATHINFO_FILENAME);
?>
<li class="header">MAIN NAVIGATION</li>
        <li <?= ($url == 'home') ? 'class="active"':''?>>
          <a href="home.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li <?= ($url == 'santri' || $url == 'santri_edit' || $url == 'santri_tambah') ? 'class="active"':''?>>
          <a href="santri.php">
            <i class="fa fa-users"></i> <span>Santri</span>
          </a>
        </li>
        <li <?= ($url == 'user' || $url == 'user_edit' || $url == 'user_tambah') ? 'class="active"':''?>>
          <a href="user.php">
            <i class="fa fa-users"></i> <span>User</span>
          </a>
        </li>