<?php

namespace App\Core\Database;

use PDO, Exception;

use App\Core\App;

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function insert($table, $parameters) {
        $sql = sprintf (
            'INSERT INTO %s (%s) VALUES (%s)', $table, implode(', ',array_keys($parameters)), ':' . implode(', :', array_keys($parameters))
        );

        try { 
            
            $stat = $this->pdo->prepare($sql);

            $stat->execute($parameters);

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function remove($table, $id) {

        $sql = sprintf (
            "DELETE FROM %s WHERE %s", $table, "id = :id" 
        );

        try { 
      
            $stat = $this->pdo->prepare($sql);

            $stat->execute($id);

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function edit($table, $id, $parameters) {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s;',
            $table,
            implode(', ', array_map(function ($parameters){
                return "{$parameters} = :{$parameters}";
            }, array_keys($parameters))), 
            'id = :id'
        );

        $parameters['id'] = $id;

        try { 

            $stat = $this->pdo->prepare($sql);
            
            $stat->execute($parameters);

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function show($table, $id) {
        $sql = sprintf (
            "SELECT Nome, Email, Senha FROM %s WHERE %s", $table, "id = :id"
        );

        try { 
            
            $stat = $this->pdo->prepare($sql);

            $stat->execute($id);

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function contador($table) {
        $sql = "SELECT count(*) FROM $table";
        
        try { 
            
            $stat = $this->pdo->prepare($sql);
    
            $stat->execute();

            return intval($stat->Fetch(PDO::FETCH_NUM)[0]);

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectPag($table, $inicial_limit, $rows) {
        $sql = "SELECT * FROM {$table} LIMIT {$inicial_limit}, {$rows}";

        try { 
            
            $stat = $this->pdo->prepare($sql);
    
            $stat->execute();
    
            return $stat->fetchAll(PDO::FETCH_OBJ);

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

}
