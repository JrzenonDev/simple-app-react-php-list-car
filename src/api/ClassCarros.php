<?php

    include("ClassConexao.php");

    class ClassCarros extends ClassConexao {

        // Exibição dos carros retornando um json
        public function exibeCarros() {

            $beforeFetch = $this->conectaDB()->prepare("select * from carros");
            $beforeFetch->execute();

            $j = [];
            $i = 0;

            while($fetch=$beforeFetch->fetch(PDO::FETCH_ASSOC)) {

                $j[$i] = [
                    "id" => $fetch['id'],
                    "marca" => $fetch['marca'],
                    "modelo" => $fetch['modelo'],
                    "ano" => $fetch['ano']
                ];

                $i++;

            }

            header("Access-Control-Allow-Origin: *");
            header("Content-type: application/json");

            echo json_encode($j);



        }

    }