<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav style="background-color: aquamarine;">
        <h2 style="text-align: center;">Hisp Quiz</h2>
    </nav>


    <div>
        <table style="width:100%" class="table">
            <tr>
                <th>Place</th>
                <th>Dimension</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>50</td>
            </tr>

        </table>
    </div>

    <p id="demo"></p>

    <!-- jsonData -->
    <script>
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

    let text = "";
    for (let i = 0; i < rows.length; i++) {
        text += rows[i] + "<br>";
    }

    document.getElementById("demo").innerHTML = text;










    //functions

    // function printValues(obj) {
    //     for (var k in obj) {
    //         if (obj[k] instanceof Object) {
    //             printValues(obj[k]);
    //         } else {
    //             document.write(obj[k] + "<br>");
    //         };
    //     }

    // };

    // // printValues(obj);
    // document.write("<hr>");

    // var dump = document.write(obj["rows"] + "<br>");

    // let text = "";
    // for (let i = 0; i < dump.length; i++) {
    //     text += dump[i] + "<br>";
    // }
    </script>






    <!--Bootsrap4script-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>