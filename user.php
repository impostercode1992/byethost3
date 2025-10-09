<?php include 'wc/header.html';?>
<?php include 'wc/navbar.html';?>
<div class="w3-content w3-center" onload="checkAuthAndLoadContent()">
    <h1>Welcome user! new world here!</h1>
    <div id="g_id_onload"
     data-client_id="53470530043-5gvhfeap2r8e2vjdjbjl82q22u75pq5k.apps.googleusercontent.com"
     data-login_uri="https://norsats.my"
     data-auto_select="true">
    </div>
</div>

<script>
 // Function to check for token and redirect if necessary
function checkAuthAndLoadContent() {
  const token = localStorage.getItem('authToken'); // Or retrieve from cookie

  if (token) {
    // Optionally, send token to backend for full validation
    // If valid, load protected content
    console.log("Token found and potentially valid. Loading protected content.");
    // Example: Show protected content div
    document.getElementById('protected-content').style.display = 'block';
  } else {
    console.log("No token found. Redirecting to login page.");
    // Example: Redirect to login page
    window.location.href = '/index.php';
  }
}
</script>
<?php include 'wc/footer.html';?>