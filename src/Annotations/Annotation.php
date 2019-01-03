<?php 

namespace Grajewsky\Laravel\Http\Annotations;

/** 
 * 
 */
abstract class Annotation {
    private $name;

    public function __construct(?string $name = null) {
        if(!\is_null($name)) {
            $this->setName($name);
        }
    }
    /**
     * setName
     *
     * @param  mixed $name
     *
     * @return void
     */
    public function setName(string $name) {
        $this->name = $name;
    }
}