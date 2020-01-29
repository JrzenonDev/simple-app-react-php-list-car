<?php

    // abstract = Somente poderá ser extendida
    abstract class ClassConexao {

        // Conexao com o banco de dados
        protected function conectaDB() {

            try{
                $Con=new PDO("mysql:host=mysql;dbname=react", "root", "");
                return $Con;
            } catch(PDOException $e) {
                echo $e->getMessage();
            }

        }

    }