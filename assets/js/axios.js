// Experiences
window.onload = function() {
    axios.get('http://localhost/Viatges/assets/js/codebeautify.json', {
    })
    .then(function(info) {
        console.log(info);
  
        //document.getElementsByClassName("card-icon")[0].innerHTML = info.data[0].img;
        //document.getElementsByClassName("class-title")[0].innerHTML = info.data.results[0].titol;
        //document.getElementsByClassName("card-text")[0].innerHTML = info.data.results[0].text;

        var imatge = info.data.results[0].img;
        console.log(imatge);

        // document.getElementById("titol").innerHTML = info.data.results[0].id;
        document.getElementById("titol").innerHTML = info.data.results[0].titol;
        document.getElementById("text").innerHTML = info.data.results[0].descripcio;
        document.getElementById("img").setAttribute("src",imatge);

        // document.getElementById("titol").innerHTML = info.data.results[0].data_creacio;
        document.getElementById("votsp").innerHTML = info.data.results[0].vots_positius;
        document.getElementById("votsn").innerHTML = info.data.results[0].vots_negatius;
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