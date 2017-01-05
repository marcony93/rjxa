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
    },
    {"titulo":"Marruecos COP22",
      "carpeta":"marruecosCOP22/",
      "Album":[
        {"TituloFoto":"marruecos1.jpg"},
        {"TituloFoto":"marruecos2.jpg"},
        {"TituloFoto":"marruecos3.jpg"},
        {"TituloFoto":"marruecos4.jpg"},
        {"TituloFoto":"marruecos5.jpg"},
        {"TituloFoto":"marruecos6.jpg"},
        {"TituloFoto":"marruecos7.jpg"},
        {"TituloFoto":"marruecos8.jpg"},
        {"TituloFoto":"marruecos9.jpg"},
        {"TituloFoto":"marruecos10.jpg"},
        {"TituloFoto":"marruecos11.jpg"},
        {"TituloFoto":"marruecos12.jpg"},
        {"TituloFoto":"marruecos16.jpg"},
        {"TituloFoto":"marruecos18.jpg"},
        {"TituloFoto":"marruecos19.jpg"},
        {"TituloFoto":"marruecos20.jpg"}
      ]
    },
    {"titulo":"Nantes francia climate chance",
      "carpeta":"nantesFrancia-climatechance/",
      "Album":[
        {"TituloFoto":"francia1.jpg"},
        {"TituloFoto":"francia2.jpg"},
        {"TituloFoto":"francia3.jpg"}
      ]
    },
    {"titulo":"Encuentro de jóvenes por la seguridad hídrica, Peru",
      "carpeta":"peruEncuentrodeJovenesporSegHidrica/",
      "Album":[
        {"TituloFoto":"peru1.jpg"},
        {"TituloFoto":"peru2.jpg"},
        {"TituloFoto":"peru3.jpg"},
        {"TituloFoto":"peru4.jpg"},
        {"TituloFoto":"peru5.jpg"},
        {"TituloFoto":"peru6.jpg"},
        {"TituloFoto":"peru7.jpg"}
      ]
    },
    {"titulo":"Fotos de la RJxA Nicaragua",
      "carpeta":"redPorPaies/Nicaragua/",
      "Album":[
        {"TituloFoto":"nicaragua1.jpg"},
        {"TituloFoto":"nicaragua2.jpg"},
        {"TituloFoto":"nicaragua3.jpg"},
        {"TituloFoto":"nicaragua4.jpg"},
        {"TituloFoto":"nicaragua5.jpg"},
        {"TituloFoto":"nicaragua6.jpg"}
      ]
    },
    {"titulo":"Fotos de la RJxA Guatemala",
      "carpeta":"redPorPaies/Guatemala/",
      "Album":[
        {"TituloFoto":"DSC_0351.jpg"},
        {"TituloFoto":"DSC_0353.jpg"},
        {"TituloFoto":"g1.jpg"},
        {"TituloFoto":"g2.jpg"}
      ]
    },
    {"titulo":"Fotos de la RJxA Panama",
      "carpeta":"redPorPaies/Panama/",
      "Album":[
        {"TituloFoto":"panama2.jpg"},
        {"TituloFoto":"panama3.jpg"},
        {"TituloFoto":"panama4.jpg"},
        {"TituloFoto":"panama5.jpg"}
      ]
    }
  ];
  galeria.forEach(function(v,i){
    document.getElementById("galeria").innerHTML = document.getElementById("galeria").innerHTML + '<div class="row">\
    <div class="col-md-12 espacioArriba">';
    document.getElementById("galeria").innerHTML = document.getElementById("galeria").innerHTML + '<h3 class="text-center">'+v.titulo+'</h3>';
    v.Album.forEach(function(va,ia){
      var path = "img/galeria/" + v.carpeta + va.TituloFoto;
      document.getElementById("galeria").innerHTML = document.getElementById("galeria").innerHTML +
      '<div class="col-md-3 espacioAbajo">\
        <a href="#" data-toggle="modal" onclick="img(this)" id="'+path+'" data-target="#myModal"><img class="img-responsive img-thumbnail imgEstandar" src="'+path+'"></a>\
      </div>';
    });
    document.getElementById("galeria").innerHTML = document.getElementById("galeria").innerHTML + '</div></div>';
  });
}());

function img(x) {
  document.getElementById("imagen").innerHTML = '<img class="img-responsive img-thumbnail" src="'+x.id+'">';
}
