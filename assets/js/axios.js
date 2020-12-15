// Experiences
window.onload = function() {
    axios.get('assets/js/codebeautify.json', {
    })
    .then(function(info) {
        console.log(info);
  
        document.getElementsByClassName("card-img-top")[0].innerHTML = info.data.results[0].xp1.img;
  
        document.getElementsByClassName("class-title")[0].innerHTML = info.data.results[0].xp1.titol;
  
        document.getElementsByClassName("card-text")[0].innerHTML = info.data.results[0].xp1.text;
    })
    .catch(function(){
        console.log("problem!");
    })
    .then(function() {
        // always executed
    })
  };