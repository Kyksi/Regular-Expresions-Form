<?php
require('../Login/session_check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Regular Expresions - Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="../NS-icon.png" type="image/png">
    <link rel="stylesheet" href="CSS.css">
</head>

<body>
<form>
    <div class="form-row">
        <div class="form-group col-6">
            <label for="inputName">Imię</label>
            <input type="text" class="form-control" id="inputName" placeholder="Name"
                   pattern="^[A-ZŚĆŻÓŃĘĄ][a-zćżńóęą]{1,100}$"
                   title="Prosimy podać imię bez spacji, z dużej litery" required>
        </div>
        <div class="form-group col-6">
            <label for="inputSurname">Nazwisko</label>
            <input type="text" class="form-control" id="inputSurname" placeholder="Surname"
                   pattern="^[A-ZŚĆŻÓŃĘĄ][a-zćżńóęąA-ZŚĆŻÓŃĘĄ-]{2,100}$"
                   title="Bez spacji, z dużej litery, podwójne nazwiska prosimy oddzielić myślnikiem" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-4">
            <label for="inputCity">Ulica</label>
            <input type="text" class="form-control" id="inputStreet" placeholder="Street"
                   pattern="^[\sA-zzćżńóęą0-9.,-]+$" maxlength="60"
                   title="Prosimy nie używać znaków typu: '!@#$%'" required>
        </div>
        <div class="form-group col-3">
            <label for="inputNrHouse">Nr. domu</label>
            <input type="text" class="form-control" id="inputNrHouse" placeholder="999" pattern="^[0-9A-Z/]{1,5}$"
                   title="Prosimy operować wyłącznie cyframi, dużymi łacińskimi literami i znakiem '/'" required>
        </div>
        <div class="form-group col-3">
            <label for="inputNrFlat">Nr. mieszkania</label>
            <input type="text" class="form-control" id="inputNrFlat" placeholder="101" pattern="^[0-9A-Z/]{1,5}$"
                   title="Prosimy operować wyłącznie cyframi, dużymi łacińskimi literami i znakiem '/'" required>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Kod pocztowy</label>
            <input type="text" class="form-control" id="inputZip" placeholder="10-110" pattern="[0-9]{2}-[0-9]{3}"
                   title="Prosimy podać w formacie zip kodu: 11-111" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-4">
            <label for="inputNrTel">Nr. telefonu</label>
            <input type="tel" class="form-control" id="inputNrTel" placeholder="+48 790 842 822"
                   pattern="^[+]*[0-9]{1,4}[-\s0-9]{4,12}$"
                   title="Prosimy nie używać nawiasów, liczby oddzielić spacjami lub myślnikami" required>
        </div>
        <div class="form-group col-4">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="bla-bla@bla.com" maxlength="100"
                   pattern="^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$"
                   title="Prosimy podać poprawny e-mail adres" required>
        </div>
        <div class="form-group col-4">
            <label for="DateOfBirth">Data urodzenia</label>
            <input class="form-control" type="date" min="1900-01-01" max="2018-01-01" id="DateOfBirth" required>
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
            <input type="text" class="form-control" id="inputCity" placeholder="City" maxlength="100"
                   pattern="^[a-zżćńóąęA-ZŻĆŃĄĘÓ]+(?:[\s-][a-zżćńóąęA-ZŻĆŃĄĘÓ]+)*$"
                   title="Prosimy wprowadzić obecną nazwę miasta" required>
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
