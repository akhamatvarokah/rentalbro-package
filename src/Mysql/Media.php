<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
	use SoftDeletes;
	protected $table = 'media';
}
