<?php 
    class Reservas extends conectar{
        public function get_reserva(){
            $conectar = parent::conexion();
            parent::set_name();
            $sql="SELECT * FROM reserva";
            $sql= $conectar ->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
        public function get_reserva_x_id($reserva_id){
            $conectar = parent::conexion();
            parent::set_name();
            $sql="SELECT * FROM reserva Where idreserva = ?";
            $sql= $conectar ->prepare($sql);
            $sql -> bindValue(1,$reserva_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
        public function delete_reserva($reserva_id){
            $conectar = parent::conexion();
            parent::set_name();
            $sql="UPDATE reserva
                SET
                    estado_reserva = 0
                Where 
                    idreserva = ?";

            $sql= $conectar ->prepare($sql);
            $sql -> bindValue(1,$reserva_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function insert_reserva($rsv_personas, $rsv_fecha, $rsv_hora, $rsv_estado, $rsv_cliente){
            $conectar = parent::conexion();
            parent::set_name();
            $sql="INSERT INTO reserva (idreserva, npersonas, fecha, hora, estado_reserva, idcliente) VALUES (NULL, ?, ?, ?, ?, ?);";

            $sql= $conectar ->prepare($sql);
            $sql -> bindValue(1,$rsv_personas);
            $sql -> bindValue(2,$rsv_fecha);
            $sql -> bindValue(3,$rsv_hora);
            $sql -> bindValue(4,$rsv_estado);
            $sql -> bindValue(5,$rsv_cliente);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function update_reserva($reserva_id, $rsv_personas, $rsv_fecha, $rsv_hora, $rsv_estado, $rsv_cliente){
            $conectar = parent::conexion();
            parent::set_name();
            $sql="UPDATE reserva 
                    SET 
                        npersonas =?, fecha=?, hora=?, estado_reserva=?, idcliente=? 
                    WHERE
                        idreserva = ? ";

            $sql= $conectar ->prepare($sql);
            $sql -> bindValue(1,$rsv_personas);
            $sql -> bindValue(2,$rsv_fecha);
            $sql -> bindValue(3,$rsv_hora);
            $sql -> bindValue(4,$rsv_estado);
            $sql -> bindValue(5,$rsv_cliente);
            $sql -> bindValue(5,$reserva_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
    }
?>