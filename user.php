<?php include 'wc/header.html';?>
<?php include 'wc/navbar.html';?>
<div class="w3-content w3-center" onload="checkAuthAndLoadContent()">
    <h1>Welcome user! new world here!</h1>
    <div id="g_id_onload"
     data-client_id="YOUR_GOOGLE_CLIENT_ID"
     data-login_uri="https://norsats.my"
     data-auto_select="true">
    </div>
</div>

<script src="ga.js"></script>
<?php include 'wc/footer.html';?>