<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        {{ $date }}
    </p>
    <p>
        {{ $expire}}
    </p>
    <div id="loc"></div>
    <script>
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };

        fetch("https://get.geojs.io/v1/ip/geo.json", requestOptions)
        .then(response => response.json())
        .then(result => {
            console.log(result)
            if(result.latitude&& result.longitude) document.getElementById('loc').innerHTML = result.latitude+ ','+result.longitude
        })
        .catch(error => console.log('error',error));
    </script>
</body>
</html>