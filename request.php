<?php
require_once "vendor/autoload.php";

use Matematika\Factory\LogikaFactory;
/*
$baru = new LogikaFactory;
$a = $baru->konjungsi();
echo'<pre>';
print_r($a->hasil());
echo'</pre>';
*/
/*
echo count($_POST['soalP']);
print_r($_POST['soalP']);
*/
$arr = [];
$loop = 0;
for ($i=0; $i < count($_POST['soalP']); $i++) {
  for ($y=0; $y < 2; $y++) {
    $arr[$i][$_POST['soalP'][$i]] = $_POST['jawabanP'][$i];
    $arr[$i][$_POST['soalQ'][$i]] = $_POST['jawabanQ'][$i];
  }
}

/*
for ($i=0; $i < count($_POST['soalP']); $i++) {
  if ($loop > 2) {
    $loop = 0;
  }
  for ($i=0; $i < 2; $i++) {
    if ($loop < 2) {
      $arr[$loop][$_POST['soalP'][$i]] = $_POST['jawabanP'][$i];
      $arr[$loop][$_POST['soalQ'][$i]] = $_POST['jawabanQ'][$i];
    }
  }
  $loop++;
}*/
/*
echo '<br />';
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<br />';
echo '<hr />';
echo '<br />';
*/
$baru = new LogikaFactory($arr);
$a = $baru->negasibiimplikasi();
/*
echo'<pre>';
print_r($a->hasil());
echo'</pre>';
echo '<br />';
echo '<hr />';
echo '<br />';
echo '<h3>Gabungan</h3>';
*/
$konjungsi = $baru->konjungsi()->hasil();
$disjungsi = $baru->disjungsi()->hasil();
$implikasi = $baru->implikasi()->hasil();
$biimplikasi = $baru->biimplikasi()->hasil();
$negasikonjungsi = $baru->negasikonjungsi()->hasil();
$negasidisjungsi = $baru->negasidisjungsi()->hasil();
$negasiimplikasi = $baru->negasiimplikasi()->hasil();
$negasibiimplikasi = $baru->negasibiimplikasi()->hasil();
$negasi = $baru->negasi();
 ?>

          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th>No</th>
                <th>P</th>
                <th>Q</th>
                <th>~P</th>
                <th>~Q</th>
                <th>(P &and; Q)</th>
                <th>(P &or; Q)</th>
                <th>(P => Q)</th>
                <th>(P <=> Q)</th>
                <th>(~P &or; ~Q)</th>
                <th>(~P &and; ~Q)</th>
                <th>(P &and; ~Q)</th>
                <th>~(P <=> Q)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              for ($i=0; $i <count($konjungsi); $i++) {
                echo'<tr>
                      <td>'. ( $i + 1) .'</td>';

                foreach ($konjungsi[$i] as $key2 => $value2) {
                  if ($key2 == 'P') {
                    echo'<td>'.$value2.'</td>';
                  }
                  if ($key2 == 'Q') {
                    echo'<td>'.$value2.'</td>';
                  }

                }

                foreach ($negasi[$i] as $key2 => $value2) {
                  $value2 = ($value2 == 1) ? "Benar" : "Salah";
                  if ($key2 === '~P') {
                    echo'<td>' . $value2 .'</td>';
                  }
                  if ($key2 === '~Q') {
                    echo'<td>'.$value2.'</td>';
                  }
                }

                foreach ($konjungsi[$i] as $key2 => $value2) {
                  if ($key2 == 'konjungsi') {
                    echo'<td>'.$value2.'</td>';
                  }
                }

                foreach ($disjungsi[$i] as $key2 => $value2) {
                  if ($key2 == 'disjungsi') {
                    echo'<td>'.$value2.'</td>';
                  }
                }
                foreach ($implikasi[$i] as $key2 => $value2) {
                  if ($key2 == 'implikasi') {
                    echo'<td>'.$value2.'</td>';
                  }
                }
                foreach ($biimplikasi[$i] as $key2 => $value2) {
                  if ($key2 == 'biimplikasi') {
                    echo'<td>'.$value2.'</td>';
                  }
                }
                foreach ($negasikonjungsi[$i] as $key2 => $value2) {
                  if ($key2 == 'negasikonjungsi') {
                    echo'<td>'.$value2.'</td>';
                  }
                }
                foreach ($negasidisjungsi[$i] as $key2 => $value2) {
                  if ($key2 == 'negasidisjungsi') {
                    echo'<td>'.$value2.'</td>';
                  }
                }
                foreach ($negasiimplikasi[$i] as $key2 => $value2) {
                  if ($key2 == 'negasiimplikasi') {
                    echo'<td>'.$value2.'</td>';
                  }
                }
                foreach ($negasibiimplikasi[$i] as $key2 => $value2) {
                  if ($key2 == 'negasibiimplikasi') {
                    echo'<td>'.$value2.'</td>';
                  }
                }


                echo'</tr>';
              }



               ?>

            </tbody>
          </table>

<?php
echo'<pre>';
print_r($negasikonjungsi);
echo'</pre>';
echo '<hr />';
echo'<pre>';
print_r($baru->negasi());
echo'</pre>';
/*
foreach ($negasi[$i] as $key => $value) {
  if ($key2 == '~P') {
    echo'<td>'.$value2.'</td>';
  }
  if ($key2 == '~Q') {
    echo'<td>'.$value2.'</td>';
  }
}

foreach ($konjungsi[$i] as $key2 => $value2) {
  if ($key2 == 'konjungsi') {
    echo'<td>'.$value2.'</td>';
  }
}

foreach ($disjungsi[$i] as $key2 => $value2) {
  if ($key2 == 'disjungsi') {
    echo'<td>'.$value2.'</td>';
  }
}
foreach ($implikasi[$i] as $key2 => $value2) {
  if ($key2 == 'implikasi') {
    echo'<td>'.$value2.'</td>';
  }
}
foreach ($biimplikasi[$i] as $key2 => $value2) {
  if ($key2 == 'biimplikasi') {
    echo'<td>'.$value2.'</td>';
  }
}
foreach ($negasikonjungsi[$i] as $key2 => $value2) {
  if ($key2 == 'negasikonjungsi') {
    echo'<td>'.$value2.'</td>';
  }
}
foreach ($negasidisjungsi[$i] as $key2 => $value2) {
  if ($key2 == 'negasidisjungsi') {
    echo'<td>'.$value2.'</td>';
  }
}
foreach ($negasiimplikasi[$i] as $key2 => $value2) {
  if ($key2 == 'negasiimplikasi') {
    echo'<td>'.$value2.'</td>';
  }
}
foreach ($negasibiimplikasi[$i] as $key2 => $value2) {
  if ($key2 == 'negasibiimplikasi') {
    echo'<td>'.$value2.'</td>';
  }
}

*/
 ?>
