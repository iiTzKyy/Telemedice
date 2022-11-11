<?php

namespace App\Http\Livewire;

use Illuminate\Auth\Events\Validated;
use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;

class Test extends Component
{
    public $currentStep = 1;
    public $batuk,$demam,$sesak,$kepala,$saturasi,$tenggorokan,$nyeri,$riwayat,$keluarga,$fisik;
    public $succesMessage = '';

    public function firstStepSubmit(){
        $this->currentStep = 2;            
    }

    public function secondStepSubmit(){
        $this->currentStep = 3;
    }

    public function thirdStepSubmit(){
        $validatedData = $this ->validate([
            'batuk' => 'required',
        ]);

        $this->currentStep = 4;
    }

    public function fourthStepSubmit(){
        $validatedData = $this ->validate([
            
            'demam' => 'required',
        ]);
        
        $this->currentStep = 5;
    }

    public function fifthStepSubmit(){
        $validatedData = $this ->validate([
            'sesak' => 'required',
        ]);
        
        $this->currentStep = 6;
    }

    public function sixthStepSubmit(){
        $validatedData = $this ->validate([
            'kepala' => 'required',
        ]);
        
        $this->currentStep = 7;
    }

    public function seventhStepSubmit(){
        $validatedData = $this ->validate([
            'tenggorokan' => 'required',
        ]);
        
        $this->currentStep = 8;
    }

    public function eighthStepSubmit(){
        $validatedData = $this ->validate([
            'nyeri' => 'required',
        ]);
        
        $this->currentStep = 9;
    }
    public function ninthStepSubmit(){
        $validatedData = $this ->validate([
            'saturasi' => 'required',
        ]);
        $this->currentStep = 10;
        
    }

    public function submitForm(Request $request){
        $request->User()->update([
            'fisik' => $this->fisik,
            'keluarga' => $this->keluarga,
            'riwayat' => $this->riwayat,
            'batuk' => $this->batuk,
            'demam' => $this->demam,
            'sesak' => $this->sesak,
            'kepala' => $this->kepala,
            'saturasi' => $this->saturasi,
            'tenggorokan' => $this->tenggorokan,
            'nyeri' => $this->nyeri,
        ]);

        $this->succesMessage = 'Anda Telah Berhasil Melakukan Test';
        $this->clearForm();
        $this->currentStep = 11;
    }
    
    public function tenStepSubmit(){
        $this->succesMessage = 'Anda Telah Berhasil Melakukan Test';
        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->keluarga = '';
        $this->riwayat = '';
        $this->fisik = '';
        $this->batuk = '';
        $this->demam = '';
        $this->sesak = '';
        $this->kepala = '';
        $this->saturasi = '';
        $this->nyeri = '';
        $this->tenggorokan = '';
    }
    public function render()
    {
        return view('livewire.test');
    }
}
