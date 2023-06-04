<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Selects extends Component
{

    public $countries, $token,$states=NULL,$cities=NULL,$selected_country=NULL,$selected_state=NULL;
    public function render()
    {
        return view('livewire.selects');
    }

    private function getCountries(){

        $response=Http::withHeaders([
            "Accept" => "application/json",
            "api-token"=> "CfNNPNDSr4RK6Y-dyfhlBadJ7FVjGK-_nG3kDxOTbOM8Uq7V3UNybw-HuC9hNvwIQ-g",
            "user-email"=> "nataliazurita95@gmail.com"
        ])->get("https://www.universal-tutorial.com/api/getaccesstoken");
        $this->token=$response->json('auth_token');
        $countries=Http::withHeaders([
            "Authorization"=> "Bearer " . $this->token,
            "Accept"=> "application/json"
        ])->get("https://www.universal-tutorial.com/api/countries/");
        $countries=$countries->json();
        $this->countries=$countries;
       
    } 
    public function getStates(){
        $states=Http::withHeaders([
            "Authorization"=> "Bearer " . $this->token,
            "Accept"=> "application/json"
        ])->get("https://www.universal-tutorial.com/api/states/".$this->selected_country);
        $this->states=$states->json();
        
       
    }

    public function getCities(){
        $this->cities=Http::withHeaders([
            "Authorization"=> "Bearer " . $this->token,
            "Accept"=> "application/json"
        ])->get("https://www.universal-tutorial.com/api/cities/".$this->selected_state);
        $this->cities=$this->cities->json();
        

    }

    public function mount(){
        $this->cities=[];
        $this->states=[];
        $this->getCountries();
       
    }
    
}
