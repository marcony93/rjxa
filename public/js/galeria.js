(function functionName() {
  var galeria = [
    {"titulo":"Reunion en Honduras",
      "carpeta":"reunionHonduras/",
      "Album":[
        {"TituloFoto":"IMG_205737.jpg"},
        {"TituloFoto":"IMG_206141.jpg"},
        {"TituloFoto":"IMG_206745.jpg"},
        {"TituloFoto":"IMG_206947.jpg"},
        {"TituloFoto":"IMG_207048.jpg"},
        {"TituloFoto":"IMG_207856.jpg"},
        {"TituloFoto":"IMG_208058.jpg"},
        {"TituloFoto":"IMG_208159.jpg"}
      ]
    }
  ];
  galeria.forEach(function(v,i){
    document.getElementById("galeria").innerHTML = '<h3>'+v.titulo+'</h3>';
    v.Album.forEach(function(va,ia){
      var path = "img/galeria/" + v.carpeta + va.TituloFoto;
      document.getElementById("galeria").innerHTML = document.getElementById("galeria").innerHTML +
      '<div class="col-md-3 espacioAbajo">\
        <a href="#" data-toggle="modal" onclick="img(this)" id="'+path+'" data-target="#myModal"><img class="img-responsive img-thumbnail" src="'+path+'"></a>\
      </div>';
    })
  });
}());

function img(x) {
  document.getElementById("imagen").innerHTML = '<img class="img-responsive img-thumbnail" src="'+x.id+'">';
}
