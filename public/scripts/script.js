

function moviesearch(){
    var moviename= document.getElementById("movieinput").value;

    var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("movieposter").src = myObj.Poster;
        document.getElementById("movietitle").innerHTML = myObj.Title;
        document.getElementById("movieplot").innerHTML = myObj.Plot;
        document.getElementById("movieactors").innerHTML = myObj.Actors;

    }
};
xmlhttp.open("GET", "http://www.omdbapi.com/?t="+moviename+"&apikey=417c2dfe", true);
xmlhttp.send();

}