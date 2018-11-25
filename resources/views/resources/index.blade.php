@extends('layouts.app')

@section('content')
    <div class="title"><h5>Resources</h5></div>

    <!-- Dynamic table -->
    <div class="table">
        <div class="head"><h5 class="iFrames">List</h5></div>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="text-align: center;">
            <thead>
            <tr>
                <th style="width: 10%;">ID</th>
                <th style="width: 20%;">File Name</th>
                <th style="width: 40%;">Description</th>
                <th style="width: 15%;">Date Added</th>
                <th style="width: 15%;">Option</th>
            </tr>
            </thead>
            <tbody>
            <tr class="gradeA">
                <td>3</td>
                <td>sms_vip.rar</td>
                <td>GMOD script for buying vip trough sms</td>
                <td class="center">22:51:13 25-11-2018</td>
                <td class="center">X</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection