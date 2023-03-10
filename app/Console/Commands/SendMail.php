<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeliveryMail;
use App\Models\Purchase;
use App\Models\User;
use Carbon\Carbon;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:delivery';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'delivery mail';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $today = Carbon::today();
        $purchases = Purchase::wheredate('delivery_date', $today)->get();
        foreach ($purchases as $purchase) {
            $user = User::where('id', $purchase['user_id'])->get();
            return Mail::to($user[0]->email)->send(new DeliveryMail($user[0]));
        }
    }
}