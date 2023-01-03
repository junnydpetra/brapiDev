<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Carteira
 *
 * @property int $id
 * @property float $saldo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Carteira newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carteira newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carteira query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carteira whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carteira whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carteira whereSaldo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carteira whereUpdatedAt($value)
 */
	class Carteira extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Extrato
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Extrato newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extrato newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extrato query()
 */
	class Extrato extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Operacao
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Operacao newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Operacao newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Operacao query()
 */
	class Operacao extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

