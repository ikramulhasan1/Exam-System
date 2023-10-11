<?php

namespace App\Exports;

use App\Models\QuestionBank;
use Maatwebsite\Excel\Concerns\FromCollection;

class QuestionBankExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return QuestionBank::all();
    }
}
