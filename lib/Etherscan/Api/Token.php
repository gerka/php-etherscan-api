<?php

namespace Etherscan\Api;
use Etherscan\Exception\ErrorException;

/**
 * Class Token
 * @package Etherscan\Api
 * @author Maslakou Ihar <igormaslakoff@gmail.com>
 */
class Token extends AbstractApi
{
    /**
     * Get tokenSupply for a contractaddress
     *
     * @param $contractaddress
     * @return mixed
     * @throws ErrorException
     */
    public function tokenSupply($contractaddress)
    {
        return $this->request->exec([
            'module' => "stats",
            'action' => "tokensupply",
            'contractaddress' => $contractaddress
        ]);
    }

}