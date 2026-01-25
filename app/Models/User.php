<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function guru()
    {
        return $this->hasOne(Guru::class);
    }

    // Membuat nama role lebih bagus
    protected function roleLabel(): Attribute
    {
        return Attribute::make(
            get: function () {
                // mengambil nama role
                $roleName = $this->getRoleNames()->first();

                return match ($roleName) {
                    'admin'     => 'Administrator',
                    'walikelas' => 'Walikelas',
                    'guru_att'  => 'Guru ATT',
                    null        => 'Tidak ada Jabatan',
                    default     => ucwords(str_replace('_', ' ', $roleName)),
                }; 
            },
        );
    }
}
