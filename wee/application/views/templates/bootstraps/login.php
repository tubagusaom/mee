<!-- Deklarasi Modal -->
<div id="TeraByteModal" class="modal-tb">
  <!-- Konten Modal -->
  <div class="modal-content-tb">

  <div class="modal-head-tb">
    <span class="close-tb">&times;</span>
    <h6 class="head-title-tb">Login</h6>
  </div>
  <div class="modal-main-tb">
    <div class="form-group">
      <div class="row">
        <div class="col-xs-3">
          <label class="control-label labeled-form" for="inputUsername">Username</label>
        </div>
        <div class="col-xs-9 tooltip-wide">
          <div class="input-group merged">
             <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-xs"></i></span>
             <input type="text" class="form-control login-control" aria-describedby="basic-addon1" name="inputUsername" id="inputUsername" onKeyup="checkinput()">
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-xs-3">
          <label class="control-label labeled-form" for="inputPassword">Password</label>
        </div>
        <div class="col-xs-9 tooltip-wide">
          <div class="input-group merged">
            <span class="input-group-addon" id="basic-addon2"><i class="fa fa-key fa-xs"></i></span>
            <input type="password" class="form-control login-control" aria-describedby="basic-addon2" name="inputPassword" id="inputPassword" onkeypress="if(event.keyCode==13) login_click();" onKeyup="checkinput()">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-foot-tb">
    <button type="button" class="btn btn-warning" id="btntbclose">Close</button>
    <button type="button" class="btn btn-primary" id="btn-login">Login</button>
  </div>

  </div>
</div>

<script type="text/javascript">

  function checkinput(){
    var bt = document.getElementById('btn-login');
      if (inputUsername.value != '' && inputPassword.value != '') {
          bt.disabled = false;
      }
      else {
          bt.disabled = true;
      }
  }

  // Panggil Elemen Modal-nya
  var modalTB = document.getElementById('TeraByteModal');

  // Panggil Elemen Button-nya
  var btnTB = document.getElementById("TeraByteButton");

  // Panggil Elemen Close-nya, untuk mensimulasikan efek tutup
  var spanTB = document.getElementsByClassName("close-tb")[0];
  var btnTBclose = document.getElementById("btntbclose");

  // Saat Pengguna Menekan Button, Lakukan Pemanggilan Modal
  btnTB.onclick = function() {
  	modalTB.style.display = "block";
  }

  // Saat Pengguna Menekan Tombol X (close), simulasikan efek tutup
  spanTB.onclick = function() {
  	modalTB.style.display = "none";
  }
  btnTBclose.onclick = function() {
  	modalTB.style.display = "none";
  }

  // Saat Pengguna menekan sesuatu, diluar dari modal, simulasikan efek tutup
  window.onclick = function(event) {
  	if (event.target == modalTB) {
  		modalTB.style.display = "none";
  	}
  }
</script>
