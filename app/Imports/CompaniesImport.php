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
use App\Color;
use App\Cut;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CompaniesImport implements ToModel, WithStartRow
{
    public function startRow(): int
    {
        return 2;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (empty($row[0])) {
            $company = new Company();
        } else {
            $company = Company::firstOrNew(
                ['ofc' => $row[0]],
            );
        }

        $company->fill([
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
            'address' => $row[27],
            'city' => $row[28],
            'state' => $row[29],
            'zip' => $row[30],
            'cell_numbers' => $row[31],
            'emails' => $row[32],
            'office' => $row[33],
            'phones' => $row[34],
            'fax' => $row[35],
            'rapnet' => $row[36],
        ]);

        if (empty($row[0])) {
            $company->ofc = null;
        }

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
                $color_from = Color::where('name', trim($colorsTemp['0']))->first();
                $color_to = Color::where('name', trim($colorsTemp['1']))->first();

                if (isset($color_from) && isset($color_to)) {
                    $company->deals_color_from = $color_from->id;
                    $company->deals_color_to = $color_to->id;
                }
            }
        }

        $clarities = preg_split("/[\/,]+/", $row[17]);
        foreach ($clarities as $clarity)
        {
            if (strpos($clarity, 'to') !== false)
            {
                $claritiesTemp = preg_split("/[to]+/", $clarity);
                $clarity_from = Clarity::where('name', trim($claritiesTemp['0']))->first();
                $clarity_to = Clarity::where('name', trim($claritiesTemp['1']))->first();
                if (isset($clarity_from) && isset($clarity_to)) {
                    $company->deals_clarity_from = $clarity_from->id;
                    $company->deals_clarity_to = $clarity_to->id;
                }
            }
        }

        $makes = preg_split("/[\/,]+/", $row[18]);
        foreach ($makes as $make)
        {
            if (strpos($make, 'to') !== false)
            {
                $makesTemp = preg_split("/[to]+/", $make);
                $makes_from = Cut::where('abbr', trim($makesTemp['0']))->first();
                $makes_to = Cut::where('abbr', trim($makesTemp['1']))->first();
                if (isset($makes_from) && isset($makes_to)) {
                    $company->deals_make_from = $makes_from->id;
                    $company->deals_make_to = $makes_to->id;
                }
            }
        }

        if (strtolower($row[25]) != 'yes' && $row[19] == '')
        {
            $company->trader = true;
        }

        $company->save();

        $roughs = preg_split("/[\/,]+/", $row[13]);
        $company->roughs()->detach();
        foreach ($roughs as $rough)
        {
            if ($rough != '')
            {
                $type = Rough::firstOrCreate(['name' => trim($rough)]);
                $company->roughs()->attach($type);
            }
        }

        $shapes = preg_split("/[\/,]+/", $row[14]);
        $company->shapes()->detach();
        foreach ($shapes as $shape)
        {
            if ($shape != '')
            {
                $type = Shape::where('name', trim($shape))->first();
                if (isset($type)) {
                    $company->shapes()->attach($type);
                }
            }
        }

        $certs = preg_split("/[\/,]+/", $row[21]);
        $company->certs()->detach();
        foreach ($certs as $cert)
        {
            if ($cert != '')
            {
                $type = Cert::where('name', trim($cert))->first();
                if (isset($type)) {
                    $company->certs()->attach($type);
                }
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

        $company->save();

        return $company;
    }
}
