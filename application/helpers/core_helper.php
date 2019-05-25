<?php

class core_persona{

    static function guardar($persona){
        $CI =& get_instance();
        $CI->db->insert('personas', $persona);
        
    }

    static function mostrar_personas(){
        $CI =& get_instance();
        $buscar = $CI->db->get('personas')->result();
        return $buscar;

    }

    static function persona_id(){
        $CI =& get_instance();
        $CI->db->where('id',$Id);
        $buscar = $CI->db->get('personas')->result();
        return $buscar;
           
    }

    static function borrar ($Id){
        $CI =& get_instance();
        $sql = "delete from personas where id=?";
        $CI->db->query($sql,[$Id]);
    }




}