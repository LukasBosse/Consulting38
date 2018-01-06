<?php

    /** Interface DAO 'users'
     *
     * @author  Dennis Kalt
     * @date    2017-04-22
     *
     */
    
interface UsersDAO {

        /**
         * Get all users
         * @return Users
         */
       
        public function getUsers();
    
        /**
         * Get User by primary key
         * @param String $username primary key
         * @return User
         */
        
        public function getUserByUsername($username);

        /**
         * Get User by primary key
         * @param String $id primary key
         * @return Users
         */
        public function getUserById($id);

    
        /**
         * Get User-ID by username
         * @param $username username
         * @return Users with idUsers
         */
        public function getIdByUsername($username);

        /**
         * Update record in table 'users'
         * @param UsersMySql user
         * @return affected rows
         */
        public function update($user);

	   /**
        * Delete user from table
        * @param $id primary key
        * @return affected rows
        */
        public function deleteUserById($id);

        /**
         * Delete all rows
         */
        public function deleteUsers();

    }

?>
