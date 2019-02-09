<?php

require_once 'model/prefecture_dao.php';
require_once 'model/prefecture_entity.php';

// セレクトボックス定数
$selectBox = Array(
    Array('value' => '0', 'selected' => '', 'contents' => ' --------------- '),
    Array('value' => '1', 'selected' => '', 'contents' => ' 読み（昇順） '),
    Array('value' => '2', 'selected' => '', 'contents' => ' 読み（降順） '),
    Array('value' => '3', 'selected' => '', 'contents' => ' ローマ字（昇順） '),
    Array('value' => '4', 'selected' => '', 'contents' => ' ローマ字（降順） '),
    Array('value' => '5', 'selected' => '', 'contents' => ' 人口（昇順） '),
    Array('value' => '6', 'selected' => '', 'contents' => ' 人口（降順） ')
);

// クエリパラメータの取得
$sort = $_GET['sort'];
$refine = $_GET['refine'];

// データ取得
$dao = new PrefectureDAO();

$selectBoxIndex = array_search($sort, array_column($selectBox, 'value'));
if ($selectBoxIndex && $selectBoxIndex != 0)
{
    switch ($sort) {
        case '1':
            $dao->setOrderByHiragana();
            break;
        case '2':
            $dao->setOrderByHiragana();
            $dao->setDesc();
            break;
        case '3':
            $dao->setOrderByRomanization();
            break;
        case '4':
            $dao->setOrderByRomanization();
            $dao->setDesc();
            break;
        case '5':
            $dao->setOrderByPopulation();
            break;
        case '6':
            $dao->setOrderByPopulation();
            $dao->setDesc();
            break;
    }

    $selectBox[$selectBoxIndex]['selected'] = 'selected';
}

$prefectureEntityArray = $dao->findAll();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>MAMP Lessons</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">

        <h1>都道府県別人口一覧</h1>

        <div style="padding: 10px;">
            <!-- 絞り込み検索テキストボックス -->
            <img src="assets/refine_icon.png" height="28px" alt="絞り込み検索" />&ensp;
            <input name="refine" placeholder="絞り込み検索" type="text" value="<?php echo $refine ?>" />&ensp;
            <!-- ソートセレクトボックス -->
            <img src="assets/sort_icon.png" height="28px" alt="ソート検索" />&ensp;
            <select name="sort" >
            <?php foreach ($selectBox as $item) { ?>
                <option value="<?php echo $item['value'] ?>" <?php echo $item['selected'] ?> ><?php echo $item['contents'] ?></option>
            <?php } ?>
            </select>
        </div>

        <!-- 都道府県テーブル -->
        <table id="prefectures_data" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">都道府県</th>
                    <th scope="col">読み</th>
                    <th scope="col">ローマ字</th>
                    <th scope="col">人口（2018/10/01時点 :<a href="https://uub.jp/rnk/p_k.html" target="_brank">参考</a>）</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($prefectureEntityArray as $prefectureEntity) { ?>
                <tr>
                    <td><?php echo $prefectureEntity->nameKanji ?></td>
                    <td><?php echo $prefectureEntity->nameHiragana ?></td>
                    <td><?php echo $prefectureEntity->nameRomanization ?></td>
                    <td><?php echo number_format($prefectureEntity->population) ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>
    <script typt="text/javascript" src="js/scripts.js"></script>
</body>
</html>