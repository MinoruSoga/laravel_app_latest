<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//下記を追加と編集
use Illuminate\Contracts\Auth\MustVerifyEmail;
//下記を追加
use Illuminate\Foundation\Auth\User as Authenticatable;
//下記を追加
use Illuminate\Notifications\Notifiable;

//下記を修正
class Person extends Authenticatable
{
    //下記を追加
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //上記までを追加
}
