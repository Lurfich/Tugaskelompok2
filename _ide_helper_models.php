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
 * App\Models\Daftar
 *
 * @property int $id
 * @property int $pasien_id
 * @property \Illuminate\Support\Carbon $tanggal_daftar
 * @property string $status_daftar
 * @property string $poli
 * @property string $keluhan
 * @property string|null $diagnosis
 * @property string|null $tindakan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pasien|null $pasien
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar query()
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar whereDiagnosis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar whereKeluhan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar wherePasienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar wherePoli($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar whereStatusDaftar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar whereTanggalDaftar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar whereTindakan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Daftar whereUpdatedAt($value)
 */
	class Daftar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pasien
 *
 * @property int $id
 * @property string|null $no_pasien
 * @property string|null $nama
 * @property int|null $umur
 * @property string|null $foto
 * @property string|null $jenis_kelamin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Daftar[] $daftar
 * @property-read int|null $daftar_count
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien whereNoPasien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien whereUmur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pasien whereUpdatedAt($value)
 */
	class Pasien extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Poli
 *
 * @property int $id
 * @property string $nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PoliFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Poli newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Poli newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Poli query()
 * @method static \Illuminate\Database\Eloquent\Builder|Poli whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poli whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poli whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poli whereUpdatedAt($value)
 */
	class Poli extends \Eloquent {}
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
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

