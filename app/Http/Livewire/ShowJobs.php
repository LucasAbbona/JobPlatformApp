<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class ShowJobs extends Component
{   
    public $search;
 
    public $selectedRole = '';

    protected $queryString = ['search'];


    public function render()
    {
        $selected = $this->selectedRole;
        if($selected==''){
            $jobs = Job::where('title', 'like', '%'.$this->search.'%')->get();
        }else{
            $jobs = Job::when($this->selectedRole, function ($query, $seniority){
                return $query->where('seniority', $seniority);
            })->get();
        }
        return view('livewire.show-jobs',['jobs'=>$jobs]);
    }
}
