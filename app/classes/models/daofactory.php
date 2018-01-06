<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{

    public static function getUsersDAO() {
        return new UsersMySqlDAO();
    }

}

?>
