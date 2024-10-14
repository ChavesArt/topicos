<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <p id="texto">Meu texto</p>
    <button onclick="mudarTexto()">Mudar texto</button>
    <script>
        function mudarTexto(){
            document.getElementById('texto').innerHTML = "novo texto";
            let a = document.createElement("a");
            a.setAttribute("href", "www.google.com");
            a.innerHTML = "GOOGLE";
            document.getElementById('texto').appendChild(a);
        }
    </script>
</body>
</html> 