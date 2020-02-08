<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Snippet
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $slug
 * @property string|null $description
 * @property string $snippet
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereSnippet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereUserId($value)
 * @mixin \Eloquent
 */
class Snippet extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
