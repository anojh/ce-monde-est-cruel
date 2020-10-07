<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class TeltiPlayers
 * @package Hackathon\PlayerIA
 * @author Anojhan SIVANANTHAN
 Je donne la decision par rapport a la moyenne.
 */
class TeltiPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        

    	$scis = $this->result->getStatsFor($this->opponentSide)['scissors'];
    	$pap = $this->result->getStatsFor($this->opponentSide)['paper'];
    	$roc = $this->result->getStatsFor($this->opponentSide)['rock'];

    	if ($scis > $pap)
    	{
    		if ($scis > $roc)
	    	{
	    		return parent::rockChoice();
	    	}
    	}
    	
    	if ($pap > $scis)
    	{
    		if ($pap > $roc)
	    	{
	    		return parent::scissorsChoice();
	    	}
    	}
    	if ($roc > $scis)
    	{
    		if ($roc > $pap)
	    	{
	    		return parent::paperChoice();
	    	}
    	}
    	//print_r($this->result->getChoicesFor($this->opponentSide)[1]);
    	
		
    	
        return parent::rockChoice();

    }
};
