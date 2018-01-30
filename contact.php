<!DOCTYPE html>
   <html>
<?php require "head.php"; ?>
    <body>
<?php require "nav.php"; ?>
<body class="bodyform">
  <main class="formback"style="margin-left : auto; margin-right : auto; width : 700px;">
   <div class="col">
    <form class="col s12">
      <div class="col">
        <div class="input-field col s6"style="width:600px;">
          <input id="nom" type="text" class="validate">
          <label for="first_name">NOM</label>
        </div>
        <div class="input-field col s6"style="width:600px;">
          <input id="prenom" type="text" class="validate">
          <label for="last_name">PRÉNOM</label>
        </div>
      </div>
      <div class="col">
        <div class="input-field col s6"style="width:600px;">
          <input id="tel" type="number" class="validate">
          <label for="number">TÉLÉPHONE</label>
        </div>
      </div>
      <div class="col">
        <div class="input-field col s6"style="width:600px;">
          <input id="email" type="email" class="validate">
          <label for="email">EMAIL</label>
        </div>
      </div>
      </div>
    </form>
  </div>
 </main>
</body>
<?php require "jslink.php"; ?>
    </body>
<?php require "footer.php"; ?>
  </html>
