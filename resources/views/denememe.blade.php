<?php

use App\Models\Doctor;
$dok = $doktorlar;
$doctors = Doctor::all();
$docs = [];
$newDoctors = [];
//echo 'doktor:'.$dok->post_title;
foreach($doctors as $doc){
    $docs[] = $doc->getFullName();
}
//print_r($docs);
foreach($doktorlar as $_doktor){
    if(in_array($_doktor->post_title,$docs)){
        echo 'Old Doktor: '.$_doktor->post_title;
    }else{
        echo 'New Doktor: '.$_doktor->post_title;
        $newDoctors[] = $_doktor;
    }
    echo '<br>';
}



foreach($newDoctors as $newDoctor){
    foreach($newDoctor->meta as $d){
    
        if(substr($d->meta_key,0,1) != "_"){
            print_r($d->meta_key.': '.$d->meta_value.'<br>');
        }
    }
    echo '<hr>';
}


?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>
<body>

    <h2>Doctor Table</h2>

    <table>
    <tr>
        <th>Doktor Name</th>
        <th>Title</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
    </tr>
    <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
    </tr>
    <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
    </tr>
    <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
    </tr>
    <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Italy</td>
    </tr>
    </table>

</body>
</html>

