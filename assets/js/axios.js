// Experiences
window.onload = function() {

        axios.get('http://localhost/Viatges/assets/js/codebeautify.json', {
    })
    .then(function(info) {

        var numJson = info.data.results;
        var imatge = info.data.results[0].img;
        console.log(numJson.length);
        var contenedor = "";
        var cont = 0;
        for(i=0; i < numJson.length; i++){
            if(cont ==0){
                contenedor += "<div class='container'>";
                contenedor += "<div class='row'>";
            }
            contenedor += "<div class='card col-lg-4 col-md-6 d-flex' data-aos='fade-up' data-aos-delay='100'>";
            contenedor += "<div>";
            contenedor += "<img src= '"+ info.data.results[i].img + "' class='card-img-top' alt='...'>";
            contenedor += "<div class='card-icon'>";
            contenedor += "<i class='ri-brush-4-line'></i>";
            contenedor += "</div>";
            contenedor += "<div class='card-body'>";
            contenedor += "<h5 class='card-title titol '> " + info.data.results[i].titol + "</h5>";
            contenedor += "<p class='card-text descripcio'> " + info.data.results[i].descripcio + "</p>";
            // contenedor += "<p class='votsp'></p>";
            // contenedor += "<p class='votsn'></p>";
            contenedor += "</div>";
            contenedor += "</div>";
            contenedor += "</div>";
            
            if(cont ==2){
                contenedor += "</div>";
                contenedor += "</div>";
            }

             if( cont != 2){
                 cont++;
            }else cont= 0;
        }
        console.log(contenedor);
        // for(i=0; i < numJson.length; i++){

             document.getElementById("experiencies").innerHTML = contenedor;

        //     document.getElementsByClassName("titol")[i].innerHTML = info.data.results[i].titol;
        //     document.getElementsByClassName("descripcio")[i].innerHTML = info.data.results[i].descripcio;
        //     document.getElementsByClassName("img")[i].setAttribute("src",imatge);
    
        // }

       
        
        // document.getElementById("titol").innerHTML = info.data.results[0].id;
       
        // document.getElementById("titol").innerHTML = info.data.results[0].data_creacio;
        // document.getElementById("votsp").innerHTML = info.data.results[0].vots_positius;
        // document.getElementById("votsn").innerHTML = info.data.results[0].vots_negatius;
        // document.getElementById("titol").innerHTML = info.data.results[0].id_usuari;
        // document.getElementById("titol").innerHTML = info.data.results[0].id_categoria;



        // document.getElementById("titol").innerHTML = info.data.results[2].titol;
        // document.getElementById("text").innerHTML = info.data.results[2].text;

    })
    .catch(function(){
        console.log("problem!");
    })
    .then(function() {
        // always executed
    })
  };
  
