<?php

namespace Pradeep-sati12\PasswordChangedNotificationMail\Observers;
use Pradeep-sati12\PasswordChangedNotificationMail\Contracts\PassworChangedNotificationContract;
use Illuminate\Support\Facades\Mail;
class PasswordChangedObserver
{
    public function updated(PassworChangedNotificationContract $model) {
        $model->sendPasswordChangedNotification();
    }
}
 