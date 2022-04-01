<?php


namespace Lacuna\Signer\Model;
use \Lacuna\Signer\ObjectSerializer;



class DocumentBatchStatus
{
    
const PENDING = 'Pending';
const INIT = 'Init';
const COMP = 'Completed';
const DONE = 'Done';
const ERROR = 'Error';
const W_SIG = 'WaitingSignatures';
const CANC_REQ = 'Canceling';
const CANC = 'Canceled';
   

    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::INIT,
            self::COMP, 
            self::DONE, 
            self::ERROR,
            self::W_SIG,
            self::CANC_REQ,
            self::CANC      ];
            
    }
}
