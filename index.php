<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <title>Advice generator</title>
  </head>
  <body>
    
    <h1>Advice Generator</h1>

    <div class="container">
      <div class="card">
        <div class="circle">
          <h2 id="adviceNumber">01</h2>
        </div>
        <div class="content">
          <p id="advice"></p>
          <a onclick="window.location.reload();">
          <i class="bi bi-shuffle"></i></a>
        </div>
      </div>
    </div>
  </body>

  <script src="api.js" type="text/javascript"></script>
</html>
