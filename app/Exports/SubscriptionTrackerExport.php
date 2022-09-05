<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use App\SubscriptionEmail;

class SubscriptionTrackerExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    protected $sub;

    public function __construct($sub)
    {
        $this->sub = $sub;
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Contact',
            'Minimum Experience',
            'Location',
            'Practice Area 1',
            'Practice Area 2',
            'Practice Area 3'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->sub;
    }

    /**
     * @var SubscriptionEmail $sub
     */
    public function map($sub): array
    {
        $name = $sub->fname . ' ' . $sub->lname;
        $practice_area1 = '';
        $practice_area2 = '';
        $practice_area3 = '';
        
        $practice_area = \explode(",", $sub->practice_area);
        if(isset($practice_area[0])) $practice_area1 = $practice_area[0];
        if(isset($practice_area[1])) $practice_area2 = $practice_area[1];
        if(isset($practice_area[2])) $practice_area3 = $practice_area[2];
        
        return [
            $name,
            $sub->email,
            $sub->contact_no,
            $sub->minimum_experience,
            $sub->location,
            $practice_area1,
            $practice_area2,
            $practice_area3
        ];
    }
}
