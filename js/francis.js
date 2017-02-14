function limpiar() {
    document.getElementById('steamUser').value = "";
}

function loadGameList() {

    var id = document.getElementById('steamUser').value;
    document.getElementById("listaJuegos").innerHTML = "";
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("listaJuegos").innerHTML =
                    this.responseText;
        }
    };
    xhttp.open("GET", "classes/show_data.php?user=" + id, true);
    xhttp.send();
}

function imgError(image) {
    image.onerror = "";
    image.src = "http://placehold.it/184x69";
    return true;
}
