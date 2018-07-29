<?php
function _autonumber($field, $table, $Parse, $Digit_Count) {
    $NOL = "0";
    $query = "Select " . $field . " from " . $table . " where " . $field . " like '" . $Parse . "%' order by " . $field . " DESC LIMIT 0,1";

    // CODEIGNITER
    $identifier = &get_instance();
    $data = $identifier->db->query($query)->result_array();

    // YII Way
    // $identifier = \Yii::$app->db;
    // $data = $identifier->createCommand($query)->queryOne();
    $counter = 2;
    if (sizeof($data) == 0)
    {
      while ($counter < $Digit_Count):
        $NOL = "0" . $NOL;
        $counter++;
      endwhile;
      return $Parse . $NOL . "1";
    }
    else
    {
      //CODE IGNITER
      $R = $data[0][$field];
      // YII
      // $R = $data[$field];
      $K = sprintf("%d", substr($R, -$Digit_Count));
      $K = $K + 1;
      $L = $K;
      while (strlen($L) != $Digit_Count)
      {
        $L = $NOL . $L;
      }
      return $Parse . $L;
    }
  } // end of function


  ?>

  <?php
	//cara manggil di controlller
	$now = "IKU-".date('Ymd');
		$data['auto_number'] = $this->M_menu->_autonumber('id_iku','tbl_iku',$now,3);

  ?>
