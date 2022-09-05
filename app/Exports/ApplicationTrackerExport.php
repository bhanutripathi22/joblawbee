<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use App\AppliedJob;

class ApplicationTrackerExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    protected $application;

    public function __construct($application)
    {
        $this->application = $application;
    }

    public function headings(): array
    {
        return [
            'Name',
            'Job Applied',
            'Employer',
            'Practice Area',
            'Location',
            'Contact',
            'Applied on',
            'Resume'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->application;
    }

    /**
     * @var AppliedJob $application
     */
    public function map($application): array
    {
        $name = trim($application->first_name . ' ' . $application->last_name);
        $resume = asset("storage/{$application->resume}");

        return [
            $name,
            $application->job->designation,
            $application->job->company->name,
            $application->job->practiceArea->name,
            $application->job_location,
            $application->mobile,
            Date::dateTimeToExcel($application->created_at),
            $resume
        ];
    }
}
