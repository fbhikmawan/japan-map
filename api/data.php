<?php
// Sample data preparation
$pref = array(
  1 => '北海道', 2 => '青森県', 3 => '岩手県', 4 => '宮城県', 5 => '秋田県',
  6 => '山形県', 7 => '福島県', 8 => '茨城県', 9 => '栃木県', 10 => '群馬県',
  11 => '埼玉県', 12 => '千葉県', 13 => '東京都', 14 => '神奈川県', 15 => '新潟県',
  16 => '富山県', 17 => '石川県', 18 => '福井県', 19 => '山梨県', 20 => '長野県',
  21 => '岐阜県', 22 => '静岡県', 23 => '愛知県', 24 => '三重県', 25 => '滋賀県',
  26 => '京都府', 27 => '大阪府', 28 => '兵庫県', 29 => '奈良県', 30 => '和歌山県',
  31 => '鳥取県', 32 => '島根県', 33 => '岡山県', 34 => '広島県', 35 => '山口県',
  36 => '徳島県', 37 => '香川県', 38 => '愛媛県', 39 => '高知県', 40 => '福岡県',
  41 => '佐賀県', 42 => '長崎県', 43 => '熊本県', 44 => '大分県', 45 => '宮崎県',
  46 => '鹿児島県', 47 => '沖縄県'
);
$category = array(
  array(
      'name' => 'カテゴリー1',
      'data' => array(
          1 => 291, 2 => 19, 3 => 50, 4 => 87, 5 => 65,
          6 => 30, 7 => 45, 8 => 120, 9 => 95, 10 => 60,
          11 => 310, 12 => 215, 13 => 500, 14 => 450, 15 => 80,
          16 => 40, 17 => 35, 18 => 25, 19 => 55, 20 => 90,
          21 => 100, 22 => 150, 23 => 400, 24 => 130, 25 => 75,
          26 => 200, 27 => 480, 28 => 350, 29 => 85, 30 => 65,
          31 => 20, 32 => 15, 33 => 110, 34 => 140, 35 => 95,
          36 => 50, 37 => 45, 38 => 70, 39 => 30, 40 => 300,
          41 => 60, 42 => 55, 43 => 120, 44 => 65, 45 => 40,
          46 => 75, 47 => 3
      )
  ),
  array(
      'name' => 'カテゴリー2',
      'data' => array(
          1 => 111, 2 => 39, 3 => 45, 4 => 78, 5 => 55,
          6 => 25, 7 => 35, 8 => 110, 9 => 85, 10 => 50,
          11 => 290, 12 => 205, 13 => 480, 14 => 430, 15 => 70,
          16 => 35, 17 => 30, 18 => 20, 19 => 45, 20 => 80,
          21 => 90, 22 => 140, 23 => 380, 24 => 120, 25 => 65,
          26 => 190, 27 => 460, 28 => 330, 29 => 75, 30 => 55,
          31 => 15, 32 => 10, 33 => 100, 34 => 130, 35 => 85,
          36 => 45, 37 => 40, 38 => 60, 39 => 25, 40 => 280,
          41 => 50, 42 => 45, 43 => 110, 44 => 55, 45 => 35,
          46 => 65, 47 => 24
      )
  )
);

// Output the data as JSON
header('Content-Type: application/json');
echo json_encode(array('pref' => $pref, 'category' => $category), JSON_UNESCAPED_UNICODE);
?>