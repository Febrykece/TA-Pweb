 <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="materialize.min.js"></script>
      <style type="text/css">
        .file {
          text-align: center;
          margin-top: 60px;
          padding-left: 500px;
        }
      </style>
    </head>

    <body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Web Developer Portofolio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="tuliskeahlian.php">Tulis Keahlian</a></li>
        <li><a href="uploadkarya.php">Penampilan Karya</a></li>
      </ul>
    </div>
  </nav>
   <div class="row">
    <form action="index.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input id="keahlian1" type="text" name="keahlian1" class="validate" autocomplete="off" autofocus="on">
          <label for="keahlian1">Keahlihan 1 </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="keahlian2" type="text" name="keahlian2" class="validate" autocomplete="off">
          <label for="keahlian2">Keahlihan 2 </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="keahlian3" type="text" name="keahlian3" class="validate" autocomplete="off">
          <label for="keahlian3">Keahlihan 3</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12 file">
          Upload Karya  <span> </span><input type="file" name="upload">
        </div>
      </div>
       <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>


        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://instagram.com/febryaaan_" target="_blank">febryan</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://instagram.com/febryaaan_" target="_blank">febryan</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://instagram.com/febryaaan_" target="_blank">febryan</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://instagram.com/febryaaan_" target="_blank">febryan</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright Febryan
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        
    </body>
  </html>