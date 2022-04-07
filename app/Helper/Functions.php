<?php

use App\Auction;
function handle_auctions(){
$v_test=true;
if($v_test==true){
	 $aucs=Auction::where('admin_status',1)->get();
                foreach($aucs as $auction){
                    if($auction->date_to<date('Y-m-d H:i:s')&&$auction->auc_status==0){
                         $auction->auc_status=1;
                         $auction->end_price=App\Bidding::where('auction_id',$auction->id)->max('price');
                         if(App\Bidding::where('auction_id',$auction->id)->first()){
                         $b_id=App\Bidding::where('auction_id',$auction->id)->first()->id;
                         $bid=App\Bidding::find($b_id);
                         $bid->status=1;
                         $bid->save();	
                          }
                         $auction->save();
                }
}
}
}