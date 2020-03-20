<?php
function csv_to_variable($csv_url) {
  $lines = file($csv_url);
  global $lang;
  foreach($lines as $n => $line){
    $lines_csv .= $line;
    $split_chariot = preg_split('/\R/', $lines_csv);
    $data_csv = explode(';',$split_chariot[$n]);
    $nbr_columns = count($data_csv);
    $slug = $data_csv[0];
    for ($i=0; $i < $nbr_columns; $i++) {
      if($n === 0) {
        $array_data[] = $data_csv;
        $langage= array($array_data[0][$i]);
        $langue .= $langage[$n];
        $langue .= ",";
        $langage = explode(',',$langue);
      }
      $$langage[$i] = $data_csv[$i];
      $data = array($slug => $$langage[$i]);
      $lang[$slug][$langage[$i]] .= $data[$slug];
    }
  }
  fclose($lines);
}