<?php
namespace app\Http\Livewire;
use http\Params;
use Illuminate\Console\View\Components\Component;

 class Match extends Component
 {
     protected $listeners = [
         'SubmitMatchForm' => 'submit'
     ];

     protected $rules =[
         'categories' => 'required',
         'date' => 'required',
         'time'  => 'required'
     ];

     public function submit($params = [])
     {
         $this->validate();

     }






 }
