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
        <h1 class="text-center">Modulo di iscrizione</h1>
            <div class="p-2 bg-dark border border-3 rounded border-secondary">
                <form action="output.php" method="post">

                    <div class="row mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Cognome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="surname">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="name">
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="form-check-inline">Sesso</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" value="Maschio">
                            <label class="form-check-label" for="inlineRadio1">Maschio</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" value="Femmina">
                            <label class="form-check-label" for="inlineRadio2">Femmina</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <table class="ms-2">
                            <tr>
                                <td><span>Nazionalità</span></td>
                                <td>
                                    <select name="nationality" class="form-select" style="width:150px">
                                        <option selected></option>
                                        <option value="Italiana">Italiana</option>
                                        <option value="Francese">Francese</option>
                                        <option value="Tedesca">Tedesca</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="mb-3">
                        <span>Patente</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="driverLicensecatA" value="cat. A">
                            <label class="form-check-label" for="inlineCheckbox1">cat. A</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="driverLicensecatB" value="cat. B">
                            <label class="form-check-label" for="inlineCheckbox2">cat. B</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-10">
                            <input placeholder="example@gmail.com" type="email" class="form-control form-control-sm" name="email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control form-control-sm" name="password">
                        </div>
                    </div>
                    <div class="p-1 text-center border border-0 rounded bg-dark">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="reset" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Annulla</button>
                            <button type="submit" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                            Conferma</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>
    ';
?>