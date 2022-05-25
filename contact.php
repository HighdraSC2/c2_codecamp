 <body>

<?php 
require_once("header.php");
?>
<main>
  <div class="wrapper">
      <div class="form-menu">
          <h2>Neem contact op</h1>
          
          <form action="backend/contactController.php" method="post">
            <form method="post" action="mailto:davey.smeekens23@outlook.com?SUBJECT=Reactie"> </form>  
            <input type="hidden" name="action" value="send">
            <div class="form-group">
              <label for="senderName">Naam</label>
              <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
              <label for="senderEmail">E-mailadres</label>
              <input type="text" name="email" id="email">
              <label for="senderEmail">
            </div>
            <div class="form-group">
              <label for="message">Uw bericht</label>
              <textarea name="message" cols="30" rows="10" id="message"></textarea>
            </div>
            <input type="radio" name="BerichtOnderwerp" value="Vraag" checked> Vraag
            <input type="radio" name="BerichtOnderwerp" value="Vraag"> Klacht
            <input type="radio" name="BerichtOnderwerp" value="Vraag"> Opmerking
            <input type="radio" name="BerichtOnderwerp" value="Vraag"> Anders
            <div class="form-group">
              <input type="submit" value="Verzend formulier">
            </div>

          </form>
      </div>
  </div>
</main>


<?php
require_once("footer.php");
?>