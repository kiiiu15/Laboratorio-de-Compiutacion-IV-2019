<?php 
namespace repository;
    
    require("IRepository.php");

    use repository\IRepository as IRepository;
    use model\User as User;

    class UsersRepository implements IRepository
    {
        private $usersList = array();

        public function getAll(){

            $this->RetrieveData();
          
            return $this->usersList;
        }

        public function delete(User $user)
        {  


        }

        public function add(User $user)
        {
            $this->RetrieveData();
            array_push($this->usersList,$user);
            $this->SaveData();
        }

        private function GetByEmail($email){
            $this->RetrieveData();
            $userFounded = null;
            
            if(!empty($this->usersList)){
                foreach($this->usersList as $user){
                    if($user->getEmail() == $email){
                        $userFounded = $user;
                    }
                }
            }
            return $userFounded;
        }

        private function SaveData() {
            $arrayToEncode = array();

            foreach($this->usersList as $user)
            {
                $valuesArray["name"] = $user->getName();
                $valuesArray["dni"] = $user->getDNI();
                $valuesArray["birthdate"] = $user->getBirthdate();
                $valuesArray["email"] = $user->getEmail();
                $valuesArray["pass"] = $user->getPassword();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            
            file_put_contents('data/users.json', $jsonContent);
        }

        private function RetrieveData() {
            $this->usersList = array();

            if(file_exists('data/users.json'))
            {
               
                $jsonContent = file_get_contents('data/users.json');
                



                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray)
                {
                   
                    $user = new User($valuesArray["name"], $valuesArray["dni"], $valuesArray["birthdate"], $valuesArray["email"], $valuesArray["pass"]);

                    array_push($this->usersList, $user);

                }
            } 
        }
    }
?>