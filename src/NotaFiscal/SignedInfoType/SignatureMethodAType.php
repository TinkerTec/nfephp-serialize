<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\SignedInfoType;

/**
 * Class representing SignatureMethodAType
 */
class SignatureMethodAType
{

    /**
     * @property string $algorithm
     */
    private $algorithm = null;

    /**
     * Gets as algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * @param string $algorithm
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }


}

