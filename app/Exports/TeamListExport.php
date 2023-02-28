<?php

namespace App\Exports;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TeamListExport implements FromCollection,WithHeadings,ShouldAutoSize,WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all();
    }

    public function headings(): array
    {
        return [
                'ID',
                'Staff ID',
                'Username',
                'CRM Role',
                'Role',
                'Branch',
                'Created Date'
        ];
    }

    public function map($user) : array {
        return [
            $user->id,
            $user->staff_id,
            $user->username,
            $user->crm_role,
            $user->role,
            $user->branch,
            $user->created_at
        ];
    }
}