<?php

use PDO;


        
        

        $id_product = filter_input(INPUT_GET, 'id_product', FILTER_UNSAFE_RAW);
        if(!empty($id_product)){

            $limit = 1; 
            $result_idProduct = "SELECT * FROM content_items WHERE id_product=:id_product LIMIT :limit";
            $result_idProduct = $conn->prepare($result_idProduct);
            $result_idProduct->bindParam(':id_product', $id_product, PDO::PARAM_STR);
            $result_idProduct->bindParam(':limit', $limit, PDO::PARAM_INT);
            $result_idProduct->execute();

            $array_values = array();

            if($result_idProduct->rowCount() != 0) {

            }else{
                $array_values['content'] = 'Produto não encontrado';
            }
            echo json_encode($array_values);
        }

  


    ?>