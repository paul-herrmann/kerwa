<?php

class Db{

    private $link;
    private $result;

    public function __construct($dbfile)
    {
        if(file_exists($dbfile))
        {
            $this->link = new PDO("sqlite:$dbfile");
        }else
        {
            print 'Plik bazy danych nie istnieje';
        }
    }

    public function __destruct()
    {
        $this->link = null;
    }
    
    public function query($query)
    {
        $sth = $this->link->prepare($query);
        $sth->execute();
        return $sth;
    }

    public function getData($query)
    {
        $sth = $this->link->prepare($query);
        $sth->execute();
        $this->result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $this->result;
    }

    public function exec($query, $arr)
    {
        $sth = $this->link->prepare($query);
        $sth->execute($arr);
    }


    public function rowCount()
    {
        return count($this->result);
    }

}


?>
