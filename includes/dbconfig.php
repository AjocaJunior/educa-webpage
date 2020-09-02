<?php
 
     require(__DIR__.'/vendor/autoload.php');

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;
    //firestore//
    use Kreait\Firebase\Firestore;


    $serviceAccout = ServiceAccount::fromJsonFile(__DIR__.'/apptraining-4e270-firebase-adminsdk-ezwla-ccab79d1f9.json');
    $firebase = (new Factory)
        ->withServiceAccount($serviceAccout)
        ->withDatabaseUri('https://apptraining-4e270.firebaseio.com/')
        ->create();

    $database = $firebase->getDatabase();
    //firestore//
    $firestore = $factory->createFirestore();


class MyService
{
    public function __construct(Firestore $firestore)
    {
        $this->firestore = $firestore;
    }
}
    
?>