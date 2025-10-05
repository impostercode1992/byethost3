<?php include 'header.html';?>
        <!-- Navbar (sit on top) -->
        <div class="w3-margin-top w3-white w3-center" id="myNavbar">
        <div class="w3-half w3-hide-small">
            <a href="index.php" class="w3-bar-item w3-button">Norsats</a>
            <a href="#work" class="w3-bar-item w3-button">Work</a>
            <a href="portfolio.php" class="w3-bar-item w3-button">Team</a>
            <a href="https://blog.norsats.my" class="w3-bar-item w3-button">Blog</a>
            <a href="#pricing" class="w3-bar-item w3-button">Pricing</a>
        </div>
        <div class="w3-half w3-hide-small">
            <a id="g_id_onload" data-auto_prompt="false" data-callback="handleCredentialResponse" data-client_id="53470530043-5gvhfeap2r8e2vjdjbjl82q22u75pq5k.apps.googleusercontent.com" class="w3-bar-item w3-button g_id_signin" /><i class="fa fa-user-o"></i> Login</a> 
        </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
            </a>
        </div>
        </div>

        <!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="index.php" class="w3-bar-item w3-button">Norsats</a>
        <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">Work</a>
        <a href="portfolio.php" onclick="w3_close()" class="w3-bar-item w3-button">Team</a>
        <a href="https://blog.norsats.my" onclick="w3_close()" class="w3-bar-item w3-button">Blog</a>
        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">Pricing</a>
        <a id="g_id_onload" data-auto_prompt="false" data-callback="handleCredentialResponse" data-client_id="53470530043-5gvhfeap2r8e2vjdjbjl82q22u75pq5k.apps.googleusercontent.com" class="w3-bar-item w3-button g_id_signin" /><i class="fa fa-user-o"></i> Login</a> 
        </nav>

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1200;">
    <div class="w3-content" style="max-width:1000px;margin-top:12px">
      <!-- Pricing Section -->
      <div class="w3-row-padding" id="pricing">
          <div class="w3-center w3-padding-48">
            <h1><b>Choose Your Plan</b></h1>
            <p>Choose a pricing plan that fits your needs. Cancel anytime.</p>
          </div>

          <div class="w3-third w3-margin-bottom">
            <div class="w3-border w3-round-xlarge w3-hover-shadow w3-padding">
              <p class="w3-xlarge w3-center"><b>Basic</b>
              <p class="w3-xlarge w3-center"><b>$ 10</b><span class="w3-opacity w3-small">/mo</span></p>
              <p class="w3-left w3-padding-10">
                  <p><b>10GB</b> Storage</p>
                  <p><b>10</b> Emails</p>
                  <p><b>10</b> Domains</p>
                  <p><b>Endless</b> Support</p>
                  <p><b>Endless</b> Support</p>
                  <p><b>Endless</b> Support</p>
              <p class="w3-padding-16 w3-center"><button class="w3-button w3-black w3-round-xlarge w3-padding">Get Started</button></p>
              </p>
            </div>
          </div>

                <div class="w3-third w3-margin-bottom">
            <div class="w3-border w3-border-blue w3-round-xlarge w3-hover-shadow w3-padding">
              <p class="w3-xlarge w3-center"><b>Pro</b>
              <p class="w3-xlarge w3-center"><b>$ 25</b><span class="w3-opacity w3-small">/mo</span></p>
              <p class="w3-left w3-padding-10">
                  <p><b>10GB</b> Storage</p>
                  <p><b>10</b> Emails</p>
                  <p><b>10</b> Domains</p>
                  <p><b>Endless</b> Support</p>
                  <p><b>Endless</b> Support</p>
                  <p><b>Endless</b> Support</p>
              <p class="w3-padding-16 w3-center"><button class="w3-button w3-black w3-round-xlarge w3-padding">Get Started</button></p>
              </p>
            </div>
          </div>

              <div class="w3-third w3-margin-bottom">
            <div class="w3-border w3-round-xlarge w3-hover-shadow w3-padding">
              <p class="w3-xlarge w3-center"><b>Premium</b>
              <p class="w3-xlarge w3-center"><b>$ 50</b><span class="w3-opacity w3-small">/mo</span></p>
              <p class="w3-left w3-padding-10">
                  <p><b>10GB</b> Storage</p>
                  <p><b>10</b> Emails</p>
                  <p><b>10</b> Domains</p>
                  <p><b>Endless</b> Support</p>
                  <p><b>Endless</b> Support</p>
                  <p><b>Endless</b> Support</p>
              <p class="w3-padding-16 w3-center"><button class="w3-button w3-black w3-round-xlarge w3-padding">Get Started</button></p>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php include 'footer.html';?>