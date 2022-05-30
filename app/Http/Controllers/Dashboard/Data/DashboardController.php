<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Mailbox;
use App\Models\Publikasis;
use App\Models\PublikasisComments;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function get_data_dashboard()
    {
        $article = Publikasis::get()->count();
        $users = User::get()->count();
        $mailbox = Mailbox::get()->count();
        $insight = PublikasisComments::get()->count();

        $compact = compact('article', 'users', 'mailbox', 'insight');
    }
}
