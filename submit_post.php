<!DOCTYPE html>
<html>
<head>
  <title>Submit Post</title>
  <script>
    function submitForm() {
      var postContent = document.getElementById("postContent").value;
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "", true); // Use the current URL as the endpoint
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Handle the response from the server if needed
          console.log(xhr.responseText);
        }
      };
      xhr.send("postContent=" + postContent);
    }
  </script>
</head>
<body>

<form method="post">
  <input type="text" id="postContent" name="postContent" placeholder="Type your post here">
  <input type="button" value="Submit" onclick="submitForm()">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["postContent"])) {
  $postContent = $_POST["postContent"];
  // Process the post content, for example, save it to a database
  echo "Post submitted: " . $postContent;
} else {
  // Handle initial form load
}
?>

</body>
</html>
