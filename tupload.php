<!DOCTYPE html>
<html>
<head>
    <title>Barra de Progresso de Upload</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Barra de Progresso de Upload</h1>
    <input type="file" id="fileInput">
    <button onclick="uploadFile()">Enviar</button>
    <div id="progressBar">
        <div id="progressBarFill"></div>
    </div>

    <script>
        function uploadFile() {
            var fileInput = document.getElementById('fileInput');
            var file = fileInput.files[0];
            var formData = new FormData();
            formData.append('file', file);

            $.ajax({
                url: 'upp.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function(evt) {
                        if (evt.lengthComputable) {
                            var percent = (evt.loaded / evt.total) * 100;
                            $('#progressBarFill').css('width', percent + '%');
                        }
                    }, false);
                    return xhr;
                },
                success: function(response) {
                    console.log('Arquivo enviado com sucesso.');
                }
            });
        }
    </script>
</body>
</html>
