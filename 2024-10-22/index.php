<?php

    $judul = "Curriculum Vitae";

    $sekolah = "Sekolah";
    $sekolahs = "SDN Sidokerto, SMPN 2 Buduran, SMKN 2 Buduran";

    $identitas = "Identitas";
    $identitases = [
        "Gumilang Tirtha Perdana",
        "Jl. Sono Indah, Sidokerto, Rt.02/05",
        "tirthaperdana@gmail",
        "@Gumilang"
    ];
    
    $skills = [ 
        "HTML Expert",
        "CSS Expert",
        "PHP Intermediate",
        "JavaScript Newbie"
    ];

    $sekolahs = [
        "TK Darussalam",
        "SDN Sidokerto",
        "SMP Negeri 2 Buduran",
        "SMK Negeri 2 Buduran"
    ];

    $hobi = "Hobi";
    
    $hobies = [
        "Ngoding",
        "Berenang",
        "Bermain hp"
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="kelas1">
            <h1 style="color: white; "><?= $judul ?></h1>
        </div>
        <div class="identitas">
            <table style="margin-top: 35px;">
                <thead>
                    <tr>
                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><strong>Identitas</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">Nama :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $identitases[0] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">Alamat :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $identitases[1] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">Email :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $identitases[2] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">add :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $identitases[3] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="skill">
            <table style="margin-top: 20px;">
                <thead>
                    <tr>
                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><strong>My Skills</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">Kemampuan :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $skills[0] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">Kemampuan :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $skills[1] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">Kemampuan :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $skills[2] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">Kemampuan :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $skills[3] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="sekolah">
            <table style="margin-top: 20px;">
                <thead>
                    <tr>
                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><strong>Sekolah</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">TK :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $sekolahs[0] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">SD :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $sekolahs[1] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">SMP :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $sekolahs[2] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">SMK :</td>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $sekolahs[3] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="hobi">
            <table style="margin-top: 50px;">
                <thead>
                    <tr>
                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">Hobi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $hobies[0] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $hobies[1] ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; "><?= $hobies[2] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>