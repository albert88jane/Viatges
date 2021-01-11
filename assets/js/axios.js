// Experiences
window.onload = function() {
    axios.get('http://labs.iam.cat/~a19carerecas/2DAW/Viatges/assets/js/codebeautify.json', {
    })
    .then(function(info) {
        console.log(info);
  
        //document.getElementsByClassName("card-icon")[0].innerHTML = info.data[0].img;
        //document.getElementsByClassName("class-title")[0].innerHTML = info.data.results[0].titol;
        //document.getElementsByClassName("card-text")[0].innerHTML = info.data.results[0].text;


        // document.getElementById("titol").innerHTML = info.data.results[0].titol;
        // document.getElementById("text").innerHTML = info.data.results[0].text;

        document.getElementById("titol").innerHTML = info.data.results[1].titol;
        document.getElementById("text").innerHTML = info.data.results[1].text;

    })
    .catch(function(){
        console.log("problem!");
    })
    .then(function() {
        // always executed
    })
  };