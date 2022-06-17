<?php

namespace App\Models\Settings;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model {
	use HasFactory, SoftDeletes, Uuids;

    protected $guarded = [];

	/**
	* The table associated with the model.
	*
	* @var string
	*/
   	protected $table = 'settings';

	/**
	 * Get the elements record associated with the Option.
     */
    public function elements() {
		return self::hasMany(Option::class, 'setting_id', 'id');
    }
}
