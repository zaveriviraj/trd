<?php

namespace App\Imports;

use App\Company;
use Maatwebsite\Excel\Concerns\ToModel;
use App\State;
use App\Companytype;

class CompaniesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $company = new Company([
            'name'     => $row[1],
            'contact_name_1' => $row[2],
            'contact_designation_1' => $row[3],
            'contact_mobile_1' => $row[14],
            'contact_mobile_2' => $row[15],
            'contact_mobile_3' => $row[16],
            'contact_mobile_4' => $row[17],
            'contact_email_1' => $row[18],
            'contact_email_2' => $row[19],
            'contact_email_3' => $row[20],
            'contact_email_4' => $row[21],
            'address'     => $row[4],
            'city'     => $row[5],
            'zip'     => $row[7],
        ]);

        if ($row[6] != '')
        {
            $state = State::firstOrCreate(['name' => $row[6]]);
            $company->state_id = $state->id;
        }

        $departments = explode('/', $row[23]);
        $assoc = explode('/', $row[0]);
        
        if (count($departments) > count($assoc)) {
            $assoc = array_pad($assoc, count($departments), '-');
        } else if (count($departments) < count($assoc)) {
            $departments = array_pad($departments, count($assoc), '-');
        }
        
        foreach ($departments as $key => $department)
        {
            if (strtolower($department) == 'rapnet') {
                $company->rapnet = $assoc[$key];
            }
            
            if (strtolower($department) == 'gia') {
                $company->gia = $assoc[$key];
            }

            if (strtolower($department) == 'raplab') {
                $company->raplab = $assoc[$key];
            }

            if (strtolower($department) == 'advt') {
                $company->advt = $assoc[$key];
            }

            if (strtolower($department) == 'auctions' || strtolower($department) == 'auction') {
                $company->auctions = $assoc[$key];
            }
        }
        
        $company->save();
        
        $companytypes = explode('/', $row[22]);
        foreach ($companytypes as $companytype)
        {
            if ($companytype != '')
            {
                $type = Companytype::firstOrCreate(['name' => $companytype]);
                $company->companytypes()->attach($type);
            }
        }

        return $company;
    }
}
