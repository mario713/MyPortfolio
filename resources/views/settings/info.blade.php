@extends('layouts.app')

@section('content')
    <div class="title"><h5>Ustawienia Konta</h5></div>

    <!-- Headings -->
    <div class="widget first">
        <div class="head"><h5 class="iInfo">Informacje</h5></div>

        <form action="#" method="post" class="mainForm">
            <fieldset>
                <div class="rowElem"><label>Imie:</label><div class="formRight"><input type="text"></div></div>
                <div class="rowElem"><label>Nazwisko:</label><div class="formRight"><input type="text"></div></div>
                <div class="submitForm"><input type="submit" value="Aktualizuj" class="basicBtn" /></div>
            </fieldset>
        </form>
    </div>
@endsection