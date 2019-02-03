<?php

abstract class DAO
{
    private $hostname;
    private $port;
    private $username;
    private $password;

    private $pdo;

    /**
     * コンストラクタ
     */
    protected function __construct ($dbname)
    {
        $this->hostname = getenv('DB_HOST');
        $this->port = getenv('DB_PORT');
        $this->username = getenv('DB_USER');
        $this->password = getenv('DB_PASS');

        try
        {
            $this->pdo = new PDO("mysql:dbname={$dbname};host={$this->hostname};port={$this->port}charset=utf8", $this->username, $this->password);
        }
        catch (PDOException $e)
        {
            throw new Exception('Error: Cannot open database.');
        }
    }

    /**
     * 検索クエリ
     */
    protected function select ($sql)
    {
        $data = [];
        try
        {
            $statement = $this->pdo->prepare($sql);
            if ($statement->execute())
            {
                $data = $statement->fetchAll();
            }
        }
        catch (PDOException $e)
        {
            throw new Exception('Error: Query failed. SQL: ' . $sql);
        }
        return $data;
    }
}

?>