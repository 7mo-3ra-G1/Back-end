
function boton(id) {
    let url = 'api.php?id='+id;
    let request = new Request(url, {headers:{"Content-Type": "application/json"}})

    fetch(request)
        .then((response) => {return response.json()})
        .then((data) => console.log(data))
    }