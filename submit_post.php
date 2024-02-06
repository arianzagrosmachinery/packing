<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["postContent"])) {
  $postContent = $_POST["postContent"];
  // Process the post content, for example, save it to a database
  echo "Post submitted: " . $postContent;
} else {
  // Handle invalid request
  echo "Invalid request";
}
?>
