<?php


$proses = $_GET['proses'];
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$matkul = $_GET['matkul'];
$nilai_tugas = $_GET['nilai_tugas'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];

function jumlah_nilai($tugas, $uts, $uas){
    $n_tugas = 0.35 * $tugas;
    $n_uts = 0.30 * $uts;
    $n_uas = 0.35 * $uas;
    $n_akhir = $n_tugas + $n_uts + $n_uas;
    
    return $n_akhir;
}

function grade($nilai_grade){
    if($nilai_grade <= 35){
        $grade = "E";
    }
    elseif($nilai_grade > 35 && $nilai_grade <= 55){
        $grade = "D";
    }
    elseif($nilai_grade > 55 && $nilai_grade <= 69){
        $grade = "C";
    }
    elseif($nilai_grade > 69 && $nilai_grade <= 84){
        $grade = "B";
    }
    elseif($nilai_grade > 84 && $nilai_grade <= 100){
        $grade = "A";
    }
    else{
        $grade = "Tidak Ada";
    }
    return $grade;
}
function predikat($n_grade){
    if($n_grade == "A"){
        $pre = "Sangat Memuaskan";
    }
    elseif ($n_grade == "B") {
        $pre = "Memuaskan";
    }
    elseif ($n_grade == "C") {
        $pre = "Cukup";
    }
    elseif ($n_grade == "D") {
        $pre = "Kurang";
    }
    elseif ($n_grade == "E") {
        $pre = "Sangat Kurang";
    }
    else{
        $pre = "Tidak Ada";
    }
    return $pre;
}
function kelulusan($nilai_akhir){
    if($nilai_akhir > 55){
        $lulus = 'Lulus';
    }
    else{
        $lulus = 'Tidak Lulus';
    }
    return $lulus;
}
if(!empty($proses)){
    $a = jumlah_nilai($nilai_uts, $nilai_uas, $nilai_tugas);
    $b = kelulusan($a);
    $c = grade($a);
    $d = predikat($c);
}
else{
    echo 'Masukkan Data';
}


?>
<h3>Daftar Nilai Siswa</h3>
<table border="1" width = "30%">
<tr>
                        <td>NIM</td><td> : </td><td><?php echo $nim?></td>
                    </tr>

                    <tr>
                        <td>Nama</td><td> : </td><td><?php echo $nama?></td>
                    </tr>

                    <tr>
                        <td>Matakuliah</td><td> : </td><td><?php echo $matkul?></td>
                    </tr>

                    <tr>
                        <td>Nilai Tugas</td><td> : </td><td><?php echo $nilai_tugas?></td>
                    </tr>

                    <tr>
                        <td>Nilai UTS</td><td> : </td><td><?php echo $nilai_uts?></td>
                    </tr>

                    <tr>
                        <td>Nilai UAS</td><td> : </td><td><?php echo $nilai_uas?></td>
                    </tr>

                    <tr>
                        <td>Nilai Akhir</td><td> : </td><td><?php echo $a?></td>
                    </tr>

                    <tr>
                        <td>Grade</td><td> : </td><td><?php echo $c?></td>
                    </tr>

                    <tr>
                        <td>Predikat</td><td> : </td><td><?php echo $d?></td>
                    </tr>

                    <tr>
                        <td>Status</td><td> : </td><td><?php echo $b?></td>
                    </tr>

</table>
