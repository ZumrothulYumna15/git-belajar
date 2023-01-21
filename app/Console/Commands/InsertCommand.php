<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Email;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Hash;

class InsertCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Proses insert data ke database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email = new Email;
        $email->email = 'fina9@gmail.com';
        $email->password = 'FINA99';
        $email->save();

        $this->info('Email berhasil disimpan');
        return Command::SUCCESS;
    }
}
