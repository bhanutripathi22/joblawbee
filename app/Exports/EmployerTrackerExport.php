<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use App\Company;

class EmployerTrackerExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    protected $company;

    public function __construct($company)
    {
        $this->company = $company;
    }

    public function headings(): array
    {
        return [
            'Company Name',
            'Email ID',
            'Contact Person',
            'Telephone',
            'Total Job Posting',
            'Total Application Received',
            'Active/Deactive'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->company;
    }

    /**
     * @var Company $company
     */
    public function map($company): array
    {
        $contact_person = isset($company->profile) ? $company->profile->contact_name : '';
        $telephone = isset($company->profile) ? $company->profile->phone : '';
        $status = $company->status===1 ? 'Active' : 'Deactive';

        return [
            $company->name,
            $company->email,
            $contact_person,
            $telephone,
            $company->openings->count(),
            $company->applications->count(),
            $status
        ];
    }
}
