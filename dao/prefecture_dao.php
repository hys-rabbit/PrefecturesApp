<?php

require_once 'dao.php';

class PrefectureDAO extends DAO
{
    private $order = Array();

    /**
     * コンストラクタ
     */
    public function __construct ()
    {
        parent::__construct('mamp');       
    }

    /**
     * 全件検索
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
        
        if (count($this->order)) {
            $sql .= "order by {$this->order['column']} {$this->order['type']} ";
        }

        return parent::select($sql, $this->order);
    }

    /**
     * ソート項目設定
     */
    public function setOrder ($column, $type)
    {
        $this->order['column'] = $column;
        $this->order['type'] = $type;
    }
}

?>