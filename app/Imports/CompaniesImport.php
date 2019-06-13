<?php

namespace App\Imports;

use App\Company;
use Maatwebsite\Excel\Concerns\ToModel;
use App\State;
use App\Companytype;
use App\Companysize;
use App\Shape;
use App\Cert;

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
            'name'     => $row[2],
            'owner_name' => $row[3],
            'owner_designation' => $row[4],
            'address'     => $row[5],
            'city'     => $row[6],
            'zip'     => $row[8],
            'landline'     => $row[9],
            'mobile'     => $row[10],
            'email'     => $row[11],
            'website'     => $row[12],
            'other_landline'     => $row[13],
            'other_mobile'     => $row[14],
            'other_email'     => $row[15],
            'sight_details'     => $row[18],
            'rough_details'     => $row[19],
            'manufacturing_units'     => $row[21],
            'branches_comments'     => $row[22],
            'deals_comments'     => $row[24],
            'exhibitions'     => $row[25],
            'company_comments'     => $row[27],
        ]);

        if ($row[7] != '')
        {
            $state = State::firstOrCreate(['name' => $row[6]]);
            $company->state_id = $state->id;
        }

        if ($row[16] != '')
        {
            $companysize = Companysize::firstOrCreate(['name' => $row[16]]);
            $company->companysize_id = $companysize->id;
        }

        if (strtolower($row[26]) == 'yes')
        {
            $company->jewelry_manufacturing = true;
        }

        $departments = explode('/', $row[1]);
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
        
        // $companytypes = explode('/', $row[22]);
        $companytypes = preg_split("/[\/,]+/", $row[17]);
        foreach ($companytypes as $companytype)
        {
            if ($companytype != '')
            {
                $type = Companytype::firstOrCreate(['name' => $companytype]);
                $company->companytypes()->attach($type);
            }
        }

        $shapes = preg_split("/[\/,]+/", $row[20]);
        foreach ($shapes as $shape)
        {
            if ($shape != '')
            {
                $type = Shape::firstOrCreate(['name' => $shape]);
                $company->shapes()->attach($type);
            }
        }

        $certs = preg_split("/[\/,]+/", $row[23]);
        foreach ($certs as $cert)
        {
            if ($cert != '')
            {
                $type = Cert::firstOrCreate(['name' => $cert]);
                $company->certs()->attach($type);
            }
        }

        return $company;
    }
}
