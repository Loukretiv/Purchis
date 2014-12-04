<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class InviteKey extends Eloquent implements RemindableInterface {

  use RemindableTrait;

  /**
  * The database table used by the model.
  *
  * @var string
  */
  protected $table = 'invite_keys';
}
