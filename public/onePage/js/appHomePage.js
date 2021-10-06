var page = "controller/controller.php";
$(document).ready(function () {

  function getTimeline() {
    $.ajax({
      url: page,
      type: "POST",
      data: {
        action: "getTimeline"
      },
      success: function (data) {
        var quebraArray = $.parseJSON(data);
        //console.log(quebraArray.length);
        var dados = "";
        var classe = null;
        for (i=0; i < quebraArray.length; i++){
          if(i%2 == 0){
            classe = "";
          }
          else{
            classe = "timeline-inverted";
          }
          dados += `<li class="`+classe+`">
                    <div class="timeline-image">
                      <img class="rounded-circle img-fluid" src="http://informatica.adm.maracanau.ifce.edu.br/`+quebraArray[i].imagem+`" alt="">
                    </div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4>`+quebraArray[i].periodo+`</h4>
                        <h4 class="subheading">`+quebraArray[i].titulo+`</h4>
                      </div>
                      <div class="timeline-body">
                        <p class="text-muted">`+quebraArray[i].descricao+`</p>
                      </div>
                    </div>
                  </li>`;
        }
        dados+= `<li class="timeline-inverted">
                    <div class="timeline-image">
                      <h4>Be Part
                        <br>Of Our
                        <br>Story!</h4>
                    </div>
                  </li>`;
        $("#timeline").html(dados);
      }
    })
  }
  
  function getSystem() {
    $.ajax({
      url: page,
      type: "POST",
      data: {
        action: "getSystem"
      },
      success: function (data) {
        var quebraArray = $.parseJSON(data);
        var dados = "";

        for (i = 0; i < quebraArray.length; i++){
          dados+= `<div>
                <img src="http://informatica.adm.maracanau.ifce.edu.br/`+quebraArray[i].imagem+`">
              </div>`;
        }
        // console.log(dados);
        $("#system").html(dados);
        $('.responsive').slick({
          slidesToShow: 8,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
      }
    })
  }
  
  function getAttendance() {
    $.ajax({
      url: page,
      type: "POST",
      data: {
        action: "getAttendance"
      },
      success: function (data) {
        var quebraArray = $.parseJSON(data);

        for (i = 0; i < quebraArray.length; i++){
          $("#"+quebraArray[i].atributo).html(quebraArray[i].quantidade);
        }
      }
    })
  }
  
  function getPort() {
    $.ajax({
      url: page,
      type: "POST",
      data: {
        action: "getPort"
      },
      success: function (data) {
        var quebraArray = $.parseJSON(data);
        var dados = "";
        var modal = "";
        var atribute = "";
        for (i = 0; i < quebraArray.length; i++) {
          atribute = quebraArray[i].titulo.split(" ");
          dados += `<div class="col-md-4 col-sm-6 portfolio-item portifolioCenter">
                    <a class="portfolio-link" data-toggle="modal" href="#` + atribute[0] + `">
                      <div class="portfolio-hover">
                        <div class="portfolio-hover-content"></div>
                      </div>
                      <img class="img-fluid imgPort" src="http://informatica.adm.maracanau.ifce.edu.br/` + quebraArray[i].imagem + `" alt="">
                    </a>
                    <div class="portfolio-caption">
                      <h4>` + quebraArray[i].titulo + `</h4>
                      <p class="text-muted">` + quebraArray[i].subtitulo + `</p>
                    </div>
                 </div>`;
          <!--Modal       -->
          modal += `<div class="portfolio-modal modal fade" id="` + atribute[0] + `" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                      <div class="rl"></div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                          <!-- Project Details Go Here -->
                          <h2 class="text-uppercase projectName">` + quebraArray[i].titulo + `</h2>
                          <p class="item-intro text-muted">` + quebraArray[i].subtitulo + `</p>
                          <img class="img-fluid d-block mx-auto" src="http://informatica.adm.maracanau.ifce.edu.br/` + quebraArray[i].imagem + `" alt="">
                          <p class="bodyModal">` + quebraArray[i].descricao + `</p>
                          <ul class="list-inline">
                            <li>` + quebraArray[i].dataPort + `</li>
                            <li>` + quebraArray[i].cliente + `</li>
                          </ul>
                          <input class="btn btn-primary" value="Fechar" data-dismiss="modal" type="button"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> `;
        }
        $("#porti").html(dados);
        $("#addModal").html(modal);
      }
    })
  }
  
  function getFac() {
    $.ajax({
      url: page,
      type: "POST",
      data: {
        action: "getFac"
      },
      success: function (data) {
        var quebraArray = $.parseJSON(data);
        var dados = "";

        for (i = 0; i < quebraArray.length; i++){
          dados+= `<li>
                  <a data-toggle="collapse" class="collapsed" href="#faq`+quebraArray[i].id+`">`+quebraArray[i].pergunta+`<i class="ion-android-remove"></i></a>
                  <div id="faq`+quebraArray[i].id+`" class="collapse" data-parent="#faq-list">
                    <p>
                      `+quebraArray[i].resposta+`
                    </p>
                  </div>
                </li>`;
        }

        $("#faq-list").html(dados);
      }
    })
  }
  
  function getTeam() {
    $.ajax({
      url: page,
      type: "POST",
      data: {
        action: "getTeam"
      },
      success: function (data) {
        var quebraArray = $.parseJSON(data);
        var dados = "";

        for (i = 0; i < quebraArray.length; i++){
          dados+= `<div class="col-lg-3 col-md-6">
                  <div class="member">
                    <div class="pic"><img src="http://informatica.adm.maracanau.ifce.edu.br/` + quebraArray[i].imagem +`" alt=""></div>
                    <h4>`+ quebraArray[i].nome +`</h4>
                    <span>`+ quebraArray[i].cargo +`</span>
                    <span>`+ quebraArray[i].email +`</span>
                  </div>
                </div>`;
        }
        $("#time").html(dados);
      }
    })
  }

  getTimeline();
  getSystem();
  getAttendance();
  getPort();
  getFac();
  getTeam();
});
