<?php
/**
 * Repository.php@pokemon
 * User: ishidatakeshi
 * Date: 2014/12/16
 * Time: 18:40
 */

namespace pokemon\classes;


class Repository {
    const END_POINT = 'http://pokeapi.co/api/v1';
    public function build ($id) {
        if (strval(intval($id)) !== strval($id)) {
            throw new \InvalidArgumentException('id is int' );
        }
        $json = $this->getContent($id);
        if ($json === false) {
            throw new \InvalidArgumentException($id .' is invalid id');
        }
        $data = json_decode($json);
        $result = new Pokemon();
        $result->setName($data->name);
        $result->getHP()->setFamilyPoint($data->hp);
        $result->getAttack()->setFamilyPoint($data->attack);
        $result->getDefence()->setFamilyPoint($data->defense);
        $result->getSpecialAttack()->setFamilyPoint($data->sp_atk);
        $result->getSpecialDefence()->setFamilyPoint($data->sp_def);
        $result->getSpeed()->setFamilyPoint($data->speed);
        return $result;
    }

    public function getContent ($id) {
        $curl = curl_init(self::END_POINT . '/pokemon/' . urlencode($id));
        curl_setopt_array($curl, array(
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => 1,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_USERAGENT => 'pokemon',
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
        ));
        $result = preg_split('#\n.?\n#', curl_exec($curl));
        $body = array_pop($result);
        return $body;
    }
}
