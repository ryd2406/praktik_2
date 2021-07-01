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


$ns1= ['id'=>1,'nama'=>'aldy','nim'=>'01101','matkul'=>'DDP','uts'=>80,'uas'=>80,'tugas'=>80 ,'akhir'=>'80', 'grade'=>'B', 'predikat'=>'Memuaskan', 'status'=>'Lulus'];
$ns2= ['id'=>2,'nama'=>'ranbo','nim'=>'01120','matkul'=>'WEB1','uts'=>80,'uas'=>80,'tugas'=>80,'akhir'=>'80', 'grade'=>'B', 'predikat'=>'Memuaskan', 'status'=>'Lulus'];
$ns3= ['id'=>3,'nama'=>'wann','nim'=>'01130','matkul'=>'JARKOM','uts'=>80,'uas'=>80,'tugas'=>80,'akhir'=>'80', 'grade'=>'B', 'predikat'=>'Memuaskan', 'status'=>'Lulus'];
$ns4= ['id'=>4,'nama'=>'albert','nim'=>'01140','matkul'=>'PPKN','uts'=>80,'uas'=>80,'tugas'=>80,'akhir'=>'80', 'grade'=>'B', 'predikat'=>'Memuaskan', 'status'=>'Lulus'];
$ns5 = ['nama'=>$nama, 'nim' => $nim,  'matkul'=>$matkul,  'uts'=>$nilai_uts, 'uas'=>$nilai_uas, 'tugas'=>$nilai_tugas, 'akhir'=>$a, 'grade'=>$c, 'predikat'=>$d, 'status'=>$b];
$ar_nilai = [$ns1,$ns2,$ns3,$ns4,$ns5];

?>
<h3>Daftar Nilai Siswa</h3>

<table border="1" width="100%" style= "">
    <thead>
        <tr>
            <th>No</th><th>NAMA</th><th>NIM</th><th>MATKUL</th><th>UTS</th><th>UAS</th><th>Tugas</th><th>Nilai akhir</th><th>grade</th><th>predikat</th><th>status</th>
        </tr>
    </thead>


    <tbody>
    <?php
        $nomor=1;
        foreach ($ar_nilai as $ns) {
            echo '<tr><td>'.$nomor. '</td>';
            echo '<td>'.$ns['nama'].'</td>';
            echo '<td>'.$ns['nim']. '</td>';
            echo '<td>'.$ns['matkul'].'</td>';
            echo '<td>'.$ns['uts']. '</td>';
            echo '<td>'.$ns['uas']. '</td>';
            echo '<td>'.$ns['tugas']. '</td>';
            echo '<td>'.number_format($ns['akhir'],2,',','.'). '</td>';
            echo '<td>'.$ns['grade']. '</td>';
            echo '<td>'.$ns['predikat']. '</td>';
            echo '<td>'.$ns['status']. '</td>';

            echo '<tr/>';
            $nomor++;
        }
        // echo '<tr><td>'.$nomor. '</td>';
        // echo '<td>'.$_GET['name'].'</td>';
        // echo '<td>'.$_GET['nim'].'</td>';
        // echo '<td>'.$_GET['matkul'].'</td>';
        // echo '<td>'.$_GET['nilai_uts'].'</td>';
        // echo '<td>'.$_GET['nilai_uas'].'</td>';
        // echo '<td>'.$_GET['nilai_tugas'].'</td>';
        // echo '<td>'.number_format($nilai_akhir,2,',','.'). '</td>';

        
        // echo '<td>' .$data['grade']. '</td>';
        // echo '<tr/>';
        // $nomor++;
        
    ?>
    </tbody>

</table>
