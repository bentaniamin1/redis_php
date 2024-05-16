<?php
require './vendor/autoload.php';
use Predis\Client;
class Cache {
    private $redis;
    public function __construct() {
        $this->redis = new Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1', 
            'port'   => 6379,        
        ]);
    }
    public function get($key) {
        $data = $this->redis->get($key);
        if ($data !== null) {
            return unserialize($data);
        }
        return null;
    }
    public function set($key, $data, $ttl = 3600) {
        $data = serialize($data);
        $this->redis->setex($key, $ttl, $data);
    }
    public function delete($key) {
        $this->redis->del($key);
    }
}
?>