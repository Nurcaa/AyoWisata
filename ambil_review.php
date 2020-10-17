<?php
include 'koneksi.php';
$output='';
$query = "SELECT * FROM review WHERE parent_id = '0' ORDER BY id_review DESC";
$dewan1 = $db1->prepare($query);
$dewan1->execute();
$res1 = $dewan1->get_result();
while ($row = $res1->fetch_assoc()) {
  $output .= '
    <div class="media border p-3 mb-2">
      <img src="images/avatar1.png" alt="foto-user" class="mr-3 mt-3 rounded-circle" style="width:45px;">
      <div class="media-body">
      <div class="row">
        <div class="col-sm-10">
          <h5><b>'.$row["pengirim"].'</b> <small> Posted on <i>'.$row["tanggal"].'</i></small></h5>
          <p>'.$row["isi_review"].'</p>
        </div>
        <div class="col-sm-2" align="right">
          <button type="button" class="btn btn-primary reply" id="'.$row["id_review"].'">Reply</button>
        </div>
      </div>
      </div>
    </div>
  ';
  $output .= ambil_reply($db1, $row["id_review"]);
}

echo $output;

function ambil_reply($db1, $parent_id = 0, $marginleft = 0)
{
  $output='';
  $query = "SELECT * FROM review WHERE parent_id=?";
  $dewan1 = $db1->prepare($query);
  $dewan1->bind_param("s", $parent_id);
  $dewan1->execute();
  $res1 = $dewan1->get_result();

  $count = $res1->num_rows;
  if($parent_id == 0) {
    $marginleft = 0;
  } else {
    $marginleft = $marginleft + 48;
  }
  
  if($count > 0){
    while ($row = $res1->fetch_assoc()) {
      $output .= '
        <div class="media border p-3 mb-2" style="margin-left:'.$marginleft.'px">
          <img src="images/avatar2.png" alt="foto-user" class="mr-3 mt-3 rounded-circle" style="width:45px;">
          <div class="media-body">
          <div class="row">
            <div class="col-sm-10">
              <h5><b>'.$row["pengirim"].'</b> <small> Posted on <i>'.$row["tanggal"].'</i></small></h5>
              <p>'.$row["isi_review"].'</p>
            </div>
            <div class="col-sm-2" align="right">
              <button type="button" class="btn btn-primary reply" id="'.$row["id_review"].'">Reply</button>
            </div>
          </div>
          </div>
        </div>
      ';
      $output .= ambil_reply($db1, $row["id_review"], $marginleft);
    }
  }
  return $output;
}
?>
