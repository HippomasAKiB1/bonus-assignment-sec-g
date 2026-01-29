<!DOCTYPE html>
<html>
<head>
    <title>Search Product</title>
    <script>

        function searchProducts() {

            var name = document.getElementById("searchName").value;
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("resultTable").innerHTML = this.responseText;
                }

            };

            xhttp.open("GET", "search_ajax.php?name=" + name, true);
            xhttp.send();
        }

    </script>

    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 10px; }
        th, td { border: 1px solid black; padding: 5px; text-align: left; }
    </style>
</head>


<body>
<fieldset style="width: 400px;">
    <legend>SEARCH</legend>
    
    <input type="text" id="searchName" onkeyup="searchProducts()"> 
    <button type="button" onclick="searchProducts()">Search By Name</button>
    <br><hr>
    
    <div id="resultTable">
    
        <table>
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>PROFIT</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>

    </div>
</fieldset>
</body>

</html>
