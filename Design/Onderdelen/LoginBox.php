<script type="text/javascript">
$(document).ready(function() {
    var x_timer;
    $("#Gebruikersnaam").keyup(function (e){
        clearTimeout(x_timer);
        var user_name = $(this).val();
        x_timer = setTimeout(function(){
            check_username_ajax(user_name);
        }, 1000);
    });

function check_username_ajax(username){
    $("#user-result").html('<img src="ajax-loader.gif" />');
    $.post('Modules/CheckExists.php', {'Gebruikersnaam':username}, function(data) {
      $("#user-result").html(data);
    });
}
});
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Login
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="RegisterLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="RegisterLabel">Registreer een account</h4>
      </div>
      <div class="modal-body">
        <form action="?p=Register" method="POST">
          Gebruikersnaam:<br />
          <input required type="text" name="Gebruikersnaam" id="Gebruikersnaam" placeholder="Gebruikersnaam" style="width: 90%"/><span id="user-result"></span><br /><br />
          E-mail:
          <input required type="email" name="Email" placeholder="E-Mail" style="width: 100%" /><br /><br />
          Wachtwoord:
          <input required type="password" name="Wachtwoord" placeholder="Wachtwoord" style="width: 100%" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
          <input type="submit" class="btn btn-primary" value="Registreer" />
        </div>
        </form>

    </div>
  </div>
</div>
