// Experiences
window.onload = function() {

   
    

    axios.get('http://localhost/Viatges/assets/js/codebeautify.json', {
    })
    .then(function(info) {


        var contenedor = "<div class='card'>";

        contenedor += "<img src= '' class='img' class='card-img-top' alt='...'>";
        contenedor += "<div class='card-icon'>";
        contenedor += "<i class='ri-brush-4-line'></i>";
        contenedor += "</div>";
        contenedor += "<div class='card-body'>";
        contenedor += " <h5 class='card-title' class='titol'><a href=''></a></h5>";
        contenedor += "<p class='card-text' class='text'></p>";
        contenedor += " <p class='votsp'></p>";
        contenedor += "<p class='votsn'></p>";
      
        contenedor += "</div>";
        contenedor += "</div>";
        console.log(contenedor);

        var numJson = info.data.results;
        var imatge = info.data.results[0].img;
        console.log(numJson.length);


        for(i=0; i < numJson.length; i++){
            document.getElementsByClassName("row").innerHTML += contenedor;

            document.getElementsByClassName("titol")[i].innerHTML = info.data.results[i].titol;
            document.getElementsByClassName("text")[i].innerHTML = info.data.results[i].descripcio;
            document.getElementsByClassName("img")[i].setAttribute("src",imatge);
    
        }

       
        
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
  
