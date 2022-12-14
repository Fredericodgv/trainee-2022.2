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

    public function selectAll($table)
    {
        $sql = "select * from ($table)";
        
        try{
            $stat = $this->pdo->prepare($sql);
            
            $stat->execute();
            
            return $stat->selectAll(PDO::FETCH_CLASS);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    
    public function insert($table, $parametros)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parametros)),
            ':' . implode(', :', array_keys($parametros))
        );

        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parametros);
        } catch (Exception $e){
            die("An error ocurred when trying to insert into database: {$e->getMessage()}");
        }
    }
    
    public function delete($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s',
            $table,
            'id = :id'
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute(compact('id'));
        } catch (Exception $e){
            die("An error occurred when trying to delete from database: {$e->getMessage()}");
        }
    }

    public function edit($table, $id, $parametros)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s;', //;
            $table,
            implode(', ', array_map(function ($parametros){
                return "{$parametros} = :{$parametros}";
            }, array_keys($parametros))),
            'id = :id'
        );

        $parametros['id'] = $id;

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parametros);
        } catch (Exception $e){
            die("An error occurred when trying to update database: {$e->getMessage()}");
        }
    }

    public function buscar($busca)
    {
        $sql = sprintf( 
            'SELECT * FROM posts WHERE %s;',
            "titulo like '%' :busca '%' "
        );
		
            try {
                $statement = $this->pdo->prepare($sql);
                $statement->execute(compact ('busca'));

                $result = $statement->fetchAll(PDO::FETCH_OBJ);
                
                return $result;

            }
            catch (Exception $e){
                die("An error occurred when trying to search on database: {$e->getMessage()}");
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

    public function buscar_users($busca)
    {
        $sql = sprintf( 
            'SELECT * FROM users WHERE %s;',
            "Email like :busca"
        );
        
            try {
                $statement = $this->pdo->prepare($sql);
                $statement->execute(compact ('busca'));

                $result = $statement->fetchAll(PDO::FETCH_OBJ);
                
                return $result;

            }
            catch (Exception $e){
                die("An error occurred when trying to search on database: {$e->getMessage()}");
            }

    }

}
