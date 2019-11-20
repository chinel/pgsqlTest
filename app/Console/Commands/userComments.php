<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class userComments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:comment {userId} {comments}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add user comment to database';

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
     * @return mixed
     */
    public function handle()
    {
        $userID = $this->argument('userId');
        $comment = $this->argument('comments');

        $this->info("Please more than one comment should be separated with commas");
        if ($this->confirm('Do you wish to continue? [y|N]')) {
            $findUser = User::find($userID);

            if(!empty($findUser)){
                $findUser->comments .= $comment;
                $findUser->save();
                $this->info("comment successfully added");

            }else{
                $this->info("user not found");
            }

        }
    }
}
