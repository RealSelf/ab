<?php

interface AB2_Condition {
    /**
     * determine if subject meets requirements for test
     *
     * @return bool
     */
    public function isMet();
}