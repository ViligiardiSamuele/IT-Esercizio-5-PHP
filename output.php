<?php
    echo '
    <!DOCTYPE html>
    <html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Es. 5 php</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body data-bs-theme="dark">
        <div class="mx-auto w-50 pt-1 bg-secondary rounded position-absolute top-50 start-50 translate-middle" style="max-width: 450px;">
        <h1 class="text-center">Riepilogo dei dati</h1>
            <div class="p-2 bg-dark border border-3 rounded border-secondary">
            <table class="table">
                <tr>
                    <td>Cognome</td>
                    <td>'. $_POST["surname"] .'</td>
                </tr>
                <tr>
                    <td>Nome</td>
                    <td>'. $_POST["name"] .'</td>
                </tr>
                <tr>
                    <td>Sesso</td>
                    <td>'. $_POST["sex"] .'</td>
                </tr>
                <tr>
                    <td>Nazionalità</td>
                    <td>'. $_POST["nationality"] .'</td>
                </tr>
                <tr>
                    <td>Patente</td>
                    <td>';
                    if(isset($_POST["driverLicensecatA"])) echo $_POST["driverLicensecatA"];
                    if(isset($_POST["driverLicensecatA"]) && isset($_POST["driverLicensecatB"])) echo ", ";
                    if(isset($_POST["driverLicensecatB"])) echo $_POST["driverLicensecatB"];
                    echo '</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>'. $_POST["email"] .'</td>
                </tr>
            </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>
    ';
?>