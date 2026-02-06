<?php

namespace lmafra\NfseNacional;

interface DpsInterface
{
    /**
     * Convert Dps::class data in XML
     * @return string
     */
    public function render();
}
