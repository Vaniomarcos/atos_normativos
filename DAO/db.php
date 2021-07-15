<?php
class DB
{
    static $conn;
    static $stmt;
    static function query($sql, $dados = array())
    {
        try {
            self::$conn = new PDO('sqlite:C:\Users\vanio\Desktop\Atos Normativos\database.sqlite');
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            self::$stmt = self::$conn->prepare($sql);
            return self::$stmt->execute($dados);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    static function fetch()
    {
        return self::$stmt->fetch();
    }
}
