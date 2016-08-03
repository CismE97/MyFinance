<!-- Modal Register -->
<div id="ModalRegister" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inscrivez-Vous</h4>
      </div>
        <form method="post" action="">
        <div class="modal-body">
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" class="form-control" id="name" required>
                    <label for="firstname">Prénom :</label>
                    <input type="text" class="form-control" id="firstname" required>
                </div>
              <div class="form-group">
                <label for="pwd">Mot de passe :</label>
                <input type="password" class="form-control" id="pwd" required>
                <label for="pwd2">Retapez votre mot de passe :</label>
                <input type="password" class="form-control" id="pwd2" required>
                <label for="date_naiss">Retapez votre mot de passe :</label>
                <input type="date" class="form-control" id="date_naiss" required>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" required> J'accepte les conditions </label>
                <input type="hidden" value="1" name="register" />
              </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Retour</button>
        <button type="submit" class="btn btn-primary">Inscription</button>
      </div>
        </form>
    </div>

  </div>
</div>