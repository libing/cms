<?php

//����ͼ
$focus = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'10'),array('id'=>'DESC'),array('0'=>'5'));
//�ھ�����
$winner = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'12'),array('id'=>'DESC'),array('0'=>'1'));
//����ͼƬ
$roll = $DBopera->data_query(array('*'),array('data'),array('cateId'=>'17'),array('id'=>'DESC'),array('0'=>'9'));


include_once $template.'li_header.php';
include_once $template.'li_index.php';
include_once $template.'li_footer.php';
