<?php
namespace Jmlocke1\Config;
/**
 * Configuraciones del ordenador de desarrollo local. Este archivo se ignora en
 * git, por lo que hay que crearlo en cada nuevo equipo de desarrollo.
 * Este fichero es una demo con todas las constantes que tiene que incluir, cada
 * desarrollador tiene que rellenar su archivo ConfigLocal.php con sus propios
 * valores
 *
 * @author jmizq_z
 */
class ConfigLocalDemo{
    /**
     * Servidor de la base de datos
     */
    const DB_HOST = 'localhost';
    /**
     * Nombre de la base de datos
     */
    const DB_NAME = 'dbprueba';
    /**
     * Usuario de la base de datos
     */
    const DB_USERNAME = 'userdemo';
    /**
     * Contraseña del usuario de la base de datos
     */
    const DB_PASSWORD = "dbpassword";
}
