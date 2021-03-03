<?php

class DatabaseTable{
        function insert($pdo, $table, $record) {
                $keys = array_keys($record);
            
                $values = implode(', ', $keys);
                $valuesWithColon = implode(', :', $keys);
            
                $query = 'INSERT INTO ' . $table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';
            
                $stmt = $pdo->prepare($query);
            
                $stmt->execute($record);
            }
            
            function find($pdo, $table, $field, $value) {
                    $stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . ' = :value');
                    $criteria = [
                            'value' => $value
                    ];
                    $stmt->execute($criteria);
            
                    return $stmt;
            }
            
            function findAll($pdo, $table) {
                    $stmt = $pdo->prepare('SELECT * FROM ' . $table );
            
                    $stmt->execute();
            
                    return $stmt;
            }
            
                function update($pdo, $table, $record, $primaryKey, $original) {
                    $query = 'UPDATE ' . $table . ' SET ';
            
                    $parameters = [];
                    
                    foreach ($record as $key => $value) {
                            $parameters[] = $key . ' = :' .$key;
                    }
            
                    $query .= implode(', ', $parameters);
                    $query .= ' WHERE ' . $primaryKey . ' = :primaryKey';
            
                    $record['primaryKey'] = $original;
                
                    $stmt = $pdo->prepare($query);
                    $stmt->execute($record);
            }
            
            function save($pdo, $table, $record, $primaryKey, $original) {
                    try {
                    insert($pdo, $table, $record);
                    }
                    catch (Exception $e) {
                    update($pdo, $table, $record, $primaryKey, $original);
                    }
            }
             
            
}

?>