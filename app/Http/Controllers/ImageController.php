<?php

namespace App\Http\Controllers;

use App\Models\Image;
use SimonMarcelLinden\Mediable\Http\Controllers\MediaController;

class ImageController extends MediaController {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $model = Image::class;
}
