<?php

class Example {

    private $_att = 0;

    public function getAtt()   { return $this->_att; }
    public function setAtt($v) { $this->_att = $v; return ; }

    public function __construct( array $kwargs ) {
        print('Constructor called'.PHP_EOL);
        $this->setAtt( $kwargs['arg' ]);
        return ;
    }

    public function __destruct() {
        print('Destructor called'.PHP_EOL);
        return ;
    }

    public function __toString()
    {
        return 'Example( $_att = ' . $this->getAtt() . ')';
    }




}

$instance = new Example( array( 'arg' => 21));
print( $instance . PHP_EOL);





?>