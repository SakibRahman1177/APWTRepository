fetch("http://127.0.0.1:8000/api/products/list").then(
    response => {
        response.json().then(
            data => {
                console.log(data);
                if (data.length > 0) {
                    var getData = "";
                    data.forEach((object) => {
                        getData += "<tr>";
                        getData += "<td>" + object.pname + "</td>";
                        getData += "<td>" + object.pId + "</td>";
                        getData += "<td>" + object.cname + "</td>";
                        getData += "<td>" + object.ctg + "</td>";
                        getData += "<td>" + object.type + "</td>";
                        getData += "<td>" + object.price + "</td>";
                        getData += "<td>" + object.status + "</td></td>";
                    })
                    document.getElementById("loadData").innerHTML = getData;
                }
            }
        )
    }
)