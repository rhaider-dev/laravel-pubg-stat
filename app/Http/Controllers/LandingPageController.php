<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Feature;
use Pubg\Api;
use Pubg\Config;
use Pubg\Player;
use Pubg\Season;
use Pubg\Lifetime;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $faqs=Faq::where('status','active')->latest()->get();
        $features=Feature::where('status','active')->latest()->get();
        return view('landing-page',compact('features','faqs'));
    }

    public function search(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        
        $player_name=$request->name;

        try{
            $config = new Config();
            $config->setApiKey(env('PUBG_API'));
            $config->setPlatform(env('PUBG_REGION'));

            $api = new Api($config);

            // by player name
            $playerService = new Player($api);

            $player = $playerService->get($player_name);

            $player_id=$player->getData()['id'];    
            $lifetimeService = new Lifetime($api);

            $lifetime = $lifetimeService->get($player_id);

            $lifetime_data=$lifetime->getData();
            $stat=$lifetime_data['attributes']['gameModeStats'];

            //season data
            $seasonService = new Season($api);

            $seasons = $seasonService->getAll();

            $last_season_id=$seasons[count($seasons)-1]->getData()['id'];
            $season = $seasonService->get($player_id, $last_season_id);

            $last_season_name=str_replace('division.bro.official.','',$last_season_id);
            
            $last_season=$season->getData()['attributes']['gameModeStats'];
        }
        catch(\Exception $e){
            $stat=0;
        }
        
        return view('result',compact('stat','last_season','last_season_name'));

    }

}
