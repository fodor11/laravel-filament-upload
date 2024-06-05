<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FileUpload
 *
 * @property int|null $id
 * @property string|null $route
 * @property string|null $name
 *
 * @package App\Models
 */
class FileUploads extends Model
{
	protected $table = 'file_uploads';
	public $timestamps = false;
    protected $primaryKey = 'id';

	protected $fillable = [
		'route',
		'name'
	];
	protected $casts = [
		'route' => 'array',
		'name' => 'array'
	];
}
