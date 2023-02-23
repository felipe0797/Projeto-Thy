// Adiciona um event listener ao botão
$(".button").click(function() {
    // Anima o scroll até a posição do elemento alvo
    $("html, body").animate({
      scrollTop: $("#target").offset().top
    }, 1000);
  });

  //numero telefone

  var telefone = document.getElementById("telefone");

  telefone.addEventListener("input", function(event) {
    var x = this.value.replace(/\D/g, "");
    x = x.match(/(\d{0,3})(\d{0,5})(\d{0,4})/);
    this.value = !x[2] ? x[1] : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
  });

// Scroll event

$(document).ready(function() {
  $('.scrolleffect').waypoint(function() {
    $(this.element).addClass('fadeInUp');
  }, {
    offset: '90%'
  });
});

//

var video = $('<video autoplay loop muted></video>');
video.append('<source src="./imagens/videoteste.mp4" type="video/mp4">');
$('#background-video').append(video);
