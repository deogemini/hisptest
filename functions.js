function displayTable() {
    var jsonData = ` {
            "headers": [{
                "id": "dx",
                "name": "Data"
            },
            {
                "id": "ou",
                "name": "Place"
            },
            {
                "id": "value",
                "name": "Value"
            }
            ],
            "metaData": {
                "names": {
                    "hTUspcBc4Yn": "HIV Prevalence",
                    "EzE8xZ31zfC": "Malaria Prevalence",
                    "E31SemmmFGb": "TB Prevalence",
                    "dx": "Data",
                    "ou": "Place",
                    "R7TPl8q81Ft": "Insect District",
                    "xGojHNSrFAj": "Bird District"
                },
                "dimensions": {
                    "dx": [
                        "EzE8xZ31zfC",
                        "hTUspcBc4Yn",
                        "E31SemmmFGb"
                    ],
                    "ou": [
                        "R7TPl8q81Ft",
                        "xGojHNSrFAj"
                    ]
                }
            },
            "rows": [
                [
                    "EzE8xZ31zfC",
                    "R7TPl8q81Ft",
                    "47.0"
                ],
                [
                    "hTUspcBc4Yn",
                    "R7TPl8q81Ft",
                    "50.6"
                ],
                [
                    "EzE8xZ31zfC",
                    "xGojHNSrFAj",
                    "40.0"
                ],
                [
                    "E31SemmmFGb",
                    "xGojHNSrFAj",
                    "74.8"
                ],
                [
                    "hTUspcBc4Yn",
                    "xGojHNSrFAj",
                    "77.0"
                ],
                [
                    "E31SemmmFGb",
                    "R7TPl8q81Ft",
                    "47.0"
                ]
            ]
        }`;
    //Converting JSON Object to JS Object
    var obj = JSON.parse(jsonData);

    const rows = obj["rows"];
    const headers = obj["headers"];

    var table = document.getElementById("table");  // set this to your table

    var tbody = document.createElement("tbody");
    table.appendChild(tbody);
    rows.forEach(function (items) {
        var row = document.createElement("tr");
        items.forEach(function (item) {
            var cell = document.createElement("td");
            cell.textContent = item;
            row.appendChild(cell);
        });
        tbody.appendChild(row);
    });


}