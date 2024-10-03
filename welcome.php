<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Title</title>

  <!-- Favicon links -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
  <link rel="manifest" href="favicons/site.webmanifest">

  <!-- Material Design Lite links -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>

  <!-- Simple header with scrollable tabs -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <form action="#">
        </form>
      </div>
    </header>
    <main class="mdl-layout__content">
      <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
        <div class="page-content">

          <!-- Insert PHP code here to display the name -->
          <h1>Welcome </h1>
          <?php
          if (isset($_POST['name'])) {
            // Sanitize the input to avoid XSS attacks
            $name = htmlspecialchars($_POST['name']);
            echo "<p>Hello, " . $name . "!</p>";
          } else {
            echo "<p>No name provided!</p>";
          }
          ?>

        </div>
      </section>
      <!-- Additional sections for other tabs -->
    </main>
  </div>

</body>

</html>