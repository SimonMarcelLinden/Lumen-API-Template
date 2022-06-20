<?php

namespace App\Models\Settings;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

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

	/* Static functions */

	/**
	 * Flush the cache
	 */
	public static function flushCache() {
		Cache::forget('settings');
	}

	/**
	 * Check if setting exists
	 *
	 * @param $key
	 * @return bool
	 */
	public static function has($key): bool {
		return config()->has('settings.' . $key);
	}

	/**
	 * Get all the settings
	 *
	 * @return mixed
	 */
	public static function getAllSettings() {
		return Cache::rememberForever('settings', function() {
			return self::all();
		});
	}

	/**
	 * Get a settings value
	 *
	 * @param $key
	 * @param null $default
	 * @return bool|int|mixed
	 */
	public static function get($key, $default = null) {
		if( Str::contains($key, '/') && !Str::contains($key, 'elements') ) {
			$key = substr_replace( $key, '/elements', stripos($key, '/', 0), 0 );
		}

		$key = str_replace("/", ".", $key);

		if ( self::has($key) ) {
			return self::getDefinedSettingFields($key);
		}

		return false;
	}

	/**
	 * Get all the settings fields from config
	 *
	 * @return Collection
	 */
	private static function getDefinedSettingFields($keys) {
		return config('settings.' . $keys);
	}
}
