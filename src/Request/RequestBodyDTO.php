<?php 

namespace Grajewsky\Laravel\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

abstract class RequestBodyDTO extends FormRequest {

    use BodyClassConverter;
    /** 
     * @var stdClass
     */
    protected $bodyClass;


}