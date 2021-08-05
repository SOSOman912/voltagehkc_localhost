<?php namespace Jack\Voltage\Models;

use Model;

/**
 * Model
 */
class Case2 extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jack_voltage_cases';
	protected $slugs = ['slug' => 'title'];
	public $attachMany = [
        'image1' => ['System\Models\File'],
        'image2' => ['System\Models\File'],
		'image3' => ['System\Models\File']
    ];
	public $belongsToMany = [
		'categories' => [
            'Jack\Voltage\Models\Category',
            'table' => 'jack_voltage_categories_cases'
        ]

	];
}