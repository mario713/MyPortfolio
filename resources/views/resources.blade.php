@extends('layouts.app')

@section('content')
    <div class="title"><h5>Resources</h5></div>

    <!-- Dynamic table -->
    <div class="table">
        <div class="head"><h5 class="iFrames">Dynamic table</h5></div>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
            <thead>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
            </tr>
            </thead>
            <tbody>
            <tr class="gradeX">
                <td>Trident</td>
                <td>Internet
                    Explorer 4.0</td>
                <td>Win 95+</td>
                <td class="center">4</td>
                <td class="center">X</td>
            </tr>
            <tr class="gradeC">
                <td>Trident</td>
                <td>Internet
                    Explorer 5.0</td>
                <td>Win 95+</td>
                <td class="center">5</td>
                <td class="center">C</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection