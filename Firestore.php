<?php
require_once 'vendor/autoload.php';

use Google\Cloud\Core\ServiceBuilder;
use Google\Cloud\Firestore\FirestoreClient;

class Firestore{
     protected $db;
     protected $name;

     public function __construct(string $collection)
     {
         $this->db = new FirestoreClient([
            'projectId' => 'apptraining-4e270'
         ]);
 
         $this->name = $collection;
     }

     
     public function getDocument(string $name)
     {
         try {
             if (empty($name)) throw new Exception('Document name missing');
             if ($this->db->collection($this->name)->document($name)->snapshot()->exists()) {
                 return $this->db->collection($this->name)->document($name)->snapshot()->data();
             } else {
                 throw new Exception('Document are not exists');
             }
         } catch (Exception $exception) {
             return $exception->getMessage();
         }
     }
    
     public function getWhere(string $field, string $operator, $value)
     {
         $arr = [];
         $query = $this->db->collection($this->name)->where($field, $operator, $value)->documents()->rows();
         if (!empty($query)) {
             foreach ($query as $value) {
                 $arr[] = $value->data();
             }
         }
         return $arr;
     }

     public function newDocument(string $name, array $data = [])
     {
         try {
             $this->db->collection($this->name)->document($name)->create($data);
             return true;
         } catch (Exception $exception){
             return $exception->getMessage();
         }
     }
 
     public function newCollection(string $name, string $doc_name, array $data = [])
     {
         try {
             $this->db->collection($name)->document($doc_name)->create($data);
             return true;
         } catch (Exception $exception) {
             return $exception->getMessage();
         }
     }

    /**
     * Drop exists document in collection
     * @param string $name
     * @return void
     */
    public function dropDocument(string $name)
    {
        $this->db->collection($this->name)->document($name)->delete();
    }

    public function dropCollection(string $name){
        $documents = $this->db->collection($name)->limit(1)->documents();
        while(!$documents->isEmpty()){
            foreach($documents as $item){
                $item->reference()->delete();
            }
        }
    }

 }


?>