<?php

namespace App\Controller\Component;

use Predis\Client;
use Cake\Controller\Component;

class CustomSessionComponent extends Component
{

  public function initialize(array $config)
  {
    debug('okkkk compo');
    try {
    	$redis = new Client([
        "scheme" => "tcp",
        "host" => "localhost",
        "port" => 6379
      ]);

      $redis->connect();

      debug($redis->isConnected());

    	// This connection is for a remote server
    	/*
    		$redis = new PredisClient(array(
    		    "scheme" => "tcp",
    		    "host" => "153.202.124.2",
    		    "port" => 6379
    		));
    	*/
    }
    catch (Exception $e) {
    	die($e->getMessage());
    }
  }
}
