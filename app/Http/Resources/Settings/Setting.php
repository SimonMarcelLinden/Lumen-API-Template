<?php

namespace App\Http\Resources\Settings;

use Illuminate\Http\Resources\Json\JsonResource;

class Setting extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) {
		return [
			$this->title => [
				'id' => $this->id,
				'title' => $this->title,
				'desc' => $this->desc,
				'value' => $this->value,
				'icon' => $this->icon,
				'elements' => new OptionCollection($this->elements)
			]
		];
	}
}
