<?php include 'wc/header.html';?>
  <div class="w3-margin-top w3-container w3-center" id="myNavbar">
        <div class="w3-half w3-hide-small">
            <?php include 'wc/navbar.html';?></div>
            <div class="w3-half w3-hide-small">
            <?php include 'login.html'; ?></div>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-left w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
            </a>
        </div>
        <!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <?php include 'wc/navbar.html';?>
        </nav>
    <div class="w3-content">
    <?php include 'work.html';?>
    </div>
<?php include 'wc/footer.html';?>