<?php

require_once 'dao.php';
require_once 'prefecture_entity.php';

/**
 * 都道府県テーブル接続クラス
 */
class PrefectureDAO extends DAO
{
    private $order_column = null;
    private $order_type = 'asc';

    /**
     * コンストラクタ
     */
    public function __construct ()
    {
        parent::__construct('mamp');       
    }

    /**
     * 検索
     */
    public function findAll ()
    {
        $sql  = "select               ";
        $sql .= "  name_kanji,        ";
        $sql .= "  name_hiragana,     ";
        $sql .= "  name_romanization, ";
        $sql .= "  population         ";
        $sql .= "from                 ";
        $sql .= "  t_prefectures      ";
        
        if (isset($this->order_column))
        {
            $sql .= "order by {$this->order_column} {$this->order_type} ";
        }

        $prefectures = parent::select($sql);
        $prefectureEntityArray = Array();
        foreach($prefectures as $prefecture)
        {
            $prefectureEntity = new PrefectureEntity();
            $prefectureEntity->nameKanji = $prefecture['name_kanji'];
            $prefectureEntity->nameHiragana = $prefecture['name_hiragana'];
            $prefectureEntity->nameRomanization = $prefecture['name_romanization'];
            $prefectureEntity->population = $prefecture['population'];
            array_push($prefectureEntityArray, $prefectureEntity);
        }

        return $prefectureEntityArray;
    }

    public function setOrderByHiragana () {
        $this->order_column = 'name_hiragana';
    }
    
    public function setOrderByRomanization () {
        $this->order_column = 'name_romanization';
    }
    
    public function setOrderByPopulation () {
        $this->order_column = 'population';
    }

    public function setDesc () {
        $this->order_type = 'desc';
    }

}

?>