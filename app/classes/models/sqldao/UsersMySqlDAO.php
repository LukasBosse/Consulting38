<?php

include_once('config.php');

    /**
     * Class that operate on table 'users
     *
     * @author  Dennis Kalt
     * @date    2017-04-22
     */

    class UsersMySqlDAO  {
        
        /**
         * Get all Users
         * @return Users with idUsers, username, email
         */
        public function getUsers() {
            $sql = 'SELECT * FROM kunden';
		    $sqlQuery = new SqlQuery($sql);
		    return $this->getList($sqlQuery);
        }
        
        public function getUserByUsername($username) {
            $sql = 'SELECT * FROM kunden WHERE username = ? LIMIT 1';
            $sqlQuery = new SqlQuery($sql);
            $sqlQuery->set($username);
            return $this->getList($sqlQuery);
        }

        /**
         * Get User by primary key
         * @param String $id primary key
         * @return Users
         */
        public function getUserById($id) {
            $sql = 'SELECT * FROM kunden WHERE ID = ?';
            $sqlQuery = new SqlQuery($sql);
            $sqlQuery->set($id);
            return $this->getList($sqlQuery);
        }
    

        /**
         * Get User-ID by username
         * @param $username username
         * @return Users with idUsers
         */
        public function getIdByUsername($username) {
            $sql = 'SELECT ID FROM kunden WHERE username = ?';
            $sqlQuery = new SqlQuery($sql);
            $sqlQuery->set($username);
            return $this->getList($sqlQuery);
        }

        /**
         * Update record in table 'users'
         * @param UsersMySql user
         * @return affected rows
         */
        public function update($user){
            $sql = 'UPDATE kunden SET vorname = ?, nachname = ?, username = ?, phone = ?, mail = ? WHERE ID = ?';
            $sqlQuery = new SqlQuery($sql);

            $sqlQuery->set($user->vorname);
            $sqlQuery->set($user->nachname);
            $sqlQuery->set($user->username);
            $sqlQuery->set($user->phone);
            $sqlQuery->set($user->mail);

            $sqlQuery->setNumber($user->id);
            return $this->executeUpdate($sqlQuery);
        }

	   /**
        * Delete user from table
        * @param $id primary key
        * @return affected rows
        */
        public function deleteUserById($id){
            $sql = 'DELETE FROM kunden WHERE ID = ?';
            $sqlQuery = new SqlQuery($sql);
            $sqlQuery->setNumber($id);
            return $this->executeUpdate($sqlQuery);
        }

      
        /**
         * Delete all rows
         */
        public function deleteUsers(){
            $sql = 'DELETE FROM kunden';
            $sqlQuery = new SqlQuery($sql);
            return $this->executeUpdate($sqlQuery);
        }

        /**
         * Read row
         *
         * @return UsersMySql
         */
        protected function readRow($row){
            
            $user = new Users();

            if(isset($row['ID'])) { $user->id = $row['ID']; }
            if(isset($row['Username'])) { $user->username = $row['Username']; }
            if(isset($row['Vorname'])) { $user->vorname = $row['Vorname']; }
            if(isset($row['Nachname'])) { $user->nachname = $row['Nachname']; }
            if(isset($row['Phone'])) { $user->phone = $row['Phone']; }
            if(isset($row['Mail'])) { $user->mail = $row['Mail']; }

            return $user;
        }

        protected function getList($sqlQuery){
            $tab = QueryExecutor::execute($sqlQuery);
            $ret = array();
            for($i=0;$i<count($tab);$i++){
                $ret[$i] = $this->readRow($tab[$i]);
            }
            return $ret;
        }

        /**
         * Get row
         *
         * @return UsersMySql
         */
        protected function getRow($sqlQuery){
            $tab = QueryExecutor::execute($sqlQuery);
            if(count($tab)==0){
                return null;
            }
            return $this->readRow($tab[0]);
        }

        /**
         * Execute sql query
         */
        protected function execute($sqlQuery){
            return QueryExecutor::execute($sqlQuery);
        }


        /**
         * Execute sql query
         */
        protected function executeUpdate($sqlQuery){
            return QueryExecutor::executeUpdate($sqlQuery);
        }

        /**
         * Query for one row and one column
         */
        protected function querySingleResult($sqlQuery){
            return QueryExecutor::queryForString($sqlQuery);
        }

        /**
         * Insert row to table
         */
        protected function executeInsert($sqlQuery){
            return QueryExecutor::executeInsert($sqlQuery);
        }

    }

?>
