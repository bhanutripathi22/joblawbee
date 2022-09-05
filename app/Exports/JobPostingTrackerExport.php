<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use App\JobOpening;

class JobPostingTrackerExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    protected $job;

    public function __construct($job)
    {
        $this->job = $job;
    }

    public function headings(): array
    {
        return [
            'Practice Area',
            'Posted on',
            'Firm Name',
            'Total Vacancy',
            'Location',
            'No of Application received'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->job;
    }

    /**
     * @var JobOpening $job
     */
    public function map($job): array
    {
        return [
            $job->practiceArea->name,
            Date::dateTimeToExcel($job->created_at),
            $job->company->name,
            $job->no_of_vacancies,
            $job->location,
            $job->applications->count()
        ];
    }
}
