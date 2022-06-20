<style media="screen">
/*
* ==== octogone
*/
.octo, .octo div {
margin: 0 auto;
transform-origin: 50% 50%;
overflow: hidden;
width: 300px;
height: 300px;
}
.octo, .octo div {
width: 150px;
height: 150px;
}
.octo {
transform: rotate(45deg);
}
.octo1 {
  transform: rotate(-45deg);
}

.octo div img {
position :relative;

width: 200px;
height: 196px;

left:-35px;
top: -8px;

filter: brightness(0.9);
}
</style>

<!-- trigger the tbpopup -->
<!-- <a href="javascript:void(0);" id="tbpopupLink">Klik disini untuk membuka popup</a> -->

<!-- <div id="tbpopupLink"></div> -->
<div id="tbpopupBox" class="tbpopup">

  <div class="tbpopup-content">

    <div class="box-content" data-aos="zoom-in">
      <section class="jumbotron text-center">
        <div class="font-display">
          <p class="tb-mutlu font-hdr text-color-primary"  data-aos="fade-left" data-aos-duration="500" data-aos-delay="50">Undangan Pernikahan</p> <br>

          <div class="octo">
            <div class="octo1">
              <img class="imageoctotb1" src="<?=base_url()?>_assets/img/icon5.jpg" alt="" />
            </div>
          </div> <br>

          <!-- <section class="section-imgtb">
            <img class="imageicontb1" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="50" src="<?=base_url()?>_assets/img/icon5.jpg" alt="" />
          </section><br> -->

          <h4 class="text-name-tb text-color-primary" data-aos="fade-right" data-aos-duration="500" data-aos-delay="50" style="font-size:30px;">Aom & Mia</h4>
          <p class="pt-1 fw-bolder the-wedding-of-tgl" data-aos="fade-left" data-aos-duration="500" data-aos-delay="50">30 October 2022</p>
          <h6 class="tb-quicksand text-shadow-tb text-color-primary" data-aos="flip-right" data-aos-duration="500" data-aos-delay="50">Tanpa Mengurangi Rasa Hormat Kami Mengundang Bapak/Ibu/Soudara/i Untuk Hadir Di Acara Pernikahan Kami.</h6>

          <div class="divclose" data-appear-animation="rubberBand" data-appear-animation-delay="0">
            <div class="closetb">Buka Undangan</div>
          </div>

        </div>
      </section>
    </div>

    <!-- <div class="box-content">
      <section class="jumbotron text-center">
        <div class="font-display">
          <p class="tb-mutlu font-hdr text-color-primary">Undangan Pernikahan</p> <br>

          <section class="section-imgtb">
            <img class="imageicontb1" src="<?=base_url()?>_assets/img/icon4.jpeg" alt="" />
          </section><br>

          <h4 class="text-name-tb text-color-primary" style="font-size:30px;">Aom & Mia</h4>
          <p class="pt-1 fw-bolder the-wedding-of-tgl">30 October 2022</p>
          <h6 class="tb-quicksand text-shadow-tb text-color-primary">Tanpa Mengurangi Rasa Hormat Kami Mengundang Bapak/Ibu/Soudara/i Untuk Hadir Di Acara Pernikahan Kami.</h6>

          <div class="divclose" data-appear-animation="rubberBand" data-appear-animation-delay="0">
            <div class="closetb">Buka Undangan</div>
          </div>

        </div>
      </section>
    </div> -->

  </div>
</div>
<!-- end popup -->
