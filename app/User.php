<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Permissions\HasPermissionsTrait;

class User extends Authenticatable
{
    use Notifiable,HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','gender','address','email','phone','photo','slug'
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

    public function receivedMessages()
    {
        return $this->hasMany(Messages::class, 'recipient_id');
    }

    public function notice()
    {
        return \App\Notice::where('role',$this->roles->first->slug)->get();
    }


    public function hasUnreadMessages ()
    {
        return count(Messages::where('recipient_id', $this->id)->where('read', 0)->get()) > 0;
    }

    public function getUnread(){
        $count = count(Messages::where('recipient_id', $this->id)
            ->where('read', 0)->get());
        return ($count == 0) ? "": $count;
    }

    /**
     * Returns the count of unread messages for the current User.
     *
     * @return int
     */
    public function unreadMessageCount ()
    {
        return count(Messages::where('recipient_id', $this->id)->where('read', 0)->get());
    }

    /**
     * Returns the count of unread messages for the current User, given a specific sender.
     *
     * @return int
     */
    public function unreadMessageCountForSender (User $user)
    {
        return count(Messages::where('recipient_id', $this->id)->where('sender_id', $user->id)->where('read', 0)->get());
    }

    public function roleR() {
        return $this->hasMany(UserRole::class);
    }

}
