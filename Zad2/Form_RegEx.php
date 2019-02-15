<?php
require('../Login/session_check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Regular Expresions - Form</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../NS-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS.css">
    <script>
        (function () {
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</head>

<body>
<div style="text-align: right; margin-right: 10px;">
    <a href="Form_RegEx_V2s.php">Regular Expresions Form V1</a>
</div>
<form class="needs-validation" novalidate>
    <div class="form-row">
        <div class="form-group col-6">
            <label for="inputName">Imię</label>
            <input type="text" class="form-control" id="inputName" placeholder="Name"
                   pattern="^[A-ZŚĆŻÓŃĘĄŁ][a-zćżńóęął]{1,60}$"
                   title="Prosimy podać imię bez spacji, z dużej litery" required>
            <div class="invalid-feedback">Prosimy podać imię bez spacji, z dużej litery</div>
        </div>
        <div class="form-group col-6">
            <label for="inputSurname">Nazwisko</label>
            <input type="text" class="form-control" id="inputSurname" placeholder="Surname"
                   pattern="^[A-ZŻĆŃĄĘÓŁ][a-zżćńóąęł]{1,30}(?:[-]*[A-ZŻĆŃĄĘÓŁ][a-zżćńóąęł]{1,30})*$"
                   title="Bez spacji, z dużej litery, podwójne nazwiska prosimy oddzielić myślnikiem" required>
            <div class="invalid-feedback">Bez spacji, z dużej litery, podwójne nazwiska prosimy oddzielić myślnikiem
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-4">
            <label for="inputCity">Ulica</label>
            <input type="text" class="form-control" id="inputStreet" placeholder="Street"
                   pattern="^[a-zżćńóąęłA-ZŻĆŃĄĘÓŁ0-9.]{1,30}(?:[\s-][a-zżćńóąęłA-ZŻĆŃĄĘÓŁ0-9.]{1,30})*$"
                   title="Prosimy nie używać znaków typu: '!@#$%'" required>
            <div class="invalid-feedback">Prosimy nie używać znaków typu: '!@#$%'</div>
        </div>
        <div class="form-group col-3">
            <label for="inputNrHouse">Nr. domu</label>
            <input type="text" class="form-control" id="inputNrHouse" placeholder="999"
                   pattern="^[0-9](?:[/]*[0-9A-Z]){0,5}$"
                   title="Prosimy operować wyłącznie cyframi, dużymi łacińskimi literami oraz znakiem '/'" required>
            <div class="invalid-feedback">Prosimy operować wyłącznie cyframi, dużymi łacińskimi literami oraz znakiem
                '/'
            </div>
        </div>
        <div class="form-group col-3">
            <label for="inputNrFlat">Nr. mieszkania</label>
            <input type="text" class="form-control" id="inputNrFlat" placeholder="101"
                   pattern="^[0-9](?:[/]*[0-9A-Z]){0,5}$"
                   title="Prosimy operować wyłącznie cyframi, dużymi łacińskimi literami i znakiem '/'">
            <div class="invalid-feedback">Prosimy operować wyłącznie cyframi, dużymi łacińskimi literami oraz znakiem
                '/'
            </div>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Kod pocztowy</label>
            <input type="text" class="form-control" id="inputZip" placeholder="10-110" pattern="[0-9]{2}-[0-9]{3}"
                   title="Prosimy podać w formacie zip kodu: xx-xxx" required>
            <div class="invalid-feedback">Prosimy podać w formacie zip kodu: xx-xxx</div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-4">
            <label for="inputNrTel">Nr. telefonu</label>
            <input type="tel" class="form-control" id="inputNrTel" placeholder="+48 790 842 822"
                   pattern="^[+]*[0-9]{1,4}[-\s0-9]{4,12}$"
                   title="Prosimy nie używać nawiasów, liczby oddzielić spacjami lub myślnikami" required>
            <div class="invalid-feedback">Prosimy nie używać nawiasów, liczby oddzielić spacjami lub myślnikami</div>
        </div>
        <div class="form-group col-4">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="bla-bla@bla.com" maxlength="100"
                   pattern="^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$"
                   title="Prosimy podać poprawny e-mail adres" required>
            <div class="invalid-feedback">Prosimy podać poprawny e-mail adres</div>
        </div>
        <div class="form-group col-4">
            <label for="DateOfBirth">Data urodzenia</label>
            <input class="form-control" type="date" min="1900-01-01" max="2018-01-01" id="DateOfBirth" required>
            <div class="invalid-feedback">Prosimy podać prawdziwą datę urodzenia</div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-6">
            <label for="inputWojewodztwo">Województwo</label>
            <select id="inputWojewodztwo" class="custom-select">
                <option>dolnośląskie</option>
                <option>kujawsko-pomorskie</option>
                <option>lubelskie</option>
                <option>lubuskie</option>
                <option>łódzkie</option>
                <option>małopolskie</option>
                <option>mazowieckie</option>
                <option>opolskie</option>
                <option>podkarpackie</option>
                <option>podlaskie</option>
                <option>pomorskie</option>
                <option>śląskie</option>
                <option>świętokrzyskie</option>
                <option>warmińsko-mazurskie</option>
                <option>wielkopolskie</option>
                <option>zachodniopomorskie</option>
            </select>
        </div>
        <div class="form-group col-6">
            <label for="inputCity">Miasto</label>
            <input type="text" class="form-control" id="inputCity" placeholder="City" minlength="3" maxlength="60"
                   pattern="^[a-zżćńóąęłA-ZŻĆŃĄĘÓŁ]+(?:[\s-][a-zżćńóąęłA-ZŻĆŃĄĘÓŁ]+)*$"
                   title="Prosimy wprowadzić obecną nazwę miasta" required>
            <div class="invalid-feedback">Prosimy wprowadzić obecną nazwę miasta</div>
        </div>
    </div>
    <div class="form-row">
        <div id="radio" class="form-group col-6">
            <!--suppress XmlInvalidId -->
            <label id="SexLable" for="inputSex">Plec:</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Kobieta</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input"
                       checked>
                <label class="custom-control-label" for="customRadioInline2">Męzczyzna</label>
            </div>
        </div>
        <div id="checkbox" class="form-group col-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="PrawoJazdyCheck">
                <label class="custom-control-label" for="PrawoJazdyCheck">Posiadam prawo jazdy</label>
            </div>
        </div>
    </div>
    <div class="form-row">
        <label for="Uwagi">Uwagi:</label>
        <textarea class="form-control" id="Uwagi" rows="5" maxlength="2000" placeholder="Max: 2000 znaków"></textarea>
    </div>
    <div align="center">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</form>
</body>
</html>
