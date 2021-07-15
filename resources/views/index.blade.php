<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
        $.ajax({
            url:"http://localhost:8000/api/restaurants",
            type: "GET",
            dataType: "JSON",
            success: function(data){
            for(i=0; i<data.length; i++){
                $('tbody').append('<tr><td>'+data[i].name+'</td><td>'+data[i].price+'</td><td>'+data[i].category+'</td></tr>');
            }
        },
        error: function(data){
        alert("tidak dapat memproses");
        }
        });
    });
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form id="myform">
    <table border="1" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>name</th>
            <th>price</th>
            <th>category</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
</form>
</body>
</html>