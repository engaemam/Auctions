<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Auction;
use App\Bidding;
class AuctionHanding extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auctions:handling';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'handle the auctions background process';

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

        $aucs=Auction::where('admin_status',1)->get();
                foreach($aucs as $auction){
                    if($auction->date_to<date('Y-m-d H:i:s')&&$auction->auc_status==0){
                         $auction->auc_status=1;
                         $auction->end_price=Bidding::where('auction_id',$auction->id)->max('price');
                         if(Bidding::where('auction_id',$auction->id)->first()){
                         $b_id=Bidding::where('auction_id',$auction->id)->first()->id;
                         $bid=Bidding::find($b_id);
                         $bid->status=1;
                         $bid->save();  
                          }
                         $auction->save();
                }
        }
    }
}
