<?php

    function getRegistro(array $params = []){

        /**
         * @var $conn mysqli
         */

        $conn = $GLOBALS['mysqli'];

        $orderBy = array_key_exists('orderBy', $params) ? $params['orderBy'] : 'data_ins';
        $orderDir = array_key_exists('orderDir', $params) ? $params['orderDir'] : 'DESC';
        $limit = (int)array_key_exists('recordsPerPage', $params) ? $params['recordsPerPage'] : 10;
        $search2 = array_key_exists('search2', $params) ? $params['search2'] : '';
        $search3 = array_key_exists('search3', $params) ? $params['search3'] : '';
        $page = (int)array_key_exists('page', $params) ? $params['page'] : 0;
        $start =$limit * ($page -1);
        if($start<0){
        $start = 0;
        }
        $search1 = array_key_exists('search1', $params) ? $params['search1'] : '';
        $search1 = $conn->escape_string($search1);

        
        //$search2 = $conn->escape_string($search2);

    
        
        if($orderDir !=='ASC' && $orderDir !=='DESC'){
        $orderDir = 'ASC';
        }
        $records = [];
            
            $sql ='SELECT * FROM autoparco_setec';
            if($search1 or $search2 or $search3){
                $sql .=" WHERE";
            }
            if ($search1){
                $sql .=" user_ins LIKE '%$search1%' ";
                //$sql .=" OR lisdve LIKE '%$search1%' ";
                if($search2 or $search3){
                    $sql .="AND";
                }
                
            }
            if($search2){
                $sql .="  id_veicolo = '$search2'";
                if($search3){
                    $sql .="AND";
                }
            }
            if($search3){
                $sql .="  lisgam ='$search3'";
            }
               
            $sql .= " ORDER BY $orderBy $orderDir LIMIT $start, $limit";
            // var_dump($sql);
            $res = $conn->query($sql);
            if($res) {

                while( $row = $res->fetch_assoc()) {
                    $records[] = $row;
                    
                }

            }

        return $records;


    }
    function getVeicoli(){

        /**
         * @var $conn mysqli
         */

        $conn = $GLOBALS['mysqli'];
            $result=[];
            $sql ='SELECT DISTINCT `id_veicolo` from `autoparco_setec`order by `id_veicolo` ASC';
            //echo $sql;
            
            
            $res = $conn->query($sql);
            if($res) {

                while( $row = $res->fetch_assoc()) {
                    $records[] = $row;
                    
                }

            }

        return $records;


    }
    function getVeicolo(){

        /**
         * @var $conn mysqli
         */

        $conn = $GLOBALS['mysqli'];
            $result=[];
            $sql ='SELECT * from veicoli';
            //echo $sql;
            
            
            $res = $conn->query($sql);
            if($res) {

                while( $row = $res->fetch_assoc()) {
                    $records[] = $row;
                    
                }

            }

        return $records;


    }