<div class="row">
    <div class="col-xs-12 col-sm-6 col-lg-4"></div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <?php 
        // $footer ve $version de ^=i ^=kenlerinin var olup olmad   ^=  n   kontrol edin
        if (isset($footer) && isset($version) && is_array($version)) {
            echo htmlspecialchars($footer) . " :: version " . implode(".", $version) . " :: ";
        } else {
            echo "Footer or version info is missing";
        }

        // $User ve $User->user nesnelerinin var olup olmad   ^=  n   kontrol edin
        if (isset($User) && isset($User->user) && isset($User->user->real_name)) {
            echo "<a href='app/settings/user-self-edit.php' class='load-modal'>" . htmlspecialchars($User->user->real_name) . "</a>";
        } else {
            echo "<a href='app/settings/user-self-edit.php' class='load-modal'>User name not available</a>";
        }
        ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-lg-4">
        <?php 
        if (isset($User) && isset($User->user) && $User->user->reload_page != 0 && $_GET['app'] !== "settings" && $_GET['app'] !== "live") { ?>
        <div class="pbar">
            <span class="pbar_text">Page will reload in <span class='pbar_percentage'><?php echo htmlspecialchars($User->user->reload_page); ?></span> s <i class=>
            <div class="progress-bar progress-bar-gray" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
            0%
            </div>
            <div class="hidden progress-bar-reload"><?php echo htmlspecialchars($User->user->reload_page); ?></div>
        </div>
        <?php } ?>
    </div>
</div>

