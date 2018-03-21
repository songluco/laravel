<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\EbaoFoSun
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $type
 * @property int $age
 * @property int $sex
 * @property int $coverage
 * @property int $premium_one
 * @property int $premium_two
 * @property int $premium_three
 * @property int $premium_four
 * @property int $premium_five
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EbaoFoSun whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EbaoFoSun whereCoverage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EbaoFoSun whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EbaoFoSun wherePremiumFive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EbaoFoSun wherePremiumFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EbaoFoSun wherePremiumOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EbaoFoSun wherePremiumThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EbaoFoSun wherePremiumTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EbaoFoSun whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EbaoFoSun whereType($value)
 */
class EbaoFoSun extends Model
{

    //
    protected $table = 'ebaofosun';

    protected $guarded = [];

}
