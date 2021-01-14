window.onload = function() {

    document.getElementById("boton_login").addEventListener('click', function(){
        var nom = document.getElementById("nom_log").value;
        var password = document.getElementById("contrasenya_log").value;
        

        axios.get('http://fastrumbo.alumnes.iam.cat/probes/login_usuari.php', 
            {   
            params: {         
                    nom_usuari: nom,
                    contrasenya: password
            }
        })
        .then(function() {
        })
        .catch(function(){
            console.log("problem!");
        })
    })
}