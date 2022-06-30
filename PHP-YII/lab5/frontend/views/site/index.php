<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php
    $categories = [
        1 => ['id' => 1, 'parent_id' => 0, 'name' => "Sport"],
        2 => ['id' => 2, 'parent_id' => 6, 'child_id' => 0,'name' => "Ragtime"],
        3 => ['id' => 3, 'parent_id' => 0, 'name' => "Art"],
        4 => ['id' => 4, 'parent_id' => 1, 'name' => "Summer Sports"],
        5 => ['id' => 5, 'parent_id' => 8,'child_id' => 0, 'name' => "Ski"],
        6 => ['id' => 6, 'parent_id' => 9, 'name' => "Jazz"],
        7 => ['id' => 7, 'parent_id' => 4,'child_id' => 0, 'name' => "Basketball"],
        8 => ['id' => 8, 'parent_id' => 1, 'name' => "Winter Sports"],
        9 => ['id' => 9, 'parent_id' => 3, 'name' => "Music"],
        10 => ['id' => 10, 'parent_id' => 6,'child_id' => 0, 'name' => "Swing"],
        11 => ['id' => 11, 'parent_id' => 9, 'name' => "Rock"],
        12 => ['id' => 12, 'parent_id' => 4,'child_id' => 0, 'name' => "Football"],
        13 => ['id' => 13, 'parent_id' => 9, 'name' => "Blues"],
        14 => ['id' => 14, 'parent_id' => 3, 'name' => "Theatre"],
        15 => ['id' => 15, 'parent_id' => 8, 'child_id' => 0,'name' => "Bobsleigh"],
    ];

    function getTree($arr, $used_arr, $in = 0)
    {
            echo '<ul>';
            foreach ($arr as $item) {
                if (!in_array($item['id'], $used_arr)) {
                    if ($item['parent_id'] == $in) {
                        $used_arr[] = $item['id'];
                        echo '<li>' . $item['name'];
                        if($item['child_id']!==0)
                        getTree($arr, $used_arr, $item['id']);
                        echo '</li> ';
                    }
                }
            }
            echo '</ul>';
    }
    getTree($categories, []);
    ?>

</div>
