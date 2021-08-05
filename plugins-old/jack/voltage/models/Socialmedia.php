<?php namespace Jack\Voltage\Models;

use Model;

/**
 * Model
 */
class Socialmedia extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];
	public $attachMany = [
        'image' => ['System\Models\File'],

    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'jack_voltage_socialmedia';
}