<?php

namespace App\Imports;

use App\Company;
use Maatwebsite\Excel\Concerns\ToModel;
use App\State;
use App\Companytype;
use App\Companysize;
use App\Shape;
use App\Cert;
use App\Companydeal;
use App\Rough;
use App\Clarity;
use App\Cut;

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
            'rapnet'     => $row[0],
            'first_name'     => $row[1],
            'last_name'     => $row[2],
            'job_title'     => $row[3],
            'company_name' => $row[4],
            'country' => $row[9],
            'website' => $row[10],
            'deals_size' => $row[15],
            'deals_color' => $row[16],
            'deals_clarity' => $row[17],
            'deals_make' => $row[18],
            'manufacturing_units' => $row[19],
            'branches' => $row[20],
            'comments' => $row[22],
            'website_comments' => $row[23],
            'exhibiting_markets' => $row[24],
            'relationship' => $row[27],
            'address' => $row[28],
            'city' => $row[29],
            'state' => $row[30],
            'zip' => $row[31],
            'cell_numbers' => $row[32],
            'emails' => $row[33],
            'office' => $row[34],
            'phones' => $row[35],
            'fax' => $row[36],
        ]);

        if ($row[11] != '')
        {
            $companysize = Companysize::firstOrCreate(['name' => trim($row[11], " ")]);
            $company->companysize_id = $companysize->id;
        }

        if (strtolower($row[12]) == 'yes')
        {
            $company->sight_holder = true;
        }

        $sizes = preg_split("/[\/,]+/", $row[15]);
        foreach ($sizes as $size)
        {
            if (strpos($size, 'to') !== false)
            {
                $sizesTemp = preg_split("/[to]+/", $size);
                $company->deals_size_from = trim($sizesTemp['0']);
                $company->deals_size_to = trim($sizesTemp['1']);
            }
        }

        $colors = preg_split("/[\/,]+/", $row[16]);
        foreach ($colors as $color)
        {
            if (strpos($color, 'to') !== false)
            {
                $colorsTemp = preg_split("/[to]+/", $color);
                $company->deals_color_from = trim($colorsTemp['0']);
                $company->deals_color_to = trim($colorsTemp['1']);
            }
        }

        $clarities = preg_split("/[\/,]+/", $row[17]);
        foreach ($clarities as $clarity)
        {
            if (strpos($clarity, 'to') !== false)
            {
                $claritiesTemp = preg_split("/[to]+/", $clarity);
                $company->deals_clarity_from = Clarity::firstOrCreate(['name' => trim($claritiesTemp['0'])])->id;
                $company->deals_clarity_to = Clarity::firstOrCreate(['name' => trim($claritiesTemp['1'])])->id;
            }
        }

        $makes = preg_split("/[\/,]+/", $row[18]);
        foreach ($makes as $make)
        {
            if (strpos($make, 'to') !== false)
            {
                $makesTemp = preg_split("/[to]+/", $make);
                $company->deals_make_from = Cut::firstOrCreate(['abbr' => trim($makesTemp['0'])])->id;
                $company->deals_make_to = Cut::firstOrCreate(['abbr' => trim($makesTemp['1'])])->id;
            }
        }

        $company->save();

        $roughs = preg_split("/[\/,]+/", $row[13]);
        foreach ($roughs as $rough)
        {
            if ($rough != '')
            {
                $type = Rough::firstOrCreate(['name' => trim($rough)]);
                $company->roughs()->attach($type);
            }
        }

        $shapes = preg_split("/[\/,]+/", $row[14]);
        foreach ($shapes as $shape)
        {
            if ($shape != '')
            {
                $type = Shape::firstOrCreate(['name' => trim($shape)]);
                $company->shapes()->attach($type);
            }
        }

        $certs = preg_split("/[\/,]+/", $row[21]);
        foreach ($certs as $cert)
        {
            if ($cert != '')
            {
                $type = Cert::firstOrCreate(['name' => trim($cert)]);
                $company->certs()->attach($type);
            }
        }

        if (strtolower($row[25]) == 'yes')
        {
            $company->jewellery_manufacturing = true;
        }

        if (strtolower($row[26]) == 'yes')
        {
            $company->jewellery_trading = true;
        }

        return $company;
    }
}
