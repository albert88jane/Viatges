// Experiences
window.onload = function() {
    axios.get('codebeautify.json', {
    })
    .then(function(info) {
        console.log(info);
  
        document.getElementsByClassName("card-icon")[0].innerHTML = info.data[0].img;
  
        document.getElementsByClassName("class-title")[0].innerHTML = info.data[0].titol;
  
        document.getElementsByClassName("card-text")[0].innerHTML = info.data[0].text;
    })
    .catch(function(){
        console.log("problem!");
    })
    .then(function() {
        // always executed
    })
  };